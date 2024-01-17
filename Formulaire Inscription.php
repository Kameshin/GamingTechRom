<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Inscription</title>
    </head>
    <body>
        <form onsubmit="verify()">
            <fieldset>
                <legend>Inscription</legend>
                <center>
                <table border="0">
                        <tr>
                            <td>Nom</td>
                            <td><input type="text" name="Nom" value="" required="" autofocus="" placeholder="Tapez votre nom" pattern="[A-Z]*" title="En majuscule"/></td>
                            <td>*</td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td><input type="text" name="Prenom" value="" /></td>
                            <td>*</td>
                        </tr>
                        <tr>
                            <td>Date de naissance</td>
                            <td><input type="date" name="date" value="" /></td>
                            <td>*</td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input id="pass1" type="password" name="pass1" value="" /></td>
                            <td>*</td>
                        </tr>
                        <tr>
                            <td>Confirmez mot de passe</td>
                            <td><input id="pass2" type="password" name="pass2" value="" oninput="verify()"/></td>
                            <td>*<label id ="msg"></label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Valider" class="" />
                                <input type="reset" value="Annuler" class=""/></td>
                            <td></td>
                        </tr>
                </table>
                </center>
            </fieldset>
        </form>
    </body>
</html>