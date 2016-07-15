<?php
    header('Content-Type: text/cache-manifest');

    //Configura o manifesto de cache

    $versionHash = md5_file("index.php");

    $arquivosDeCache = "";
    $arquivosDeCacheArray = array(
        'img/logo-recife-cultural.svg',
        'img/favicon.ico',
        'css/style.css',
        'libs/jquery/dist/jquery.min.js',
        'libs/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'js/app-cache.js',
        'js/main.js'
    );
    foreach($arquivosDeCacheArray as $arquivo) {
        $arquivosDeCache .= $arquivo."\n";
        $versionHash .= md5_file($arquivo);
    }

    $arquivosDeNetworkArray = array();
    $arquivosDeNetwork = "";
    foreach($arquivosDeNetworkArray as $arquivo) {
        $arquivosDeNetwork .= $arquivo."\n";
        $versionHash .= md5_file($arquivo);
    }

    $arquivosDeFallBackArray = array(
        array('img/','img/offline.png')
    );
    $arquivosDeFallBack = "";
    foreach($arquivosDeFallBackArray as $arquivos) {
        $arquivosDeFallBack .= implode(" ",$arquivos)."\n";
        $versionHash .= md5_file($arquivo);
    }

    //Escreve o manifeste de cache
    echo "CACHE MANIFEST \n";
    echo "#VERSION ".md5($versionHash)."\n\n";

    echo "CACHE: \n";
    echo $arquivosDeCache."\n\n";

    echo "NETWORK: \n";
    echo $arquivosDeNetwork."\n\n";

    echo "FALLBACK: \n";
    echo $arquivosDeFallBack."\n\n";
?>
