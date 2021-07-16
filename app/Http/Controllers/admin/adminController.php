<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getList()
    {
        return view('admin.product.list');
    }

    public function add()
    {
        return view('admin.product.add');
    }
    public function edit()
    {
        return view('admin.product.edit');
    }
}
