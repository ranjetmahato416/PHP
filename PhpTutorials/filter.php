<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filter</title>
</head>
<body>
    <table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    //filter_list function
    foreach(filter_list() as $id => $filter){
        echo '<tr><td>' .$filter. '</td><td>' .filter_id($filter). '</td></tr>';
    }

    //filter_var function
    $str = "<h1>This is php</h1>";
    $newstr = filter_var($str, FILTER_UNSAFE_RAW);
    echo $newstr;

    $num = 0;
    $ip = "127.0.0.1";
    $email = 'ranjetmahato@gmail.com';
    $url = 'https://www.youtube.com/';

    //filter_integer
    if(filter_var($num, FILTER_VALIDATE_INT) === 0 || !filter_var($num, FILTER_VALIDATE_INT) === false){
        echo $num. " is a valid integer<br>";
    }
    else{
        echo $num. " is not a valid integer.<br>";
    }

    //filter_ip address
    if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
        echo $ip. " is a valid IP address.<br>";
    }
    else{
        echo $ip. ' is not a valid IP.<br>';
    }

    //sanitize and validate an email

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo "'" .$email. "'". " is a valid E-mail.<br>";
    }
    else{
        echo $email. " is Invalid.<br>";
    }

    //sanitize and validate url

    $url = filter_var($url, FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo $url. " is a Valid URL.<br>";
    }
    else{
        echo $url. " is Invalid URL.";
    }
    ?>
    </table>
    
</body>
</html>