@extends('layouts.app')
 @section('content') 
<a href="{{ url("mahasiwa/create") }}">Tambah Data</a>
<div class="container">
    <h3>Daftar Mahasiswa</h3>
    <table>
        <tr>

            <td>NIM</td>
            <td>JURUSAN</td>
            <td>ALAMAT</td>
            <td>NAMA</td>
            
        </tr>
    
    @foreach($rows as $row)
    <tr>
        <td>{{ $row->mhsw_nim }}</td>
        <td>{{ $row->mhsw_nama }}</td>
        <td>{{ $row->mhsw_jurusan }}</td>
        <td>{{ $row->mhsw_alamat }}</td>
    </tr>
        @endforeach
    </table>
</div>

@endsection