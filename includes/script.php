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
    
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/Chart.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/bootstrap-table.min.js"></script>
    <script src="public/js/bootstrap-table-filter-control.min.js"></script>
    <script src="public/js/tableExport.min.js"></script>
    <script src="public/js/jspdf.min.js"></script>
    <script src="public/js/jspdf.plugin.autotable.js"></script>
    <script src="public/js/bootstrap-table-export.min.js"></script>
    <script src="public/js/bootstrap-table-mobile.min.js"></script>
    <script src="public/js/locale/bootstrap-table-it-IT.min.js"></script>
    <?php
        if (!empty($_POST['date'])) {
            $date = DateTime::createFromFormat('m-d-Y', $_POST['date']);
            $convertDate = $date->format('d-m-Y');
        } else {
            $files = $reportFolder;
            $lastFile = end($files);
            $lastFile = str_replace($pathReportFolder,'',$lastFile);
            $lastFile = str_replace('.csv','',$lastFile);
            $date = DateTime::createFromFormat('m-d-Y', $lastFile);
            $convertDate = $date->format('d-m-Y');
        }
        $csvNationalTrend = new Keboola\Csv\CsvReader(
            'data/csv/national-trend/andamento-nazionale.csv',
            ',', // delimiter
            '"', // enclosure
            '', // escapedBy
            1 // skipLines
          );
    ?>
    <script>
        var $table = $('#table')

        $(function() {
            $('#toolbar').find('select').change(function () {
                $table.bootstrapTable('destroy').bootstrapTable({
                    exportDataType: $(this).val(),
                    exportOptions: {
                        fileName: function () {
                            return 'Rapporti sulla situazione (COVID-19) <?= $convertDate; ?>'
                        },
                        preventInjection: false
                    },
                    exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
                })
            }).trigger('change')
        })
    </script>
    <script>
        var ctx = document.getElementById('trendNationalChart1').getContext('2d');
        var trendNationalChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    <?php 
                        foreach ($csvNationalTrend as $row) {
                            echo '"'.date("d-m-Y",strtotime(substr($row[0],0,10))).'",';
                        }
                    ?>
                ],
                datasets: [{
                    label: ['Totale tamponi'],
                    data: [
                        <?php 
                            foreach ($csvNationalTrend as $row) {
                                echo ''.$row[12].',';
                            }
                        ?>
                    ],
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    pointBackgroundColor: 'rgba(103, 58, 136, 0.5)',
                    backgroundColor: [
                        'rgba(103, 58, 136, 0.2)',
                    ],
                    borderColor: [
                        'rgba(103, 58, 136, 1)',

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('trendNationalChart2').getContext('2d');
        var trendNationalChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    <?php 
                        foreach ($csvNationalTrend as $row) {
                            echo '"'.date("d-m-Y",strtotime(substr($row[0],0,10))).'",';
                        }
                    ?>
                ],
                datasets: [{
                    label: ['Attualmente positivi'],
                    data: [
                        <?php 
                            foreach ($csvNationalTrend as $row) {
                                echo ''.$row[8].',';
                            }
                        ?>
                    ],
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    pointBackgroundColor: 'rgba(255, 87, 34, 0.5)',
                    backgroundColor: [
                        'rgba(255, 87, 34, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 87, 34, 1)',

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('trendNationalChart3').getContext('2d');
        var trendNationalChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    <?php 
                        foreach ($csvNationalTrend as $row) {
                            echo '"'.date("d-m-Y",strtotime(substr($row[0],0,10))).'",';
                        }
                    ?>
                ],
                datasets: [{
                    label: ['Ricoverati in terapia intensiva'],
                    data: [
                        <?php 
                            foreach ($csvNationalTrend as $row) {
                                echo ''.$row[3].',';
                            }
                        ?>
                    ],
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    pointBackgroundColor: 'rgba(255, 20, 70, 0.5)',
                    backgroundColor: [
                        'rgba(255, 20, 70, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 20, 70, 1)',

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('globallyChart').getContext('2d');
        var globallyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Casi totali', 'Attualmente positivi', 'Nuovi positivi', 'Ricoverati', 'Guariti', 'Deceduti'],
                datasets: [{
                    label: 'Rapporti sulla situazione (COVID-19) <?= $convertDate; ?>',
                    data: [<?= $sumConfirmed; ?>, <?= $sumPositive; ?>, <?= $sumNewPositive ?>, <?= $sumRecovered; ?>, <?= $sumHealed; ?>, <?= $sumDeaths; ?>],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(0, 150, 136, 0.2)',
                        'rgba(217, 72, 50, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(139, 195, 74, 0.2)',
                        'rgba(158, 158, 158, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(0, 150, 136, 1)',
                        'rgba(217, 72, 50, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(139, 195, 74, 1)',
                        'rgba(158, 158, 158, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.navbar-nav a').click(function(){
                $('a').removeClass("active");
                $(this).addClass("active");
            });
        });
        $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });
    </script>