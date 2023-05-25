<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O numero escolhido foi <strong>$numero</strong></br></br>";
            echo "O seu antecessor é <strong>$antecessor</strong></br></br>";
            echo "O seu sucessor é <strong>$sucessor</strong></br></br>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">
                <input type="button" value="&#x2B05; Voltar">
            </a>
        </p>
    </section>
</body>
</html>