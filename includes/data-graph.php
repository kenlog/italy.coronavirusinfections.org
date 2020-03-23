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

        <div class="row">
                <div class="col-sm-12 mb-3 mt-5 mx-auto">
                        <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"><i class="fas fa-procedures"></i> Covid-19 Situazione in Italia</h4>
                        </div>
                        <div class="card-body">
                        <?php 
                            if (!empty($_POST['date'])) {
                                $date = DateTime::createFromFormat('m-d-Y', $_POST['date']);
                                $convertDate = $date->format('d-m-Y');
                                echo '<h5 class="font-weight-bold"><i class="fas fa-calendar-day"></i> '.$convertDate.'</h5>';
                            } else {
                                echo '<h5 class="font-weight-bold"><i class="fas fa-calendar-day"></i> '.$updateDate.'</h5>';
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">CASI TOTALI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumConfirmed); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumConfirmed,60483973); ?> della popolazione</h4> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">TOTALE POSITIVI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumPositive); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumPositive,$sumConfirmed); ?> dei casi totali</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">NUOVI POSITIVI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumNewPositive); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumNewPositive,$sumPositive); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">RICOVERATI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumRecovered); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumRecovered,$sumConfirmed); ?></h4> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">GUARITI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumHealed); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumHealed,$sumConfirmed); ?></h4> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card text-white bg-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">DECEDUTI</h3>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold"><?= number_format($sumDeaths); ?></h3>
                        </div>
                        <div class="card-footer text-muted">
                            <h4 class="card-text"><?= percentage($sumDeaths,$sumConfirmed); ?></h4> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mb-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"><i class="fas fa-exclamation-triangle"></i> VALUTAZIONE DEL RISCHIO</h4>
                        </div>
                        <div class="card-body">
                            <h5>
                                Livello Nazionale Molto Alto <br>
                                Livello Regionale Molto Alto <br>
                                Livello Locale Molto Alto
                            </h5>
                        </div>
                    </div>
                </div>
        </div>