<?php $fileJs = "../js/init.js" ?>
<?php $fileCss = "../css/style.css"; ?>

<div class="row">
    <div class="jumbotron blue-grey-text darken-2-text" style="font-size: 1.5em;padding-bottom: 3em;">
        <h1 class="text-align-center">
            <?= substr($post['content'],    0, 10); ?>
        </h1>
        <p class="text-align-center">
            <?= substr($post['content'],    10); ?>
        </p>
        <time style="float: right;">
            <?= preg_replace("#([0-9]{4})-+([0-9]{2})-+([0-9]{2}) +([0-9]{2}):+([0-9]{2}):+([0-9]{2})#", 'Posté le ${3}/${2}/${1} à ${4}:${5}', $post['created_at']); ?>
        </time>
    </div>
</div>
