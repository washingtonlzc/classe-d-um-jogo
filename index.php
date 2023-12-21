<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Heróis</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div id="output"></div>

<script>
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "jogo.php",
            dataType: "json",
            success: function (response) {
                $("#output").html(response.message);
            }
        });
    });
</script>

</body>
</html>
