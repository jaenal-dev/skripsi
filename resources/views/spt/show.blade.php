<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <style>
    body{
        font-family:"Times New Roman";
    }
  </style>
    <div id="app">
        <div class="content-wrapper">
            <div class="container">
                <table class="text-center mb-2" align="center">
                    <td><img src="assets/images/logo_kabupatentangerang_perda.png" class="pt-1" height="80"width="70"></td>
                    <td>
                        <font size="3"><b>PEMERINTAHAN KABUPATEN TANGERANG</b></font><br>
                        <font size="4"><b>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</b></font><br>
                        <font size="2"><b>Komplek Perkantoran Tigaraksa telp.5991471, 5991474 Fax.5994477</b></font><br>
                        <font size="2"><b>Tigaraksa-Tangerang 15720</b></font>
                    </td>
                </table>
                <div style="height: 3px; background: 1px black"></div>
                <div style="margin-top: 1px; height: 1px; background: 1px black"></div>
                <table class="text-center mt-4" align="center">
                    <td>
                        <font size="3"><b><u>SURAT TUGAS</u></b></font><br>
                        <font size="2">{{ $spts->nomor }}</font>
                    </td>
                </table>
                <div class="card" style="border: none">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <td><font size="2">Yang bertanda tangan dibawah ini :</font></td>
                                    </tr>
                                    <tr>
                                        <th><font size="2">Nama</font></th>
                                        <th>: <font size="2"> {{ $spts->pejabat->name }}</font></th>
                                    </tr>
                                    <tr>
                                        <th><font size="2">Dari.</font></th>
                                        <th>: <font size="2"> {{ $spts->pejabat->nip }}</font></th>
                                    </tr>
                                    <tr>
                                        <th><font size="2">Kode Rekening</font></th>
                                        <th>: <font size="2"> {{ $spts->pejabat->pangkat }}</font></th>
                                    </tr>
                                    <tr>
                                        <th><font size="2">Tanggal</font></th>
                                        <th>: <font size="2"> {{ $spts->pejabat->jabatan }}</font></th>
                                    </tr>
                                </thead>
                            </table>
                            <p class="p-2 text-center"><font size="2"><b>Memerintahkan Kepada</b></font></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 5%;"><font size="2">No</font></th>
                                        <th><font size="2">Nama</font></th>
                                        <th><font size="2">Golongan</font></th>
                                        <th><font size="2">Jabatan</font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spt_user as $spt)
                                        <tr>
                                            <td class="text-center"><font size="2">{{ $loop->iteration }}</font></td>
                                            <td><font size="2"><b>{{ $spt->user->name }}</b> <br> NIP. {{ $spt->user->nip }}</font></td>
                                            <td class="text-center"><font size="2">{{ $spt->user->golongan }}</font></td>
                                            <td class="text-center"><font size="2">{{ $spt->user->pangkat }}</font></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <p style="text-indent: 45px">Untuk melaksanakan perintah dalam rangka {{ $spts->tujuan }}, yang akan dilaksanakan pada:</p>
                            <table class="table table-bordered" style="text-indent: 45px">
                            <thead>
                                <tr>
                                    <td style="width:45px;"><font size="2">Hari</font></td>
                                    <td style="width:50px;">:</td>
                                    <td><font size="2" style="margin-left:-20px;">{{ $day }}</font></td>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th><font size="2">1</font></th>
                                    <td><font size="2">Uang Harian</font></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><font size="2">Golongan IV</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><font size="2">Golongan III</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><font size="2">TKS</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                    <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                </tr> --}}
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
