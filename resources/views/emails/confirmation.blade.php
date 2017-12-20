<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Confirmation</title>
</head>
<body>
    <h1>Merci pour votre inscription !</h1>

    <p>Veuillez <a href="{{ url('register/confirm/{$user->token}')}}">CONFIRMER</a> votre adresse e-mail.</p>
</body>
</html>