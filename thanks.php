<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
// define variables and set to empty values
$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// // nettoyage et validation des données soumises via le formulaire 
    if (!isset($firstname) || trim($firstname) === '')
        echo "Le prénom est obligatoire";
    elseif (!isset($lastname) || trim($lastname) === '' )
        echo "Le nom est obligatoire";
    elseif (!isset($email) || trim($email) === '' )
        echo "L'email est obligatoire";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Mauvais format d'adresse mail";
    elseif (!isset($phone) || trim($phone) === '' )
        echo "Le téléphone est obligatoire"; 
    elseif (!isset($subject) || trim($subject) === '' )
        echo "Le sujet est obligatoire";
    elseif (!isset($message) || trim($message) === '' )
        echo "Le message est obligatoire";
    else {
        echo"<p>Merci $firstname $lastname de nous avoir contacté à propos de $subject. <p>
    <p> Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : <p>
    <p> $message</p>";
}
};
?>

    

</body>
</html>

