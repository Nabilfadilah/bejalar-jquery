<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery text() dan set()</title>
    <script src="src/main.js"></script>
</head>

<style>
    button {
        margin-top: 10px;
    }
</style>

<body>

    <h4>text yang akan tampil:</h4>
    <p id="paragraf">
        ini adalah paragraf pertama
    </p>

    <!-- melakukan trigerr untuk jquery -->
    <button id="myBtn">Klik Saya</button>

    <script>
        $(document).ready(function() {
            // let isToggled = false; // Variabel untuk melacak toggle

            // menampilkan paragraf ketika klik button
            // get text()
            // $("#myBtn").click(function() {
            //     alert($("#paragraf").text());
            // })

            // set text()
            $("#myBtn").click(function() {
                $("#paragraf").text("Hallo text ini yang akan menggantinya")
            })

            // agar bisa ganti-ganti textnya
            // $("#myBtn").click(function() {
            //     if (!isToggled) {
            //         $("#paragraf").text("Hallo, teks ini yang akan menggantinya");
            //         $(this).text("Kembali ke Teks Awal");
            //     } else {
            //         $("#paragraf").text("Ini adalah paragraf pertama");
            //         $(this).text("Klik Saya");
            //     }
            //     isToggled = !isToggled; // Ubah status toggle
            // });
        });
    </script>

</body>

</html>