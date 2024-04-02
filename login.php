<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "nome_do_banco_de_dados";


    $conn = new mysqli($servername, $db_username, $db_password, $dbname);


    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {

        echo "Login realizado com sucesso!";
    } else {
    
        echo "Usuário ou senha incorretos. Por favor, tente novamente.";
    }


    $stmt->close();
    $conn->close();
} else {

    header("Location: index.html");
    exit();
}
?>
