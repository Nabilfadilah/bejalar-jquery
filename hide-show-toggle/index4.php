<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JQuery Hide, Show Toggle</title>
    <script src="src/main.js"></script>
</head>

<style>
    .kotak1 {
        width: 200px;
        height: 200px;
        background-color: yellowgreen;
    }

    .kotak2 {
        width: 500px;
        height: 200px;
        background-color: darkblue;
    }
</style>

<body>

    <div id="test1" class="kotak1"></div>
    <!-- event untuk mentrigger -->
    <button id="mybtn1" class="btn-click1">Klik Javascript</button>
    <br><br>

    <div id="test2" class="kotak2"></div>
    <!-- event untuk mentrigger -->
    <button id="mybtn2" class="btn-click2">Klik Jquery</button>

    <script>
        $(document).ready(function() {
            // default kotanya tersembunyi
            // $("#test1").hide();

            $("#mybtn1").click(function() {
                // dengan cara javascript
                // hide
                // document.getElementById("test1").style.display = "none";

                // show = (block, inline-block, inline)
                // document.getElementById("test1").style.display = "inline-block";

                // toggle
                var kotak = document.getElementById("test1"); // tampung dalam variabel kotak

                if (kotak.style.display == "none") {
                    kotak.style.display = "block";
                } else {
                    kotak.style.display = "none";
                }
            })
        });

        $(document).ready(function() {
            // default kotanya tersembunyi
            // $("#test2").hide();

            $("#mybtn2").click(function() {
                // dengan cara jquery
                // hide
                // $("#test2").hide();

                // show
                // $("#test2").show();

                // toggle
                $("#test2").toggle();
            })
        });
    </script>

</body>

</html>