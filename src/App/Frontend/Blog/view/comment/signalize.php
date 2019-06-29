<?php $fileCss = '../css/style.css'; ?>
<?php $fileJs = '../js/init.js'; ?>
<style>
    footer {
        position: absolute !important;
        bottom: 0 !important;
    }
</style>
<div class="row alert-success text-align-center white-text">
    <ul>
        <li>
            <p style="font-size: 2em;">Le commentaire a bien été signalé
                <i class="fa fa-check" style="margin: auto 1rem;" aria-hidden="true"></i>
            </p>
        </li>
        <li>
            <a class="back-btn"
               href="/chapitres/chapitre-<?= $postId;  ?>"
            >
                Revenir au chapitre
            </a>
        </li>
    </ul>
</div>
