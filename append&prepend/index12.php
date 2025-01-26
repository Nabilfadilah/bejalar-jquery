<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Append & Prepend</title>
    <script src="src/main.js"></script>
</head>

<body>

    <h2>Menu Minuman</h2>
    <ul id="items">
        <li>Teh</li>
        <li>Kopi</li>
    </ul>

    <!-- test dengan input yang otomatis ditambahkan -->
    <input type="text" id="minumanBaru">

    <!-- akan menambahkan menu minuman -->
    <button id="myBtn">Tambah Minuman</button>

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                // append menambahkan element - menambah data paling bawah
                // $("#items").append('<li>Susu</li>')

                // prepend menambahkan element - menambah data paling atas
                // $("#items").prepend('<li>Susu</li>')

                // dengan append
                var minumanBaru = $("#minumanBaru").val();

                // ditambah variabel
                // $("#items").append("<li>" + minumanBaru + "</li>");

                // demham prepend
                $("#items").prepend("<li>" + minumanBaru + "</li>");

            })
        })
    </script>

</body>

</html>