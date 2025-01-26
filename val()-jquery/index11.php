<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="src/main.js"></script>

</head>

<body>

    <input type="text" id="bilangan1"> +
    <input type="text" id="bilangan2"> =
    <input type="text" id="hasil">

    <button id="myBtn">Hitung</button>

    <!-- contoh penggunaan code jquery val() pada dunia progamming -->

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                var bil1 = $("#bilangan1").val();
                var bil2 = $("#bilangan2").val();

                var hasil = parseInt(bil1) + parseInt(bil2);

                $("#hasil").val(hasil);
            })
        })
    </script>

</body>

</html>