<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Pendaftaran</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #e9ecef;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        margin-top: 50px;
        max-width: 800px;
        padding: 20px;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.8); /* Optional: slightly transparent white overlay */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card {
        border-radius: 15px;
        border: none;
        background: #ffffff;
    }
    .card-header {
        background-color: #8B0000; /* Dark red */
        color: #fff;
        text-align: center;
        font-size: 1.5rem;
        padding: 1.5rem;
        border-bottom: 2px solid #660000; /* Darker red */
        border-radius: 15px 15px 0 0;
    }
    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-control {
        margin-bottom: 15px;
        padding: 12px;
        font-size: 1rem;
        border-radius: 5px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus {
        border-color: #8B0000; /* Dark red */
        box-shadow: 0 0 0 0.2rem rgba(139, 0, 0, 0.25);
    }
    .form-control-textarea {
        height: 120px; /* Adjusted height for textarea */
        resize: vertical;
    }
    .btn-primary {
        background-color: #8B0000; /* Dark red */
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s, box-shadow 0.3s;
    }
    .btn-primary:hover {
        background-color: #660000; /* Darker red on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .alert {
        margin-top: 15px;
    }
    .footer {
        text-align: center;
        padding: 15px;
        margin-top: 30px;
        background-color: #f1f1f1;
        border-top: 1px solid #ddd;
    }
    .footer p {
        margin: 0;
        color: #666;
    }
    .footer a {
        color: #8B0000; /* Dark red */
        text-decoration: none;
    }
    .footer a:hover {
        text-decoration: underline;
    }
    .row {
        margin-bottom: 1rem;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    </style>
</head>
<body>

<?php include('assets_user/navbar.php'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            Form Pendaftaran Pasien
        </div>
        <div class="card-body">
            <?php if (isset($errorMessage)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($errorMessage) ?>
                </div>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" id="jam" name="jam" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas" required>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea id="keluhan" name="keluhan" class="form-control form-control-textarea" placeholder="Masukkan keluhan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" id="nama_obat" name="nama_obat" class="form-control" placeholder="Masukkan nama obat" required>
                </div>
                <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; UKS SMKN 3 YK</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
