<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery html()</title>
    <script src="src/main.js"></script>
</head>

<style>
    button {
        margin-top: 10px;
    }
</style>

<body>

    <p id="paragraf">
        ini adalah paragraf yang ada text <strong>bold</strong> dan text <i>italic</i>
    </p>

    <button id="myBtn">Klik Sayaa</button>

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                // kalau pakai html alert, semuanya terbawa termasuk tag nya!
                // alert($("#paragraf").html());

                // kalau pakai html merubahnya, maka text bold memang jadi bold
                $("#paragraf").html("INi text penggantinya <strong>harus bold</strong>");
            })
        })
    </script>

</body>

</html>