<!DOCTYPE html>
<html>
<?php include "includes/head.php";?>
<body>
  <?php include "includes/navigation.php"; ?>
  <?php include "includes/background.php"; ?>
  <?php include "includes/quizScores.php"; ?>
    <div class="quizText">
      <!-- I used this site to learn how to create a quiz  https://css-tricks.com/building-a-simple-quiz/ -->
      <form action="quiz2Results.php" method="post" id="quiz">
        <li>
        <h3>The weapon of choice for a cowboy was not:</h3>
        <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) Colt 45</label>
        </div>
        <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-1-answers-B">B) Rifle</label>
        </div>
        <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-1-answers-C">C) Sword</label>
        </div>
        <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-1-answers-D">D) Shotgun</label>
        </div>
        </li>
        <input type="submit" value="Submit Quiz" />
      </form>

    </div>
  </div>
  <?php include "includes/footer.php";?>
</body>
</html>
