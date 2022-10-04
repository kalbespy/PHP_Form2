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
            <input type="text" id="firstname" name="firstname" required> <br><br>
            
            <label for="lastname" value="Doe">Nom :</label><br>
            <input type="text" id="lastname" name="lastname" required> <br><br>
            
            <label for="mail">E-mail&nbsp:</label><br>
            <input type="email" id="email" name="email" required> <br><br>
            
            <label for="number">Téléphone :</label><br>
            <input type="text" id="phone" name="phone" required> <br><br>
            
            <label for="subject">Objet du message:</label><br>
            <select id="subject" name="subject" required>
                <option value="Réclamation">Réclamation</option>
                <option value="Remerciements">Remerciements</option>
                <option value="Rendez-vous">Rendez-vous</option>
                <option value="Divers">Divers</option>
            </select> <br><br>
            
            <label for="msg">Message :</label><br>
            <textarea id="msg" name="message" required></textarea> <br><br>
            
            <button type="submit">Envoyez donc !</button>

        </fieldset>
    </form>

</body>

</html>