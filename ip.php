<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hy's little game</title>
</head>
<body>
    <header>
        <h1>Yo nice ip address bro</h1>
    </header>
    <nav>
    </nav>
    <section>
        <p>hola</p>
        <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            file_put_contents('fun_game-real/logs.txt', $ip, FILE_APPEND);
            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        ?>
    </section>
    <footer>
        <p>&copy; Hy's website</p>
    </footer>
</body>
</html>
