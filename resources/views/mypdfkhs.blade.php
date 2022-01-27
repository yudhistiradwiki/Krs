<!DOCTYPE html>
<html>
<head>
    <title>KHS - {{Auth::guard('mahasiswa')->user()->nama_lengkap}}</title>
	<style type="text/css">
		body{

            background-color: #fff;
        }
        .atas{
            border-bottom: 3px solid #000;
            padding: 0px;
        }
        .tengah{
            line-height: 3px;
		    font-family: Arial, Helvetica, sans-serif;
        }
        p{
            font-family: 'Courier New', Courier, monospace;
            color: #000;
        }
        th{
            text-align: left;
        }
	</style>
    </head>
<body>
    <div class="rangkasurat">
        <table class="atas" width="100%">
            <tr>
                <td><img src="theme/images/logo-mini.png" width="130px"></td>
                <td class="tengah">
                    YAYASAN PENDIDIKAN INDORAMA<br>
                    <h2>POLITEKNIK ENJINERING INDORAMA</h2>
                    <h4>Kembangkuning, Jatiluhur</h4>
                    <h3>PURWAKARTA - 41152</h3>
                    <font size="9px"><i>Telp. (0264) 8301041 - 43, Fax. (0264) 202318, Website:http://www.pei.ac.id, Email:info@pei.ac.id</i></font>
                </td>
            </tr>
        </table>
        <p align="center" style="font-size: 20px"><b>KARTU HASIL STUDI</b></p>
        <table style="width: 50%; font-family:'Courier New', Courier, monospace">
            <tr>
                <th align="left">Nama</th>
                <td>:</td>
                <td>{{Auth::guard('mahasiswa')->user()->nama_lengkap}}</td>
            </tr>
            <tr>
                <th align="left">NIM</th>
                <td>:</td>
                <td>{{Auth::guard('mahasiswa')->user()->nim}}</td>
            </tr>
            <tr>
                <th align="left">Program Studi</th>
                <td>:</td>
                <td>{{Auth::guard('mahasiswa')->user()->nama_prodi}}</td>
            </tr>
            <tr>
                <th align="left">Semester</th>
                <td>:</td>
                <td>5</td>
            </tr>
        </table><br>
        <table align="center" border="1" style="width:auto;border-radius:1px; font-family:'Courier New', Courier, monospace; border-color:#000">
            <thead>
                <tr>
                  <th>NO</th>
                  <th>Kode Matkul</th>
                  <th>Nama Matkul</th>
                  <th>SKS</th>
                  <th>Nilai</th>
                  <th>Poin</th>
                  <th>Skor</th>
              </tr>
              </thead>
              <?php
              function skorNilai($nilai){
                  if($nilai >= 90 && $nilai <=100){
                      $skor = 'A';}
                  else if($nilai >= 80 && $nilai <= 89){
                       $skor = 'B';}
                  else if($nilai >= 70 && $nilai <= 79) {
                      $skor = 'C';}
                  else if($nilai >= 60 && $nilai <= 69){
                      $skor = 'D';}
                  else if($nilai >= 0 && $nilai <= 59) {
                      $skor = 'E';}
                  else $skor = 'Error!';
                return $skor;
              }

              function poinHuruf($nilai){
                  if($nilai <= 4.0 && $nilai >= 3.6){
                      $skor = 'A';}
                  else if($nilai <= 3.5 && $nilai >= 3.1){
                       $skor = 'AB';}
                  else if($nilai <= 3.0 && $nilai >= 2.6) {
                      $skor = 'B';}
                  else if($nilai <= 2.5 && $nilai >= 2.1){
                      $skor = 'BC';}
                  else if($nilai <= 2.0 && $nilai >= 1.6) {
                      $skor = 'C';}
                  else if($nilai <= 1.5 && $nilai >= 1.1) {
                      $skor = 'D';}
                  else if($nilai <= 1.0 && $nilai >= 0) {
                      $skor = 'E';}
                  else $skor = 'Error!';
                return $skor;
              }

              function PoinTes($nilai, $sks){
                  if($nilai == 'A'){
                      $skor = 4 * $sks;}
                  else if($nilai == 'B'){
                      $skor = 3 * $sks;}
                  else if($nilai == 'C'){
                      $skor = 2 * $sks;}
                  else if($nilai == 'D'){
                       $skor = 1 * $sks;}
                  else $skor = 0;
                return $skor;
              }



              $no = 1;
              $jumlahSks = 0;
              $jumlahNilai = 0;
              $jumlahPoin = 0;
                  ?>
              <tbody>
                  @foreach ($join as $dataMahasiswa)
              <tr>
                <td width="20px"><?= $no++; ?></td>
                <td>{{$dataMahasiswa ->kode_matakuliah}}</td>
                <td>{{$dataMahasiswa ->nama_matakuliah}}</td>
                <td>{{$dataMahasiswa ->sks}}</td>
                <td>{{$dataMahasiswa ->nilai}}</td>
                <td><?php echo PoinTes(skorNilai($dataMahasiswa -> nilai),$dataMahasiswa->sks);?></td>
                <td><?php echo skorNilai($dataMahasiswa -> nilai);?></td>
                <?php
              $jumlahPoin = $jumlahPoin + PoinTes(skorNilai($dataMahasiswa -> nilai),$dataMahasiswa->sks);
              $jumlahSks += $dataMahasiswa->sks;
              $jumlahNilai += $dataMahasiswa -> nilai;
              ?>
              </tr>
              @endforeach
              <tr>
                  <td colspan="3">Jumlah</td>
                  <td><?= $jumlahSks; ?></td>
                  <td><?= $jumlahNilai; ?></td>
                  <td><?= $jumlahPoin; ?></td>
                  <td></td>
              </tr>
              <tr>
                  <td colspan="5"><b>Index Prestasi</b></td>
                  <td><?= $jumlahPoin / $jumlahSks; ?></td>
                  <td><?php echo poinHuruf($jumlahPoin / $jumlahSks);?></td>
              </tr>
            </tbody>
                  </table><br>
                <p style="text-align: right;">Purwakarta, {{$date}}<br>Mengetahui,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <br><br><br><br><br>Muhammad Nugraha, S.T., M.Eng.</p>
    </div>
</body>
</html>
