<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <center><table align="center" cellpadding="5">
        <h3>Struk Spp </h3>
    @foreach ($laporans as $laporan)
        <tr>
        <td><b>ID Petugas</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->id_petugas }}</td>
    </tr>
    <tr>
        <td><b>Nisn</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->nisn }}</td>
    </tr>
    <tr>
        <td><b>Tanggal Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->tgl_bayar}}</td>
    </tr>
    <tr>
        <td><b>Bulan Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->bulan_dibayar}}</td>
    </tr>
    <tr>
        <td><b>Tahun Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->tahun_dibayar}}</td>
    </tr>
    <tr>
        <td><b>Id Spp</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->id_spp}}</td>
    </tr>
    <tr>
        <td><b>Jumlah Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->jumlah_bayar}}</td>
    </tr>
    {{-- <tr>
        <td><b>Harga</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td><?php echo $uang; ?></td>
    </tr>
    <tr>
        <td style="color:red"><b>Kembalian</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td style="color:red"><?php echo $km; ?></td>
    </tr> --}}
    @endforeach
</table>
</center>

<center>
<p>= = = = = = = = = = = = = = = = = = = = = =</p><br>	
<h3>TERIMA KASIH </h4><br>
</center>

<script type="text/javascript">
window.print();
</script>
</body>
</body>
</html>