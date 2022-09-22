<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Surat Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="content-wrapper">
            <table class="text-center mb-2" align="center">
                <td><img src="assets/images/logo_kabupatentangerang_perda.png" class="pt-1"
                        height="80"width="70"></td>
                <td>
                    <font size="3"><b>PEMERINTAHAN KABUPATEN TANGERANG</b></font><br>
                    <font size="4"><b>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</b></font><br>
                    <font size="2"><b>Komplek Perkantoran Tigaraksa telp.5991471, 5991474 Fax.5994477</b>
                    </font><br>
                    <font size="2"><b>Tigaraksa-Tangerang 15720</b></font>
                </td>
            </table>
            <div style="height: 3px; background: 1px black"></div>
            <div style="margin-top: 1px; height: 1px; background: 1px black"></div>
            <table class="text-center mt-3 mb-2" align="center">
                <td>
                    <font size="3"><b><u>SURAT TUGAS</u></b></font><br>
                    <font size="2">{{ $spts->nomor }}</font>
                </td>
            </table>
            <div class="mx-3">
                <p class="ms-2">
                    <font size="2">Yang bertanda tangan dibawah ini :</font>
                </p>
                <div class="table-responsive mx-2">
                    <table style="margin-top: -15px">
                        <thead>
                            <tr>
                                <th style="width: 105px;">
                                    <font size="2">Nama</font>
                                </th>
                                <th>: <font size="2"> {{ $spts->pejabat->name }}</font></th>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2">Nip.</font>
                                </th>
                                <th>: <font size="2"> {{ $spts->pejabat->nip }}</font></th>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2">Pangkat/Gol</font>
                                </th>
                                <th>: <font size="2"> {{ $spts->pejabat->pangkat }} ({{ $spts->pejabat->golongan }})</font></th>
                            </tr>
                            <tr>
                                <th>
                                    <font size="2">Jabatan</font>
                                </th>
                                <th>: <font size="2"> {{ $spts->pejabat->jabatan }}</font></th>
                            </tr>
                        </thead>
                    </table>
                    <p class="mt-3 text-center">
                        <font size="2"><b>Memerintahkan Kepada</b></font>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 5%;">
                                    <font size="2">No</font>
                                </th>
                                <th>
                                    <font size="2">Nama</font>
                                </th>
                                <th style="width: 10%">
                                    <font size="2">Golongan</font>
                                </th>
                                <th>
                                    <font size="2">Jabatan</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spt_user as $spt)
                                <tr>
                                    <td class="text-center">
                                        <font size="2">{{ $loop->iteration }}</font>
                                    </td>
                                    <td class="text-center">
                                        <font size="2"><b>{{ $spt->user->name }}</b> <br> NIP.
                                            {{ $spt->user->nip }}</font>
                                    </td>
                                    <td class="text-center">
                                        <font size="2">{{ $spt->user->golongan }}</font>
                                    </td>
                                    <td class="text-center">
                                        <font size="2">{{ $spt->user->jabatan }}</font>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p>
                        <font size="2">Untuk melaksanakan perintah dalam rangka {{ $spts->tujuan }}, yang akan
                            dilaksanakan pada:</font>
                    </p>
                    <div class="table-responsive">
                        <table style="margin-top: -20px; margin-left: 38px;">
                            <thead>
                                <tr>
                                    <td>
                                        <font size="2">Hari</font>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <font size="2">{{ $day }}</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font size="2">Tanggal</font>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <font size="2">
                                            {{ date('d', strtotime($spts->tgl_pergi)) }} s/d
                                            {{ date('d F Y', strtotime($spts->tgl_pulang)) }}</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font size="2">Lokasi</font>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <font size="2">
                                            {{ $spts->location()->get()->implode('name') }}</font>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <p style="text-indent: 35px">
                        <font size="2">Demikian Surat Perintah ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</font>
                    </p>
                    <p style="margin-top: -10px;text-indent: 35px;">
                        <font size="2">Biaya perjalanan dinas ini dibebankan pada pagu anggaran pada kegiatan
                            {{ $spts->nppd->dari }} dengan Kode Kegiatan {{ $spts->rekening->kode_rekening }}</font>
                    </p>
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
                                        <font size="2">: {{ date('d F Y', strtotime($spts->created_at)) }}</font>
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
                                        <b><u><font size="2">{{ $spts->pejabat->name }}</font></u></b><br>
                                        <font size="2">{{ $spts->pejabat->pangkat }} ({{ $spts->pejabat->golongan }})</font><br>
                                        <font size="2">Nip. {{ $spts->pejabat->nip }}</font>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
