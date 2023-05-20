<!DOCTYPE html>
<html>

<head>
    <title>PHP Statements Exercise</title>
</head>

<body>
    <h1>PHP Statements Exercise</h1>
    <h3>Check if given string is more than 5 characters</h3>
    <form method="post" action="">
        <input type="text" name="inputString" placeholder="Enter a string">
        <button type="submit">Check</button>
    </form>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $string = $_POST["inputString"];
            if (strlen($string) > 5) {
                echo "The string is more than 5 characters.";
            } else {
                echo "The string is not more than 5 characters.";
            }
        }
        ?>
    </p>

    <h3>Find the best deal to purchase the item. </h3>
    <p>
        <?php
        $quantity1 = 70;
        $quantity2 = 100;
        $price1 = 35;
        $price2 = 30;

        $totalCost1 = $price1 / $quantity1;
        $totalCost2 = $price2 / $quantity2;

        if ($totalCost1 < $totalCost2) {
            echo "Deal 1 is the best deal to purchase the item.";
        } elseif ($totalCost2 < $totalCost1) {
            echo "Deal 2 is the best deal to purchase the item.";
        } else {
            echo "Both deals have the same total cost.";
        }
        ?>

    </p>

    <h3>Determine the number of days in a given month. </h3>
    <p>
        <?php
        $monthName = 'March';

        switch ($monthName) {
            case 'January':
            case 'March':
            case 'May':
            case 'July':
            case 'August':
            case 'October':
            case 'December':
                $numDays = 31;
                break;
            case 'April':
            case 'June':
            case 'September':
            case 'November':
                $numDays = 30;
                break;
            case 'February':
                $numDays = 28;
            default:
                $numDays = 'invalid';
                break;
        }

        echo "Number of days in $monthName: $numDays";
        ?>
    </p>

    <h3>Program to loop over the given JSON data</h3>
    <p>
        <?php
        $students = [
            ["name" => "John Garg", "age" => "15", "school" => "Ahlcon Public school"],
            ["name" => "Smith Soy", "age" => "16", "school" => "St. Marie school"],
            ["name" => "Charle Rena", "age" => "16", "school" => "St. Columba school"]
        ];

        foreach ($students as $student) {
            foreach ($student as $key => $value) {
                echo "$key: $value<br>";
            }
            echo "<br>";
        }
        ?>

    </p>
    <h3>Write a division table program using the for loop.</h3>
    <p>
        <?php
        $rows = 10;
        $columns = 10;

        echo "<h2>Division Table</h2>";
        echo "<table style='border-collapse: collapse;'>";

        echo "<tr>";
        echo "<th style='border: 1px solid black;'></th>";
        for ($j = 1; $j <= $columns; $j++) {
            echo "<th style='border: 1px solid black;'>$j</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            echo "<th style='border: 1px solid black;'>$i</th>";
            for ($j = 1; $j <= $columns; $j++) {
                $result = $j / $i; // Divide column values by row values
                echo "<td style='border: 1px solid black;'>$result</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </p>


</body>

</html>