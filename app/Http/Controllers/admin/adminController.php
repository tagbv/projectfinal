<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function getList()
    {
        // return view('admin.product.list');
        $product = products::paginate(8);
        return view('admin.product.list', compact('product'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function loginPost(Request $request)
    {
        $credentials= $request->only('email','password');
        
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else {
            echo "loi";
        }
    }
    
    public function dashboard(Request $request)
    {
        
        $credentials= $request->only('email','password');
        $product = products::paginate(8);
        if (Auth::guard('admin')->check()) {
            return view ('admin.product.list', compact('product'));
        }else {
            return redirect('admin/login'); 
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
    }
}
