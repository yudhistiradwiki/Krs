<!DOCTYPE html>
<html>
<head>
	<title>KRS</title>
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
        <p align="center">Kartu Rencana Studi</p><br><br>
        Nama : {{Auth::guard('mahasiswa')->user()->nama_lengkap}}<br>
        Nim  : {{Auth::guard('mahasiswa')->user()->nim}}<br>
        Program Studi : {{Auth::guard('mahasiswa')->user()->nama_prodi}}<br>
        Semester: 5<br>

        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 0;
            $jumlahSks = 0;
            ?>
            @foreach ($join as $y)
            <?php
            $no++;
            $sks = $y -> sks;
                $jumlahSks = $jumlahSks + $sks;
                ?>
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $y -> kode_matakuliah }}</td>
                <td>{{ $y -> nama_matakuliah }}</td>
                <td>{{ $y -> sks}}</td>
              </tr>
              @endforeach
              <tr>
                  <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
                  <td colspan="3"><strong><?= $jumlahSks; ?></strong></td>
                </tr>
            </tbody>
          </table><br>
    </div>
</body>
</html>
