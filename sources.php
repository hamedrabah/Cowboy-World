<!DOCTYPE html>
<html>

<?php include "includes/head.php";?>
<?php include "includes/citations.php";?>
<body>
  <?php include "includes/navigation.php"; ?>
  <?php include "includes/background.php"; ?>
    <div class="sourceText">

<?php
foreach ($listOfSources as $sources) {
    echo "<p> $sources </p>";
}
?>

    </div>
  </div>
  <?php include "includes/footer.php";?>
</body>
</html>
