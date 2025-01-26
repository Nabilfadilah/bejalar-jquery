<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery addClass & removeClass
    </title>
    <script src="src/main.js"></script>
</head>

<style>
    body {
        margin: 0;
    }

    .bergaris {
        border: solid black;
    }

    .bgBerwarna {
        background-color: skyblue;
    }

    .textPutih {
        color: orangered;
    }
</style>

<body>

    <p id="paragraf">PARAGRAF :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <!-- implementasi button untuk event trigger -->
    <button id="bergarisOn">Bergaris ON</button>
    <button id="bergarisOff">Bergaris OFF</button>
    <button id="berwarnaOn">Berwarna ON</button>
    <button id="berwarnaOff">Berwarna OFF</button>
    <button id="textOn">text Putih ON</button>
    <button id="textOff">text Putih OFF</button>

    <!-- implementasi button untuk event trigger - secara multiple -->
    <button id="semuaOn">Semua ON</button>
    <button id="semuaOff">Semua OFF</button>

    <script>
        $(document).ready(function() {
            // mengambil propery id
            // implementasi trigger
            $("#bergarisOn").click(function() {
                // implementasi dengan addClass style css
                $("#paragraf").addClass("bergaris");
            })

            // mengambil propery id
            // implementasi trigger
            $("#bergarisOff").click(function() {
                // implementasi dengan removeClass style css
                $("#paragraf").removeClass("bergaris");
            })

            // mengambil propery id
            // implementasi trigger
            $("#berwarnaOn").click(function() {
                // implementasi dengan addClass style css
                $("#paragraf").addClass("bgBerwarna");
            })

            // mengambil propery id
            // implementasi trigger
            $("#berwarnaOff").click(function() {
                // implementasi dengan removeClass style css
                $("#paragraf").removeClass("bgBerwarna");
            })

            // mengambil propery id
            // implementasi trigger
            $("#textOn").click(function() {
                // implementasi dengan addClass style css
                $("#paragraf").addClass("textPutih");
            })

            // mengambil propery id
            // implementasi trigger
            $("#textOff").click(function() {
                // implementasi dengan removeClass style css
                $("#paragraf").removeClass("textPutih");
            })

            // mengambil propery id
            // implementasi trigger
            $("#semuaOn").click(function() {
                // implementasi dengan addClass style css
                // kalau pake multiple maka semua style cssnya di masukan
                $("#paragraf").addClass("bergaris bgBerwarna textPutih");
            })

            // mengambil propery id
            // implementasi trigger
            $("#semuaOff").click(function() {
                // implementasi dengan removeClass style css
                // kalau pake multiple maka semua style cssnya di masukan
                $("#paragraf").removeClass("bergaris bgBerwarna textPutih");
            })
        })
    </script>

</body>

</html>