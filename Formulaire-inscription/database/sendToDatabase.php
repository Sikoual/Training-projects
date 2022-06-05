<?php

const ERROR_REQUIRED = "Veuillez remplir le champ";
const ERROR_EMAIL = "Veuillez vérifier votre adresse mail";

$confirmSignUp = '';
$errors = [
    'firstname' => '',
    'lastname' => '',
    'email' => '',
    'birthDate' => '',
    'sport' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST = filter_input_array(INPUT_POST, [
        'firstname' => FILTER_SANITIZE_SPECIAL_CHARS,
        'lastname' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_VALIDATE_EMAIL,
        'birthDate' => FILTER_SANITIZE_SPECIAL_CHARS,
        'sport' => FILTER_SANITIZE_SPECIAL_CHARS,
    ]);

    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $birthdate = $_POST['birthDate'];
    $sport = $_POST['sport'];

    if (!$firstname) {
        $errors['firstname'] = ERROR_REQUIRED;
    }
    if (!$lastname) {
        $errors['lastname'] = ERROR_REQUIRED;
    }
    if (!$email) {
        $errors['email'] = ERROR_REQUIRED;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ERROR_EMAIL;
    }
    if (!$birthdate) {
        $errors['birthDate'] = ERROR_REQUIRED;
    }
    if (!$sport) {
        $errors['sport'] = ERROR_REQUIRED;
    }
    if (empty(array_filter($errors, fn($e) => $e !== ''))) {
        $confirmSignUp = 'Votre inscription a bien été prise en compte';


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
}

