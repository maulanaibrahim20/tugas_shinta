<?php
session_start();

if (isset($_POST['Submit'])) {
    $total = 0;
    $dataBanyaknyaBarang = [];
    foreach ($_POST["pilih"] as $selected) {
        $data = eval('return ' . $selected . ';');
        $dataBanyaknyaBarang[] = $data['data']['name'];

        if (($_POST["name"] == "bob" && $data['data']['name'] == "Baju corak pantai") || ($_POST["name"] == "sherina" && $data['data']['name'] == "Baju outdoor")) {
            $harga = $data['data']['price'] - ($data['data']['price'] * (5 / 100));
        } else {
            $harga = intval($data["data"]["price"]);
        }

        $total += $harga;
    }
    $_SESSION["barang"] = $dataBanyaknyaBarang;
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["total"] = $total;
}

?>

<?php
if (isset($_GET['invoice'])) {
?>
    <h1>Invoice Pembelian</h1>
    <p>Nama Konsumen: <?= $_SESSION['name'] ?></p>
    <p>Daftar Barang:</p>

    <ul>
        <?php
        foreach ($_SESSION["barang"] as $selected) {
        ?>
            <li><?= $selected ?></li>
        <?php
        }
        ?>
    </ul>

    <p>Total Harga: <?= "Rp. " . number_format($_SESSION['total'], 0, ',', '.') ?></p>
<?php
} else {
?>
    <h1>Konfirmasi Pemesanan</h1>
    <p>Nama Konsumen: <?= $_POST['name'] ?></p>
    <p>Daftar Barang:</p>
    <ul>
        <?php
        foreach ($_POST["pilih"] as $selected) {
            $data = eval('return ' . $selected . ';');
        ?>
            <li><?= $data['data']['name'] ?></li>
        <?php
        }
        ?>
    </ul>
    <p>Total Harga: <?= "Rp. " . number_format($total, 0, ',', '.') ?></p>

    <a href="./konfirmasi_pesanan.php?invoice=true">Buat Invoice</a>
<?php
}
?>