@extends('layouts.include.admin.navbar')

@section('isi')
    <h1 class="mb-4 text-center mt-3">Tambah Data Buku</h1>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
            <div class="bg-secondary rounded h-100 row m-4 p-4">
                <div class="form-floating col-md-6 mb-3">
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Judul Buku</label>
                </div>
                <div class="form-floating col-md-6 mb-3">
                    <input type="text" name="pengarang" class="form-control @error('pengarang') is-invalid @enderror" id="floatingInput" placeholder="Pengarang" >
                    <label for="floatingInput">Pengarang</label>
                </div>
                <div class="form-floating col-md-6 mb-3">
                    <input type="number" placeholder="YYYY" min="1900" max="2023" name="tahun" class="form-control @error('alamat') is-invalid @enderror" id="floatingInput" placeholder="Tahun">
                    <label for="floatingInput">Tahun</label>
                </div>
                <div class="form-floating col-md-6 mb-3">
                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror bg-dark text-white" id="floatingInput" placeholder="Cover" >
                    <label for="floatingInput">Cover</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="deskripsi"  class="form-control @error('deskripsi') is-invalid @enderror" id="floatingInput" placeholder="deskripsi">
                    <label for="floatingInput">Deskripsi</label>
                </div>
                <div class="form-floating  mb-3">
                    <select class="form-select @error('sekolah_id') is-invalid @enderror" id="floatingSelect" name="sekolah_id" aria-label="Floating label select example">
                        <option selected>Pilih Kategori</option>
                    </select>
                </div>
                <div class="form-floating col-md-6 mb-3">
                    <input type="number" placeholder="Rp."  name="harga" class="form-control @error('harga') is-invalid @enderror" id="floatingInput" placeholder="Rp.">
                    <label for="floatingInput">Harga Rp.</label>
                </div>
                <div class="form-floating col-md-6 mb-3">
                    <input type="number" placeholder="Status"  name="harga" class="form-control @error('status') is-invalid @enderror" id="floatingInput" placeholder="status">
                    <label for="floatingInput">Status</label>
                </div>
                <div class="form-floating ">
                    <a href="{{ url('admin/buku') }}" class="btn btn-outline-primary m-2">Batal</a>
                    <button type="submit" name="submit" class="btn btn-outline-success m-2">Tambah</button>
                </div>
            </div>
    </form>
@endsection
