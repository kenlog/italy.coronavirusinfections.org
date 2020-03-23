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
        var ctx = document.getElementById('globallyChart').getContext('2d');
        var globallyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Casi totali', 'Totale positivi', 'Nuovi positivi', 'Ricoverati', 'Guariti', 'Deceduti'],
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
                    borderWidth: 1
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