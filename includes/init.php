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

$updateDate = '20 Marzo 2020';

$nextUpdate = '6:30 PM CET 21 Marzo 2020'; 

$pathReportFolder = 'data/csv/reports/';

$reportFolder = glob($pathReportFolder.'*.csv');

$contagionDays = count($reportFolder);