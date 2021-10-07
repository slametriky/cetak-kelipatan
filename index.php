<?php

    include 'Angka.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Angka</title>
</head>
<body>
    <p>Silahkan Masukkan Jumlah Perulangan</p>
    <form action="" method="POST">
        <label for="jml">Jumlah Perulangan</label>
        <input type="text" name="perulangan" required>

        <button type="submit">Submit</button>
    </form>

<?php

    if(isset($_POST['perulangan'])){

        $perulangan = $_POST['perulangan'];

        $cetakAngka = new Angka($perulangan);

        $cetakAngka->cetak();
    }

?>
</body>
</html>