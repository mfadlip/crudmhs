<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR MAHASISWA & NPM</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['npm']."</td>";
            echo "<td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>