@extends('layouts.admin')
@section('judul_halaman', 'Destinasi')

@section('content-admin')

    <div class="row ">
        <div class="card p-4 border-0 shadow">
            <div class="card-body">

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>
                        Tambah
                        Destinasi</button>
                </div>

                {{-- modal tambah data --}}
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('simpan-destinasi') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Destinasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Kategori Destinasi</label>
                                        <select class="form-control" name="kategori_destinasi"
                                            id="exampleFormControlSelect1" required>
                                            <option>--pilih kategori destinasi--</option>
                                            <option value="Bali">Bali</option>
                                            <option value="Lombok">Lombok</option>
                                            <option value="Nusa Penida">Nusa Penida</option>
                                        </select>
                                        @error('kategori_destinasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Destinasi</label>
                                        <input type="text" name="nama_destinasi" class="form-control" id=""
                                            required>
                                        @error('nama_destinasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa-solidfa-save"></i>
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
                                <th scope="col">Kategori Destinasi</th>
                                <th scope="col">Nama Destinasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($no = ($destinasi->currentPage() - 1) * $destinasi->perPage() + 1)
                            @forelse ($destinasi as $row)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $row->kategori_destinasi }}</td>
                                    <td>{{ $row->nama_destinasi }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"
                                                class="btn btn-warning mr-2"><i class="fa-solid fa-edit"
                                                    aria-hidden="true"></i>
                                                Edit</button>
                                            <a href="#" data-nama="{{ $row->nama_destinasi }}"
                                                data-id="{{ $row->id }}" class="btn btn-danger delete"><i
                                                    class="fa-solid fa-trash" aria-hidden="true"></i>
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
                                            <form action="/admin/update-destinasi/{{ $row->id }}" method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah
                                                        Destinasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>

                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Kategori
                                                            Destinasi</label>
                                                        <select class="form-control" name="kategori_destinasi"
                                                            id="exampleFormControlSelect1">
                                                            <option value="Bali"
                                                                {{ $row->kategori_destinasi == 'Bali' ? 'selected' : '' }}>
                                                                Bali</option>
                                                            <option value="Lombok"
                                                                {{ $row->kategori_destinasi == 'Lombok' ? 'selected' : '' }}>
                                                                Lombok</option>
                                                            <option value="Nusa Penida"
                                                                {{ $row->kategori_destinasi == 'Nusa Penida' ? 'selected' : '' }}>
                                                                Nusa Penida</option>
                                                        </select>
                                                        @error('kategori_destinasi')
                                                            <div class="invalid-feedback">{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Nama Destinasi</label>
                                                        <input type="text" name="nama_destinasi" class="form-control"
                                                            id="" value="{{ $row->nama_destinasi }}">
                                                        @error('nama_destinasi')
                                                            <div class="invalid-feedback">{{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa-solidfa-save"></i>
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
                    {{ $destinasi->links() }}
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
                text: "Anda Ingin Menghapus Destinasi " + nama + " ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/hapus-destinasi/" + id
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Destinasi Berhasil di Hapus',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Destinasi Batal di Hapus ',
                        'error'
                    )
                }
            });
        });
    </script>
@endsection
