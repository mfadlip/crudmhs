<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR MAHASISWA</title>
</head>

<body>
    <header>
        <h3>DAFTAR MAHASISWA</h3>
    </header>

    <form action="pendaftaran.php" method="POST">

        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="npm">NPM: </label>
            <input type="text" name="npm" placeholder="Masukan Npm" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        
        </fieldset>
    </form>
    </body>
</html>