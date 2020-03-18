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

 ?>
        
        <div id="toolbar" class="select mr-2" style="display:none">
            <select class="form-control">
                <option value="all">Export All</option>
            </select>
        </div>

        <table 
        id="table"
        class="table table-dark"
        data-toggle="table"
        data-buttons-align="right"
        data-buttons-class="secondary"
        data-show-columns="true"
        data-search="true"
        data-filter-control="true"
        data-show-search-button="true"
        data-search-align="left"
        data-show-search-clear-button="true"
        data-pagination="true"
        data-click-to-select="false"
        data-toolbar="#toolbar"
        data-mobile-responsive="true"
        data-show-toggle="true"
        data-show-export="true">
        <thead class="thead-light">
          <tr>
            <th data-visible="false">Lat.</th>
            <th data-visible="false">Long.</th>
            <th data-field="region" data-filter-control="select">Regione</th>
            <th>Data</th>
            <th data-sortable="true">Ricoverati</th>
            <th data-sortable="true" data-visible="false">Terapia intensiva</th>
            <th data-sortable="true">Tot. ospedalizzati</th>
            <th data-sortable="true" data-visible="false">Domiciliare</th>
            <th data-sortable="true" data-visible="false">Tot. positivi</th>
            <th data-sortable="true">Nuovi positivi</th>
            <th data-sortable="true">Guariti</th>
            <th data-sortable="true">Deceduti</th>
            <th data-sortable="true" data-sort-order="desc">Tot. casi</th>
            <th data-sortable="true" data-visible="false">Tamponi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        if (!empty($_POST['date']) && file_exists('data/csv/reports/'.$_POST['date'].'.csv')) {
            $file = 'data/csv/reports/'.$_POST['date'].'.csv';
        } else {
            $files = glob('data/csv/reports/*');
            $file = end($files);
        }
          $csvFile = new Keboola\Csv\CsvReader(
            $file,
            ',', // delimiter
            '"', // enclosure
            '', // escapedBy
            1 // skipLines
          );
          $sumConfirmed = 0;
          $sumDeaths = 0;
          $sumRecovered = 0;
          $sumHealed = 0;
          $sumPositive = 0;
          foreach ($csvFile as $row) {
            echo '<tr>';
            if (isset($row[4])) {
              echo '<th>'.$row[4].'</th>';
            } else {
              echo '<th>00.0000</th>';
            }
            if (isset($row[5])) {
              echo '<th>'.$row[5].'</th>';
            } else {
              echo '<th>00.0000</th>';
            }
            echo '<th>'.$row[3].'</th>';
            echo '<th><small>'.date("d-m-Y H:i:s", strtotime($row[0])).'</small></th>';
            echo '<th>'.$row[6].'</th>';
            echo '<th>'.$row[7].'</th>';
            echo '<th>'.$row[8].'</th>';
            echo '<th>'.$row[9].'</th>';
            echo '<th>'.$row[10].'</th>';
            echo '<th>'.$row[11].'</th>';
            echo '<th>'.$row[12].'</th>';
            echo '<th>'.$row[13].'</th>';
            echo '<th>'.$row[14].'</th>';
            echo '<th>'.$row[15].'</th>';
            echo '</tr>';
            if ($row[14] > 0) {
                $sumConfirmed += $row[14];
            }
            if ($row[10] > 0) {
                $sumPositive += $row[10];
            }
            if ($row[13] > 0) {
                $sumDeaths += $row[13];
            }
            if ($row[12] > 0) {
                $sumHealed += $row[12];
            }
            if ($row[6] > 0) {
                $sumRecovered += $row[6];
            }
          }
        ?>
        </tbody>
      </table>