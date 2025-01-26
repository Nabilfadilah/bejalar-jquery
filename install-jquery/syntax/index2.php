<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JQuery</title>
    <script src="src/main.js"></script>
</head>

<style>
    .kotak {
        width: 200px;
        height: 200px;
        background-color: saddlebrown;
    }
</style>

<body>

    <div class="kotak">
        <button class="btn-click">Klik Saya</button>
    </div>

    <script>
        // mengambil button class btn-click
        $(".btn-click").click(function() {
            // maka class kotak akan disembujikan
            // dollar, selector, action
            $(".kotak").hide();
        });

        // syntax(best practice)
        // menunggu semuanya ke load, baru menjalankan selectornya
        $(document).ready(function() {
            $(selector).action()
        })
    </script>

</body>

</html>