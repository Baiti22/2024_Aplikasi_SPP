<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirect Buttons with Background Animation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      /* Menghilangkan scrollbar */
      background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
      animation: animateBackground 10s linear infinite;
      /* Animasi latar belakang */
    }

    @keyframes animateBackground {
      from {
        background-position: 0 0;
        /* Mulai dari posisi awal */
      }

      to {
        background-position: 100% 0;
        /* Berakhir di posisi akhir */
      }
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      color: #fff;
      background-color: #007bff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      margin: 10px;
    }

    .button:hover {
      background-color: #0056b3;
    }

    .admin {
      background-color: #dc3545;
    }

    .petugas {
      background-color: #ffc107;
    }

    .siswa {
      background-color: #28a745;
    }
  </style>
</head>

<body>
  <a href="admin/" class="button admin">Admin</a>
  <a href="petugas/" class="button petugas">Petugas</a>
  <a href="siswa/" class="button siswa">Siswa</a>
</body>

</html>