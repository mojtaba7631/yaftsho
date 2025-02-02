<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $products = Product::query()->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
