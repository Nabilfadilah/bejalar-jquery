<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>

    <p id="test">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia modi possimus qui laborum quo ad voluptatem est, quos, libero doloremque magnam dignissimos consectetur facilis error accusamus doloribus tempora delectus!,
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum non quod velit, veniam quasi ducimus asperiores minima cupiditate a voluptatibus ratione quae architecto molestiae commodi cum dolorem, vitae, facere perferendis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit culpa sint fugit laborum tempore. Vitae exercitationem a molestias magnam, cupiditate aut itaque tempora voluptatibus distinctio est possimus in saepe repellendus.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quasi officiis, illo distinctio perferendis reprehenderit nobis, autem inventore assumenda, nam aliquam. Dolorum earum veritatis nemo esse non voluptate placeat vitae.
    </p>

    <script>
        // merubah background color
        // dengan javascript
        // document.getElementById("test").style.backgroundColor = "red";

        // dengan JQuery
        $("#test").css("background-color", "yellow");

        // membuat element baru dengan javascript
        var paragraf = document.createElement('p'); // menampung nilai tag <p>
        paragraf.innerHTML = "Ini paragraf baru javascript"
        document.getElementById("test").appendChild(paragraf);

        // membuat element baru dengan jquery
        $("#test").append("ini paragraf baru dari jquery");
    </script>
</body>

</html>