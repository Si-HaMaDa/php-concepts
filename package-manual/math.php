<?php

require './math/src/BigNumber.php';
require './math/src/BigInteger.php';
require './math/src/BigDecimal.php';
require './math/src/RoundingMode.php';
require './math/src/Internal/Calculator.php';
require './math/src/Internal/Calculator/BcMathCalculator.php';

use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;
use Brick\Math\RoundingMode;

$ten = BigInteger::of(10);

echo $ten->plus(5); // 15

echo '<br>';
echo $ten->multipliedBy(3); // 30
echo '<br>';
echo '<br>';


echo BigInteger::of(10)->plus(5)->multipliedBy(3); // 45
echo '<br>';
echo '<br>';


// $integer = BigInteger::of(123);
// echo $integer->multipliedBy(123);
// echo '<br>';
// echo $integer->multipliedBy('123');
// echo '<br>';
// echo $integer->multipliedBy($integer);
// echo '<br>';
// echo '<br>';


// echo BigDecimal::of(1)->dividedBy('8', 2, RoundingMode::HALF_DOWN); // 0.12
// echo '<br>';
// echo BigDecimal::of(1)->dividedBy('8', 2, RoundingMode::HALF_UP); // 0.13
// echo '<br>';
// echo BigDecimal::of(1)->dividedBy('8', 3); // 0.125
// echo '<br>';
// echo BigInteger::of(999)->dividedBy(3); // 333
// echo '<br>';
// echo BigDecimal::of(1)->dividedBy('8', 2); // RoundingNecessaryException
// echo '<br>';
