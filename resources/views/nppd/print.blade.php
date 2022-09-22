<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Nota Dinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
        <div class="content-wrapper">
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
            <table class="text-center mt-3 mb-2" align="center">
                <td>
                    <font size="3"><b><u>NOTA DINAS</u></b></font>
                </td>
            </table>

            <div class="card mt-3" style="border: none">
                <div class="card-body mx-4">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <td><font size="2">Kepada Yth</font></td>
                                    <td>: <font size="2">{{ $nppd->kepada }}</font></td>
                                </tr>
                                <tr>
                                    <td><font size="2">Dari.</font></td>
                                    <td>: <font size="2">{{ $nppd->dari }}</font></td>
                                </tr>
                                <tr>
                                    <td><font size="2">Kode Rekening</font></td>
                                    <td>: <font size="2">{{ $nppd->spt->rekening->kode_rekening }}</font></td>
                                </tr>
                                <tr>
                                    <td><font size="2">Tanggal</font></td>
                                    <td>: <font size="2">{{ date('d F Y', strtotime($nppd->created_at)) }}</font></td>
                                </tr>
                                <tr>
                                    <td><font size="2">Prihal</font></td>
                                    <td>: <font size="2">{{ $nppd->prihal }}</font></td>
                                </tr>
                            </thead>
                        </table>
                        <hr>
                        <p style="text-indent: 45px"><font size="2">Disampaikan dengan hormat {{ $nppd->prihal }} untuk melaksanakan tugas dalam rangka melaksanakan {{ $nppd->spt->tujuan }}, yang dilaksanakan pada :</font></p>
                        <table class="ms-5">
                            <thead>
                                <tr>
                                    <td style="width: 25%;"><font size="2">Hari</font></td>
                                    <td>: <font size="2">{{ $day }}</font></td>
                                </tr>
                                <tr>
                                    <td style="width: 25%;"><font size="2">Tanggal</font></td>
                                    <td>: <font size="2">{{ date('d', strtotime($nppd->spt->tgl_pergi)) }} s/d {{ date('d F Y', strtotime($nppd->spt->tgl_pulang)) }}</font></td>
                                </tr>
                                <tr>
                                    <td style="width: 25%;"><font size="2">Tempat</font></td>
                                    <td>: <font size="2">{{ $nppd->spt->location()->get()->implode('name') }}</font></td>
                                </tr>
                            </thead>
                        </table>
                        <p class="mt-2"><font size="2">Adapun rincian biaya perjalanan dinas sebagai berikut :</font></p>
                        <table class="table table-bordered" style="text-indent: 45px">
                            <thead>
                                <tr>
                                    <th style="width: 5%"><font size="2">No</font></th>
                                    <th><font size="2">Uraian</font></th>
                                    <th><font size="2">Volume</font></th>
                                    <th><font size="2">Jumlah</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><font size="2">1</font></th>
                                    <td><font size="2">Uang Harian</font></td>
                                </tr>
                                @foreach ($nppds as $item)
                                    <tr>
                                        <td></td>
                                        <td><font size="2">Golongan {{ $item->user->golongan }}</font></td>
                                        <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                        <td><font size="2">Rp. {{ $nppd->anggaran->nominal }}</font></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p style="text-indent: 45px" class="mt-2"><font size="2">Demikian permohonan ini dibuat, atas persetujuan disampaikan terimakasih</font></p>
                        <table class="table table-bordered text-center" style="text-indent: 45px">
                            <thead>
                                <tr>
                                    <th><font size="2">Mengetahui</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><font size="2">KUASA PENGGUNA ANGGARAN</font></th>
                                    <th><font size="2">PEJABAT PELAKSANA TEKNIS KEGIATAN</font></th>
                                </tr>
                                <br>
                                <br>
                                <br>
                                <br>
                                <tr>
                                    <th><font size="2"><u>{{ $nppd->spt->user->first()->name }}</u></font></th>
                                    <th><font size="2"><u>{{ $nppd->spt->user->find(2)->name }}</u></font></th>
                                </tr>
                                <tr>
                                    <th><font size="2">Nip. {{ $nppd->spt->user->first()->nip }}</font></th>
                                    <th><font size="2">Nip. {{ $nppd->spt->user()->find(2)->nip }}</font></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
