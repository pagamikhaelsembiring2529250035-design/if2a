<h1>Data Prodi</h1>

<table border="1" cellpanding="10">
<tr>
    <th>no</th>
    <th>Nama Pordi</th>
    <th>Singkatan</th>
    <th>Kaprodi</th>
    <th>Fakultas</th>
</tr>    


@foreach ($prodis as $key=> $prodi)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$prodi->nama_Prodi}}</td>
        <td>{{$prodi->singkatan}}</td>
        <td>{{$prodi->kaprodi}}</td>
        <td>{{$prodi->fakultas->nama_fakultas ?? "-"}}</td>
    </tr>
@endforeach
</table>