<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello ini file pertama saya di view Laravel</h1>
    @php
        $nama = "Agung";
        $nilai = 70.00;
    @endphp
    {{--struktur kendali IF--}}
    @if ($nilai >= 60)
    @php
        $ket = "lulus";
    @endphp
    @else
    @php
        $ket = "tidak lulus";
    @endphp
    @endif

    {{-- memanggil variabel hasil didalam laravel menggunkan kurung kurawal--}}
    {{$nama}} <p> Dengan nilai </p> {{$nilai}} <p>Dinyatakan </p> {{$ket}}


</body>
</html>
