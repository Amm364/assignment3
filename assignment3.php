<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment 3</title>
  <link rel="stylesheet" href="css/assignment3.css">
</head>
<body>
<div class="create-card" id="createCard">
  <fieldset class="card-section" id="cardSection">
    <legend>Birthday Card:</legend>
    <p>Creating a Birthday Card that extends the class Card</p>
    <?php
    include_once("ChildClass.php");
    $birthdayCard=new BirthdayCard(5,8,"Red",10,"Happy Birthday Adam!","Adam");
    echo "<br>" . $birthdayCard . "<br>";
    echo "I am now going to update the birthday card and update the information such that it is now blue and contains \$25";
    echo "<br>";
    echo "<br>";
    $birthdayCard->changeColor("Blue");
    echo "<br>";
    $birthdayCard->changeMoney(25);
    echo "<br>";
    echo $birthdayCard;
    ?>
  </fieldset>
</div>
</body>
</html>