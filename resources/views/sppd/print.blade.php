<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak SPPD</title>
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <div class="content-wrapper">
            <table class="text-center mb-2" align="center">
                <td><img src="assets/images/logo_kabupatentangerang_perda.png" class="pt-1"
                        height="80"width="70"></td>
                        <td>
                            <center>
                                <font size="3"><b>PEMERINTAHAN KABUPATEN TANGERANG</b></font><br>
                                <font size="4"><b>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</b></font><br>
                                <font size="2"><b>Komplek Perkantoran Tigaraksa telp.5991471, 5991474 Fax.5994477</b>
                                </font><br>
                                <font size="2"><b>Tigaraksa-Tangerang 15720</b></font>
                            </center>
                            </td>
                    </table>
            <div style="height: 3px; background: 1px black"></div>
            <div style="margin-top: 1px; height: 1px; background: 1px black"></div>
            <table class="text-center mt-3 mb-2" align="center">
                <td>
                    <center>
                        <font size="2"><b><u>SURAT PERINTAH PERJALANAN DINAS</u></b></font><br>
                        <font size="2">{{ $sppd->nomor }}</font>
                    </center>
                </td>
            </table>
            <div class="table-responsive">
                <table class="display table table-hover table-bordered table-sm" style="border-color: 1px black solid">
                    <thead>
                        <tr>
                            <td class="text-center" style="width: 1%;"><font size="1">1</font></td>
                            <td style="width: 33%"><font size="1">Pejabat berwewenang yang memberi perintah</font></td>
                            <td><font size="1">{{ $sppd->spt->pejabat->name }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">2</font></td>
                            <td><font size="1">Nama pegawai yang diperintah</font></td>
                            <td><font size="1">{{ $sppd->spt->user->first()->name }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">3</font></td>
                            <td><font size="1">a. Pangkat dan Golongan</font></td>
                            <td><font size="1">{{ $sppd->spt->user->first()->golongan }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></font></td>
                            <td><font size="1">b. Jabatan</font></td>
                            <td><font size="1">{{ $sppd->spt->user->first()->jabatan }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></font></td>
                            <td><font size="1">c. Tingkat menurut peraturan perjalanan dinas</font></td>
                            <td><font size="1"></font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">4</font></td>
                            <td><font size="1">Maksud perjalanan dinas</font></td>
                            <td><font size="1">{{ $sppd->spt->tujuan }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">5</font></td>
                            <td><font size="1">a. Tempat berangkat</font></td>
                            <td><font size="1">{{ $sppd->tempat_berangkat }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></font></td>
                            <td><font size="1">b. Tempat tujuan</font></td>
                            <td><font size="1">{{ $sppd->spt->location()->get()->implode('name') }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">6</font></td>
                            <td><font size="1">a. Tanggal berangkat</font></td>
                            <td><font size="1"><font size="1">{{ date('d F Y', strtotime($sppd->spt->tgl_pergi)) }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></font></td>
                            <td><font size="1">b. Tanggal kembali</font></td>
                            <td><font size="1">{{ date('d F Y', strtotime($sppd->spt->tgl_pulang)) }}</font></td>
                            <td><font size="1"></font></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">7</font></td>
                            <td><font size="1">Alat angkut yang dipergunakan</font></td>
                            <td><font size="1">{{ $sppd->spt->transport()->get()->implode('name') }}</font></td>
                            <td><font size="1"></font></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">8</font></td>
                            <td class="text-center" colspan="3"><font size="1">Pengikut</font></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></font></td>
                            <td class="text-center"><font size="1">Nama</font></td>
                            <td class="text-center"><font size="1">Pangkat/Golongan</font></td>
                            <td class="text-center"><font size="1">Jabatan</font></td>
                        </tr>
                        @foreach ($sppds as $item)
                            <tr>
                                <td><font size="1"></font></td>
                                <td class="text-center"><font size="1">{{ $item->user->name }}</font></td>
                                <td class="text-center"><font size="1">{{ $item->user->golongan }}</font></td>
                                <td class="text-center"><font size="1">{{ $item->user->jabatan }}</font></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="text-center"><font size="1">9</font></td>
                            <td><font size="1">Pembebanan Anggaran</font></td>
                            <td><font size="1"></font></td>
                            <td><font size="1"></font></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></td>
                            <td><font size="1">a. Instansi</font></td>
                            <td><font size="1">{{ $sppd->instansi }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1"></td>
                            <td><font size="1">b. Mata Anggaran</font></td>
                            <td><font size="1">{{ $sppd->mata_anggaran }}</font></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><font size="1">10</font></td>
                            <td><font size="1">Keterangan</font></td>
                            <td><font size="1">{{ $sppd->keterangan }}</font></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="table-responsive">
                <table class="ms-auto" style="margin-top: -15px;">
                    <tbody>
                        <tr>
                            <td class="text-start" style="width: 10%;">
                                <font size="2">Dibuat</font>
                            </td>
                            <td style="width: 25%">: <font size="2">di Tigaraksa</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <font size="2">Pada Tanggal</font>
                            </td>
                            <td>
                                <font size="2">: {{ date('d F Y', strtotime($sppd->created_at)) }}</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="ms-auto">
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <b><font size="2">SEKRETARIS DPRD</font></b><br>
                                <b><font size="2">KABUPATEN TANGERANG</font></b>
                            </td>
                        </tr>
                        <br>
                        <br>
                        <tr>
                            <td class="text-center">
                                <b><u><font size="2">{{ $sppd->spt->pejabat->name }}</font></u></b><br>
                                <font size="2">{{ $sppd->spt->pejabat->pangkat }} ({{ $sppd->spt->pejabat->golongan }})</font><br>
                                <font size="2">Nip. {{ $sppd->spt->pejabat->nip }}</font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
