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
echo "1 record added";
 
 mysqli_close($con);
// $stmt = $con->prepare("INSERT INTO participante VALUES (" . $nome . ",". $idade . ",". $sexo . ",". $igreja . ",". $email . ",". $pagamento . ")");

// $stmt->execute();

    
    ?>
    