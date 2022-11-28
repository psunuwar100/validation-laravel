<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outdoor;

class OutdoorController extends Controller
{
    public function index()
    {
        return view('welcome', ['items' => outdoor::all()]);
    }

    public function saveProducts(Request $req)
    {
        $products = new outdoor();
        $products->batchName = $req->batchName;
        $products->batchQuantity = $req->batchQuantity;
        $products->Status = $req->Status;
        $products->Remarks = $req->Remarks;
        $products->save();
        return redirect('/');
    }

    public function deleteProducts($id)
    {
        $products = outdoor::find($id);
        $products->delete();
        return redirect('/');
    }

    public function editProducts($id)
    {
        $products = outdoor::find($id);
        return view('edit', ['products' => $products]);
    }

    public function updateProducts(Request $req)
    {
        $products = outdoor::find($req->id);
        $products->batchName = $req->updateName;
        $products->batchQuantity = $req->updateQuantity;
        $products->status = $req->updateStatus;
        $products->remarks = $req->updateRemarks;
        $products->save();
        return redirect('/');
    }
}