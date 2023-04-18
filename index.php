<!-- tabela users z polami
id int primary key autoincrement
username varchar
password varchar -->
<?php
$serwer='localhost';
$uz='root';
$haslo='';
$baza='users';
$db = new mysqli($serwer, $uz, $haslo, $baza);

if($db->connect_error) {
    die("Błąd połączenia: ". $db->connect_error); 
} 

if (!empty($_POST['Submit'])) {

    $log=$_POST['login'];
    $has=$_POST['haslo'];

    $p="SELECT * FROM users WHERE username='$log' AND password='$has'";
    $w=mysqli_query($db, $p);

    if (mysqli_num_rows($w) > 0) {
        echo "<h1>Poprawne Login i Hasło</h1><br>";
        echo "Witamy ".$_POST['login'];
    } else {
        echo "<br><h1>Błąd w loginie lub haśle</h1>";
    }
}
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie3</title>
</head>
<body>
    <form action="" method="post">
        <h3>Podaj Login:</h3> <input type="text" name="login">
        <br>

        <h3>Podaj Hasło:</h3> <input type="password" name="haslo">
        <br>

        <br>
        <input type="submit" value="Zaloguj" name="Submit">

    </form>
</body>
</html>
