<!DOCTYPE html>
<?php
  // Importation des fichiers nécéssaires
  require_once("inc/scripts/index.inc.php");
?>
<html>


  <?php  include ''.$strchemin.'inc/pieces/meta.php';?>
  <body class="container">
    <!-- <?php  //include ''.$strchemin.'inc/pieces/preLoader.php';?> -->
    <header>

      <?php  include ''.$strchemin.'inc/pieces/navigation.php';?>
    </header>
    <main>
      <?php  include ''.$strchemin.'inc/pieces/sideInformations.php';?>
      <div class="ScopeDesign">

        <div class="centerScopeDesign">
          <div class="blackIcone menuCompetences pageChange" data-page="competences"><i class="sb-competences"></i></div>
          <div class="blackIcone menuProjets pageChange" data-page="projets"><i class="sb-projets" style="font-size: 20px;left: 12px;top: 12px;"></i></div>
          <div class="blackIcone menuPropos pageChange" data-page="propos"><i class="sb-profile" style="left: 11px;"></i></div>

          <div class="blackIcone facebook"><i class="sb-facebook"></i></div>
          <div class="blackIcone linkedin "><i class="sb-linkedin"></i></div>
          <div class="blackIcone twitter"><i class="sb-twitter"></i></div>

          <div class="middleScopeDesign">
            <svg height="490" width="490">
              <circle cx="245" cy="245" r="240" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 5"/>
            </svg>
          </div>
          <div class="centerLogo">
              <a href="<?php echo $strchemin ?>index.php"><img src="<?php echo $strchemin ?>medias/images/logo.svg" alt="Logo du site web"></a>
          </div>
        </div>
      </div>
    </main>
  </body>

  <?php  include ''.$strchemin.'inc/pieces/scriptFooter.php';?>
  <script src="inc/js/accueil.js"></script>
  <script src="inc/js/preLoader.js"></script>

</html>
