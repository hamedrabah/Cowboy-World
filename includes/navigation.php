<?php
  $curr_page = basename($_SERVER['PHP_SELF']);
  $listOfQuizes = array('quiz1.php', 'quiz2.php');
 ?>

<!--Navigation bar throughout all pages-->

<div class="navbar">
  <h1 id=navBarH1>Cowboy World!</h1>
  <img id="logo" src="images/logo2.png" alt="Cowboy Logo">
  <a class="shared <?php if($curr_page=="index.php")
  echo("highlighted");?>" href="index.php" >Home</a>
  <a class="shared <?php if($curr_page=="history.php")
  echo("highlighted");?>" href="choose.php">Topics</a>
  <a class="shared <?php if($curr_page=="quiz.php")
  echo("highlighted");?>" href=
  <?php echo $listOfQuizes[array_rand($listOfQuizes)]; /* Picks a random quiz */
  ?>
  >Random Quiz</a>
</div>
