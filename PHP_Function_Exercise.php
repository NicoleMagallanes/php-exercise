<!DOCTYPE html>
<html>

<head>
    <title>PHP Function Exercise</title>
</head>

<body>
    <h1>PHP Function Exercise</h1>

    <h3>Check if a character is a vowel or consonant.</h3>
    <form method="post" action="">
        <label for="character1">Enter a character:</label>
        <input type="text" id="character1" name="character1" maxlength="1" required>
        <button type="submit1" name="submit1">Check</button>
    </form>
    <p>
        <?php

        function isVowel($char)
        {
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $lowercaseChar = strtolower($char);
            if (in_array($lowercaseChar, $vowels)) {
                return true;
            } else {
                return false;
            }
        }

        // Handle form submission
        if (isset($_POST['submit1'])) {
            $character = $_POST['character1'] ?? '';

            if (strlen($character) === 1) {
                if (ctype_alpha($character)) {
                    if (isVowel($character)) {
                        echo '<p>' . $character . ' is a vowel.</p>';
                    } else {
                        echo '<p>' . $character . ' is a consonant.</p>';
                    }
                } else {
                    echo '<p>Please enter an alphabetic character.</p>';
                }
            } else {
                echo '<p>Please enter a single character.</p>';
            }
        }

        ?>
    </p>
    <hr>
    <h3>Convert a digit into its word counterpart</h3>

    <form method="post" action="">
        <label for="number2">Enter a number:</label>
        <input type="text" id="number2" name="number2" required>
        <button type="submit2" name="submit2">Convert</button>
    </form>
    <p>
        <?php

        function digitToWord($number)
        {
            $digitWords = [
                0 => 'Zero',
                1 => 'One',
                2 => 'Two',
                3 => 'Three',
                4 => 'Four',
                5 => 'Five',
                6 => 'Six',
                7 => 'Seven',
                8 => 'Eight',
                9 => 'Nine'
            ];

            $digitArray = str_split((string)$number);
            $wordArray = [];

            foreach ($digitArray as $digit) {
                if (isset($digitWords[$digit])) {
                    $wordArray[] = $digitWords[$digit];
                }
            }

            return implode(' ', $wordArray);
        }

        // Handle form submission
        if (isset($_POST['submit2'])) {
            $number = $_POST['number2'] ?? '';
            //is_numeric() to ensure the input is a number, $number >= 0 to verify it is non-negative, and $number == round($number) to check if it is a whole number.
            if (is_numeric($number) && $number >= 0 && $number == round($number)) {
                $word = digitToWord($number);
                echo '<p>' . $number . ' in words is: ' . $word . '</p>';
            } else {
                echo '<p>Please enter a valid non-negative integer.</p>';
            }
        }

        ?>

    </p>
    <hr>
    <h3>Divisible by 3</h3>
    <form method="post" action="">
        <label for="number3">Enter a number:</label>
        <input type="number3" id="number3" name="number3" required>
        <button type="submit3" name="submit3">Check</button>
    </form>
    <p>
        <?php

        function isDivisibleByThree($number)
        {
            return $number % 3 === 0;
        }

        // Handle form submission
        if (isset($_POST['submit3'])) {
            $number = $_POST['number3'] ?? '';

            if (is_numeric($number)) {
                if (isDivisibleByThree($number)) {
                    echo '<p>' . $number . ' is divisible by 3.</p>';
                } else {
                    echo '<p>' . $number . ' is not divisible by 3.</p>';
                }
            } else {
                echo '<p>Please enter a valid number.</p>';
            }
        }

        ?>
    </p>
    <hr>
    <h3>Delete an Element from the list</h3>
    <form method="post" action="">
        <label for="delete_element">Enter an element to delete:</label>
        <input type="text" id="delete_element" name="delete_element" required>
        <button type="submit4" name="submit4">Delete</button>
    </form>
    <p>
        <?php

        function deleteRecurringElements($sortedList)
        {
            $result = [];

            $previousElement = null;
            foreach ($sortedList as $element) {
                if ($element !== $previousElement) {
                    $result[] = $element;
                }
                $previousElement = $element;
            }

            return $result;
        }

        // Example sorted list
        $sortedList = ["apple", "apple", "banana", "banana", "banana", "orange", "pineapple", "pineapple", "strawberry"];

        if (isset($_POST['submit4'])) {
            $deleteElement = $_POST['delete_element'];

            // Remove the specified element from the list
            $sortedList = array_diff($sortedList, [$deleteElement]);
        }

        $uniqueList = deleteRecurringElements($sortedList);

        echo '<p>Original list: ' . implode(", ", $sortedList) . '</p>';
        echo '<p>Unique list: ' . implode(", ", $uniqueList) . '</p>';

        ?>

    </p>
    <hr>
    <h3>Determine if the given number is an Armstrong Number</h3>
    <form method="post" action="">
        <label for="number5">Enter a number:</label>
        <input type="text" id="number5" name="number5" required>
        <button type="submit5" name="submit5">Check</button>
    </form>
    <p>
        <?php

        function isArmstrongNumber($number)
        {
            $sum = 0;
            $originalNumber = $number;
            $computation = '';

            while ($number > 0) {
                $digit = $number % 10;
                $sum += $digit ** 3;
                $computation = $digit . '*' . $digit . '*' . $digit . ' + ' . $computation;
                $number = (int)($number / 10);
            }

            $computation = rtrim($computation, ' + ');

            echo 'Computation: ' . $computation . ' = ' . $originalNumber . '<br>';

            return $sum === (int)$originalNumber;
        }

        if (isset($_POST['submit5'])) {
            $number = $_POST['number5'];

            if (is_numeric($number)) {
                if (isArmstrongNumber($number)) {
                    echo $number . ' is an Armstrong number.';
                } else {
                    echo $number . ' is not an Armstrong number.';
                }
            } else {
                echo 'Invalid input. Please enter a valid number.';
            }
        }

        ?>

    </p>
</body>

</html>