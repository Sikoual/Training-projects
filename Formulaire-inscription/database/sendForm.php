<?php

if (empty(array_filter($errors, fn($e) => $e !== ''))) {
    $inscription = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'birthdate' => $birthdate,
        'sport' => $sport,
    ];

    $statement = $pdo->prepare(
        'INSERT INTO inscription VALUES(
            DEFAULT,
            ?,
            ?,
            ?,
            ?,
            ?
    )'
    );

    $statement->execute([
        $inscription['firstname'],
        $inscription['lastname'],
        $inscription['email'],
        $inscription['birthdate'],
        $inscription['sport'],
    ]);
}

