<!DOCTYPE html>
<html>
<head>
	<title>KHS</title>
	<style type="text/css">
		body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
        }
        .rangkasurat{
            width: 100%;
            background-color: #fff;
            padding: 20px;
        }
        table{
            border-bottom: 3px solid #000;
            padding: 0px;
        }
        .tengah{
            line-height: 3px;
        }
        p{
            font-family: 'Courier New', Courier, monospace;
        }
	</style>
</head>
<body>
    <div class="rangkasurat">
        <table width="100%">
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
        <p align="center">Kartu Hasil Studi</p><br><br>
        Nama : {{Auth::guard('mahasiswa')->user()->nama_lengkap}}<br>
        Nim  : {{Auth::guard('mahasiswa')->user()->nim}}<br>
        Program Studi : {{Auth::guard('mahasiswa')->user()->nama_prodi}}<br>
        Semester: 5<br>

        <table class="table table-striped table-bordered">
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
              echo $skor;
            }

            function Poin($nilai, $sks){
                if($nilai == 'A') $skor = 4 * $sks;
                else if($nilai == 'B') $skor = 3 * $sks;
                else if($nilai == 'C') $skor = 2 * $sks;
                else if($nilai == 'D') $skor = 1 * $sks;
                else $skor = 0;
              return $skor;}

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
              <td><?php Poin('B', $dataMahasiswa -> sks);?></td>
              <td><?php skorNilai($dataMahasiswa -> nilai);?></td>
              <?php
            $jumlahPoin = $jumlahPoin + Poin('B', $dataMahasiswa -> sks);
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
                <td>A</td>
            </tr>
          </tbody>
                </table>
    </div>
</body>
</html>
