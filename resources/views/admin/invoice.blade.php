@extends('layouts.admin')

@section('judul_halaman', 'Invoice')

@section('content-admin')
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Buat Invoice
                    </div>
                </div>
                <div class="card-body p-4">

                    <form action="{{ route('invoice-print') }}" method="POST">
                        @csrf
                        <div>
                            <label class="form-label" for="date">Date:</label>
                            <input class="form-control" type="date" name="date" required><br><br>
                        </div>
                        <div class="row invoice-items mb-4">
                            <div class="col-sm-1 col-lg-6">
                                <label class="form-label">Deskripsi</label>
                                <input class="form-control" type="text" name="description[]" required>
                            </div>
                            <div class="col-sm-1 col-lg-3"><label class="form-label">Pax</label>
                                <input class="form-control" type="number" name="pax[]" required>
                            </div>
                            <div class="col-sm-1 col-lg-3"><label class="form-label">Harga</label>
                                <input class="form-control" type="number" name="amount[]" step="0.01" required>
                            </div>
                        </div>

                        <button type="button" class="btn btn-info  mb-3" onclick="addCol()">Add Item</button>

                        <div class="mb-5">
                            <label for="hotel" class="form-label">Hotel</label>
                            <input type="text" name="hotel" id="hotel" class="form-control" value="-">
                        </div>

                        <button type="submit" class="btn btn-primary">Print Invoice</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function addCol() {
            // Membuat elemen div pertama
            var div1 = document.createElement('div');
            div1.className = 'col-sm-1 col-lg-6';

            var label1 = document.createElement('label');
            label1.className = 'form-label';
            label1.textContent = 'Deskripsi';

            var input1 = document.createElement('input');
            input1.className = 'form-control';
            input1.type = 'text';
            input1.name = 'description[]';
            input1.required = true;

            div1.appendChild(label1);
            div1.appendChild(input1);

            // Membuat elemen div kedua
            var div2 = document.createElement('div');
            div2.className = 'col-sm-1 col-lg-3';

            var label2 = document.createElement('label');
            label2.className = 'form-label';
            label2.textContent = 'Pax';

            var input2 = document.createElement('input');
            input2.className = 'form-control';
            input2.type = 'number';
            input2.name = 'pax[]';
            input2.required = true;

            div2.appendChild(label2);
            div2.appendChild(input2);

            // Membuat elemen div ketiga
            var div3 = document.createElement('div');
            div3.className = 'col-sm-1 col-lg-3';

            var label3 = document.createElement('label');
            label3.className = 'form-label';
            label3.textContent = 'Harga';

            var input3 = document.createElement('input');
            input3.className = 'form-control';
            input3.type = 'number';
            input3.name = 'amount[]';
            input3.step = '0.01';
            input3.required = true;

            div3.appendChild(label3);
            div3.appendChild(input3);

            // Menemukan elemen dengan class "row invoice-items mb-4"
            var row = document.querySelector('.row.invoice-items.mb-4');

            // Memasukkan div baru ke dalam row
            row.appendChild(div1);
            row.appendChild(div2);
            row.appendChild(div3);
        }
    </script>

@endsection
