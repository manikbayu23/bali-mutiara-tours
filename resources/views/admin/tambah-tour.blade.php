@extends('layouts.admin')

@section('judul_halaman', 'Tambah Tour')

@section('style')
    <style>
        #gambarDipilih {
            display: none;
        }
    </style>
@endsection


@section('content-admin')
    <div class="row">
        <form action="{{ route('input-tour') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card p-4 mb-3 border-0 shadow">
                <div class="card-body">
                    <a href="{{ route('paket-tour') }}" class="link-offset-2  mb-4"><i class="fa-solid fa-arrow-left"></i>
                        Kembali</a>

                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Nama Tour :</label>
                        <input type="text" name="nama_tour" id="nama-tour"
                            class="form-control @error('nama_tour') is-invalid @enderror" value="{{ old('nama_tour') }}">
                        @error('nama_tour')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="durasi" class="form-label">Durasi :</label>
                            <input type="text" name="durasi" id="durasi"
                                class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi') }}">
                            @error('durasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="harga" class="form-label">Harga Utama :</label>
                            <input type="text" name="harga_utama" id="harga"
                                class="form-control @error('harga_utama') is-invalid @enderror"
                                value="{{ old('harga_utama') }}">
                            @error('harga_utama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="lokasi" class="form-label">Lokasi :</label>
                            <select class="form-control @error('lokasi') is-invalid @enderror" name="lokasi"
                                id="exampleFormControlSelect1">
                                <option value="">--- Pilih Lokasi ---</option>
                                <option value="Bali" {{ old('lokasi') == 'Bali' ? 'selected' : '' }}>Bali
                                </option>
                                <option value="Nusa Penida" {{ old('lokasi') == 'Nusa Penida' ? 'selected' : '' }}>Nusa
                                    Penida</option>
                                <option value="Lombok" {{ old('lokasi') == 'Lombok' ? 'selected' : '' }}>Lombok
                                </option>
                            </select>
                            @error('lokasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="rating" class="form-label">Rating :</label>
                            <select class="form-control  @error('rating') is-invalid @enderror" name="rating"
                                id="exampleFormControlSelect1">
                                <option value="">--- Pilih Rating ---</option>
                                <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>5</option>
                            </select>
                            @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 ">
                    <div class="card p-4  border-0 shadow">
                        <div class="card-body " style="max-height: 300px; overflow: auto;">
                            <label for="" class="form-label">Destinasi :</label>
                            @foreach ($destinasi as $destinasi)
                                <div class="form-check">
                                    <input class="form-check-input" name="id_destinasi[]" type="checkbox"
                                        value="{{ $destinasi->id }}" id="flexCheckChecked"
                                        {{ in_array($destinasi->id, old('id_destinasi', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        {{ $destinasi->nama_destinasi }}
                                    </label>
                                </div>
                            @endforeach
                            @error('id_destinasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4  border-0 shadow">
                        <div class="card-body" style="max-height: 300px; overflow: auto;">
                            <label for="nama-tour" class="form-label">Kategori :</label>
                            @foreach ($kategori as $kategori)
                                <div class="form-check">
                                    <input class="form-check-input" name="id_kategori[]" type="checkbox"
                                        value="{{ $kategori->id }}" id="flexCheckChecked"
                                        {{ in_array($kategori->id, old('id_kategori', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        {{ $kategori->nama_kategori }} - {{ $kategori->kategori_tour }}
                                    </label>
                                </div>
                            @endforeach
                            @error('id_kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body p-4  ">
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Deskripsi :</label>
                        <textarea name="deskripsi" id="deskripsi" class="ckeditor form-control @error('deskripsi') is-invalid @enderror"
                            cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Tabel Harga :</label>
                        <textarea name="tabel_harga" id="tabel_harga"
                            class="ckeditor form-control @error('tabel_harga') is-invalid @enderror" cols="30" rows="10">{{ old('tabel_harga') }}</textarea>
                        @error('tabel_harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Head Keyword :</label>
                        <textarea name="head_keyword" id="head_keyword" class="form-control @error('head_keyword') is-invalid @enderror"
                            cols="30" rows="5">{{ old('head_deskripsi') }}</textarea>
                        @error('head_keyword')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Head Deskripsi :</label>
                        <textarea name="head_deskripsi" id="head_deskripsi"
                            class="form-control @error('head_deskripsi') is-invalid @enderror" cols="30" rows="5">{{ old('head_deskripsi') }}</textarea>
                        @error('head_deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Gambar Utama :</label>
                        <div class="d-block">
                            <div class="mb-2">
                                <img src="" width="200px" class="img-fluid" id="gambarDipilih">
                            </div>
                            <div class="">
                                <input type="text" name="id_gambar" id="gambar" class="btn btn-outline-warning"
                                    data-bs-toggle="modal" data-bs-target="#modalGaleri"
                                    placeholder="Tambah Gambar Utama" readonly>
                                @error('id_gambar')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-3 ml-2"><i class="fa-solid fa-save"></i>
                            Simpan dan Terbitkan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="modal" id="modalGaleri" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($gallery as $foto)
                            <div class="col-2">
                                <div class="card card-rounded-0">
                                    <img src="{{ asset('images/gallery/' . $foto->gambar) }}"
                                        alt="{{ asset('images/gallery/' . $foto->gambar) }}" class="img-thumbnail"
                                        style="cursor: pointer;" onclick="pilihGambar('{{ $foto->gambar }}')">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function pilihGambar(namaFile) {
            // Set nilai input gambar dengan nama file yang dipilih
            document.getElementById('gambar').value = namaFile;
            // Mengganti sumber gambar pada tag img di form
            document.getElementById('gambarDipilih').src = "{{ asset('images/gallery/') }}" + '/' + namaFile;
            // Menampilkan tag img yang sebelumnya hidden
            document.getElementById('gambarDipilih').style.display = "block";
            // Tutup modal
            $('#modalGaleri').modal('hide');
        }
    </script>
@endsection
