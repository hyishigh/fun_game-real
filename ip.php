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
<img src="https://media1.tenor.com/m/Oas_7V6NajEAAAAC/laugh-point.gif" alt="" style="width:360px;height:360px;">
<p>Please dont report me</p>
<?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

/*echo $user_ip;*/

$file = 'last-ip.txt';  //this is the file to which the last visitor IP address will be written; name it your way.

$fp = fopen($file, 'a');

fwrite($fp, $user_ip);

fclose($fp);

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

?>
</section>
<footer>
<p>&copy; Hy's website</p>
</footer>
</body>
</html>
