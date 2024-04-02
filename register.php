<!-- AUTHOR @MARCOS INDIO

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nickname = $_POST['nickname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $habbo = $_POST['habbos'];
    $password = $_POST['password'];



    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "nome_do_banco_de_dados";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);


    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO users (nickname, username, email, habbo, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nickname, $username, $email, $habbo, $password);
    $stmt->execute();


    $stmt->close();
    $conn->close();

    echo "Registro realizado com sucesso!";
} else {
  
    header("Location: index.html");
    exit();
}
?>
