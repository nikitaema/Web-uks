<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pengunjung UKS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      html, body {
        height: 100%;
        margin: 50;
        display: flex;
        justify-content: center;
        align-items: center;
        /* Background image with properties */
        background-image: url('https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01gqrmfekvrvkqmgsm62h56x7f.png'); /* Replace with your image URL */
        background-size: cover; /* Make sure the image covers the entire background */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Prevent the image from repeating */
        background-attachment: fixed; /* Make background stay fixed while scrolling */
      }

      .form-signin {
        max-width: 450px;
        width: 100%;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9); /* Slight transparency for form background */
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border-left: 6px solid #8B0000; /* Dark red border for blood theme */
      }

      .form-signin h1 {
        color: #8B0000; /* Dark red color for the header */
      }

      .form-signin p {
        color: #6c757d;
        font-size: 1rem;
      }

      .form-control {
        margin-bottom: 15px;
        padding: 10px;
        font-size: 1rem;
        border-radius: 10px;
        border: 1px solid #8B0000; /* Dark red for the border */
      }

      .form-control:focus {
        border-color: #A52A2A; /* Slightly lighter red when focused */
        box-shadow: 0 0 10px rgba(139, 0, 0, 0.5); /* Dark red shadow */
      }

      .btn-primary {
        background-color: #8B0000;
        border: none;
        padding: 10px 20px;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #A52A2A; /* Slightly lighter red on hover */
      }

      .text-muted {
        color: #8B0000 !important; /* Dark red footer text */
      }

      /* Add some padding around the form */
      .form-container {
        padding: 20px;
      }

      /* Custom icon styling */
      .icon-container {
        text-align: center;
        margin-bottom: 20px;
      }

      .icon-container img {
        width: 150px; /* Increased width */
        height: 150px; /* Increased height */
      }
    </style>
  </head>

  <body>
    <div class="form-container">
      <form class="form-signin" method="POST" action="cek_login.php">
        <div class="icon-container">
          <img src="https://pbs.twimg.com/profile_images/440827041957416960/1u_O7lQ4_400x400.png" alt="Health Icon">
        </div>

        <div class="text-center mb-4">
          <h1 class="h3 mb-3 font-weight-normal">Login Pengunjung UKS</h1>
          <p>Masukkan Username dan Password Anda dengan benar!</p>
        </div>

        <div class="form-label-group">
          <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda!" required autofocus>
        </div>

        <div class="form-label-group">
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!" required>
        </div>

        <div class="form-label-group">
          <select class="form-control" name="level">
            <option value="anggota">Anggota</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; UKS SMKN 3 YK 2024-<?=date('Y')?></p>
      </form>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
