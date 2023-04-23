@extends('layouts.admin')

@section('content-admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Kategori Tour</h2>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#staticBackdrop"><i class="fa fa-plus"></i>
                                    Tambah
                                    Kategori</button>
                            </div>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('simpan-kategori') }}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Jenis Kategori</label>
                                                    <select name="kategori_tour" class="form-control"
                                                        id="exampleFormControlSelect1">
                                                        <option>--pilih jenis kategori--</option>
                                                        <option value="Reguler">Reguler</option>
                                                        <option value="Fantastic">Fantastic</option>
                                                        <option value="Adventure">Adventure</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Kategori</label>
                                                    <input type="text" name="nama_kategori" class="form-control"
                                                        id="">
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
                                            <th scope="col">Jenis Kategori</th>
                                            <th scope="col">Nama Kategori</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = ($kategori->currentPage() - 1) * $kategori->perPage() + 1)
                                        @forelse ($kategori as $row)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->kategori_tour }}</td>
                                                <td>{{ $row->nama_kategori }}</td>
                                                <td>
                                                    <div class="row">
                                                        <button data-toggle="modal" data-target="#edit{{ $row->id }}"
                                                            class="btn btn-warning mr-2"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i>
                                                            Edit</button>
                                                        <a href="#" data-nama="{{ $row->nama_kategori }}"
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
                                                        <form action="/admin/update-kategori/{{ $row->id }}"
                                                            method="post">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah
                                                                    Kategori</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Jenis Kategori
                                                                    </label>
                                                                    <select class="form-control" name="kategori_tour"
                                                                        id="exampleFormControlSelect1">
                                                                        <option value="Reguler"
                                                                            {{ $row->kategori_tour == 'Reguler' ? 'selected' : '' }}>
                                                                            Reguler</option>
                                                                        <option value="Fantastic"
                                                                            {{ $row->kategori_tour == 'Fantastic' ? 'selected' : '' }}>
                                                                            Fantastic</option>
                                                                        <option value="Adventure"
                                                                            {{ $row->kategori_tour == 'Adventure' ? 'selected' : '' }}>
                                                                            Adventure</option>
                                                                    </select>
                                                                    @error('kategori_tour')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nama Kategori</label>
                                                                    <input type="text" name="nama_kategori"
                                                                        class="form-control" id=""
                                                                        value="{{ $row->nama_kategori }}">
                                                                    @error('nama_kategori')
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
                                                <td colspan="4" class="text-center">
                                                    <div class="alert alert-info">Tidak Ada Data</div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $kategori->links() }}
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
                text: "Anda Ingin Menghapus Kategori " + nama + " ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/hapus-kategori/" + id
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Kategori Berhasil di Hapus',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Kategori Batal di Hapus ',
                        'error'
                    )
                }
            });
        });
    </script>
@endsection
