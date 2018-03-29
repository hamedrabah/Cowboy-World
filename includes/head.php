<!--Consistent head element throughout all pages-->
<head>
  <?php
  function checkCorrect($var) {
    if ($var>0) {echo "<p> That was correct! </p>";}
    else {echo "<p> That was incorrect </p>
      <p> better luck next time partner!</p>";}
  }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cowboy World</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>
