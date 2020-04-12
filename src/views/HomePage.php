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

include('src/views/partial/head.php');

?>

<body>
    
    <?php include('src/views/partial/nav.php'); ?>

    <div class="container text-dark text-center">
        
        <?php 
        
            include('src/views/partial/heading.php'); 

            include('src/views/partial/form-by-date.php');

            include('src/views/partial/table.php');

            include('src/views/partial/data-graph.php');
        
        ?>

        <hr style="background:#343a40">
            
        <?php 
        
            include('src/views/partial/protective-measures.php'); 

            include('src/views/partial/who-to-contact.php');

            include('src/views/partial/blockquote-data.php');
        
        ?>   

        <hr style="background:#343a40">

        <p class="float-right">
            <a href="#">Torna all'inizio</a>
        </p>

    </div>

    <?php 
    
        include('src/views/partial/footer.php'); 

        include('src/views/partial/share-buttons.php');

        include('src/views/partial/script.php');
    
    ?>

</body>

</html>