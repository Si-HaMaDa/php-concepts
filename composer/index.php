<?php

require './vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

echo '<br>';

echo Carbon::now()->subWeek()->diffForHumans();

echo '<br>';

echo Carbon::parse('2019-07-23 14:51')->locale('ar_EG')->isoFormat('LLLL');

echo '<br>';
echo '<br>';
echo '<br>';

use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;
use Brick\Math\Exception\RoundingNecessaryException;

echo BigInteger::of(123546) . '<br>';
echo BigInteger::of('9999999999999999999999999999999999999999999') . '<br>';

echo BigInteger::of(2)->multipliedBy(BigDecimal::of('2.0')) . '<br>'; // 4
// echo BigInteger::of(2)->multipliedBy(BigDecimal::of('2.5')) . '<br>'; // RoundingNecessaryException
echo BigDecimal::of(2.5)->multipliedBy(BigInteger::of(2)) . '<br>'; // 5.0

echo '<br>';
echo '<br>';
echo '<br>';


$detector = new League\MimeTypeDetection\FinfoMimeTypeDetector();

// Detect by actual file, no extension fallback.
$mimeType = $detector->detectMimeTypeFromFile('ooo.png');

echo $mimeType . '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
