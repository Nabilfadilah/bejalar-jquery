<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JQuery</title>
    <script src="src/main.js"></script>
</head>

<body>

    <!-- mouse event -->
    <h5>mouse event</h5>
    <button id="mybtn">Klik event</button>
    <button id="myhover">Hover event</button>
    <button id="mydouble">Double klik event</button>
    <br><br><br>

    <!-- Keyword events -->
    <h5>Keyword event</h5>
    <input type="text" id="myinput1">
    <input type="text" id="myinput2">
    <input type="text" id="myinput3">
    <br><br><br>

    <!-- Form Event -->
    <h5>Form Event</h5>
    <form action="#" id="myform1">
        <label for="username">username:</label>
        <input type="text" id="username">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email">
        <br>
        <input type="submit" value="Simpan">
    </form>
    <br>
    <input type="text" id="myform2">
    <input type="text" id="myform3">
    <br><br><br>

    <script>
        $(document).ready(function() {

            // Window event => resize ketika browser ukuranya dirubah
            $(window).resize(function() {
                alert('Browser di resize');
            })

            // Window event => scroll ketika browser scroll dirubah
            $(window).scroll(function() {
                alert('Browser di scroll');
            })

            // Mouse events => click, hover, dblclick
            $("#mybtn").click(function() {
                alert("Button diklik")
            })

            $("#myhover").hover(function() {
                alert("Button Hover")
            })

            $("#mydouble").dblclick(function() {
                alert("Button double klik")
            })

            // keyboard event = keypress, keydown, keyup
            $("#myinput1").keypress(function() {
                alert("Button keypress")
            })

            $("#myinput2").keydown(function() {
                alert("Button keydown")
            })

            $("#myinput3").keyup(function() {
                alert("Button keyup")
            })

            // Form events => submit, focus, blur
            $("#myform1").submit(function() {
                alert("Button Submit")
            })

            $("#myform2").focus(function() {
                alert("Button Focus")
            })

            $("#myform3").blur(function() {
                alert("Button Blur")
            })

        })
    </script>

</body>

</html>