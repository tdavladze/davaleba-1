
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>ტესტირება</title>
</head>
<body>

<h2>სტუდენტის ტესტირება</h2>

<form method="POST" action="">
    <p>1. რას ნიშნავს HTML?</p>
    <label><input type="radio" name="q1" value="a" required>
        პროგრამირების ენა</label><br>
    <label><input type="radio" name="q1" value="b">
        მარკირების ენა</label><br>
    <label><input type="radio" name="q1" value="c">
        მონაცემთა ბაზა</label><br>
    <label><input type="radio" name="q1" value="d">
        ოპერაციული სისტემა</label><br>

    <p>2. რომელი ენა გამოიყენება ვებგვერდის სტილისთვის?</p>
    <label><input type="radio" name="q2" value="a" required>
        PHP</label><br>
    <label><input type="radio" name="q2" value="b">
        CSS</label><br>
    <label><input type="radio" name="q2" value="c">
        SQL</label><br>
    <label><input type="radio" name="q2" value="d">
        C++</label><br>

    <p>3. PHP-ის რომელი ცვლადი იღებს POST მონაცემებს?</p>
    <label><input type="radio" name="q3" value="a" required>
        $_GET</label><br>
    <label><input type="radio" name="q3" value="b">
        $_POST</label><br>
    <label><input type="radio" name="q3" value="c">
        $_TABLE</label><br>
    <label><input type="radio" name="q3" value="d">
        $_HTML</label><br>

    <p>4. რა არის HTML?</p>
    <textarea name="q4" required></textarea>

    <p>5. რისთვის გამოიყენება CSS?</p>
    <textarea name="q5" required></textarea>
    <br><br>

    <button type="submit">პასუხების შემოწმება</button>
</form>

<?php
if (isset($_POST["q1"])) {
    $correct = 0;

    if ($_POST["q1"] == "b") {
        $correct++;
    }

    if ($_POST["q2"] == "b") {
        $correct++;
    }

    if ($_POST["q3"] == "b") {
        $correct++;
    }

    $answer4 = strtolower(trim($_POST["q4"]));
    $answer5 = strtolower(trim($_POST["q5"]));

    if (strpos($answer4, "მარკირების") !== false ||
        strpos($answer4, "html") !== false) {
        $correct++;
    }

    if (strpos($answer5, "სტილ") !== false ||
        strpos($answer5, "დიზაინ") !== false) {
        $correct++;
    }

    echo "<h3>სწორი პასუხების რაოდენობა: $correct/5</h3>";
}
?>

</body>
</html>
