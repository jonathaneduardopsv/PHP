<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Interação com Formularios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Antecessor e sucessor</h1>
    </header>
    <section>
        <form action="retorno.php" method="get">
            <label for="numero">Digite um numero</label>
            <input type="text" name="numero" id="idnumero">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>