<?php

use Carbon\Carbon;

    if(!function_exists('calcAge')) {
        function calcAge($dob)
        {
            return Carbon::parse($dob)->age;
        }
    }
