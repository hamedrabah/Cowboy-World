<!DOCTYPE html>
<html>
<?php include "includes/head.php";?>
<body>
  <?php include "includes/navigation.php"; ?>
  <?php include "includes/background.php"; ?>
  <?php include "includes/quizScores.php"; ?>

    <div class="quizText">
      <form action="quiz1Results.php" method="post" id="quiz">
        <li>
        <h3>The creator of the cowboy hat is:</h3>
        <div>
        <!-- I used this site to learn how to create a quiz https://css-tricks.com/building-a-simple-quiz--> 
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) Billy the Kid</label>
        </div>
        <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) John B. Stetson</label>
        </div>
        <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) Bonnie and Clyde</label>
        </div>
        <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) Jesse James</label>
        </div>
        </li>
        <input type="submit" value="Submit Quiz" />
      </form>

    </div>
  </div>
  <?php include "includes/footer.php";?>
</body>
</html>
