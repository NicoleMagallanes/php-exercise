<?php
require_once 'F:/laragon/www/php-101/vendor/autoload.php';
require_once 'F:\laragon\www\php-101\exercise_2.php';

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    // E2.1 
public function testCheckIfVowelOrConsonant()
{
    $this->assertEquals('A is a vowel', checkIfVowelOrConsonant('A'));
    $this->assertEquals('B is a consonants', checkIfVowelOrConsonant('B'));
}

// E2.1 
public function testCheckIfVowelOrConsonant_arr()
{
    $this->assertEquals('A is a vowel', checkIfVowelOrConsonant_arr('A'));
    $this->assertEquals('B is a consonants', checkIfVowelOrConsonant_arr('B'));
}
}
?>