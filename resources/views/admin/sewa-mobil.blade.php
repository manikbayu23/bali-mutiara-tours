@extends('layouts.main')

@extends('layouts.admin')

@section('content-admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Sewa Mobil</h2>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#staticBackdrop"><i class="fa fa-plus"></i>
                                    Tambah
                                    Mobil</button>
                            </div>

                            {{-- modal tambah data --}}
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('tambah-mobil') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Mobil</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="">Nama Mobil</label>
                                                    <input type="text" name="nama_mobil" class="form-control"
                                                        id="">
                                                    @error('nama_destinasi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="harga">Harga</label>
                                                    <input type="number" name="harga_sewa" class="form-control"
                                                        id="harga">
                                                    @error('harga_sewa')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                </div>

                                                <div class="form-group">
                                                    <label for="foto_mobil">Foto</label>
                                                    <input type="file" name="foto_mobil" class="form-control"
                                                        id="foto_mobil" accept="image/*">
                                                    @error('foto_mobil')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Mobil</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = ($mobil->currentPage() - 1) * $mobil->perPage() + 1)
                                        @forelse ($mobil as $row)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->nama_mobil }}</td>
                                                <td>{{ $row->harga_sewa }}</td>
                                                <td><img src="{{ asset('images/mobil/' . $row->foto_mobil) }}"
                                                        width="200px" class="img-fluid" alt="{{ $row->foto_mobil }}">

                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <button data-toggle="modal" data-target="#edit{{ $row->id }}"
                                                            class="btn btn-warning mr-2"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i>
                                                            Edit</button>
                                                        <a href="#" data-nama="{{ $row->nama_mobil }}"
                                                            data-id="{{ $row->id }}" class="btn btn-danger delete"><i
                                                                class="fa fa-trash" aria-hidden="true"></i>
                                                            Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- modal edit data --}}
                                            <div class="modal fade" id="edit{{ $row->id }}" data-backdrop="static"
                                                data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/admin/update-mobil/{{ $row->slug }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                                    Mobil</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="">Nama Mobil</label>
                                                                    <input type="text" name="nama_mobil"
                                                                        class="form-control" id=""
                                                                        value="{{ $row->nama_mobil }}">
                                                                    @error('nama_destinasi')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">Harga</label>
                                                                    <input type="text" name="harga_sewa"
                                                                        class="form-control" id=""
                                                                        value="{{ $row->harga_sewa }}">
                                                                    @error('harga_sewa')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="foto_mobil">Foto Mobil</label>
                                                                    <input type="file" name="foto_mobil"
                                                                        class="form-control" id="foto_mobil"
                                                                        value="{{ $row->foto_mobil }}" accept="image/*">
                                                                    @if ($row->foto_mobil)
                                                                        <div class="mt-2">
                                                                            <p>Foto saat ini:</p>
                                                                            <img src="{{ asset('images/mobil/' . $row->foto_mobil) }}"
                                                                                alt="{{ $row->nama_mobil }}"
                                                                                style="max-width: 300px;">
                                                                        </div>
                                                                    @endif
                                                                    @error('foto_mobil')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-save"></i>
                                                                    Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <div class="alert alert-info">Tidak Ada Data</div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $mobil->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id')
            var nama = $(this).attr('data-nama')

            swalWithBootstrapButtons.fire({
                title: 'Yakin?',
                text: "Anda Ingin Menghapus Mobil " + nama + " ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/hapus-mobil/" + id
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Mobil Berhasil di Hapus',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Mobil Batal di Hapus ',
                        'error'
                    )
                }
            });
        });
    </script>
@endsection
