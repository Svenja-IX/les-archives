<?php 
  require_once ('includes/bdd.php');
?>
<header>
        <h1 id='header-title'><a href="index.php">Les archives</a></h1>
<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="article.php"><li>obi-wan kenobi</li></a>
      <a href="#"><li>Planètes</li></a>
      <a href="#"><li>Civilisations</li></a>
      <a href="#"><li>Armes</li></a>
      <a href="#"><li>vaisseaux</li></a>
    </ul>
  </div>
</nav>
<div id="citation-div">
  <?php 
  foreach($citations as $citation){
    echo '<h4>'.$citation['citation_description'].'</h4>';
  }  
  ?>
</div>
</header>