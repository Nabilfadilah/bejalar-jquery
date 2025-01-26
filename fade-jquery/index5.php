<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JQuery fadeOut, fadeIn, fadeToggle, dan fadeTo</title>
    <script src="src/main.js"></script>
</head>

<style>
    .kotak1 {
        width: 500px;
        height: 200px;
        background-color: darkblue;
    }
</style>

<body>

    <div id="test1" class="kotak1"></div>
    <!-- event untuk mentrigger -->
    <button id="mybtn" class="btn-click">Klik Jquery</button>

    <script>
        $(document).ready(function() {
            // default kotanya tersembunyi
            // $("#test1").hide();

            $("#mybtn").click(function() {
                // fadeOut
                // bisa mengatur speed dan callback function
                // $("#test1").fadeOut(3000, function() { // speednya bisa diatur (slow/fast atau waktu )
                //     alert("Function Callback") // callback functionnya apapun
                // });

                // fadeIn
                // $("#test1").fadeIn();

                // fadeToggle
                // $("#test1").fadeToggle(3000);

                // fadeTo
                // wajib isi parameter, speed dan opcatiy kalau callback(optional) 
                $("#test1").fadeTo(3000, 0.5);
            })
        });
    </script>

</body>

</html>