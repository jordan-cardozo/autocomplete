<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pesquisa</title>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        
    </head>
    <body>
        <h1>Pesquisar</h1>
        <form method="POST" action="">
            <label>Assunto:</label>
            <input type="text" name="assunto" id="assunto" placeholder="pesquisar pelo assunto">
        </form>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script>
        $(function(){
            $("#assunto").autocomplete({
                source: 'processa_pesq.php'
            });
        });
        </script>
    </body>
</html>