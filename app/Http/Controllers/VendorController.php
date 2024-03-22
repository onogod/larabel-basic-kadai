<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function show($id) {

        $vendor = Vendor::find($id);

        $products = $vendor->products;

        return view('vendor.show', compact('vendor','products'));
    }
    public function create() {
        return view('vendor.create');
    }
public function store(Request $request) {

    $request->validate([
        'vendor_code' => 'required|integer|min:0|unique:vendors,vendor_code',
        'vendor_name' =>'required|max:255'
    ]);

    $vendor = new Vendor();
    $vendor->vendor_code = $request->input('vendor_code');
    $vendor->vendor_name = $request->input('vendor_name');
    $vendor->save();

    return redirect("/vendors/{$vendor->id}");
}

}
