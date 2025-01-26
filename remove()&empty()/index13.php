<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery remove() & empty()</title>
    <script src="src/main.js"></script>
</head>

<body>

    <p id="paragraf1">PARAGRAF 1 :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <p id="paragraf2">PARAGRAF 2 :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <p id="paragraf3">PARAGRAF 3 :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <p id="paragraf4">PARAGRAF 4 :
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias itaque incidunt quam libero excepturi dolorum impedit.
        Doloribus laboriosam non sunt, totam quibusdam laudantium nostrum perferendis aperiam repellendus ab eum sit perspiciatis eaque iusto,
        esse cum nam atque quas? Officiis perferendis dolore iste doloremque! Labore magni repellendus ea eum voluptates,
        voluptatem quaerat eveniet unde deleniti nisi doloremque ipsam alias eos expedita.
    </p>

    <!-- mengklik tombol dan menghapus paragraf -->
    <button id="myBtn">Klik Saya</button>

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                // menjalankan fungsi remove
                // memilih id paragraf sebagai selector 
                // $("#paragraf3").remove();

                // function empty
                // bedanya kalau di console id paragrafnya masih ad, tapi di tampilannya hilang
                $("#paragraf3").empty();

            })
        })
    </script>

</body>

</html>