<html>

<head>
    <title>Input Form-GET</title>
</head>

<body>
    <FORM action="konfirmasi_pesanan.php" method="POST">
        <table>
            <tr>
                <h2> Form Pemesanan </h2>
                <td>Nama Konsumen</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
        </table><br>
        <td>Pilih Barang :</td><br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Baju putih polos', 'diskon' => 0, 'price'=> '200000']]"> Baju putih polos - Rp.200.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Baju corak pantai', 'diskon' => 0.5, 'price'=> '100000']]"> Baju corak pantai - Rp.100.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Baju kerja', 'diskon' => 0, 'price'=> '300000']]"> Baju kerja - Rp.300.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Baju outdoor', 'diskon' => 0.5, 'price'=> '350000']]"> Baju outdoor - Rp.350.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Celana Pendek biasa', 'diskon' => 0, 'price'=> '90000']]"> Celana Pendek biasa - Rp.90.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Celana Pendek outdoor', 'diskon' => 0, 'price'=> '15000']]"> Celana Pendek outdoor - Rp.150.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Celana panjang Waterproof', 'diskon' => 0, 'price'=> '350000']]"> Celana panjang Waterproof - Rp.350.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Celana panjang', 'diskon' => 0, 'price'=> '325000']]"> Celana panjang - Rp.325.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Topi', 'diskon' => 0, 'price'=> '58000']]"> Topi - Rp.58.000<br>
        <input type="checkbox" name="pilih[]" value="['data'=> ['name'=> 'Kaus Kaki Wol', 'diskon' => 0, 'price'=> '40000']]"> Kaus Kaki Wol - Rp.40.000<br>
        <br><input type="Submit" name="Submit" value="Submit">
    </FORM>

</body>

</html>