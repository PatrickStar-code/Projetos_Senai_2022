<?php
// CONECTANDO DATABASE
include "../banco.php";
$msg = "";
if (isset($_POST["descricao_categoria"])) {
    $descricao_categoria = $_POST["descricao_categoria"];

    // INSERINDO OS DADOS
    $sql = "INSERT INTO categorias (descricao_categoria)
        VALUES ('$descricao_categoria')";

    if ($conn->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success' role='alert' style='margin-top:10px;'><i class='fa-solid fa-check'></i> Operação realizada com sucesso<div>";;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/scliente.css">
</head>

<body style="background-color: white;">
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light shadow top-fixed" class="cabeca" style="background-color: #2d2926;">
        <div class="container">
            <div class="position-absolute top-0 start-50 translate-middle"><img src="../IMGS/logo.png" alt="" style="width: 200px; margin-top: 115px;"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="position: relative; position: relative; border: 1px solid white;">
                <span class="material-symbols-outlined" style="color: white;">menu</span>

            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="../HOME/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../PRODUTOS/listagem_produtos.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../PEDIDOS/listagem.php">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../CLIENTES/listagem.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../CATEGORIAS/listagem.php">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../MESAS/mesas.php">Mesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../logout.php"><span class="material-symbols-outlined">logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIM NAVBAR -->
    <div class="container">
        <div class="registration-form">
            <form method="post">
                <div class="form-icon bg-secondary">
<i class="fa-solid fa-book-open"></i>                </div>
                <div class="mb-3">
                    <label for="descricao_categoria" class="form-label">Descrição da Categoria</label>
                    <input type="text" name="descricao_categoria" class="form-control item" id="descricao_categoria" aria-describedby="descHelp" required>
                </div>
                <button type="submit" class="btn btn-block create-account bg-dark">Cadastrar Categoria</button>
                <?php
                echo $msg
                ?>
        </div>
        </form>
    </div>
    </div>
    <script src="../script/script.js"></script>
</body>

</html>