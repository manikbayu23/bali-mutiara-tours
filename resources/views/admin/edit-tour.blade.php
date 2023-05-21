@extends('layouts.admin')

@section('content-admin')
    <div class="row">
        <form action="{{ route('update-tour', $tour->slug) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h2 class="m-2">Edit Tour</h2>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Nama Tour :</label>
                        <input type="text" name="nama_tour" id="nama-tour"
                            class="form-control @error('nama_tour') is-invalid @enderror" value="{{ $tour->nama_tour }}">
                        @error('nama_tour')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-4">
                            <label for="durasi" class="form-label">Durasi :</label>
                            <input type="text" name="durasi" id="durasi"
                                class="form-control @error('durasi') is-invalid @enderror" value="{{ $tour->durasi }}">
                            @error('durasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="harga" class="form-label">Harga Utama :</label>
                            <input type="text" name="harga_utama" id="harga"
                                class="form-control @error('harga_utama') is-invalid @enderror"
                                value="{{ $tour->harga_utama }}">
                            @error('harga_utama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-2">
                            <label for="persentase" class="form-label">Diskon (%) :</label>
                            <input type="number" class="form-control" name="persentase" id="persentase">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="harga_diskon" class="form-label">Harga Diskon :</label>
                            <input type="text" class="form-control" name="harga_diskon" id="harga_diskon">
                        </div>

                        <script>
                            const hargaInput = document.getElementById('harga');
                            const diskonInput = document.getElementById('persentase');
                            const hargaDiskonInput = document.getElementById('harga_diskon');

                            const calculateDiscountedPrice = function() {
                                const harga = parseFloat(hargaInput.value);
                                const diskon = parseFloat(diskonInput.value);

                                const hargaDiskon = harga - (harga * diskon / 100);
                                hargaDiskonInput.value = `${hargaDiskon.toLocaleString("en-US",  {maximumFractionDigits: 2})}`;
                            };

                            hargaInput.addEventListener('input', calculateDiscountedPrice);
                            diskonInput.addEventListener('input', calculateDiscountedPrice);
                        </script>

                        <div class="mb-3 col-lg-6">
                            <label for="lokasi" class="form-label">Lokasi :</label>
                            <select class="form-control @error('lokasi') is-invalid @enderror" name="lokasi"
                                id="exampleFormControlSelect1">
                                <option value="">--- Pilih Lokasi ---</option>
                                <option value="Bali" {{ $tour->lokasi == 'Bali' ? 'selected' : '' }}>Bali
                                </option>
                                <option value="Nusa Penida" {{ $tour->lokasi == 'Nusa Penida' ? 'selected' : '' }}>Nusa
                                    Penida</option>
                                <option value="Lombok" {{ $tour->lokasi == 'Lombok' ? 'selected' : '' }}>Lombok
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
                                <option value="1" {{ $tour->rating == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $tour->rating == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $tour->rating == '3' ? 'selected' : '' }}>3</option>
                                <option value="4" {{ $tour->rating == '4' ? 'selected' : '' }}>4</option>
                                <option value="5" {{ $tour->rating == '5' ? 'selected' : '' }}>5</option>
                            </select>
                            @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <div class="card-body" style="max-height: 300px; overflow: auto;">
                            <label for="" class="form-label">Destinasi :</label>
                            @foreach ($destinasi as $destination)
                                <div class="form-check">
                                    <input class="form-check-input" name="id_destinasi[]" type="checkbox"
                                        value="{{ $destination->id }}"
                                        {{ in_array($destination->id, $id_destinasi) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        {{ $destination->nama_destinasi }}
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
                    <div class="card p-4">
                        <div class="card-body" style="max-height: 300px; overflow: auto;">
                            <label for="nama-tour" class="form-label">Kategori :</label>
                            @foreach ($kategori as $kategori)
                                <div class="form-check">
                                    <input class="form-check-input" name="id_kategori[]" type="checkbox"
                                        value="{{ $kategori->id }}" id="flexCheckChecked"
                                        {{ in_array($kategori->id, $id_kategori) ? 'checked' : '' }}>
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
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Deskripsi :</label>
                        <textarea name="deskripsi" id="deskripsi" class="ckeditor form-control @error('deskripsi') is-invalid @enderror"
                            cols="30" rows="10">{{ $tour->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Tabel Harga :</label>
                        <textarea name="tabel_harga" id="tabel_harga" class=" form-control @error('tabel_harga') is-invalid @enderror"
                            cols="30" rows="10">{{ $tour->tabel_harga }}</textarea>
                        @error('tabel_harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Head Keyword :</label>
                        <textarea name="head_keyword" id="head_keyword" class="form-control @error('head_keyword') is-invalid @enderror"
                            cols="30" rows="5">{{ $tour->head_keyword }}</textarea>
                        @error('head_keyword')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Head Deskripsi :</label>
                        <textarea name="head_deskripsi" id="head_deskripsi"
                            class="form-control @error('head_deskripsi') is-invalid @enderror" cols="30" rows="5">{{ $tour->head_deskripsi }}</textarea>
                        @error('head_deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama-tour" class="form-label">Gambar Utama :</label>
                        <div class="d-block">
                            <div class="mb-2">
                                <img src="{{ asset('/images/gallery/' . $tour->id_gambar) }}" width="200px"
                                    class="img-fluid" id="gambarDipilih">
                            </div>
                            <div class="">
                                <input type="text" name="id_gambar" id="gambar" class="btn btn-outline-warning"
                                    data-bs-toggle="modal" data-bs-target="#modalGaleri"
                                    placeholder="{{ $tour->id_gambar }}" value="{{ $tour->id_gambar }}" readonly>
                                @error('id_gambar')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for=""></label>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-3 ml-2"><i class="fa-solid fa-save"></i>
                            Simpan Perubahan</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
            // Tutup modal
            $('#modalGaleri').modal('hide');
        }
    </script>
@endsection
