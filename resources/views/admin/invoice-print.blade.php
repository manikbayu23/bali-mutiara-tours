<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        @page {
            size: A5;
            margin: 0;
        }

        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>


<body>
    <div class="container py-5 mb-2">
        <div class="d-flex align-items-center">
            <div class="col">
                <h1 class="h2">INVOICE</h1>
            </div>
            <div class="col text-end">
                <img class="img-fluid" width="50" src="{{ asset('umum/images/logo-travel-1.png') }}" alt="">

            </div>
        </div>
        <div>
            <h2 class="h5">Invoice Number: {{ $invoiceNumber }}</h2>
        </div>
        <div>
            <p>Tanggal: {{ $date }}</p>
        </div>

        <table class=" table table-hover">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Harga</th>
                    <th>Pax</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $description => $totalAmount)
                    <tr>
                        <td>{{ $description }}</td>
                        <td>Rp{{ number_format($amounts[$loop->index], 0, ',', '.') }}</td>
                        <td>{{ $pax[$loop->index] }}</td>
                        <td>Rp{{ number_format($totalAmount, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mb-5">
            <h3 class="h5">Harga Total : Rp{{ number_format($grandTotal, 2) }}</h3>
        </div>

        <div>
            <p class="h6">BCA</p>
            <p class="h6">No. Rek : 772.5.10.0086</p>
            <p class="mb-2h6 ">An. Nama : I Dewa Made SUkawati</p>
            <p class="h6">Tlp/WA : 0878-6118-4488</p>
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button class="print-button btn btn-primary" onclick="window.print()">Print</button>
        </div>
    </div>
</body>

</html>
