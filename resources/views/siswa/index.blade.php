<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    berhasil
    {{$perkalian}}
    <?php 
    echo $perkalian;
    ?>
    @foreach ($data as $item)
        {{ $item->nama }}
    @endforeach
    <br>

    <table>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jk</th>
        <th>Rayon</th>
    </tr>
    @foreach ($data2 as $d)
    <tr>
        <td>{{$d->nis}}</td>
        <td>{{$d->nama}}</td>
        <td>{{$d->jk}}</td>
        <td>{{$d->rayon}}</td>
    </tr>
@endforeach
</table>

</body>
</html>