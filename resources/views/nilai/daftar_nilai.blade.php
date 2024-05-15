<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah file kedua</h1>
    @php
        $no = 1;
        $s1 = ['nama' => 'Fawazz', 'nilai' => 70];
        $s2 = ['nama' => 'Ali', 'nilai' => 90];
        $s3 = ['nama' => 'Andi', 'nilai' => 80];
        $s4 = ['nama' => 'Aji', 'nilai' => 60];
        $s5 = ['nama' => 'Ad', 'nilai' => 50];
        $judul = ['No', 'Nama', 'Nilai', 'Keterangan'];

        $siswa = [$s1,$s2,$s3,$s4,$s5];
    @endphp
    <table align="center" border="1" cellpading="10">
        <thead>
            <tr>
                {{-- foreach adalah seubah perulangan yang dimiliki oleh php didalam laravel--}}
                @foreach ($judul as $jd1)
                <th>{{$jd1}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
            @php
                $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';
                $warna = ($no % 2 == 1) ? 'green' : 'red';
            @endphp
            <tr bgcolor="{{$warna}}">
                <td>{{$no++}}</td>
                <td>{{$s['nama']}}</td>
                <td>{{$s['nilai']}}</td>
                <td>{{$ket}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
