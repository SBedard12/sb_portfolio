<!DOCTYPE html>
<?php
  // Importation des fichiers nécéssaires
  require_once("../inc/scripts/projets.inc.php");
?>
<html>
<?php  include ''.$strchemin.'inc/pieces/meta.php';?>

<body class="container projets">
  <header>
    <?php  include ''.$strchemin.'inc/pieces/navigation.php';?>
    <h3> projets </h3>
    <i class="sb-projets topleft" style="font-size: 16px; left: 33px; top: 65px;"></i>
  </header>
  <main>
    <?php  include ''.$strchemin.'inc/pieces/sideInformations.php';?>
    <div class="lesProjets">
      <?php foreach($arrProjets as $monArray): ?>
        <div class="unProjet">
          <div class="dottedCircle">
            <!-- <img src="<?php echo $strchemin ?>medias/images/logo.svg" alt="Logo du site web"> -->
            <svg  class="middle"height="230" width="230">
              <circle cx="115" cy="115" r="110" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 5"  />
            </svg>
          </div>
          <p class="titreProjets"><?php echo $monArray['titre_projet']; ?></p>
          <p> voir le projet <i class="sb-arrow3"></i></p>
        </div>
      <?php endforeach; ?>

      <?php foreach($arrProjets as $monArray): ?>
        <div class="unProjet">
          <div class="dottedCircle">
            <!-- <img src="<?php echo $strchemin ?>medias/images/logo.svg" alt="Logo du site web"> -->
            <svg  class="middle"height="230" width="230">
              <circle cx="115" cy="115" r="110" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 5"  />
            </svg>
          </div>
          <p class="titreProjets"><?php echo $monArray['titre_projet']; ?></p>
          <p> voir le projet <i class="sb-arrow3"></i></p>
        </div>
      <?php endforeach; ?>

    </div>

  </main>
</body>

<?php  include ''.$strchemin.'inc/pieces/scriptFooter.php';?>

</html>
