@extends('layouts.include.admin.navbar')

@section('isi')

<h1 class="mb-4 text-center mt-3">Data Buku</h1>
    <div class="bg-secondary rounded h-100 p-4">
        <div class="form-group">
            <a href="{{ url('admin/buku/create') }}" class="btn btn-outline-success m-2"><i class='bx bx-plus'></i> Tambah Data</a>
            <input type="text" name="search" id="search" placeholder="Cari siswa...." class="form-controller" onkeyup="fetchData()">
        </div>
        <div class="table-responsive ">
            <table class="table table-bordered" id="DataTable">
                <thead class="text-center bg-dark">
                    <tr>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle" id="tbodyfordata">
                    {{-- @foreach ($data3 as $item)
                        <tr>
                            <td>{{ $item['nis'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['alamat'] }}</td>
                            <td>{{ $item->sekolah['nama_sekolah'] }}</td>
                            <td class="d-flex"><a href=""class="btn btn-outline-warning m-2"><i class='bx bxs-pen'></i></a>
                                <a href="" class="btn btn-outline-primary m-2" onclick="return confirm('Anda yakin?')"><i
                                        class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

@endsection