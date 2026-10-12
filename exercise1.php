
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>სახელფასო უწყისი</title>
</head>
<body>

<h2>სახელფასო უწყისი</h2>

<form method="GET" action="">
    სახელი:
    <input type="text" name="firstName" required>
    <br><br>

    გვარი:
    <input type="text" name="lastName" required>
    <br><br>

    თანამდებობა:
    <input type="text" name="position" required>
    <br><br>

    ხელფასი:
    <input type="number" name="salary" min="0"
           step="0.01" required>
    <br><br>

    გადასახადის პროცენტი:
    <select name="taxRate">
        <option value="20">20%</option>
        <option value="15">15%</option>
        <option value="10">10%</option>
        <option value="5">5%</option>
    </select>
    <br><br>

    <button type="submit">გამოთვლა</button>
</form>

<?php
if (isset($_GET["firstName"])) {
    $firstName = htmlspecialchars($_GET["firstName"]);
    $lastName = htmlspecialchars($_GET["lastName"]);
    $position = htmlspecialchars($_GET["position"]);
    $salary = (float) $_GET["salary"];
    $taxRate = (float) $_GET["taxRate"];

    $tax = $salary * $taxRate / 100;
    $netSalary = $salary - $tax;

    echo "<h3>შედეგი</h3>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>მონაცემი</th><th>მნიშვნელობა</th></tr>";
    echo "<tr><td>სახელი</td><td>$firstName</td></tr>";
    echo "<tr><td>გვარი</td><td>$lastName</td></tr>";
    echo "<tr><td>თანამდებობა</td><td>$position</td></tr>";
    echo "<tr><td>დარიცხული ხელფასი</td><td>$salary</td></tr>";
    echo "<tr><td>გადასახადის პროცენტი</td><td>$taxRate%</td></tr>";
    echo "<tr><td>საშემოსავლო გადასახადი</td><td>$tax</td></tr>";
    echo "<tr><td>ხელზე ასაღები ხელფასი</td><td>$netSalary</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
