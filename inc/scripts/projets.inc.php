<?php

// Variables
$strchemin = "../";
$strErreur = "";
  require_once("" . $strchemin . "inc/config/config.php");


  try {
          $strProjets = 'SELECT * FROM t_projets
                          ORDER BY id_projet';

          $objResultatProjets = $objConnMySQLi->query($strProjets);
          $arrProjets[] = array();
          if($objResultatProjets == false) {
              throw new Exception('La page des témoignages n\'est présentement pas disponible.');
          } else {
              unset($arrProjets);
              while($objLigneTxt = $objResultatProjets->fetch_object()) {
                  $arrProjets[] = array(
                      'id_projet' => $objLigneTxt->id_projet,
                      'description_projet' => $objLigneTxt->description_projet,
                      'titre_projet' => $objLigneTxt->titre_projet,
                      'lien_projet' => $objLigneTxt->lien_projet,
                      'nomImages_projet' => $objLigneTxt->nomImages_projet,
                  );
              }
              $objResultatProjets->free_result();

          }
      }
      catch(Exception $e) {
          $strErreur = $e->getMessage();
      }

  

?>
