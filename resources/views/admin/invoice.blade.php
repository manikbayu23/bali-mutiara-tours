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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>Pax</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody id="invoice-items">
                                <tr>
                                    <td><input class="form-control" type="text" name="description[]" required></td>
                                    <td><input class="form-control" type="number" name="pax[]" required></td>
                                    <td><input class="form-control" type="number" name="amount[]" step="0.01" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-info" onclick="addRow()">Add Item</button><br><br>

                        <button type="submit" class="btn btn-primary">Print Invoice</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function addRow() {
            var table = document.getElementById("invoice-items");
            var row = table.insertRow(-1);
            var descriptionCell = row.insertCell(0);
            var amountCell = row.insertCell(1);
            var paxCell = row.insertCell(2);
            descriptionCell.innerHTML = '<input type="text" name="description[]" required>';
            amountCell.innerHTML = '<input type="number" name="amount[]" step="0.01" required>';
            paxCell.innerHTML = '<input type="number" name="pax[]" required>';
        }
    </script>
@endsection
