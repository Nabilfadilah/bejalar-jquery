<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="src/main.js"></script>
</head>

<body>

    <!-- memakali jquery val untuk mendapatkan nilai pada input -->
    <input type="text" id="myInput">
    <button id="myBtn">Simpan</button>

    <script>
        $(document).ready(function() {
            // cara mengecek nilai dari input form
            $("#myBtn").click(function() {
                // dan menggunakan function val() get
                // alert($("#myInput").val())

                // set untuk nilai ke input form
                $("#myInput").val("isian form input baru")
            });
        })
    </script>

</body>

</html>