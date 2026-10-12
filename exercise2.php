
<form method="POST" action="">
    სახელი:
    <input type="text" name="firstName" required>

    გვარი:
    <input type="text" name="lastName" required>

    კურსი:
    <input type="number" name="course" required>

    სემესტრი:
    <input type="number" name="semester" required>

    სასწავლო კურსი:
    <input type="text" name="subject" required>

    მიღებული ქულა:
    <input type="number" name="score"
           min="0" max="100" required>

    ლექტორის სახელი:
    <input type="text" name="lecturerFirst" required>

    ლექტორის გვარი:
    <input type="text" name="lecturerLast" required>

    დეკანის სახელი:
    <input type="text" name="deanFirst" required>

    დეკანის გვარი:
    <input type="text" name="deanLast" required>

    <button type="submit">შეფასების გამოთვლა</button>
</form>

<?php
if (isset($_POST["score"])) {
    $score = (int) $_POST["score"];

    if ($score >= 91) {
        $grade = "A";
        $description = "ფრიადი";
    } elseif ($score >= 81) {
        $grade = "B";
        $description = "ძალიან კარგი";
    } elseif ($score >= 71) {
        $grade = "C";
        $description = "კარგი";
    } elseif ($score >= 61) {
        $grade = "D";
        $description = "დამაკმაყოფილებელი";
    } elseif ($score >= 51) {
        $grade = "E";
        $description = "საკმარისი";
    } elseif ($score >= 41) {
        $grade = "FX";
        $description = "დამატებითი გამოცდა";
    } else {
        $grade = "F";
        $description = "ჩაჭრილი";
    }

    echo "<h3>შედეგი</h3>";
    echo "მიღებული ქულა: $score<br>";
    echo "შეფასება: $grade<br>";
    echo "განმარტება: $description";
}
?>
