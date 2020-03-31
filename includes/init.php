<?php

/**
 * This file is part of the italy.coronavirusinfections.org project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$host = "https://italy.coronavirusinfections.org";

$updateDate = '30 Marzo 2020';

$nextUpdate = '7:00 PM CET 31 Marzo 2020'; 

$pathReportFolder = 'data/csv/reports/';

$reportFolder = glob($pathReportFolder.'*.csv');

$contagionDays = count($reportFolder);

function percentage(int $a, int $b, int $decimals = 2)
{
    if ($b > $a) {
        return number_format((($a / $b) * 100),$decimals) . '%';
    } else {
        return '0.00%';
    }
}
