
<?php
/**
 * @author XYZ <XYZ@cegep-ste-foy.qc.ca>
 * @copyright Copyright (c)2015 – Cégep de sainte-Foy
 * Date: 2015-10-5
 * Le fichier de configuration s'occupe de:
 * - centraliser les paramètres du site comme la connexion à la BD
 * - définir un gestionnaire d'erreurs
 * - définir des fonctions utilitaires pour le déboguage et pour la sécurité (échapper les données client)
*/

// DEBUT Paramètres du site

    // personne responsable des bogues (gestion des erreurs)
    // nota bene: les envois de courriels sur timunix n'ont fonctionné qu'avec l'adresse de cegep-ste-foy.qc.ca
    $strCourrielContact= '1332656@etu.cegep-ste-foy.qc.ca'; //VOTRE adresse courriel VALIDE. Sinon, à répétition, cela bloque le serveur de courriel du cegep entier!

    // Verifier si l'exécution se fait sur le serveur de développement (local) ou celui de la production:
    if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
    	$blnLocal = TRUE;
    } else {
    	$blnLocal = FALSE;
    }

// (réglages pour le développement ou l'hébergement)

    if ($blnLocal) {
        // (réglages pour le DÉVELOPPEMENT)
        // Affiche toutes les Errors, warnings, notices et syntaxes dépréciées
        error_reporting(E_ALL | E_STRICT);
        ini_set('display_errors', true); // Modification de la configuration du fichier ini
    } else {
        ini_set('display_errors', false); // Rendu à l'hébergement, on ne veut pas que le client voit les messages d'erreurs!!
    }

    /**
     * Selon l'environnement d'exécution (développement ou hébergement)
     * @todo Adapter les variables de connexion des 2 environnements
     */
    if ($blnLocal) {
	    $strBdServer = "localhost";
        $strBdUsername = "root";
	    $strBdPassword = "";
	    $strBdName = "sb_portfolio";
    } else {
        $strBdServer   = 'timunix.cegep-ste-foy.qc.ca';
        $strBdUsername = 't16_sbedard';
        $strBdPassword = 'chienvert';
        $strBdName     = 'bdspec2016_sbedard';
    }
    try{
        $objConnMySQLi = new mysqli($strBdServer,$strBdUsername,$strBdPassword,$strBdName);

        if ($objConnMySQLi->connect_error) {
            $strMessage="La connexion à la base de données cause problème, réessayez plus tard.";
            $except = new Exception($strMessage);

            throw $except;
        }
        // les lignes suivantes forcent mysql à servir les données en utf8 (pour afficher les accents correctement)
        $objConnMySQLi->query("SET CHARACTER SET utf8");
        $objConnMySQLi->query("SET NAMES utf8");
    }
    catch(Exception $e){
        //echo $e->getMessage();
        //Ce message n'est pas récupéré puisqu'il y en aura un autre de généré de toute façon lors de l'appel du SQL.
    }
    // FIN paramètres du site


// DEBUT Gestion des erreurs et fonctions utilitaires

    // Pour pouvoir utiliser de  manière fiable la fonction date(), dans le gestionnaire d'erreurs, il faut spécifier le fuseau horaire.
    date_default_timezone_set('America/Montreal');

    /**
     * Creer le gestionnaire d'erreurs
     * @param $e_number
     * @param $e_message
     * @param $e_file
     * @param $e_line
     * @param $e_vars
     * @return void
     */
    function gererErreurs ($e_number, $e_message, $e_file, $e_line, $e_vars) {
        // Construire le message d'erreur
        $strMessage = "Une erreur est survenue dans le script '$e_file' a la ligne $e_line: \n<br />$e_number : $e_message\n<br />";
        // Ajouter la date et l'heure
        $strMessage .= "Date/Time: " . date('n-j-Y H:i:s') . "\n<br />";
        // Ajouter $e_vars au $strMessage.
        $strMessage .= "<pre>" . print_r ($e_vars, 1) . "</pre>\n<br />";
        // On peut aussi créer un journal d'erreurs et/ou envoyer par courriel.
        //@todo ramener la gestion selon $blnLocal. C'est fait.
        if ($GLOBALS['blnLocal']) {
            echo '<p class="error">' . $strMessage . '</p>';
            error_log ($strMessage, 3, "log-err.txt");
        } else {
			// En production, on veut seulement un courriel.
            error_log ($strMessage, 1, $GLOBALS['strCourrielContact']);
        }
        // 	pour l'instant, on peut afficher l'erreur. On peut aussi seulement le journaliser!
        //echo '<p class="error">' . $strMessage . '</p>';
    }
    // Utiliser le gestionnaire d'erreurs:
    set_error_handler ('gererErreurs');

    /** Creer une function pour echapper les donnees
    * @param $data
    * @return void
    * @todo tester la fonction escape_data
    */
    function escape_data ($strData) {
        // Besoin de la connexion:
        $GLOBALS["objConnMySQLi"];
        // Verifier Magic Quotes.
        if (ini_get('magic_quotes_gpc')) {
            $strData = stripslashes($strData);
        }
        // Trim et escape:
        return mysqli_real_escape_string($GLOBALS["objMySQLi"], trim($strData));
    }
    // FIN Gestion des erreurs et fonctions utilitaires
