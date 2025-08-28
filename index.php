<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Halo PHP & HTML</title>
</head>
<body>
    <h1>Selamat datang di PHP sederhana!</h1>

    <form method="POST" action="">
        Masukkan nama kamu: <input type="text" name="nama" required />
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        echo "<h2>Halo, $nama! Senang bertemu denganmu.</h2>";
    }
    ?>
</body>
</html>
