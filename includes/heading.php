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
        
<div class="jumbotron jumbotron-fluid mt-5 p-3 bg-info text-light">
    <div class="container">
        <h3 class="text-light font-weight-bold">Rapporti della situazione sulla malattia da coronavirus (COVID-19)</h3>
        <p class="text-muted">- <i class="far fa-newspaper fa-lg"></i> Comunicati stampa dal sito Web dell'OMS -</p>
    </div>
</div>

<div class="mb-5">
    <!-- timeline item 1 -->
    <div class="row no-gutters">
        <div class="col-sm"> <!--spacer--> </div>
        <!-- timeline item 1 center dot -->
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-warning">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <!-- timeline item 1 event content -->
        <div class="col-sm py-2">
            <div class="card border-warning shadow bg-info">
                <div class="card-body">
                    <div class="float-right text-light small">31 Dicembre 2019</div>
                    <h4 class="card-title text-warning">OMS</h4>
                    <p class="card-text text-light">Una polmonite di causa sconosciuta rilevata a Wuhan, in Cina, è stata segnalata per la prima volta all'Ufficio nazionale dell'OMS in Cina.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 2 -->
    
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card border-warning shadow bg-info">
                <div class="card-body">
                    <div class="float-right text-light small">30 Gennaio 2020</div>
                    <h4 class="card-title text-warning">OMS</h4>
                    <p class="card-text text-light">L'epidemia è stata dichiarata un'emergenza di sanità pubblica di interesse internazionale.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-warning">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm"> <!--spacer--> </div>
    </div>
    <!--/row-->
    <!-- timeline item 3 -->
    <div class="row no-gutters">
        <div class="col-sm"> <!--spacer--> </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-warning">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm py-2">
            <div class="card border-warning shadow bg-info">
                <div class="card-body">
                    <div class="float-right text-light small">11 Febbraio 2020</div>
                    <h4 class="card-title text-warning">OMS</h4>
                    <p class="card-text text-light">L'OMS ha annunciato un nome per la nuova malattia da coronavirus: COVID-19.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 4 -->
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card border-warning shadow bg-info">
                <div class="card-body">
                    <div class="float-right text-light small">11 Marzo 2020</div>
                    <h4 class="card-title text-warning">OMS</h4>
                    <p class="card-text text-light">"L'OMS ha valutato questo focolaio 24 ore su 24 e siamo profondamente preoccupati sia per i livelli allarmanti di diffusione e gravità, sia per i livelli allarmanti di inazione. Abbiamo quindi valutato che COVID-19 può essere caratterizzato come una pandemia."</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-warning">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm"> <!--spacer--> </div>
    </div>
    <!--/row-->
</div>

<div class="row mb-5">
    <div class="col-sm-6 mb-2">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title"><b>Giorni dal rilevamento dei dati</b> <br> <i class="far fa-calendar-alt"></i> <?= $contagionDays; ?></h5>
            </div>
        </div>
    </div>
    <div class="col-sm-6 mb-2">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-stopwatch"></i> <b>Prossimo aggiornamento</b> <br> <?= $nextUpdate; ?></h5>
            </div>
        </div>
    </div>
</div>