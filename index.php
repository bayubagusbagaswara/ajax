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
            let text = document.getElementById('keyword').value
            let data = 'keyword=' + text
            // POST
            ajax.open('POST', './src/data.php', true)
            // untuk POST tambahkan fungsi dibawah agar bisa mengirimkan data
            ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById('result').textContent = this.responseText
                }
            }
            // masukkan data sebagai parameter send
            ajax.send(data)
        }
        // jika diklik maka panggil load_ajax
        document.getElementById('btn').onclick = function() {
            load_ajax()
        }
    </script>
</body>

</html>