<!DOCTYPE html>
<html>
<head>
	<title>KRS - {{Auth::guard('mahasiswa')->user()->nama_lengkap}}</title>
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
        <p align="center" style="font-size: 20px"><b>KARTU RENCANA STUDI</b></p>
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
        <table align="center" border="1" style="border-radius:1px;width: 100%; font-family:'Courier New', Courier, monospace; border-color:#000">
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
          <p style="text-align: right;">Purwakarta, {{$date}}<br>Mengetahui,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br><br><br>Muhammad Nugraha, S.T., M.Eng.</p>
    </div>
</body>
</html>
