<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoice', [
            'title' => 'Invoice',
            "description" => "Invoice Tour",
            "keywords" => "Invoice Tour"
        ]);
    }

    public function print(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'description' => 'required|array',
            'amount' => 'required|array',
            'amount.*' => 'numeric',
            'pax' => 'required|array',
            'pax.*' => 'integer|min:1',
            'hotel' => 'nullable',
        ]);

        $invoiceNumber = 'MBT' . Str::random(6); // Menghasilkan nomor acak dengan awalan "MBT"

        $data['invoice_number'] = $invoiceNumber;


        // Menggabungkan description, amount, dan pax menjadi array asosiatif
        $items = [];
        $amounts = [];
        $pax = [];
        $totalAmount = 0; // Inisialisasi total amount
        foreach ($data['description'] as $key => $description) {
            $amount = $data['amount'][$key];
            $paxValue = $data['pax'][$key];
            $totalItem = $amount * $paxValue; // Total harga item per pax
            $items[$description] = $totalItem;
            $amounts[$key] = $amount;
            $pax[$key] = $paxValue;
            $totalAmount += $totalItem; // Menambahkan total item ke total amount
        }


        $grandTotal = $totalAmount;

        return view('admin.invoice-print', [
            'data' => $data,
            'invoiceNumber' => $invoiceNumber,
            'date' => $data['date'],
            'items' => $items,
            'amounts' => $amounts,
            'pax' => $pax,
            'totalAmount' => $totalAmount,
            'grandTotal' => $grandTotal,
            'hotel' => $data['hotel'],
        ]);
    }
}
