<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6XxS6CkF7X2b+BdGrQiw7tfd3V1uBq4Jh6w1M0PzPjhtfyXJoEwl7IcXLz" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0gQ2B7+uJ3g3ckhBh6/Os7FfBOS3aZk8Gx5ZrZIZyyuV4ZSw" crossorigin="anonymous"></script>
    </body>
</html>
