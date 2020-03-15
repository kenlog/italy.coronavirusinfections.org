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

        <div class="col-md-6 mx-auto mb-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#table" method="post">
                <select name="date" class="form-control" required>
                    <option value="" selected="selected">Seleziona per data</option>
                    <?php 
                        foreach(glob('data/csv/reports/*') as $filename){
                            $filename = basename($filename);
                            $convertDate = str_replace('.csv','', $filename);
                            $date = DateTime::createFromFormat('m-d-Y', $convertDate);
                            $convertDate = $date->format('d-m-Y');
                            echo "<option value='" . str_replace('.csv','', $filename) . "'>".$convertDate."</option>";
                        }
                    ?>
                </select> 
                <a class="btn btn-secondary mt-2" href="<?= $host; ?>#table" role="button"><i class="far fa-calendar-check"></i> Ultimo aggiornamento dati <?= $updateDate; ?></a>
                <button type="submit" class="btn btn-secondary mt-2"><i class="fas fa-calendar-day"></i> Mostra la data selezionata</button>
            </form>
        </div>