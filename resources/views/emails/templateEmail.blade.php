<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="cadre">

        @section('content')
        @show

    </div>

    <style>
      .cadre{
        margin: 15vh 15% 0px 15%;
        padding: 50px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
        background-color: #FFF;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
      }

      .logo{
        display: flex;
      }

      .logo img{
        height: 100px;
        width: 100px;
      }

      .signature{
        margin-left: 20px;
        line-height: 0.01;
        justify-content: center;
        display: flex;
        flex-direction: column;
      }

      html{
        background-color: #92DB6C;
        font-family: 'Poppins', sans-serif;
      }

      body{
          margin: 0px;
      }
    </style>
  </body>
</html>

