<?php
// Mengimpor file koneksi
include 'koneksi.php';

// Proses penyimpanan data jika formulir disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    // SQL untuk insert data ke tabel tamu
    $sql = "INSERT INTO tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";

    // Eksekusi query dan cek keberhasilannya
    if ($conn->query($sql) === TRUE) {
        echo "<p>Terima kasih, data Anda telah disimpan!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Buku Tamu</title>
</head>
<body>
    <h1>Isi Buku Tamu</h1>
    
    <!-- Formulir untuk input data tamu -->
    <form method="post" action="input.php">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" required></textarea><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <p><a href="index.php">Kembali ke Landing Page</a></p>
</body>
</html>


Halaman Daftar Tamu
table.php
<?php
// Mengimpor file koneksi
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>

        <?php
        // Ambil data dari tabel tamu
        $sql = "SELECT nama, email, komentar, tanggal FROM tamu ORDER BY tanggal DESC";
        $result = $conn->query($sql);

        // Tampilkan data tamu dalam tabel
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["komentar"]) . "</td>";
                echo "<td>" . $row["tanggal"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data tamu.</td></tr>";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </table>

    <p><a href="index.php">Kembali ke Landing Page</a></p>
</body>
</html>