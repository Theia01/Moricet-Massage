<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="cadre">
      <p>Bonjour {{ $contact['name'] }},</p>
      <p>J'ai le plaisir de vous informer que votre message <b>a bien été envoyé</b> à notre institut. <br>
        Nous répondrons à votre demande dans les plus brefs délais !
        <br><br>
        Camille de Moricet Massage.</p>
    </div>

    <style>
      .cadre{
        margin: 15vh 15% 0px 15%;
        padding: 50px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
        border-radius: 10px 10px 0px 0px;
        background-color: #FFF;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
        height: 85vh;
      }

      html{
        background-color: #92DB6C;
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </body>
