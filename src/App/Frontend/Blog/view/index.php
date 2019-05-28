<?php foreach ($listPosts as $post): ?>
    <div class="row">
        <div class="col 12">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        <a class="text-dark" href="/chapitres/chapitre-<?= $post['id'] ?>"><?= substr($post['content'], 0, 14) ?></a>
                    </div>
                    <time><?= $post['created_at'] ?></time>
                    <p class="card-text text-dark"><?= substr($post['content'], 14, 255) . '...' ?></p>
                </div>
                <div class="card-action">
                    <a class="" href="/chapitres/chapitre-<?= $post['id'] ?>" style="text-decoration: none;" >Lire la suite</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
