<!DOCTYPE html>
<html lang="th" class="isMobile">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <base href="<?=URL_Path?>">
        <title>Amaza</title>
        
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
        <link rel="stylesheet" href="<?=URL_Public?>/css/bulma-extension.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <?php
            echo '
            <style type="text/css" media="screen, print">
                @font-face {
                    font-family: Sukhumvit;
                    src: url("';
            echo URL_Public . '/css/SukhumvitSet-Text.ttf';
            echo '");
                }
                
                @font-face {
                    font-family: Sukhumvit;
                    src: url("';
            echo URL_Public . '/css/SukhumvitSet-Bold.ttf';
            echo '");
                    font-weight: bold;
                }';
            if(empty($this->MCEFONT)){
                echo '
                * {
                    font-family: Sukhumvit !important;
                }
                ';
            }
            echo '</style>';
        ?>
        <?php
            if(isset($this->CSSInject)){
                foreach ($this->CSSInject as $CSS) {
                    echo '<link rel="stylesheet" href="';
                    echo $CSS;
                    echo '">';
                }
            }
        ?>
        
    </head>

    <body class="greybg">
        <div class="app">