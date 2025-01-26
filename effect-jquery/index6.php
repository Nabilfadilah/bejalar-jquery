<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beljar Effect</title>
    <script src="src/main.js"></script>
</head>

<style>
    body {
        margin: 0;
    }

    div {
        background-color: darkolivegreen;
        padding: 10px;
        color: white;
    }

    ol {
        display: none;
    }

    button {
        margin: 14px;
    }
</style>

<body>

    <div>
        Menu
        <ol>
            <li>Programmer</li>
            <li>UI/UX Design</li>
            <li>Marketing</li>
            <li>Data Analis</li>
        </ol>
    </div>

    <button id="downBtn">Slide Down</button>
    <button id="upBtn">Slide Up</button>
    <button id="toggleBtn">Slide Toggle</button>

    <script>
        $(document).ready(function() {
            // event 
            $("#downBtn").click(function() {
                // selector tag ol
                // slide down
                $("ol").slideDown(2000) // bisa ditambah juga speed dan function
            })

            $("#upBtn").click(function() {
                // slide up
                $("ol").slideUp() // bisa ditambah juga speed dan function
            })

            $("#toggleBtn").click(function() {
                // slide toggle
                $("ol").slideToggle(1000) // bisa ditambah juga speed dan function
            })
        });
    </script>
</body>

</html>