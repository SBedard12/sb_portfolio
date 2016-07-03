<!DOCTYPE html>
<?php
  // Importation des fichiers nécéssaires
  require_once("inc/scripts/index.inc.php");
?>
<html>

  <?php  include ''.$strchemin.'inc/pieces/meta.php';?>
  <body class="container">
    <header>
      <?php  include ''.$strchemin.'inc/pieces/navigation.php';?>
    </header>
    <main>
      <?php  include ''.$strchemin.'inc/pieces/sideInformations.php';?>
      <div class=ScopeDesign>

        <div class="centerScopeDesign">
          <div class="blackIcone menuCompetences"><i class="sb-competences"></i></div>
          <div class="blackIcone menuProjets"><i class="sb-projets"></i></div>
          <div class="blackIcone menuPropos"><i class="sb-profile"></i></div>

          <div class="middleScopeDesign">
            <svg height="490" width="490">
              <circle cx="245" cy="245" r="240" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 5"    />
            </svg>
          </div>
          <div class="centerLogo">
              <a href="<?php echo $strchemin ?>index.php"><img src="<?php echo $strchemin ?>medias/images/logo.svg" alt="Logo du site web"></a>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="inc/js/accueil.js"></script>
  <script src="inc/js/preLoader.js"></script>

</html>
