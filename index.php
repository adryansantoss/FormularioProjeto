<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Css/indexCss.css'>
</head>

<body>
    <div class="forms">
        <h1 class="title">Formulario sobre sedentarismo 9° ano A</h1>
        <p class="aviso">Por favor não enviei este formulario mais de uma vez!</p>
        <form method="POST" action="salvar_form.php">
            <div class="askText ask1">
                <h1>1.Insira seu nome.</h1>
                <input required type="text" name="nome" placeholder="Escreva sua resposta aqui">
            </div>
            <div class="askText ask2">
                <h1>2.Coloque o ano que você está e a sua sala.</h1>
                <input required type="text" name="pergunta1" placeholder="Escreva sua resposta aqui">
            </div>
            <div class="askText ask4">
                <h1>3.Você se acha uma pessoa sedentaria? Se sim, porque?</h1>
                <input required type="text" name="pergunta2" placeholder="Escreva sua resposta aqui">
            </div>
            <div class="askText ask3">
                <h1>4.Quais tipos de esportes você pratica?</h1>
                <input required type="text" name="pergunta3" placeholder="Escreva sua resposta aqui">
            </div>

            <div class="askText ask5">
                <h1>5.Seus familiares praticam esportes?</h1>
                <input required type="text" name="pergunta4" placeholder="Escreva sua resposta aqui">
            </div>
            <p class="aviso2">Certifique-se que você respodeu todas as perguntas antes de enviar</p>
            <div class="askText send">
                <input type="submit" name="enviar" placeholder="Enviar">
            </div>
        </form>
    </div>
</body>

</html>