<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ataque de Herois</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<label for="heroName">Nome do Herói:</label>
<input type="text" id="heroName" name="heroName">

<label for="heroAge">Idade do Herói:</label>
<input type="text" id="heroAge" name="heroAge">

<label for="heroType">Tipo do Herói:</label>
<select id="heroType" name="heroType">
    <option value="mago">Mago</option>
    <option value="guerreiro">Guerreiro</option>
    <option value="monge">Monge</option>
    <option value="ninja">Ninja</option>
</select>

<button id="attackButton">Atacar</button>
<div id="output"></div>
<div id="gifContainer"></div>

<script>
    $(document).ready(function () {
        $("#attackButton").on("click", function () {
            var heroName = $("#heroName").val();
            var heroAge = $("#heroAge").val();
            var heroType = $("#heroType").val();
            $.ajax({
                type: "POST",
                url: "classejogo.php",
                data: {heroName: heroName, heroAge: heroAge, heroType: heroType},
                dataType: "json",
                success: function (response) {
                    $("#output").html(response.message);

                    // Exibir o gif correspondente
                    var gifPath = "assets/" + heroType + ".gif";
                    $("#gifContainer").html("<img src='" + gifPath + "' alt='" + heroType + "'>");
                }
            });
        });
    });
</script>
</body>
</html>
