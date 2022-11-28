<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-2</title>
</head>

<body>
    <form action="index.php" method="get">
        <input type="text" name="name" id="name" placeholder="alessio">
        <input type="email" name="email" id="email" placeholder="dolcealessio.2001@gmail.com">
        <input type="number" name="age" id="age" placeholder="21">
        <button type="submit">invia</button>
        <button type="reset">riprova</button>
    </form>
</body>

</html>