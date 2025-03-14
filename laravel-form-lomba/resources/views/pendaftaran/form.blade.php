<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>

    <form action="{{ route('pendaftaran.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama">Nama Peserta:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required>
        </div>
        <div>
            <label for="judul_poster">Judul Poster:</label>
            <input type="text" name="judul_poster" id="judul_poster" required>
        </div>
        <div>
            <label for="file_poster">File Poster:</label>
            <input type="file" name="file_poster" id="file_poster" accept="image/jpeg, image/png" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
