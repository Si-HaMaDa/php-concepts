<?php

require './Carbon/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterval;

printf("Now: %s", Carbon::now('Africa/Cairo')->toDateTimeString());

echo '<br>';

echo Carbon::now()->addMinutes(900)->locale('ar_EG')->diffForHumans(); 
// echo Carbon::createFromDate(1975, 5, 21)->age; 
