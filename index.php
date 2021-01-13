<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Native</title>
    <style>
        body {
            margin: 5%;
            font-family: sans-serif;
            border: 0;
        }
    </style>
</head>

<body>
    <h3>Latihan 1</h3>
    <li>Nama : <strong id="result"></strong></li>
    <script>
        function load_ajax() {
            // buat object Ajaxnya yg sudah tertanam di browser
            const ajax = new XMLHttpRequest()
            // metod ambil data, sumber datanya, mau proses async atau tidak
            ajax.open('GET', './src/data.json', true)
            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // tampilkan data .json
                    let data = JSON.parse(this.responseText)
                    document.getElementById('result').textContent = data.gender
                }
            }
            ajax.send()
        }
        // panggil ajax
        load_ajax()
    </script>
</body>

</html>