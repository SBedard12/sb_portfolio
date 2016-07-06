<!DOCTYPE html>
<?php
  // Importation des fichiers nécéssaires
  require_once("../inc/scripts/competences.inc.php");
?>
<?php  include ''.$strchemin.'inc/pieces/meta.php';?>
<body class="container competences">
  <header>
    <?php  include ''.$strchemin.'inc/pieces/navigation.php';?>
    <i class="sb-competences"></i>
  </header>
  <main>
    <?php  include ''.$strchemin.'inc/pieces/sideInformations.php';?>
    <div class="competencesNavigation">
     <ul>
       <li data-value="90" data-name="web design" class="active"> Web Design </li>
       <li data-value="85" data-name="Integration"> Integration </li>
       <li data-value="75" data-name="Programation"> Programation </li>
     </ul>
    </div>
    <div class="chartCompetences" data-percent="90">
      <span class="score"> 90 </span>
      <div class="middleScopeDesign">
        <svg class="middle"height="330" width="330">
          <circle cx="165" cy="165" r="165" stroke="black" stroke-width="1" fill="none" stroke-dasharray="5, 10"    />
        </svg>
      </div>
      <div class="middleScopeDesign">
        <svg  class="small"height="280" width="280">
          <circle cx="140" cy="140" r="135" stroke="black" stroke-width="1" fill="none" stroke-dasharray="15, 35"  />
        </svg>
        <p class="nameCompetence">  web Design </p>
      </div>

    </div>

    <div class="listePratique">
      Bacon ipsum dolor amet rump pastrami sirloin ball tip turducken. Beef turducken spare ribs, drumstick chuck meatloaf prosciutto. Tail meatball pancetta ball tip bacon. Pork loin kevin hamburger turkey shoulder andouille sausage meatloaf jowl pastrami kielbasa. Ham tongue
    </div>

  </main>
</body>

<?php  include ''.$strchemin.'inc/pieces/scriptFooter.php';?>
<script type="text/javascript" src="../bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
<script type="text/javascript" src="../inc/js/competences.js"></script>

</html>
