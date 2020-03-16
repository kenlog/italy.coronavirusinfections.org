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
         
        <canvas id="globallyChart" width="100%"></canvas>

        <div class="card text-white bg-danger mb-5 mt-5 mx-auto" style="max-width: 100%;">
            <?php 
                if (!empty($_POST['date'])) {
                    $date = DateTime::createFromFormat('m-d-Y', $_POST['date']);
                    $convertDate = $date->format('d-m-Y');
                    echo '<div class="card-header font-weight-bold"><i class="fas fa-procedures"></i> Covid-19 - Situazione in Italia <br><i class="fas fa-history"></i> <i class="fas fa-calendar-day"></i> '.$convertDate.' </div>';
                } else {
                    echo '<div class="card-header font-weight-bold"><i class="fas fa-procedures"></i> Covid-19 - Situazione in Italia <br><i class="fas fa-history"></i> Ultimo aggiornamento dati: <br> <i class="fas fa-calendar-day"></i> '.$updateDate.' </div>';
                }
            ?>
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Casi totali</h5>
                <p class="card-text"><?= $sumConfirmed; ?></p>
                <h5 class="card-title font-weight-bold">Attualmente positivi</h5>
                <p class="card-text"><?= $sumPositive; ?></p>
                <h5 class="card-title font-weight-bold">Ricoverati</h5>
                <p class="card-text"><?= $sumRecovered; ?></p>
                <h5 class="card-title font-weight-bold">Guariti</h5>
                <p class="card-text"><?= $sumHealed; ?></p>
                <h5 class="card-title font-weight-bold">Deceduti</h5>
                <p class="card-text"><?= $sumDeaths; ?></p>
                <hr>
                <h5 class="card-title font-weight-bold"><i class="fas fa-exclamation-triangle"></i> VALUTAZIONE DEL RISCHIO</h5>
                <p class="card-text">
                    Livello Nazionale Molto alto <br>
                    Livello Regionale Molto alto <br>
                    Livello Locale Molto alto
                </p>
            </div>
        </div>