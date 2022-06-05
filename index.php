<?php

require_once __DIR__.'/database/sanitize.php';
require_once __DIR__.'/database/auth.php';
require_once __DIR__.'/database/sendForm.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/styles/style.css">
    <link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Formulaire d'inscription</title>
</head>
<body>
<section class="signup">
    <h1>Formulaire d'inscription</h1>
    <form method="POST" action="/">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" placeholder="John" value=<?= $firstname ?? "" ?>>
        <?= $errors['firstname'] ? '<p class="form-error">'.$errors['firstname'].'</p>' : "" ?>
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" placeholder="Doe" value= <?= $lastname ?? "" ?>>
        <?= $errors['lastname'] ? '<p class="form-error">'.$errors['lastname'].'</p>' : "" ?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="John@doe.com" value=<?= $email ?? "" ?>>
        <?= $errors['email'] ? '<p class="form-error">'.$errors['email'].'</p>' : "" ?>
        <label for="birthDate">Date de naissance</label>
        <input type="date" name="birthDate" id="birthDate">
        <?= $errors['birthDate'] ? '<p class="form-error">'.$errors['birthDate'].'</p>' : "" ?>
        <label for="sport"> Vous souhaitez-vous inscrire pour le sport suivant : </label>
        <select name="sport" id="sport">
            <option value="football">Football</option>
            <option value="basketball">Basketball</option>
            <option value="volleyball">Volleyball</option>
            <option value="tennis">Tennis</option>
            <option value="rugby">Rugby</option>
        </select>
        <p class="sport-price"></p>
        <button>Envoyer</button>
    </form>
    <p class="confirm-signup"><?= $confirmSignUp ?? "" ?></p>
</section>
<script src="app.js"></script>
</body>
</html>