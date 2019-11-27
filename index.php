<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    echo("Meu primeiro PHP");

    $nome = "Camila Beisiegel";
    $cidade = "Belém";
    $idade = "24";
?>

<form action="">
  Nome:<br>
  <input type="text" name="Nome" value="<?php echo($nome); ?> ">
  <br>
  Cidade: <br>
  <input type="text" name="Cidade" value="<?php echo($cidade); ?>">
  <br>
  Idade: <br>
  <input type="text" name="Idade" value="<?= $idade ?>">
  <br>
  Pode Beber: <br>
  <input type="text" name="Beber" value="  <?php 
  
  if($idade >= 18){
    echo("Sim !!!!");
  } else{
    echo("Só coca-cola");
  }
    
  ?>">
 
 <!-- <?= $casado ? "Não mexa com ele! Ele é casado" : "Tá na pista" ?>  -->

  </form>


</body>
</html>