<?php
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['uts'];
$nilai_uas = $_GET['UAS'];
$nilai_tugas = $_GET['uas'];
?>
<?php
$ns1 = ['nama'=>$nama_siswa,'matkul'=>$mata_kuliah,'uts'=>$nilai_uts,'UAS'=>$nilai_uas,'uas'=>$nilai_tugas];
$ar_nilai = [$ns1];

?>
<h3>Daftar Nilai Siswa</h3>
<table  border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Nama</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr> 
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$ns['nama'].'</td>';
echo '<td>'.$ns['matkul'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['UAS'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['UAS']+$ns['uas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>