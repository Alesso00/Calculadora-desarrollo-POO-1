
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../estilos/estilo.css">
  </head>
  <ul>
        <li><a href="../index.html">Menu Principal</a></li>
    </ul>
  <body>
    
  </body>
  </html>

<?php

class Calculadora{
public $numero1;
public $numero2;
public $resultado;

  public function __construct ($numero1, $numero2, $resultado)
{
      $this->numero1 = $numero1;
      $this->numero2 = $numero2;
      $this->resultado = $resultado;
}

public function Operacion()
{
    $this->resultado = $this->numero1 + $this->numero2;
    echo "La suma de ".$this->numero1." + ".$this->numero2." es= ".$this->resultado;
    
}

}

$suma = new Calculadora ($_POST['numero1'], $_POST['numero2'], ['resultado']);

?>

<div class="card" style="width: 18rem;">
    <img src="../img/suma.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Suma</h5>
      <p class="card-text">
      <?php     
$suma->Operacion();
?>
      </p>
     
    </div>
  </div>

