<?php require "../ressources/views/layouts/header.tpl.php"; ?>


<div class="container container-article">
    <h2>Formulaire de connexion</h2>
    <form class="formulaire" action="?action=blogLogin" method="post">
        <div>
            <label for="">Adresse email</label>
            <input name="email" type="email">
        </div>
        <div>
            <label for="">Mot de passe</label>
            <input name="pwd" id="input-pwd" type="password">
            <div>
                <input type="checkbox" name="checkboxPwd" id="checkboxPwd">
                <span>Afficher le mot de passe</span>
            </div>
        </div>
        <div>
            <button type="submit">Connexion</button>
        </div>
    </form>
</div>

<script>
    const checkboxPwd = document.getElementById('checkboxPwd')
    const inputPwd = document.getElementById('input-pwd')
    checkboxPwd.addEventListener('input', (e) => {
        if (e.target.checked){
            inputPwd.type = "text"
        }else{
            inputPwd.type ="password"
        }
    })
</script>