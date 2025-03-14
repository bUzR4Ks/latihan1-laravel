<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <h1>Konfirmasi Pendaftaran</h1>

    <p><strong>Nama Peserta:</strong> {{ $data['nama'] }}</p>
    <p><strong>Kelas:</strong> {{ $data['kelas'] }}</p>
    <p><strong>Judul Poster:</strong> {{ $data['judul_poster'] }}</p>

    <p><strong>File Poster:</strong></p>
    <img src="{{ asset('storage/' . $data['file_poster']) }}" alt="Poster" width="300px">

</body>
</html>
