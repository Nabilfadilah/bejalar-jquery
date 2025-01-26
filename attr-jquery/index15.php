<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="src/main.js"></script>
</head>

<style>
    body {
        margin: 0;
    }

    #main {
        display: flex;
        height: 100vh;
        box-sizing: border-box;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    div:first-child {
        margin-bottom: 20px;
    }

    button {
        font-size: 20px;
        padding: 10px 30px;
    }
</style>

<body>

    <div id="main">
        <div>
            <img src="https://www.w3schools.com/js/pic_bulboff.gif" alt="">
        </div>
        <div>
            <button id="btnOn">On</button>
            <button id="btnOff">OFF</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // mengambil propery id
            $("#btnOn").click(function() {
                // selector img
                $("img").attr("src", "https://www.w3schools.com/js/pic_bulbon.gif") // isinya ada property dan value
            })

            // mengambil propery id
            $("#btnOff").click(function() {
                // selectoe img
                $("img").attr("src", "https://www.w3schools.com/js/pic_bulboff.gif") // isinya ada property dan value

            })
        })
    </script>

</body>

</html>