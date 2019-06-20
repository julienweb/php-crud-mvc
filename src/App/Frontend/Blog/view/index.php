<?php $fileJs = "js/init.js" ?>
<?php $fileCss = "css/style.css"; ?>
<div class="container">
    <?php foreach ($listPosts as $post): ?>
    <div class="row">
        <div class="col 12">
            <div class="jumbotron">
                <h1>
                    <a class="blue-grey-text darken-2-text accent-2" href="/chapitres/chapitre-<?= $post['id'] ?>"><?= substr($post['content'], 0, 14) ?></a>
                </h1>
                <!--<time><?= $post['created_at'] ?></time>-->
                <p class="text-dark"><?= substr($post['content'], 14, 255) . '...' ?></p>
                <a class="waves-effect waves-light btn-small blue-grey darken-2" href="/chapitres/chapitre-<?= $post['id'] ?>" style="text-transform:uppercase; font-weight: bold; text-align:center;color:#eceff1;text-decoration: none;" >Lire la suite</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
