<?php 
// Deklarasi nama anggota kelompok
$anggota1 = "Zakaria Akmal";
$anggota2 = "Raka Isyrafi";
?>

<!DOCTYPE html>
<html>
<head>
    <title>LKPD 1 Percabangan PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ======================== CASE 1: Konversi Nilai =================================== -->
<div class="container">
    <h2>Skenario 1: Konversi Nilai</h2>
    <form method="POST">
        Masukkan nilai: <input type="number" name="nilai" step="0.01">
        <input type="submit" value="Konversi">
    </form>
    
    <?php
    if(isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];
        echo "<div class='result'>";
        if($nilai < 0 || $nilai > 100){
            echo "Nilai wajib di antara 0 - 100";
        } elseif($nilai >= 90) {
            echo "Nilai $nilai = A";
        } elseif($nilai >= 80) {
            echo "Nilai $nilai = B";
        } elseif($nilai >= 70) {
            echo "Nilai $nilai = C";
        } else {
            echo "Nilai $nilai = D";
        }
        echo "</div>";
    }
    ?>
</div>

<!-- ======================== CASE 2: WAKTU HARI =================================== -->
<div class="container">
    <h2>Skenario 2: Waktu Hari</h2>
    <form method="POST">
        Masukkan waktu : <input type="time" name="waktu">
        <input type="submit" value="Cek">
    </form>
    
    <?php
    if(isset($_POST['waktu'])){
        $time = explode(":", $_POST['waktu']);
        $jam = (int)$time[0];
        $menit = (int)$time[1];
        
        echo "<div class='result'>";
        if($jam < 0 || $jam >= 24 || $menit < 0 || $menit >= 60){
            echo "Dunia lain";
        } elseif($jam >= 0 && $jam < 4) {
            echo "Dini hari";
        } elseif($jam >= 4 && $jam < 10) {
            echo "Pagi";
        } elseif($jam >= 10 && $jam < 15) {
            echo "Siang";
        } elseif(($jam == 15 && $menit >= 0) || ($jam > 15 && $jam < 17) || ($jam == 17 && $menit <= 30)) {
            echo "Sore";
        } elseif(($jam == 17 && $menit > 30) || ($jam == 18 && $menit <= 30)) {
            echo "Petang";
        } else {
            echo "Malam";
        }
        echo "</div>";
    }
    ?>
</div>

<!-- ======================== CASE 3: JADWAL ANDI =================================== -->
<div class="container">
    <h2>Skenario 3: Jadwal Harian Andi</h2>
    <div class="schedule">
        <h3>Jadwal yang sesuai:</h3>
        <ol>
            <li>15:45 - 16:00: Mandi</li>
            <li>16:00 - 16:30: Mengaji</li>
            <li>16:30 - 18:30: Mengerjakan Tugas Sekolah</li>
            <li>18:30 - 19:00: Menghafal Dialog</li>
            <li>19:00 - 19:30: Membeli Bumbu</li>
            <li>19:30 - 20:00: Makan Malam</li>
            <li>17:00 - 17:30: Chatting dengan Raya</li>
            <li>20:00 - 20:30: Mengobrol Keluarga</li>
            <li>22:00 - 04:00: Tidur</li>
        </ol>
    </div>

    <h3>Cek Aktivitas:</h3>
    <form method="POST">
        Masukkan waktu : <input type="time" name="aktivitas">
        <input type="submit" value="Cek">
    </form>

    <?php
    if(isset($_POST['aktivitas'])){
        $time = explode(":", $_POST['aktivitas']);
        $jam = (int)$time[0];
        $menit = (int)$time[1];
        $totalMenit = ($jam * 60) + $menit;
        
        echo "<div class='result'>";
        // Percabangan bersarang untuk cek aktivitas
        if($totalMenit >= 945 && $totalMenit < 960) { // 15:45 - 16:00
            echo "Mandi";
        } elseif($totalMenit >= 960 && $totalMenit < 990) { // 16:00 - 16:30
            echo "Mengaji";
        } elseif($totalMenit >= 990 && $totalMenit < 1110) { // 16:30 - 18:30
            echo "Mengerjakan Tugas Sekolah";
        } elseif($totalMenit >= 1110 && $totalMenit < 1140) { // 18:30 - 19:00
            echo "Menghafal Dialog";
        } elseif($totalMenit >= 1140 && $totalMenit < 1170) { // 19:00 - 19:30
            echo "Membeli Bumbu";
        } elseif($totalMenit >= 1170 && $totalMenit < 1200) { // 19:30 - 20:00
            echo "Makan Malam";
        } elseif($totalMenit >= 1020 && $totalMenit < 1050) { // 17:00 - 17:30
            echo "Chatting dengan Raya";
        } elseif($totalMenit >= 1200 && $totalMenit < 1230) { // 20:00 - 20:30
            echo "Mengobrol Keluarga";
        } elseif($totalMenit >= 1320 || $totalMenit < 240) { // 22:00 - 04:00
            echo "Tidur";
        } else {
            echo "Tidak ada aktivitas terjadwal";
        }
        echo "</div>";
    }
    ?>
</div>

<!-- Jawaban Bahan Diskusi -->
<div class="container">
    <h2>Analisis Jadwal</h2>
    <p>Anggota Kelompok: <?php echo $anggota1." & ".$anggota2; ?></p>
    
    <h3>Bahan Diskusi:</h3>
    <ol>
        <li>Yang perlu diperhatikan: Urutan prioritas, durasi kegiatan, dan waktu wajib (tidur/makan)</li>
        <li>Alasan pengurutan: Memaksimalkan waktu produktif dan memenuhi kewajiban keluarga</li>
        <li>Waktu chatting Raya: Pukul 21:00 waktu Arab (17:00 + 4 jam)</li>
        <li>Waktu luang: 30 menit sebelum tidur (21:30-22:00)</li>
        <li>Jika tidak ada tugas: Waktu luang bertambah 2 jam</li>
    </ol>
</div>

</body>
</html>