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
    <li id="result"></li>
    <script>
        function load_ajax() {
            const ajax = new XMLHttpRequest()
            // kirimkan data keyword ke data.php menggunakan method GET
            ajax.open('GET', './src/data.php?keyword=kirimdata', true)
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