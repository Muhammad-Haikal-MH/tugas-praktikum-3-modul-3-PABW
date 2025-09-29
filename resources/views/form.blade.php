<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form biodata</title>
</head>
<body>
    <h2>form biodata</h2>
    <form action="/proses" method="POST">
        @csrf
        <label>nama:</label>
        <input type="text" name="nama"><br><br>

        <label>umur:</label>
        <input type="number" name="umur"><br><br>

        <label>alamat:</label>
        <textarea type="text" name="alamat"></textarea><br><br>
        <button type="submit">kirim</button>
    </form>
</body>
</html>