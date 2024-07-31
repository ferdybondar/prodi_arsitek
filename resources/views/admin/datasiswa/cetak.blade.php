<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <table class="static" rules="all" border="1px" style="width: 100%;">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    </tr>
                    @foreach ($datasiswa as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}} 
                        <td>{{$item->nis}}
                        <td>{{$item->kelas}}
                        <td>{{$item->tanggal_lahir}}
                        <td>{{$item->alamat}}
                        <td>{{$item->jenis_kelamin}}
                        <td>{{$item->agama}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                <script type="text/javascript">
                    window.print();
                </script>
</body>
</html>