@extends('layouts.admin')
@section('judul_halaman', 'Gallery')
@section('style')
    <style>
        .tombol-hapus {
            font-size: 26px;
            position: absolute;
            border-radius: 4px 0 0 0;
            bottom: 0;
            right: 0;
            padding: 10px;
            background-color: #fff;
            opacity: 50%;
            transition: all 400ms ease-in-out;
        }

        .tombol-hapus:hover {
            opacity: 100%;
            color: rgb(218, 10, 10);
            padding: 14px;
            right: 4;
            bottom: 4;
        }
    </style>
@endsection

@section('content-admin')
    <div class="row">

        <div class="card border-0 sahdow">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>
                        Tambah
                        Gambar</button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Gambar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('simpan-gambar') }}" method="post" enctype="multipart/form-data"
                                    class="dropzone" id="image-upload">
                                    @csrf
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('gallery') }}" class="btn btn-primary w-100">Refresh</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-100 bg-secondary mb-3" style="padding-top: 2px"></div>

                <div class="row">
                    @forelse ($gambar as $data)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 gambar">
                            <div class="card rounded-0">
                                <img src="{{ asset('images/gallery/' . $data->gambar) }}" class="card-img-top"
                                    alt="Gambar">
                                <a href="{{ route('hapus-gambar', $data->id) }}" class="delete tombol-hapus">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="row justify-content-end">
                    <div>{{ $gambar->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endpush
@section('script')
    <script>
        Dropzone.options.imageUpload = {
            maxFileSize: 3,
            maxFiles: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            dictDefaultMessage: "Seret gambar ke sini untuk mengunggah (maks. ukuran file: 3 MB)",
            dictMaxFilesExceeded: "Anda telah mencapai maksimum upload gambar",
            dictInvalidFileType: "Tipe file tidak didukung",
        };
    </script>
@endsection
