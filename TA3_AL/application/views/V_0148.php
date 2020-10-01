<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>TUGAS PRAKTIKUM 3</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <h1>Tugas Praktikum 3 </h1>
    <div class="container">
        <table class="demo-table">
            <tr>
                <td>#</td>
                <td>Id Pelanggan</td>
                <!-- <td>Nama</td>
            <td>Email<td> -->
            </tr>
            <?php
            $no = 1;
            foreach ($user as $b) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $b->id_pelanggan; ?></td>
                    <!-- <td><?php echo $b->nama; ?></td>
            <td><?php echo $b->email; ?></td> -->
                </tr>
            <?php } ?>
        </table>
    </div>
    </script>
</body>

</html>