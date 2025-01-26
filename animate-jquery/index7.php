<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beljar Animate JQuery</title>
    <script src="src/main.js"></script>
</head>

<style>
    body {
        margin: 0;
    }

    div {
        width: 100px;
        height: 100px;
        background-color: darkolivegreen;
        color: white;
        position: absolute;
    }

    button {
        margin: 14px;
    }
</style>

<body>

    <!-- memindahkan posisi -->
    <button id="anmBtn">Play!!!</button>

    <div>ANIMATE</div>

    <script>
        $(document).ready(function() {
            // event 
            $("#anmBtn").click(function() {
                // selector tag div
                // animate, yang berjalannya berdasarkan antrian dari yang pertama ke selanjutnya
                $("div").animate({ // ada juga parameter speed atau callback
                    left: "200px", // property dari css yang mau dianimasikan, bisa memberikan banyak styling
                    width: "300px",
                    height: "150px"
                }, 4000, function() {
                    // alert("Berhasil menganimasikan element")
                });

                $("div").animate({ // ada juga parameter speed atau callback
                    right: "200px", // property dari css yang mau dianimasikan, bisa memberikan banyak styling
                    width: "300px",
                    height: "500px"
                });
            })
        });
    </script>
</body>

</html>