<?php

/**
 * This file is part of the italy.italy.coronavirusinfections.org project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 ?>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= $host; ?>">
            <img src="public/img/logo.png?v=2" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            Coronavirus infections
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#measures">Misure di protezione di base</a>
                <a class="nav-item nav-link" href="https://secure.avaaz.org/campaign/it/covid19_global_response_loc/?copy" target="_blank">Aiuta a rallentare il coronavirus (avaaz.org)</a>
            </div>
            <ul class="share-buttons navbar-nav flex-row ml-md-auto d-md-flex">
                <li style="display: inline;margin: 3px;"><a href="https://twitter.com/intent/tweet?source=URL&amp;text=https://italy.coronavirusinfections.org/" target="_blank" title="Condividi su Twitter"><img src="public/icons/Twitter.png" width="80%"></a></li>
                <li style="display: inline;margin: 3px;"><a href="https://www.facebook.com/sharer/sharer.php?u=https://italy.coronavirusinfections.org/" title="Condividi su Facebook" target="_blank"><img src="public/icons/Facebook.png" width="80%"></a></li>
                <li style="display: inline;margin: 3px;"><a href="https://t.me/share/url?url=https://italy.coronavirusinfections.org/&amp;text=Coronavirusinfections.org" target="_blank" title="Condividi su Telegram"><img src="public/icons/telegram.png" width="80%"></a></li>
                <li style="display: inline;margin: 3px;"><a href="whatsapp://send?text=https://italy.coronavirusinfections.org/" target="_blank" title="Condividi su Whatsapp"><img src="public/icons/whatsapp.png" width="80%"></a></li>
            </ul>
        </div>
    </nav>