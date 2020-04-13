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

namespace Coronavirusinfections\Model;

class Home
{
	private $host = 'https://italy.coronavirusinfections.org';
	private $updateDate = '13 Aprile 2020';
	private $nextUpdate = '6:30 PM CET 14 Aprile 2020';
	private $pathReportFolder;
	private $reportFolder;
	private $contagionDays;

	public function getData()
	{
		$this->pathReportFolder = 'data/csv/reports/';
		$this->reportFolder = glob($this->pathReportFolder.'*.csv');
		$this->contagionDays = count($this->reportFolder);

		return [
			'host' => $this->host,
			'updateDate' => $this->updateDate,
			'nextUpdate' => $this->nextUpdate,
			'pathReportFolder' => $this->pathReportFolder,
			'reportFolder' => $this->reportFolder,
			'contagionDays' => $this->contagionDays
		];
	}
}