<?php 
    include("../banco.php");

    /*Pegando o id repasado na pagina anterior*/
$id = $_GET["id"];

    //Deletando as informaçoes pelo ip
    $sql = "DELETE  FROM produtos WHERE cod_produto='$id'";
  


    if (mysqli_query($conn, $sql)) {
        echo "Operação realizada";
    }
    else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

   
    ?>