<?php

    include 'exercise_2.php';

    //$page_title = $_REQUEST['page_title'];
    //$value2 = $_REQUEST['var2'];


?>
<!DOCTYPE html>  
<html>  
    <title><?php echo $page_title.' '.$value2 ?></title>
<body>  

<h3>Check if a character is a vowel or consonant</h3>
<?php  

    echo checkIfVowelOrConsonant('a').'<br/>';
    echo checkIfVowelOrConsonant('b').'<br/>';
    echo checkIfVowelOrConsonant('C').'<br/>';
    echo checkIfVowelOrConsonant('D').'<br/>';
    echo checkIfVowelOrConsonant('E').'<br/>';

    echo checkIfVowelOrConsonant_arr('a').'<br/>';
    echo checkIfVowelOrConsonant_arr('b').'<br/>';
    echo checkIfVowelOrConsonant_arr('C').'<br/>';
    echo checkIfVowelOrConsonant_arr('D').'<br/>';
    echo checkIfVowelOrConsonant_arr('E').'<br/>';

    echo convertDigitToWord(721).'<br/>';
    echo convertDigitToWord(563).'<br/>';
    echo convertDigitToWord(129).'<br/>';
    echo convertDigitToWord(1234567890).'<br/>';

    echo isDivisibleByThree(8).'<br/>';
    echo isDivisibleByThree(3).'<br/>';
    echo isDivisibleByThree(15).'<br/>';
    echo isDivisibleByThree(22).'<br/>';

    if(isDivisibleByThree_Bool(8)){
        echo 'is divisible by 3<br/>';
    }else{
        echo 'is not divisible by 3<br/>';
    }

    echo isDivisibleByThree_str(3).'<br/>';

    echo implode(', ', deleteDuplicate(['one','one','two','three','four','four','five','six','six'])).'<br/>';

    echo isArmstrongNumber(153).'<br/>';

    echo isArmstrongNumber(1).'<br/>';
    
    echo isArmstrongNumber(21).'<br/>';

    echo isArmstrongNumber(1634).'<br/>';

    echo isArmstrongNumber(371).'<br/>';

    echo isArmstrongNumber(8208).'<br/>';
    echo isArmstrongNumber(9474).'<br/>';
    echo isArmstrongNumber(54748).'<br/>';
    
    if(isArmstrongNumber_bool(371)){
        echo 'Armstrong Number<br/>';
    }else{
        echo 'Not Armstrong Number<br/>';
    }

    if(isArmstrongNumber_bool(54)){
        echo 'Armstrong Number<br/>';
    }else{
        echo 'Not Armstrong Number<br/>';
    }

    echo "<h1>Hello, I'm WD58P</h1>";  
    echo 1 + 4;

    $students =  array(["name"=>"John Garg","age" => "15","school"=> "Ahlcon Public school"],
    ["name"=>"Smith Soy","age"=>"16","school"=>"St. Marie school"],
    ["name"=>"Charle Rena","age"=>"16","school"=>"St. Columba school"]);

?>  

<div>
    <h2>This is a sample php page</h2>
</div>

<button class="btn <?php echo 'btn-primary' ?> "><?php echo 6 * 3; ?></button>

<?php 
$total = 10 + 70;

if($total > 20){
    echo "<br/> $total is greater than 20";
}else{
    echo "<br/> $total is less than 20";
}

$strValue = "KodeGo";

if($strValue == "KodeGo"){
    echo "<br/>String is equal";
}else{
    echo "<br/>String not equal";
}

$value = "b";

switch($value){
    case "a":
        echo "<br/>value is A";
    break;
    case "b":
        echo "<br/>value is B";
    break;
    default:
        echo "<br/>default";
}

for($i=0; $i <=10; $i++){
    echo "<br/> $i";
}
echo "<br/>";

$students = ["Joshua","Rommel","Jerold","Xander","Meloy","Carlo","Nicole","Ralph","Lyka"];

$students_1 = ["Joshua_1","Rommel_1","Jerold_1","Xander_1","Meloy_1","Carlo_1","Nicole_1","Ralph_1","Lyka_1"];

$index = 0;
foreach($students as $item){
    echo "$item, ";
}

echo "<br/>";

foreach($students as $index=>$item){
    echo "$index - $item, ";
}

function displayStudentNames($list){
    foreach($list as $item){
        echo "$item, ";
    }
}

echo "<br/>";
displayStudentNames($students);
echo "<br/>";
displayStudentNames($students_1);
echo "<br/>";
displayStudentNames($students);
echo "<br/>";
displayStudentNames($students_1);
echo "<br/>";
displayStudentNames($students);

echo "<br/>";



echo "<br/>".addTwoNumbers(3, 4);

echo "<br/>".addTwoNumbers(330, 67);
echo "<br/>";
echo addTwoNumbers(56, 98);

echo "<br/>";
echo doMultiply(2, 4);

echo "<br/>";
echo doMultiply(4, 4);

echo "<br/>";
echo doMultiply(3, 8);


echo "<br/>";
displayNumber(11);

function displayNumber($number){
    if($number <= 20){
        echo "$number <br/>";
        displayNumber($number + 1);
    }
}

function addTwoNumbers($num1, $num2){
    return $num1 + $num2;
}

function doMultiply($multiplicant, $multiplier){
    $product = 0;
    for($ctr=0; $ctr < $multiplier; $ctr++){
        $product = addTwoNumbers($multiplicant, $product);
    }
    return $product;
}

function add_five(&$number, &$number1){
    $number += 5;
    $number1 += 10;
}

function add_five_ten($number, $number1){
    $number += 5;
    $number1 += 10;

    return [$number, $number1];
}

$newNumber = 9;
$newNumber_1 = 9;

add_five($newNumber, $newNumber_1);

$result = add_five_ten($newNumber, $newNumber_1);

echo "<h4>Pass by Reference Result </h4>";
echo $newNumber;
echo "<br/>";
echo $newNumber_1;
echo "<br/>";
echo $result[0];
echo "<br/>";
echo $result[1];



?>

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($students as $index=>$item){           
            if($index == 3){
                continue;
            }
            ?>
            <tr>
                <td><?php echo $index ?></td>
                <td><?php echo $item ?></td>
            </tr>
        <?php } 

        $ctr = 0;
        while($ctr < count($students)){
            
            if($ctr == 4){
                $ctr++;
                continue;
            }
            
            ?>
            <tr>
                <td><?php echo $ctr ?></td>
                <td><?php echo $students[$ctr] ?></td>
            </tr>
        <?php $ctr++;
        } 
        
        $ctr = 0;
        do{?>
            <tr>
                <td><?php echo $ctr ?></td>
                <td><?php echo $students[$ctr] ?></td>
            </tr>
        <?php $ctr++;
        }while($ctr < 0);
        ?>
        </tbody>
    </table>

</div>
<script>

var studentNames = [<?php
foreach($students as $item){
    echo "'$item', ";
}
?>];

</script>

</body> 

</html>