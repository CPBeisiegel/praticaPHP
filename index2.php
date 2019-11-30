<?php
// Definir seu array associativo $pessoal;
$pessoal = [
    "nome" => "Elizabet Verissimo",
    "idade" => 48,
    "feminino" => true,
];
?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
       <div class="pessoa">
            <img src="./img/mulher.jpg" alt="<?=$pessoal['nome']; ?>">
            <div class="dados">
                <div class="info">
                    <span>Nome:</span>
                    <div>Stéphanie Veríssimo</div>
                </div>
                <div class="info">
                    <span>Idade:</span>
                    <div> <?= $pessoal['idade']; ?> </div>
                </div>
                <div class="info">
                    <span>Sexo:</span>
                    <div></div>
                </div>    
            </div>
            
        </div>
    </body>
</html>