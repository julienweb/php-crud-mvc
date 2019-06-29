<?php $fileJs = "../js/init.js" ?>
<?php $fileCss = "../css/style.css"; ?>

<!-- Article  -->
<div class="row grey lighten-3" style=";padding: 2em 5em 4em 5em;border-radius: 0.3em;font-size: 1.5em;">
    <div class="blue-grey-text darken-2-text">
        <h1 class="text-align-center">
            <?= substr($post['content'],    0, 10); ?>
        </h1>
        <p class="text-align-center">
            <?= substr($post['content'],    10); ?>
        </p>
        <div class="d-flex" style="flex-direction: column; float: right;">
            <p style="margin-bottom:0;">Rédigé par : <?= $post['author'] ?></p>
            <time>
                <?= preg_replace("#([0-9]{4})-+([0-9]{2})-+([0-9]{2}) +([0-9]{2}):+([0-9]{2}):+([0-9]{2})#", 'Posté le ${3}/${2}/${1} à ${4}:${5}', $post['created_at']); ?>
            </time>
        </div>
    </div>
</div>

<!-- Commentaires de l'article  -->
<div class="grey lighten-3" style="border-radius:0.3em; margin-top: 2em; padding: 2em;">
    <h2 class="blue-grey-text darken-2-text">Commentaires</h2>
    <?php if (!is_null($message)): ?>
        <div class="alert-success">
            <?= $message; ?>
        </div>
    <?php endif; ?>
    
    <?php foreach ($comments as $comment): ?>
        <div class="row grey lighten-5" style="padding: 1em;border-radius: 0.3em;">
            <h5 class="blue-grey-text darken-2-text">
                <?= preg_replace(
                    "#([0-9]{4})-+([0-9]{2})-+([0-9]{2}) +([0-9]{2}):+([0-9]{2}):+([0-9]{2})#",
                    'Le ${3}/${2}/${1} à ${4}:${5}',
                    $post['created_at']
                );
                ?>, par <?= $comment['author'] ?>
            </h5>
            <hr class="my-4" style="margin:1em 0;">
            <div class="d-flex" style="justify-content: space-between;">
                <p class="blue-grey-text darken-2-text">
                    <?php if ($comment['signaled'] == 1): ?>
                        <del><?= $comment['content'] ?></del>
                    <?php else: ?>
                        <?= $comment['content'] ?>
                    <?php endif; ?>
                </p>
                <img src="../img/user.png" width="80" height="80"/>
            </div>
            <form method="post" action="/chapitres/signaler-commentaire-<?= $comment['id']; ?>">
                <button type="submit"
                        name="chapters<?= $post['id']; ?>"
                        class=" btn waves-effect waves-light amber lighten-3 font-weight-bold"
                >Signaler
                </button>
            </form>
        </div>
    <?php endforeach; ?>
    <br/></div><br/>
<div>
    <p class="lead">Ajouter un commentaire</p>

    <?php if (!empty($_SESSION['error']['author'])): ?>
        <div class="alert-danger">
            <?= $_SESSION['error']['author']; ?>
        </div>
        <?php elseif (!empty($_SESSION['error']['content'])): ?>
            <div class="alert-danger">
                <?= $_SESSION['error']['content']; ?>
            </div>
        <?php elseif (!empty($_SESSION['Message'])): ?>
            <div class="alert-success">
                <?= $_SESSION['Message']; ?>
            </div>
        <?php endif; ?>

    <hr class="my-4">
    <form action="/chapitres/ajouter-commentaire" method="post">
        <input name="author" type="text" placeholder="Pseudo" class="form-group form-control" />
        <textarea name="content" rows="6" placeholder="Commentaire..." class="form-group form-control"></textarea>
        <hr class="my-4">
        <button name="chapters<?= $post['id']; ?>" type="submit" class="btn btn-outline-dark btn-block">POSTER</button>
    </form>
    
</div>
