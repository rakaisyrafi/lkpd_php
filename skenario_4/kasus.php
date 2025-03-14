<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ================= KASUS 1 ========================= -->
    <div class="container">
    <h2 class="team">Kasus 1</h2>

    <?php
        $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $tanggal = range(1, 31);
        $bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
        $tahun = [2024, 2025, 2026];

        // for
        for ($i = 0; $i < count($hari); $i++) {
            if ($hari[$i] == "Senin") {
                echo "Hari: " . $hari[$i] . "<br>";
            }
        }

        // foreach
        foreach ($tanggal as $tgl) {
            if ($tgl == 10) {
                echo "Tanggal: " . $tgl . "<br>";
            }
        }

        // while
        $i = 0;
        while ($i < count($bulan)) {
            if ($bulan[$i] == "Mar") {
                echo "Bulan: " . $bulan[$i] . "<br>";
            }
            $i++;
        }

        // do-while
        $i = 0;
        do {
            if ($tahun[$i] == 2025) {
                echo "Tahun: " . $tahun[$i] . "<br>";
            }
            $i++;
        } while ($i < count($tahun));
    ?>

    </div>

    <!-- ================= KASUS 2 ========================= -->

    <div class="container">
    <h2 class="team">Kasus 2</h2>

    <?php
        for ($anak_ayam = 30; $anak_ayam > 0; $anak_ayam--) {
            if ($anak_ayam == 1) {
                echo "Anak ayam turun 1, mati satu, tinggal induknya.<br>";
            } else {
                echo "<p>Anak ayam turun </p>" . $anak_ayam . ", <p>mati satu, tinggal</p> " . ($anak_ayam - 1) . ".<br>";
            }
        }
        ?>

    </div>

    <!-- ================= KASUS 3 ========================= -->

    <div class="container">
    <h2 class="team">Kasus 3</h2>

    <?php
        
        $mawar_sholeh = [];
        for ($mawar = 21; $mawar >= 10; $mawar--) {
            $mawar_sholeh[] = $mawar;
        }
        echo "<p>Mawar yang dimiliki Sholeh: </p>" . implode(", ", $mawar_sholeh) . "<br>";
        echo "<p>Jumlah mawar yang dimiliki: </p>" . count($mawar_sholeh) . "<br>";

       
        $mawar_ibu = [];
        for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
            $mawar_ibu[] = $mawar;
        }
        echo "<p>Mawar yang diberikan ke ibunya: </p>" . implode(", ", $mawar_ibu) . "<br>";
        echo "<p>Jumlah mawar yang diberikan: </p>" . count($mawar_ibu) . "<br>";
    ?>

    </div>

    <!-- ================= KASUS 4 ========================= -->

    <div class="container">
    <h2 class="team">Kasus 4</h2>

    <?php
        
        $musik = [
            "<p>galau</p>" => ["<p>Mesin Waktu - Budi Doremi</p>"],
            "<p>bersemangat</p>" => ["<p>Selamat Pagi - Ran</p>"],
            "<p>marah</p>" => ["<p>Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira</p>"]
        ];

        foreach ($musik as $suasana => $lagu) {
            echo "Jika sedang $suasana, Ambyar mendengarkan: " . implode(", ", $lagu) . "<br>";
        }
    ?>

    </div>

    

    <div class="container">
        <h2 class="team">Apa Yg Saya Pelajari?</h2>
        <p>Cara Untuk Menggunakan Array , Perulangan, dan Manipulasi data Di PHP</p>

        <h2 class="team">Nama Team</h2>
        <p>Raka Isyrafi (23)</p>
        <p>Zakaria Akmal (35)</p>
    </div>
</body>
</html>