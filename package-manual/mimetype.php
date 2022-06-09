<?php

require './mime-type-detection/src/ExtensionMimeTypeDetector.php';

$detector = new League\MimeTypeDetection\ExtensionMimeTypeDetector();

// Only detect by extension
$mimeType = $detector->detectMimeType('some/path.php', 'string contents');

// Always returns null
$mimeType = $detector->detectMimeTypeFromBuffer('string contents');

// Only detect by extension
$mimeType = $detector->detectMimeTypeFromFile('existing/path.php');

// Only detect by extension
$mimeType = $detector->detectMimeTypeFromPath('any/path.php');
