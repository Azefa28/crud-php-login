<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM matakuliah");

echo "<table border='1' cellpadding='5'>
<tr>
    <th>Kode MK</th>
    <th>Nama Mata Kuliah</th>
    <th>SKS</th>
</tr>";

while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>{$row['kode_mk']}</td>
        <td>{$row['nama_mk']}</td>
        <td>{$row['sks']}</td>
    </tr>";
}
echo "</table>";
?>