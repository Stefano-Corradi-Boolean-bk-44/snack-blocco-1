<?php
/*

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$data = $_GET;

// verifico se i dati esistono
if(empty($data['name']) || empty($data['mail']) || empty($data['age'])){
  $output = "Accesso negato!";

  // name deve essere di almene 2 carattri
}elseif(strlen($data['name']) < 2){
  $output = "Accesso negato!";

  // verifico la presenza di . e @
}elseif(!strpos($data['mail'],'@') || !strpos($data['mail'],'.')){
  $output = "Accesso negato!";

  // verifico che age sia un numero
}elseif(!is_numeric($data['age'])){
  $output = "Accesso negato!";
  
}else{
  $output = "Accesso riuscito!";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>

<h1><?php echo $output ?></h1>
  
</body>
</html>