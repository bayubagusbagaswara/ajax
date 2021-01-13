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
    <input type="text" placeholder="Pencarian" id="keyword">
    <button id="btn">Ambil Data</button>
    <li>Nama : <strong id="result"></strong></li>
    <script>
        function load_ajax() {
            const ajax = new XMLHttpRequest()

            // pilih id inputnya, dan apapun inputan dari user akan diambil nilanya (value)
            let text = document.getElementById('keyword').value
            // kirimkan data menggunakan javascript, pakai concat text yang diambil dari input html
            ajax.open('GET', './src/data.php?keyword=' + text, true)

            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // let data = JSON.parse(this.responseText)
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