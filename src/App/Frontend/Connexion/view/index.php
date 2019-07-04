<?php $fileCss = '../css/style.css'; ?>
<?php $fileJs = '../js/init.js'; ?>
<style>
    footer {
        position: absolute !important;
        bottom: 0 !important;
    }
</style>

<!--<form method="POST" class="text-align-center">
    <h1 class="h3 mb-3 font-weight-normal">Administration</h1>
    <div class="form-group">
        <input name="username" type="text" class="form-control" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="Mot de passe">
    </div>
    <button class="btn" type="submit">Connexion</button>
</form>-->
<form method="post" class="col s12 text-align-center">
    <h1 class="h3 mb-3 font-weight-normal">Administration</h1>
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input name="username" id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Nom d'utilisateur</label>
        <span class="helper-text" data-error="Nom d'utilisateur incorrect"></span>
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">lock</i>
        <input  name="password" type="password" id="icon_lock" class="validate">
        <label for="icon_lock">Mot de passe</label>
        <span class="helper-text" data-error="Mot de passe incorrect"></span>
    </div>
    <button class="btn" type="submit">Connexion</button>
</form>
