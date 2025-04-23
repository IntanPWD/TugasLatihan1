<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
<h2>Daftar Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        $mahasiswa = [
            ["npm" => "001", "nama" => "Chayra",   "nilai" => 80],
            ["npm" => "002", "nama" => "Archelia", "nilai" => 75],
            ["npm" => "003", "nama" => "Lalan",    "nilai" => 50],
            ["npm" => "004", "nama" => "Fuji",     "nilai" => 90],
            ["npm" => "005", "nama" => "Satria",   "nilai" => 60]
        ];

        $no = 1;
        foreach ($mahasiswa as $mhs) {
            $keterangan = ($mhs["nilai"] >= 60) ? "Lulus" : "Tidak Lulus";
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$mhs['npm']}</td>";
            echo "<td>{$mhs['nama']}</td>";
            echo "<td>{$mhs['nilai']}</td>";
            echo "<td>$keterangan</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
    
</body>
</html>