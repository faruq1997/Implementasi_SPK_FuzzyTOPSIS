<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuzzyTOPSIS - Pemilihan Tempat Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">FuzzyTOPSIS - Pemilihan Tempat Wisata</h2>

    <!-- Input Form -->
    <form id="criteriaForm">
        <div class="form-group">
            <label for="biayaTiket">Bobot Biaya Tiket:</label>
            <input type="number" class="form-control" id="biayaTiket" placeholder="Masukkan bobot biaya tiket">
        </div>
        <div class="form-group">
            <label for="fasilitas">Bobot Fasilitas:</label>
            <input type="number" class="form-control" id="fasilitas" placeholder="Masukkan bobot fasilitas">
        </div>
        <div class="form-group">
            <label for="keamanan">Bobot Keamanan:</label>
            <input type="number" class="form-control" id="keamanan" placeholder="Masukkan bobot keamanan">
        </div>
        <div class="form-group">
            <label for="kebersihan">Bobot Kebersihan:</label>
            <input type="number" class="form-control" id="kebersihan" placeholder="Masukkan bobot kebersihan">
        </div>
        <div class="form-group">
            <label for="aksesJalan">Bobot Akses Jalan:</label>
            <input type="number" class="form-control" id="aksesJalan" placeholder="Masukkan bobot akses jalan">
        </div>
        <button type="button" class="btn btn-primary" onclick="runFuzzyTOPSIS()">Submit</button>
    </form>

    <!-- Hasil Perankingan -->
    <div class="mt-4" id="resultContainer" style="display: none;">
        <h4>Hasil Perankingan Berdasarkan Kriteria Pengguna:</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Closeness Coefficient</th>
                </tr>
            </thead>
            <tbody id="resultBody">
                <!-- Hasil perankingan akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>