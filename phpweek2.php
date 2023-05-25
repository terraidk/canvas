
// $variabele1 = 10;
//$variabele2 = 10;

// if($variabele1 == $variabele2) {
   // echo "De twee waarden zijn gelijk";
// } else {
    // echo "De twee waarden zijn ongelijk";
// }


// $variabele1 = 10;
// $variabele2 = 12;

// if($variabele1 <> $variabele2 ) {
   // echo "De twee waarden zijn ongelijk";
// }


// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 == $variabele2) {
    // echo "De twee waarden zijn gelijk";
// } else {

    // echo "De twee waarden zijn ongelijk";
// }

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="post" action="">

    <label for="username">
        <h1>Username</h1>
    <input type="text" name="username" id="username">
    </label>

    <label for="password">
        <h1>Password</h1>
        <input type="password" name="password" id="password">
    </label>
    
<br>

    <input type="submit" name="button" id="button" value="Aanmelden">

</form>
    
<br>



</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username: $username<br>";
    echo "Password: $password<br>";
}
?>