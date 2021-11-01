<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <title>Berkas Pendaftaran Rusunawa</title>
    <style type="text/css">
    body {
        font-family: DejaVu Sans;
    }

    table {
        width: 100%;
        border-style: double;
        border-width: 3px;
        border-color: white;
    }

    table tr td {
        font-size: 12px;
    }

    table tr .text-center {
        text-align: center;
    }

    table tr .text-kanan {
        text-align: right;
    }

    table tr .text-judul {
        text-align: center;
        font-size: 16px;
        font-weight: bold;
    }

    table tr .text-pasal {
        text-align: center;
        font-size: 15px;
        font-weight: bold;
    }

    .page-break {
        page-break-after: always;
    }

    </style>
</head>

<body>
    <!-- Formulir Pendaftaran -->
    <div>
        <table border="0">
            <tr>
                <td>
                    <center>
                        <font size="4"><b>PEMERINTAH KOTA BALIKPAPAN</b></font><br>
                        <font size="5"><b>DINAS PERUMAHAN DAN PERMUKIMAN</b></font><br>
                        <font size="2">Jl. Ruhui Rahayu 1 No. 10 Telp. (0542) 874091 Fax. (0542) 874085</font><br>
                        <font size="3">Balikpapan</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td style="text-align: center;">
                    <font style="font-size: 15px; text-decoration: underline; font-weight: bold;">FORMULIR PENDAFTARAN</font>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <font style="font-size: 13px;">Permohonan Menghuni Rusunawa</font>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-kanan">No. Formulir</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="80%"></td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    Yang bertanda tangan di bawah ini:
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Nama</td>
                <td width="70%">: {{ $pendaftaran->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="70%">: {{ $pendaftaran->alamat }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td width="70%">: {{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td width="70%">: {{ $pendaftaran->no_ktp }}</td>
            </tr>
            <tr>
                <td>Status tempat tinggal sekarang</td>
                <td width="70%">: {{ $pendaftaran->status_tempat_tinggal }}</td>
            </tr>
            <tr>
                <td>Jumlah pengikut</td>
                <td width="70%">: {{ $pendaftaran->jumlah_pengikut ?? "-"}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td width="70%">: {{ $pendaftaran->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat Pekerjaan</td>
                <td width="70%">: {{ $pendaftaran->alamat_tempat_kerja }}</td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td width="70%">: {{ $pendaftaran->no_hp }}</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    Bersama ini kami mengajukan permohonan untuk menyewa {{ $pendaftaran->gedung->nama }} Tipe: .... lantai {{ $pendaftaran->lantai }} dengan cara melakukan pembayaran uang jaminan di depan (setara dengan pembayaran 3 bulan) ke <b>bank Kaltim atas nama UPT Rusunawa DISPERKIM Balikpapan dengan nomer rekening 00 314 53 431</b>, dan pembayaran sewa di awal bulan tiap bulan berjalan.
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    Kami telah melengkapi permohonan ini berupa:
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="5%">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td>Surat Pernyataan</td>
            </tr>
            <tr>
                <td width="5%">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td>Data Pemohon dan Kependudukan</td>
            </tr>
            <tr>
                <td width="5%">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td>Surat Keterangan Bekerja dan Belum Memiliki Rumah</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-center" width="50%">Diketahui:<br>Kelurahan atau Kantor Tempat Bekerja<br><br><br><br>
                    <font style="text-decoration: underline;">........................................</font><br><br>
                    <font size="xx-small">*pilih salah satu dilengkapi dengan stempel</font>
                </td>
                </td>
                <td class="text-center" width="50%">Pemohon<br><br><br><br>
                    <font style="text-decoration: underline;">{{ $pendaftaran->nama_lengkap }}</font>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr style="border: 1px dashed;">
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td align="left">BUKTI PENDAFTARAN DAN PERMOHONAN<br>MENYEWA SATUAN HUNIAN RUSUNAWA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Rusunawa</td>
                <td width="80%">: {{ $pendaftaran->gedung->nama }}</td>
            </tr>
            <tr>
                <td>Tagihan Sewa</td>
                <td width="80%">: ...................................</td>
            </tr>
            <tr>
                <td>Uang Jaminan</td>
                <td width="80%">: ...................................</td>
            </tr>
            <tr>
                <td>Setor ke Rekening</td>
                <td width="80%">: <b>Bank Kaltim 00 314 52 431</b></td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-kanan">No. Formulir</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="80%"></td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="20%">Nama Pemohon</td>
                <td width="60%">: {{ $pendaftaran->nama_lengkap }}</td>
                <td></td>
            </tr>
            <tr>
                <td width="20%">Alamat</td>
                <td width="60%">: {{ $pendaftaran->alamat }}</td>
                <td></td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-kanan">
                    <font style="text-decoration: underline;">........................................</font><br>Petugas Pendaftaran
                </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <!-- Surat Pernyataan -->
    <div>
        <table border="0">
            <tr>
                <td class="text-judul">SURAT PERNYATAAN</td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td>Pada hari ini, hari ......... tanggal .......... bulan ........... tahun 20......</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Saya yang bertanda tangan di bawah ini:</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Nama</td>
                <td width="70%">: {{ $pendaftaran->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="70%">: {{ $pendaftaran->alamat }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td width="70%">: {{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td width="70%">: {{ $pendaftaran->no_ktp }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td width="70%">: {{ $pendaftaran->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat Pekerjaan</td>
                <td width="70%">: {{ $pendaftaran->alamat_tempat_kerja }}</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Selaku pemohon/calon penghuni Rumah Susun Sederhana Sewa {{ $pendaftaran->gedung->nama }}, dengan ini menyatakan sebagai berikut:
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>
                            Bahwa saya memohon menyewa satuan hunian tipe ....., lantai {{ $pendaftaran->lantai }},
                        </li>
                        <li>Bahwa saya sanggup dan bersedia membayar sewa satuan dimaksud sesuai ketentuan yang berlaku sebesar Rp. ............................. (......................................................................),</li>
                        <li>Bahwa saya sanggup membayar uang jaminan sewa sebesar Rp. ..................,</li>
                        <li>Uang jaminan tersebut dapat diambil kembali setelah dipotong tunggakan-tunggakan yang apabila satuan hunian saya kembalikan dalam keadaan kosong dan baik seperti semula, atau bila mana hak sewa saya tidak diperpanjang lagi,</li>
                        <li>Bahwa saya sanggup dan bersedia membayar uang rekening untuk pembayaran pemakaian utilitas (air dan listrik) atas hunian yang saya tempati, sebelum tanggal 10 (sepuluh) di setiap bulannya,</li>
                        <li>Bahwa saya sanggup dan bersedia memenuhi segala ketentuan - ketentuan dan tata tertib penghunian di Rusunawa. Serta bersedia diputus masa sewa jika saya melakukan perbuatan-perbuatan tercela yang dapat mengganggu keamanan dan ketertiban Rusunawa,</li>
                        <li>Bahwa saya setuju jangka waktu sewa ruang hunian dimaksud selama 12 (dua belas) bulan, terhitung mulai tanggal ..... bulan ............... sampai dengan tanggal ..... bulan ...............,</li>
                        <li>Pernyataan dan keterangan ini kami sanggupi dan patuhi, selama kami sebagai penyewa Rusunawa,</li>
                        <li>
                            Bahwa satuan hunian tersebut akan dihuni sebanyak maksimal 4 (empat) orang yang seluruhnya menjadi tanggung jawab dan nama-nama penghuni serta hubungan sebagai berikut:
                            <table border="1">
                                <tr>
                                    <td>Nama</td>
                                    <td>Umur (Tahun)</td>
                                    <td>Hubungan dengan Penyewa</td>
                                </tr>
                                <tr>
                                    <td>{{ $pendaftaran->pengikut_1 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->umur_1 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->hubungan_1 ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $pendaftaran->pengikut_2 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->umur_2 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->hubungan_2 ?? "-"}}</td>
                                </tr>
                                <tr>
                                    <td>{{ $pendaftaran->pengikut_3 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->umur_3 ?? "-" }}</td>
                                    <td>{{ $pendaftaran->hubungan_3 ?? "-" }}</td>
                                </tr>
                            </table>
                        </li>
                        <li>Apabila ada hal-hal yang tidak benar dan tidak kami sanggupi di kemudian hari, maka pengelola mempunyai hak untuk setiap saat melaksanakan penuntutan sesuai ketentuan yang berlaku atau membutuhkan persetujuan atas permohonan kami,
                        </li>
                        <li>Bahwa selama menjadi penghuni Rumah Susun Sederhana saya beserta seluruh keluarga/penghuni yang menjadi tanggung jawab saya tersebut butir 9 di atas akan selalu memahami segala ketentuan tata tertib yang telah ditetapkan,</li>
                        <li>Bahwa saya beserta seluruh keluarga/penghuni yang menjadi tanggung jawab saya adalah benar dan sesungguhnya berkelakuan baik serta tidak pernah tersangkut perkara kriminal dan tidak menjadi anggota organisasi terlarang,</li>
                        <li>Bahwa bilamana dikemudian hari ternyata saya dan anggota keluarga yang menjadi tanggung jawab saya, ternyata:
                            <ol>
                                <li>Melanggar ketentuan tata tertib penghunian</li>
                                <li>Tidak menaati kewajiban membayar uang sewa dan/atau</li>
                                <li>Terbukti terdapat hal-hal yang bertentangan terhadap isi pernyataan saya tersebut di atas, maka saya bersedia keluar dari satuan hunian dengan terlebih dahulu menyelesaikan kewajiban saya</li>
                            </ol>
                        </li>
                        <div class="page-break"></div>
                        <li>Dengan tidak mengurangi isi ketentuan perjanjian sewa menyewa rumah apabila kami menunggak sewa maupun kewajiban lainnya, maka kami memberi kuasa kepada bendaharawan/pembayar gaji saya pada instansi/perusahaan {{ $pendaftaran->nama_tempat_kerja }} untuk memotong gaji sebesar tunggakan dan kewajiban lainnya selanjutnya akan disetorkan kepada pengelola di tempat,</li>
                        <li>Bersedia untuk tidak mengalihkan hak sewa kepada pihak lain, atau menyewakan kembali kepada pihak ketiga lainnya,</li>
                        <li>Jika saya tidak melaksanakan pernyataan ini bersedia untuk keluar dari Rusunawa dan tidak mempunyai hak sewa lagi.</li>
                    </ol>
                </td>
            </tr>
        </table><br>
        <table border="0">
            <tr>
                <td>Demikian pernyataan ini saya buat di atas kerta bermaterai cukup. Dan kemudian untuk itu, saya bubuhi tanda tangan pada hari dan tanggal tersebut di atas</td>
            </tr>
        </table><br>
        <table border="0">
            <tr>
                <td width="70%"></td>
                <td class="text-center">Yang membuat pernyataan<br><br></td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="70%"></td>
                <td>
                    <font size="xx-small">Materai<br>Rp10.000</font><br><br>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="70%"></td>
                <td class="text-center">
                    <font style="text-decoration: underline;">{{ $pendaftaran->nama_lengkap }}</font>
                </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <!-- SK Bekerja & Tidak Memiliki Rumah -->
    <div>
        <table border="0">
            <tr>
                <td class="text-kanan">FORM</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="85%"></td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-judul">SURAT KETERANGAN<br>BEKERJA DAN BELUM MEMILIKI RUMAH
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table border="0">
            <tr>
                <td>Yang bertanda tangan di bawah ini menerangkan bahwa:</td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td width="30%">Nama</td>
                <td>: {{ $pendaftaran->nama_lengkap }}</td>
            </tr>
            <tr>
                <td width="30%">Alamat Rumah</td>
                <td>: {{ $pendaftaran->alamat }}</td>
            </tr>
            <tr>
                <td width="30%">Tempat/tanggal lahir</td>
                <td>: {{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td width="30%">Nomor KTP</td>
                <td>: {{ $pendaftaran->no_ktp }}</td>
            </tr>
            <tr>
                <td width="30%">Pekerjaan</td>
                <td>: {{ $pendaftaran->pekerjaan }}</td>
            </tr>
            <tr>
                <td width="30%">Nama Tempat Kerja</td>
                <td>: {{ $pendaftaran->nama_tempat_kerja }}</td>
            </tr>
            <tr>
                <td width="30%">Alamat Pekerjaan</td>
                <td>: {{ $pendaftaran->alamat_tempat_kerja }}</td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td>Adalah benar:</td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td>Bekerja panda kantor/perusahaan seperti tertera di atas dengan status {{ $pendaftaran->status_pekerjaan }}<br>
                    Gaji/honor per bulan Rp.{{ number_format($pendaftaran->penghasilan_tetap, 2) }}<br>
                    Tinggal di alamat di atas dengan status {{ $pendaftaran->status_tempat_tinggal }}
                </td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td>Surat keterangan ini digunakan untuk permohonan menyewa Rusunawa {{ $pendaftaran->gedung->nama }} di {{ $pendaftaran->gedung->alamat }}</td>
            </tr>
        </table>
        <br>
        <table border="0">
            <tr>
                <td class="text-center" width="50%">DIKETAHUI<br>LURAH(*)<br><br><br><br><br>
                    <font style="text-decoration: underline;">..................................</font><br>Jabatan: .....................
                </td>
                <td class="text-center" width="50%">DIKETAHUI<br>PIMPINAN TEMPAT KERJA(*)<br><br><br><br><br>
                    <font style="text-decoration: underline;">..................................</font><br>Jabatan: .....................
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>(* ditandatangani dan distempel di salah satu yang memenuhi) </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <!-- DPK -->
    <div>
        <table border="0">
            <tr>
                <td class="text-judul">DATA PEMOHON DAN KEPENDUDUKAN<br>(DPK)
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td colspan="4" class="text-kanan">FORM</td>
            </tr>
            <tr>
                <td width="85%"></td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td width="2%">1.</td>
                <td width="30%">Nama Lengkap</td>
                <td>: {{ $pendaftaran->nama_lengkap }}</td>
            </tr>
            <tr>
                <td width="2%">2.</td>
                <td width="30%">Tempat & Tanggal Lahir</td>
                <td>: {{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td width="2%">3.</td>
                <td width="30%">Warga Negara</td>
                <td>: Indonesia</td>
            </tr>
            <tr>
                <td width="2%">4.</td>
                <td width="30%">Agama/Kepercayaan</td>
                <td>: {{ $pendaftaran->agama }}</td>
            </tr>
            <tr>
                <td width="2%">5.</td>
                <td width="30%">Menikah/Belum Menikah</td>
                <td>: {{ $pendaftaran->status_pernikahan }}</td>
            </tr>
            <tr>
                <td width="2%">6.</td>
                <td width="30%">Alamat/Tempat Tinggal</td>
                <td>: {{ $pendaftaran->alamat }}</td>
            </tr>
            <tr>
                <td width="2%">7.</td>
                <td width="30%">Status Tempat Tinggal</td>
                <td>: {{ $pendaftaran->status_tempat_tinggal }}</td>
            </tr>
            <tr>
                <td width="2%">8.</td>
                <td width="30%">Pekerjaan Pemohon</td>
                <td>: {{ $pendaftaran->pekerjaan }}</td>
            </tr>
            <tr>
                <td width="2%">9.</td>
                <td width="30%">Alamat Tempat Bekerja</td>
                <td>: {{ $pendaftaran->alamat_tempat_kerja }}</td>
            </tr>
            <tr>
                <td width="2%">10.</td>
                <td width="30%">Penghasilan rata-rata/bulan</td>
                <td>
                    <ul>
                        <li>Tetap: Rp{{ number_format($pendaftaran->penghasilan_tetap,2) }}</li>
                        <li>Tambahan: Rp{{ number_format($pendaftaran->penghasilan_tambahan,2 ?? 0) }}</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td width="2%">11.</td>
                <td width="30%">Pekerjaan Istri/Suami Pemohon</td>
                <td>: {{ $pendaftaran->pekerjaan_pasangan ?? "-" }}</td>
            </tr>
            <tr>
                <td width="2%">12.</td>
                <td width="30%">Penghasilan Istri/Suami Pemohon</td>
                <td>: {{ $pendaftaran->gaji ?? "-" }}</td>
            </tr>
            <tr>
                <td width="2%">13.</td>
                <td width="30%">Alamat Istri/Suami Pemohon</td>
                <td>: {{ $pendaftaran->alamat_pasangan ?? "-" }}</td>
            </tr>
            <tr>
                <td width="2%">14.</td>
                <td width="30%">No KTP Pemohon</td>
                <td>: {{ $pendaftaran->no_ktp }}</td>
            </tr>
            <tr>
                <td width="2%">15.</td>
                <td width="30%">No KTP Istri/Suami Pemohon</td>
                <td>: {{ $pendaftaran->no_ktp_pasangan ?? "-" }}</td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td width="10%">Lampiran:</td>
                <td>
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td width="85%">Fotokopi KTP</td>
            </tr>
            <tr>
                <td width="10%"></td>
                <td>
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td width="85%">Fotokopi KK</td>
            </tr>
            <tr>
                <td width="10%"></td>
                <td>
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td width="85%">Fotokopi Surat Nikah (bagi yang berstatus menikah)</td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td class="text-kanan">Balikpapan, .......................,20....<br>Pemohon<br><br><br><br>({{ $pendaftaran->nama_lengkap}})</td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <!-- Tata Tertib -->
    <div>
        <table border="0">
            <tr>
                <td class="text-kanan">FORM</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="85%"></td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
                <td align="right">
                    <div style="width:30px;height:15px;border:1px solid #000;"></div>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-judul">TATA TERTIB PENGHUNIAN<br>RUMAH SUSUN SEDERHANA SEWA (RUSUNAWA)</b>
                </td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>Penghuni adalah penyewa yang ditetapkan berdasarkan perjanjian sewa.</li>
                        <li>Tempat penghunian luas ...... m2, hanya diperkenankan dihuni maksimum 4 orang atau 2 orang dewasa dan 2 anak dibawah umur 10 tahun.</li>
                        <li>Melaporkan perubahan anggota penghuni (pindah/ masuk) dalam waktu maksimum 2 x 24 jam kepada pengelola.</li>
                        <li>Menciptakan keamanan dan estetika (kebersihan dan kerapihan) tempat dan lingkungan
                            hunian.</li>
                        <li>Apabila meninggalkan tempat, listrik sebaiknya dipadamkan, pastikan kran air dan gas tertutup.</li>
                        <li>Menjaga suara radio dan televisi jangan sampai mengganggu tetangga.</li>
                        <li>Bagi penghuni Rusunawa yang meninggalkan/mengosongkan tempat hunian untuk sementara harus melaporkan kepada Ketua Lingkungan dan Badan Pengelola.</li>
                        <li>Menjalin hubungan kekeluargaan antara sesama penghuni dan menjaga kebersihan lingkungan Rusunawa.</li>
                        <li>Pengerjaan peralatan, perbaikan/renovasi yang bersifat umum, harus seijin tetangga/penghuni lain dan Badan Pengelola.</li>
                        <li>Saling menjaga dan menginformasikan kepada pengelola, jika mengetahui adanya kegiatan atau transaksi atau memakai dan/ atau penyalahgunaan narkotika dan obat - obat terlarang, yang dilarang oleh peraturan perundang-undangan.</li>
                        <li>Perjanjian penghunian dibuat jangka waktu satu tahun dan bisa diperpanjang sebanyak-banyaknya tiga kali.</li>
                        <li>Penghuni/tamu penghuni yang membawa kendaraan menempatkan pada tempat parkir/lokasi yang telah ditetapkan.</li>
                        <li>Tidak diperbolehkan memanfaatkan ruang terbuka untuk meletakkan dan menumpuk barang atau sejenisnya.</li>
                        <li>Bersedia mematuhi ketentuan yang ditetapkan oleh pengelola.</li>
                        <li>Dilarang berbuat onar dan tindakan tercela lainnya.</li>
                        <li>Penghuni Rusunawa tidak diperkenankan membawa tamu (wanita/pria) ke dalam satuan
                            Rusunawa untuk diinapkan, kecuali telah mendapat izin dari pengelola, dengan memperlihatkan surat bukti diri yang bersangkutan.</li>
                        <li>Penghuni satuan Rusunawa dilarang melakukan perbuatan zina di dalam satuan Rusunawa dan jika diketahui oleh pengelola, maka penghuni bersedia untuk dikeluarkan dari daftar penghuni satuan Rumah Susun Sederhana Sewa setelah memenuhi kewajiban.</li>
                        <li>Penghuni satuan Rusunawa tidak boleh mengalihkan hak sewa kepada pihak lain, atau menyewakan kembali kepada pihak lain.</li>
                        <li>Satuan Rusunawa tidak boleh dialih fungsikan menjadi gudang atau tempat penumpukan barang sejenisnya.</li>
                        <li>Ketentuan — ketentuan lain yang diatur dalam Perjanjian Sewa Menyewa Rusunawa dan
                            diberlakukan oleh Badan Pengelola.</li>
                    </ol>
                </td>
            </tr>
        </table><br><br>
        <table border="0">
            <tr>
                <td class="text-kanan">Balikpapan, .......................,20.....<br>Menyetujui,<br>Pemohon Rusunawa<br><br><br><br>
                    <font style="text-decoration:underline;">{{ $pendaftaran->nama_lengkap }}</font>
                </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <!-- Kontrak -->
    <div>
        <table border="0">
            <tr>
                <td>
                    <center>
                        <font size="4"><b>PEMERINTAH KOTA BALIKPAPAN</b></font><br>
                        <font size="5"><b>DINAS PERUMAHAN DAN PERMUKIMAN</b></font><br>
                        <font size="2">Jl. Ruhui Rahayu 1 No. 10 Telp. (0542) 874091 Fax. (0542) 874085</font><br>
                        <font size="3">Balikpapan</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td class="text-judul">KONTRAK PERJANJIAN SEWA MENYEWA<br>RUMAH SUSUN SEDERHANA SEWA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Pada hari ini, .........................., tanggal ........................., tahun ........, yang bertanda tangan di bawah ini:</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>Tuan SUTARNO, Jabatan Kepala Unit Pelaksana Teknis Rusunawa, dalam hal ini bertindak dan atas nama Dinas Perumahan dan Permukiman, yang berkedudukan di Kota Balikpapan selanjutnya disebut PIHAK PERTAMA;</li>
                        <li>Tuan {{ $pendaftaran->nama_lengkap }}, Pekerjaan {{ $pendaftaran->pekerjaan}}, bertempat tinggal di {{ $pendaftaran->alamat}} , Kartu Tanda Penduduk Nomor {{ $pendaftaran->no_ktp}}, dalam hal ini bertindak untuk dan atas nama Pribadi selanjutnya disebut PIHAK KEDUA;
                        </li>
                    </ol>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Para pihak terlebih dahulu menerangkan:</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>
                            Bahwa PIHAK KEDUA telah sepakat kepada PIHAK PERTAMA untuk menyewa rumah susun sederhana sewa, sebagaimana PIHAK KEDUA telah mengajukan pendaftaran dan permohonan Nomor formulir ..........................., tanggal ..........................
                        </li>
                        <li>Bahwa PIHAK PERTAMA telah menyetujui permohonan PIHAK KEDUA sebagaimana surat penunjukan penghunian, Nomor ........................., tanggal ............................., Surat Izin Penghunian Rumah Susun Sederhana Sewa Nomor ........................., tanggal ..............................</li>
                        <li>PIHAK KEDUA sepakat dan tunduk kepada seluruh tata tertib serta ketentuan-ketentuan yang berkaitan dengan sistem dan prosedur penyewaan Rusunawa, serta seluruh ketentuan perundang-undangan yang berlaku dalam wilayah Republik Indonesia.</li>
                        <li>PIHAK KEDUA sepakat kepada PIHAK PERTAMA bahwa selama jangka waktu ......................, tidak boleh menyewakan kembali kepada pihak lain tanpa persetujuan tertulis dari pengelola Rusunawa.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Maka kedua belah pihak dengan pertimbangan-pertimbangan tersebut di atas sepakat untuk mengadakan perjanjian sewa menyewa dengan syarat-syarat dan ketentuan-ketentuan sebagai berikut:</td>
            </tr>
        </table><br>
        <!-- Pasal 1 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 1<br>KETENTUAN UMUM</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Kata-kata yang tercantum dalam perjanjian ini harus diartikan:</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li>Perjanjian Sewa Menyewa Rumah Susun Sederhana Sewa berarti perjanjian antara PIHAK PERTAMA dengan PIHAK KEDUA, dan tidak mengenal adanya pihak lain dalam perjanjian ini maupun pengalihan sewa menyewa kepada pihak lain.</li>
                        <li>Sewa Menyewa Rusunawa berarti perjanjian ini termasuk semua perubahan, penambahan dan atau semua lampiran-lampirannya, yang semuanya merupakan bagian dan satu kesatuan yang tidak terpisahkan dengan perjanjian inl.</li>
                        <li>Biaya rumah susun sewa semua rekening listrik, rekening PDAM, iuran keamanan & iuran pengelolaan yang harus dibayar oleh penyewa/penghuni.</li>
                        <li>Masa sewa diperkenankan 3 (tiga) tahun dan dapat diperpanjang kembali apabila masih memenuhi persyaratan.</li>
                        <li>Penyewa adalah penghuni/penyewa yang membayar biaya sewa dan telah mendapat persetujuan tertulis dari Pengelola Rusunawa untuk dapat menempati dan bertempat tinggal sementara untuk jangka waktu didalam perjanjian ini.</li>
                        <li>Penghuni Rusunawa hanya diperuntukkan bagi Penyewa yang berstatus telah menikah dan dibuktikan dengan memperlihatkan Buku Nikah serta menyerahkan copy Buku Nikah yang telah dilegalisir oleh KUA.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <div class="page-break"></div>
        <!-- Pasal 2 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 2<br>BIAYA SEWA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>PIHAK KEDUA wajib membayar sewa rumah sebagaimana dimaksud pada Pasal 1 ayat (3) perjanjian ini kepada PIHAK PERTAMA sebesar Rp. ..............................( ...................................................................) per ................................ yang harus dibayar pada bulan jatuh tempo, serta uang jaminan sewa sebesar Rp. ....................................... (.....................................................................) pada saat perianjian sewa menyewa ditanda-tangani oleh penyewa.</li>
                        <li>Uang Jaminan Sewa disetorkan ke Bank Kaltim atas nama UPT Rusunawa DISPERKIM Kota Balikpapan dengan nomer Rekening 0031452431</li>
                        <li>Seluruh transaksi pembayaran yang dilakukan oleh PIHAK KEDUA kepada PIHAK PERTAMA, maka PIHAK PERTAMA wajib memberikan bukti kartu pembayaran kepada PIHAK KEDUA sebagai bukti pembayaran sah atas perbuatan sewa yang telah dilaksanakan.</li>
                        <li>Apabila pembayaran sewa menyewa mengalami keterlambatan 7 (tujuh) hari setelah jatuh tempo yang wajib dibayarkan oleh PIHAK KEDUA, maka PIHAK KEDUA wajib membayar denda keterlambatan sebesar 2% (dua persen) dari total sewa kepada PIHAK PERTAMA.</li>
                        <li>Bahwa PIHAK PERTAMA berhak untuk meninjau kembali biaya sewa pada saat perpanjangan sewa berikutnya kepada PIHAK KEDUA.</li>
                    </ol>
                </td>
            </tr>
        </table><br>
        <!-- Pasal 3 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 3<br>HAK DAN KEWAJIBAN PIHAK PERTAMA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Bahwa selama jangka waktu berlakunya perjanjian sewa menyewa ini berlangsung maka PIHAK PERTAMA berhak dan berkewajiban:</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li>PIHAK PERTAMA berkewajiban melakukan pemeriksaan dan perbaikan secara teratur dan mendadak terhadap; saluran air hujan, saluran air limbah, saluran limbah tinja, saluran listrik, dinding luar dan penerangan jalan/tangga menuju ruangan penyewa/penghuni, pipa-pipa plumbing.</li>
                        <li>PIHAK PERTAMA berkewajiban menjaga keamanan di lingkungan rumah susun sederhana sewa, menjaga kualitas lingkungan yang bersih hijau dan asri.</li>
                        <li>PIHAK PERTAMA berkewajiban menegur PIHAK KEDUA bila dianggap perlu apabila PIHAK KEDUA membuat kegaduhan/kerusuhan dan atau pengerusakan fasilitas rumah susun,</li>
                        <li>PIHAK PERTAMA berhak untuk melakukan sanksi-sanksi pelanggaran tata tertib rumah susun kepada PIHAK KEDUA bila hal itu terjadi.</li>
                        <li>PIHAK PERTAMA berhak melakukan pemungutan iuran-iuran lain, pemeliharaan keamanan dan uang sewa serta denda.</li>
                    </ol>
                </td>
            </tr>
        </table><br>
        <!-- Pasal 4 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 4<br>HAK DAN KEWAJIBAN PIHAK KEDUA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Bahwa selama jangka waktu berlakunya perjanjian sewa menyewa ini berlangsung maka PIHAK KEDUA berhak dan berkewajiban:</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li>Menempati satuan rumah susun sewa yang dimaksud untuk keperluan tempat tinggal sebagaimana dimaksud Pasal 1 akta Perjanjian ini.</li>
                        <li>Berhak untuk menggunakan fasilitas umum di lingkungan Rumah Susun Sederhana Sewa.</li>
                        <li>Membayar sewa dan segala iuran yang ditetapkan sesuai dengan peraturan yang berlaku.</li>
                        <li>Membayar rekening listrik, air bersih (PDAM) sesuai dengan pemakaian PIHAK KEDUA dan ketentuan berlaku.</li>
                        <li>Membuang sampah setiap hari pada tempat yang disediakan untuk itu, dengan membungkusnya ke dalam plastik secara rapih dan tidak berantakan.</li>
                        <li>Wajib melaporkan kepada PIHAK PERTAMA apabila kedatangan tamu dari luar yang akan menginap di ruangan PIHAK KEDUA dalam waktu 1 x 24 Jam.</li>
                        <li>Melampirkan copy Buku Nikah.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <div class="page-break"></div>
        <!-- Pasal 5 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 5<br>LARANGAN-LARANGAN</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Bahwa selama jangka waktu berlakunya perjanjian sewa menyewa ini berlangsung maka PIHAK KEDUA dilarang:</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li>Menyewakan atau memindah tangankan sewa menyewa dimaksud kepada pihak lain dengan alasan apapun.</li>
                        <li>Melanggar tata tertib penghunian rusunawa.</li>
                        <li>Melakukan tindakan agitasi (hasutan) kepada sesama penghuni rusunawa yang bertujuan merongrong kebijakan Pemerintah Kota Balikpapan, khususnya dalam pengelolaan rusunawa.</li>
                        <li>Melakukan perubahan/perombakan bangunan rumah sewa dimaksudkan dalam bentuk apapun.</li>
                        <li>Menyimpan/mengijinkan penyimpangan segala bahan bersifat eksplosive, segala bahan kimia yang mudah terbakar atau bahan lainnya yang dapat menyebabkan bahaya terhadap rumah susun sederhana sewa atau penghuni lainnya.</li>
                        <li>Melakukan perbuatan perjudian atau bermain dengan menggunakan taruhan uang atau barang, meminum-minuman keras.</li>
                        <li>Membawa minuman keras, mengajak orang lain untuk minum-minuman keras.</li>
                        <li>Melakukan perbuatan maksiat yang melanggar kesusilaan umum dan agama.</li>
                        <li>Mengadakan pertemuan untuk berbuat pelanggaran kriminal, terorisme dan politik.</li>
                        <li>Melakukan perbuatan onar, berkelahi dengan penghuni lain di lingkungan Rumah Susun Sederhana Sewa.</li>
                        <li>Memelihara hewan peliharaan anjing, kucing, binatang primata, binatang liar lainnya, kecuali burung dalam
                            sangkar, ikan di dalam aquarium.</li>
                        <li>Membawa, meletakkan, menaruh benda/barang yang beratnya melampaui batas yang telah ditentukan sehingga dapat membahayakan konstruksi bangunan rumah susun sederhana sewa.</li>
                        <li>Membawa, meletakkan, menaruh benda/barang yang beratnya melampaui batas yang telah ditentukan sehingga dapat membahayakan konstruksi bangunan rumah susun sederhana sewa.</li>
                        <li>Membuang barang atau segala sesuatu secara sembarangan, lebih-lebih dari tingkat atas ke bawah.</li>
                        <li>Mengganggu dan segala perbuatan atau tindakan yang dilakukan oleh PIHAK KEDUA kepada PIHAK PERTAMA pada saat perbaikan/pemeliharaan ruangan rumah susun.</li>
                        <li>Menghalangi, menutup atau meletakkan barang di ruang umum, tangga dan tempat fasilitas bersama lainnya.</li>
                        <li>Melakukan kegiatan transaksi atau memakai dan atau penyalahgunaan narkotika dan obat-obatan keras yang dilarang oleh peraturan perundang-undangan.
                        </li>
                    </ol>
                </td>
            </tr>
        </table><br>
        <!-- Pasal 6 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 6<br>PENGALIHAN</td>
            </tr>
            <tr>
                <td>Perjanjian Sewa Menyewa ini tidak dapat dialilhkan baik untuk sebagian maupun untuk keseluruhannya dengan alasan apapun.</td>
            </tr>
        </table><br>
        <!-- Pasal 7 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 7<br>SANKSI-SANKSI</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>
                    <ol>
                        <li>PIHAK KEDUA sepakat apabila PIHAK KEDUA lalai atau disengaja melakukan pelanggaran salah satu ayat pada Pasal (4) dan salah satu ayat pada Pasal (5), maka seketika itu juga Perjanjian Sewa Menyewa ini menjadi batal demi hukum, dan PIHAK KEDUA bersedia memberi penggantian kerugian kepada PIHAK PERTAMA sebesar jaminan sewa.</li>
                        <li>Apabila dalam jangka waktu satu bulan sejak penandatanganan perjanjian ini PIHAK KEDUA tidak atau belum melaksanakan hunian, maka PIHAK PERTAMA secara sepihak dapat membatalkan Akta Perjanjian Sewa Menyewa ini, dan uang sewa berikut jaminan sewa yang telah disetorkan dan diterima PIHAK PERTAMA akan dikembalikan kepada PIHAK KEDUA setelah dipotong biaya administrasi.</li>
                        <li>PIHAK KEDUA sepakat dan segera meninggalkan ruangan satuan rumah susun dengan seluruh barang-barang miliknya dalam jangka waktu 7 (tujuh) hari setelah memutuskan sewa dan menyerahkan kunci beserta seluruh perlengkapan rumah kepada PIHAK PERTAMA.</li>
                        <li>PIHAK KEDUA sepakat dan segera mengosongkan ruangan satuan rumah susun beserta seluruh barang- barang miliknya, jika melanggar ketentuan salah satu ayat pada Pasal (4) dan salah satu ayat pada Pasal (5) serta menyelesaikan seluruh tanggungan biaya sewa, beban biaya listrik dan air akibat pemakaian rutin oleh PIHAK KEDUA.</li>
                    </ol>
                </td>
            </tr>
        </table>
        <div class="page-break"></div>
        <!-- Pasal 8 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 8</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>PIHAK KEDUA sepakat untuk mengesampingkan Pasal 1266 dan Pasal 1267 Kitab Undang-Undang Hukum Perdata dalam rangka pembatalan sepihak oleh PIHAK PERTAMA kepada PIHAK KEOUA dalam perjanjian sewa menyewa rumah susun sewa.</td>
            </tr>
        </table><br>
        <!-- Pasal 9 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 9<br>DOMISILI</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>PIHAK PERTAMA dan PIHAK KEDUA sepakat untuk memilih domisili yang letap dan tidak berubah kepada Kantor Kepaniteraan Pengadilan Negeri Kota Balikpapan dimana lokasi rumah susun didirikan.</td>
            </tr>
        </table><br>
        <!-- Pasal 10 -->
        <table border="0">
            <tr>
                <td class="text-pasal">Pasal 10<br>PERSELISIHAN</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td>Setiap sengketa, perbedaan pendapat ataupun tuntutan salah satu pihak terhadap hal-hal yang timbul berkenaan dengan kesepakatan ini, akan diselesaikan dengan musyawarah.</td>
            </tr>
        </table><br>
        <table border="0">
            <tr>
                <td>Demikian Akta Perjanjian ini dibuat dalam rangkap 2 (dua) bermaterai cukup dan masing-masing mempunyai kekuatan hukum yang sama.</td>
            </tr>
        </table><br>
        <table border="0">
            <tr>
                <td width="50%" class="text-center"><b>PIHAK KEDUA</b></td>
                <td width="50%" class="text-center"><b>PIHAK PERTAMA</b></td>
            </tr>
            <tr>
                <td width="50%" class="text-center"></td>
                <td width="50%" class="text-center">KEPALA UNIT PELAKSANA TEKNIS<br>PENGELOLA RUSUNAWA</td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="7%"></td>
                <td>
                    <font size="xx-small">Materai<br>Rp10.000</font>
                </td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="50%" class="text-center">({{ $pendaftaran->nama_lengkap }})</td>
                <td width="50%" class="text-center">(Sutarno, S.T.)</td>
            </tr>
            <tr>
                <td width="50%">Nama: {{ $pendaftaran->nama_lengkap }}</td>
                <td width="50%">Nama: Sutarno<br>Jabatan: Ka. UPTD Rusunawa</td>
            </tr>
        </table>
    </div>
</body>

</html>
