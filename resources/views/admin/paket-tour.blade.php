@extends('layouts.admin')

@section('judul_halaman', 'Tour')

@section('content-admin')
    <div class="row">
        <div class="card p-4 border-0 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('tambah-tour') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i>
                        Tambah
                        Tour</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tour</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($tour->total() > 0)
                                @foreach ($tour as $index => $row)
                                    <tr>
                                        <th>{{ $index + $tour->firstItem() }}</th>
                                        <td>{{ $row->nama_tour }}</td>
                                        <td>
                                            {{ $row->kategori->nama_kategori }}
                                        </td>
                                        <td>{{ $row->harga_utama }}</td>
                                        <td>
                                            @if ($row->is_archived == '0')
                                                <div class="text-success">Terbit</div>
                                            @else
                                                <div class="text-secondary">Arsip</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <form action="{{ route('archived-tour', $row->id) }}" method="POST">
                                                    @csrf

                                                    @if ($row->is_archived == '0')
                                                        <input type="hidden" name="is_archived" value="1"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Tooltip on top">
                                                    @else
                                                        <input type="hidden" name="is_archived" value="0">
                                                    @endif

                                                    @if ($row->is_archived == '0')
                                                        <button type="submit" class="btn btn-primary mr-2">
                                                            <i class="fa-regular fa-bookmark"></i>
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-secondary mr-2">
                                                            <i class="fa-solid fa-bookmark"></i>
                                                        </button>
                                                    @endif
                                                </form>
                                                <a href="{{ route('edit-tour', $row->slug) }}" class="btn btn-warning"><i
                                                        class="fa-solid fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <a href="" data-nama="{{ $row->nama_tour }}"
                                                    data-id="{{ $row->id }}" class="btn btn-danger mr-2 delete"><i
                                                        class="fa-solid fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <div class="alert alert-info">Tidak ada data</div>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $tour->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id')
            var nama = $(this).attr('data-nama')

            swalWithBootstrapButtons.fire({
                title: 'Yakin?',
                text: "Anda Ingin Menghapus Paket Tour " + nama + " ? ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/hapus-tour/" + id
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Paket Tour Berhasil di Hapus',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Paket Tour Batal di Hapus ',
                        'error'
                    )
                }
            });
        });
    </script>
@endsection
