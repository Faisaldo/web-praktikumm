<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #d4edda;
        }
        .welcome-message {
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Data mahasiswa yang login
    $mahasiswa = [
        'nama' => 'Faisal',
        'npm' => '22313025',
    ];

    // Pesan selamat datang dinamis
    echo "<div class='welcome-message'>";
    echo "<h2>Selamat Datang, {$mahasiswa['nama']}!</h2>";
    echo "<p>NPM: {$mahasiswa['npm']}</p>";
    echo "</div>";
    ?>

    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Array data mahasiswa lain
            $dataMahasiswa = [
                ['nama' => 'M Faisal Agshari', 'npm' => '22313025'],
            ];

            // Loop data mahasiswa untuk ditampilkan
            foreach ($dataMahasiswa as $mhs) {
                echo "<tr>";
                echo "<td>{$mhs['nama']}</td>";
                echo "<td>{$mhs['npm']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="footer">
    &copy; 2024 Teknologi informasi
</div>

</body>
</html>
