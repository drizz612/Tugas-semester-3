<?php
$nim = "251051016";
$nama = "Handriyanto Saputro";
$jurusan = "Sistem informasi";
$universitas = "Universitas Dirgantara Marsekal Suryadarma";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2><?php echo $universitas; ?></h2>

    <hr>

    <br>

    <table border="2" cellpadding="15" cellspacing="15">
        <tr>
            <td><strong>NIM :</strong></td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td><strong>Nama :</strong></td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><strong>Jurusan :</strong></td>
            <td><?php echo $jurusan; ?></td>
        </tr>
    </table>

    <style>
        body {
           display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        table {
            font-family: Arial, sans-serif;
        }
    </style>
</body>
</html>