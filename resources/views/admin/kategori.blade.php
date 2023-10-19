@extends('layouts.admin')
@section('judul_halaman', 'Kategori')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection
@section('content-admin')
    <div class="row">
        <div class="card p-4 border-0 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary mb-3" id="tambah"><i class="fa-solid fa-plus"></i>
                        Tambah
                        Kategori</button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('simpan-kategori') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kategori</label>
                                        <select name="kategori_tour" class="form-control" id="exampleFormControlSelect1">
                                            <option>--pilih jenis kategori--</option>
                                            <option value="Reguler">Reguler</option>
                                            <option value="Fantastic">Fantastic</option>
                                            <option value="Adventure">Adventure</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <input type="text" name="nama_kategori" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>
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
                        {{-- <tbody>
                            @php($no = ($kategori->currentPage() - 1) * $kategori->perPage() + 1)
                            @forelse ($kategori as $row)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $row->kategori_tour }}</td>
                                    <td>{{ $row->nama_kategori }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"
                                                class="btn btn-warning mr-2"><i class="fa-solid fa-edit"
                                                    aria-hidden="true"></i>
                                                Edit</button>
                                            <a href="#" data-nama="{{ $row->nama_kategori }}"
                                                data-id="{{ $row->id }}" class="btn btn-danger delete"><i
                                                    class="fa-solid fa-trash" aria-hidden="true"></i>
                                                Hapus</a>
                                        </div>
                                    </td>
                                </tr> --}}
                        {{-- modal edit data --}}
                        <div class="modal fade" id="modal-edit" data-backdrop="static" data-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="update-form" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Tambah
                                                Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jenis Kategori
                                                </label>
                                                <select class="form-select" id="jenis_kategori" name="kategori_tour">

                                                    <option value="Reguler">
                                                        Reguler</option>
                                                    <option value="Fantastic">
                                                        Fantastic</option>
                                                    <option value="Adventure">
                                                        Adventure</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Kategori</label>
                                                <input type="text" name="nama_kategori" class="form-control"
                                                    id="nama_kategori" value="">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>
                                                Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{--  @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <div class="alert alert-info">Tidak Ada Data</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody> --}}
                    </table>
                    {{-- {{ $kategori->links() }}  --}}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        // tampilkan data table
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('kategori.list') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    }, {
                        data: 'kategori_tour',
                        name: 'kategori_tour',
                    },
                    {
                        data: 'nama_kategori',
                        name: 'nama_kategori',
                    },
                    {
                        data: 'id',
                        render: function(data, type, row) {
                            return '<button id="edit" data-nama = "' +
                                row.nama_kategori +
                                '" data-id="' + row.id +
                                '" class="btn btn-warning mr-2"> <i class = "fa-solid fa-edit"  aria-hidden = "true" > </i>Edit </button>' +
                                '" <a href = "#" data-nama = "' + row.nama_kategori +
                                '" data-id="' + row.id +
                                '" class="btn btn-danger" id="deleted"><i class="fa-solid fa-trash" aria-hidden="true"></i> Hapus</a>';
                        },
                    },
                ]
            });
        });

        // tambah data form
        $("#update-form").submit(function(e) {
        e.preventDefault();
        var nama = $(this).attr('data-nama');
        var id = $(this).attr('data-id');
        var formData = $(this).serialize();

        $.ajax({
            url: '{{ route('simpan-kategori') }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                // Tindakan setelah data berhasil ditambahkan
                console.log("Data berhasil ditambahkan: ", response);
            },
            error: function(xhr) {
                // Tindakan jika terjadi kesalahan
                console.log("Terjadi kesalahan: ", xhr.responseJSON);
            }
        });


        $('#nama_kategori').val(response.data.nama_kategori);
        console.log(response.data);

        $('#update-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/admin/update-kategori/' + id,
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response.success);
                    console.log("success");
                    $('#myTable').DataTable().ajax.reload();

                },
                error: function(xhr) {
                    // Tangani kesalahan jika ada
                }
            });
        });
        },
        error: function(xhr, status, error) {
        // Handle error
        }
        });
        });



        // edit data form
        $(document).on('click', '#edit', function() {
            var nama = $(this).attr('data-nama');
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/admin/kategori/edit/' + id,
                type: 'GET',
                success: function(response) {
                    $('#modal-edit').modal('show');
                    $('#jenis_kategori').val(function() {
                        return $(this).find('option').filter(function() {
                            return $(this).val() === response.data.kategori_tour;
                        }).val();
                    });
                    $('#nama_kategori').val(response.data.nama_kategori);
                    console.log(response.data);

                    $('#update-form').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/admin/update-kategori/' + id,
                            type: 'POST',
                            data: $(this).serialize(),
                            success: function(response) {
                                alert(response.success);
                                console.log("success");
                                $('#myTable').DataTable().ajax.reload();

                            },
                            error: function(xhr) {
                                // Tangani kesalahan jika ada
                            }
                        });
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error
                }
            });
        });



        // hapus data
        $(document).on('click', '#deleted', function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            swal.fire({
                title: 'Yakin?',
                text: "Anda Ingin Menghapus Kategori " + nama + " ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan AJAX untuk menghapus data
                    $.ajax({
                        url: '/admin/hapus-kategori/' + id,
                        type: 'GET',
                        success: function(response) {
                            swal.fire(
                                'Deleted!',
                                'Kategori Berhasil di Hapus',
                                'success'
                            ).then(() => {
                                // Lakukan aksi setelah data dihapus, seperti memperbarui tabel
                                $('#myTable').DataTable().ajax.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            swal.fire(
                                'Error',
                                'Terjadi kesalahan saat menghapus kategori',
                                'error'
                            );
                        }
                    });
                } else if (result.dismiss === 'cancel') {
                    swal.fire(
                        'Cancelled',
                        'Kategori Batal di Hapus',
                        'error'
                    );
                }
            });
        });
    </script>
@endsection
