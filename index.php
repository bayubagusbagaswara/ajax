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
    <!-- tambah button -->
    <button id="btn">Ambil Data</button>
    <li>Nama : <strong id="result"></strong></li>
    <script>
        function load_ajax() {
            const ajax = new XMLHttpRequest()
            // bisa ambil data selain JSON, misal .txt .php
            ajax.open('GET', './src/data.txt', true)
            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // tampilkan data .json
                    // let data = JSON.parse(this.responseText)
                    // masukkan data ke element by id
                    // tidak melalui Parse, karena data.txt bentuknya text
                    document.getElementById('result').textContent = this.responseText
                }
            }
            ajax.send()
        }
        // jika diklik maka panggil load_ajax
        document.getElementById('btn').onclick = function() {
            load_ajax()
        }
    </script>
</body>

</html>