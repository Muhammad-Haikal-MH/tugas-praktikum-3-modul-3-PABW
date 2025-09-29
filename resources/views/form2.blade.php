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
    <form action="/proses2" method="POST">
        @csrf
        <label>nama:</label>
        <input type="text" name="nama"><br><br>

        <label>angkatan:</label>
        <input type="number" name="angkatan"><br><br>

        <label>jurusan:</label>
        <textarea type="text" name="jurusan"></textarea><br><br>
        <button type="submit">kirim</button>
    </form>
</body>
</html>