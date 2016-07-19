<!DOCTYPE html>
<?php
  // Importation des fichiers nécéssaires
  require_once("../inc/scripts/propos.inc.php");
?>
<?php  include ''.$strchemin.'inc/pieces/meta.php';?>
<body class="container propos">
  <header>
    <?php  include ''.$strchemin.'inc/pieces/navigation.php';?>
    <h3> a propos </h3>
    <i class="sb-profile topleft" style="font-size: 16px; left: 33px; top: 65px;"></i>
  </header>
  <main>
    <h2>Simon Bedard</h2>
    <?php  include ''.$strchemin.'inc/pieces/sideInformations.php';?>
    <div class="mousemove">
      <div class="clickBlackIcone">
        <p class="close"> x fermer</p>
        <div class="content interestContent">
          <h4> interets </h4>
          <ul>
            <li>Sport</li>
            <li>Voyage</li>
            <li>Photo/video</li>
            <li>Technologie</li>
            <li>Musique</li>
            <li>cafe</li>
          </ul>
        </div>
        <div class="content contactContent">
          <h4> contact </h4>
          <p>418-558-3850 <br> sibe55@hotmail.com <br> 481 rue de la tourelle</p>
        </div>
        <div class="content pdfContent"><a href="../medias/pdf/simonBedard.pdf" download><button class="pdfdwl" >telecharger mon cv 26k </button></a></div>
      </div>
      <div class="centerScopeDesign">
        <div class="blackIcone clickable interest" data-propos="interest"><i class="sb-interets" style="font-size: 16px; left: 15px; top: 14px;"></i></div>
        <div class="blackIcone clickable contact" data-propos="contact"><i class="sb-contact"></i></div>
        <div class="blackIcone clickable pdf" data-propos="pdf"><i class="sb-pdf"></i></div>
        <a href="https://www.facebook.com/simon.bedard.14" target="_blank"><div class="blackIcone facebook"><i class="sb-facebook"></i></div></a>
        <a href="https://www.linkedin.com/profile/preview?locale=fr_FR&trk=prof-0-sb-preview-primary-button" target="_blank"><div class="blackIcone linkedin "><i class="sb-linkedin"></i></div></a>
        <a href="https://twitter.com/simonbedard1" target="_blank"><div class="blackIcone twitter"><i class="sb-twitter"></i></div></a>
        <svg  class="middle"height="500" width="500">
          <circle cx="250" cy="250" r="245" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 5"  />
        </svg>
        <div class="middleScopeDesign">
        </div>
      </div>
    </div>


  </main>
</body>

<?php  include ''.$strchemin.'inc/pieces/scriptFooter.php';?>
<script type="text/javascript" src="../inc/js/propos.js"></script>

</html>
