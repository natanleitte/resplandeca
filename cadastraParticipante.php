 <?php 
 
$con=mysqli_connect("localhost","root","","resplandeca");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}  
 
 $nome = $_POST["nome"];
 $idade = $_POST["idade"];
 $sexo = $_POST["sexo"];
 $igreja = $_POST["igreja"];
 $email = $_POST["email"];
 $pagamento = $_POST["pagamento"];
 
 echo $email;

 
 $sql = "INSERT INTO participante (nome, idade, sexo, igreja, email, pagamento)
        VALUES ('$nome', '$idade', '$sexo', '$igreja', '$email', '$pagamento')";
 
 if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
//echo "1 record added";
 
 mysqli_close($con);
// $stmt = $con->prepare("INSERT INTO participante VALUES (" . $nome . ",". $idade . ",". $sexo . ",". $igreja . ",". $email . ",". $pagamento . ")");

// $stmt->execute();

    
    ?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Documento sem título</title>
</head>

<body>

<script type="text/javascript">
var qtd = 0;
var limit = 0.1;
var seconds = 0.1;

function submeter(){ 
  if( qtd < limit ){
    document.forms.formenvio.submit();
  }
qtd++;
}
function start_sending(){
    seconds *= 1000;
    window.setInterval(function(){submeter()},seconds);
}
function start_timer(){
    qtd = limit;
}

function stop_timer(){
    qtd = limit;
}


</script>

</head>
<body OnLoad="start_sending();">

   
    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" name="formenvio">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="itemCode" value="33C204329E9EE9AEE442EF8F9E8B4C83" />

</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
    


</body>
</html>