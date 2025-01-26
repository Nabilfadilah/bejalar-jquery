<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery CSS</title>
    <script src="src/main.js"></script>
</head>

<body>

    <p id="paragraf1">PARAGRAF 1 :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <!-- akan berubah isi paragraf dengan event treger dari buttub -->
    <button id="bgGreen">BG Green</button>
    <button id="bgBlue">BG Blue</button>
    <button id="bgYellow">BG Yellow</button>

    <script>
        $(document).ready(function() {
            $("#bgGreen").click(function() {
                // method untuk css, yang isinya style
                $("#paragraf1").css('background-color', 'green');
            })

            $("#bgBlue").click(function() {
                // method untuk css, yang isinya style. kalau banyak style pakai {}
                $("#paragraf1").css({
                    'background-color': 'teal',
                    'font-size': '18px'
                });
            })

            $("#bgYellow").click(function() {
                // method untuk css, yang isinya style
                $("#paragraf1").css('background-color', 'yellow');
            })
        })
    </script>

</body>

</html>