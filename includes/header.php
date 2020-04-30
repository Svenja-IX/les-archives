<?php 
  session_start();
?>

<header>
<?php 
include ('includes/formInscription.php'); 
include ('includes/formConnexion.php'); 
?>
        <h1 id='header-title'><a href="index.php">Les archives</a></h1>
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="personnages.php"><li>personnages</li></a>
      <a href="organisations.php"><li>organisations</li></a>
      <a href="armes.php"><li>armes</li></a>
      <a href="planetes.php"><li>planetes</li></a>
      <a href="vaisseaux.php"><li>vaisseaux</li></a>
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