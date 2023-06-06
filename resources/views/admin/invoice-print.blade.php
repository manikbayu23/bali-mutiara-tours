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

        <div class="w-100 mb-5">
            @foreach ($items as $description => $totalAmount)
                <div class="d-flex border-bottom">
                    <div class="col">
                        <h6>Deskripsi :</h6>
                        <p>{{ $description }}</p>

                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <div>
                            <h6>Harga :</h6>
                            <p>Rp{{ number_format($amounts[$loop->index], 0, ',', '.') }}</p>
                            <p>Pax : {{ $pax[$loop->index] }}</p>
                            <p>Total : Rp{{ number_format($totalAmount, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-5 d-flex justify-content-end">
            <div>
                <p>Hotel : {{ $hotel }} </p>
                <h4 class="h5">Total : Rp{{ number_format($grandTotal, 2) }}</h4>
            </div>
        </div>

        <div>
            <p class="h6">BCA</p>
            <p class="h6">No. Rek : 772.5.10.0086</p>
            <p class="mb-2 h6 ">An. Nama : I Dewa Made Sukawati</p>
            <p class="h6">Tlp/WA : 0878-6118-4488</p>
        </div>
        <div class="w-100 d-flex justify-content-end mt-5">
            <button class="print-button btn btn-primary w-100" onclick="window.print()">Print</button>
        </div>
    </div>
</body>

</html>
