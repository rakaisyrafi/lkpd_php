<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>

    <h1>Penilaian Andi</h1>

    <?php
    function nilai_pelajaran($nilai) {
        if ($nilai >= 90 && $nilai <= 100) {
            return "A" ;
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return "B";
        }  elseif ($nilai >= 70 && $nilai <= 79) {
            return "C";
        } elseif ($nilai >= 0 && $nilai <=69) {
            return "D";
        }
    
    }
    
    $nilai = 50; 
    echo "<p>Nilai $nilai = " . nilai_pelajaran($nilai) . "</p>";
    ?>

    <!-- =========================== CASE 2 ======================================== -->

   
    <h1>Penentuan Waktu</h1>
    <?php
    function waktu_keterangan($jam) {
        if ($jam >= 0 && $jam < 4) {
            return "Dini hari";
        } elseif ($jam >= 4 && $jam < 10) {
            return "Pagi";
        } elseif ($jam >= 10 && $jam < 15) {
            return "Siang";
        } elseif ($jam >= 15 && $jam < 17.5) {
            return "Sore";
        } elseif ($jam >= 17.5 && $jam < 18.5) {
            return "Petang";
        } elseif ($jam >= 18.5 && $jam < 24) {
            return "Malam";
        } 
    }

    $jam = "19.40";  
    echo "<p>Jam $jam = " . waktu_keterangan($jam) . "</p>";
    ?>

    <!-- ============================= CASE 3 ===================================== -->

    <h1>Jadwal Harian Andi</h1>
    <ul>
        <?php
        $waktu = [
            "15:30" => "Pulang Sekolah",
            "15:45" => "Mandi",
            "16:00" => "Mengaji",
            "16:30" => "Mengerjakan tugas sekolah",
            "18:30" => "Makan malam",
            "19:00" => "Menghafalkan dialog festival",
            "19:30" => "Membeli bumbu masakan",
            "20:00" => "Chatting dengan Raya",
            "20:30" => "Berkumpul dengan keluarga",
            "22:00" => "Tidur"
        ];

        foreach ($waktu as $jam => $aktivitas) {
            echo "<li>Jam $jam - $aktivitas</li>";
        }
        ?>
    </ul>

    <h2>Oleh</h2>
    <p><strong>Nama:</strong> Zakaria Akmal & Raka Isyrafi</p>
    <h3>Analisis Jadwal:</h3>
    <p>Jadwal Andi dibuat agar tidak ada bentrokan antara kegiatan utama, seperti tugas sekolah dan persiapan festival.</p>
    <p>Chatting dengan Raya dilakukan pukul 20:00 karena di Arab saat itu pukul 16:00, masih sore di sana.</p>
    <p>Jika Andi tidak memiliki tugas sekolah, ia memiliki waktu luang dari pukul 16:30 hingga 18:30.</p>
    
</body>
</html>