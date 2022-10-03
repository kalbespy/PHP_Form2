<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
<form action="thanks.php" method="post">
    <fieldset>
        <legend> Remplissez moi ça (SVP)</legend><br>
        <label for="firtsname" value="John">Prénom :</label> <br>
        <input type="text" id="firstname" name="user_firstname"> <br><br>
        <label for="lastname" value="Doe">Nom :</label><br>
        <input type="text" id="lastname" name="user_lastname"> <br><br>
        <label for="mail">E-mail&nbsp;:</label><br>
        <input type="email" id="mail" name="user_mail"> <br><br>
        <label for="number">Téléphone :</label><br>
        <input type="text" id="telephone" name="user_phone"> <br><br>
        <label for="subject">Objet du message:</label><br>
        <select id="subject" name="user_subject">
            <option value="Réclamation">Réclamation</option>
            <option value="Remerciements">Remerciements</option>
            <option value="Rendez-vous">Rendez-vous</option>
            <option value="Divers">Divers</option>
        </select> <br><br>
        <label for="msg">Message :</label><br>
        <textarea id="msg" name="user_message"></textarea> <br><br>
        <button type="submit" onclick="alert('Cimer !')">Envoyez donc !</button>
    </fieldset>
</form>
</body>
</html>