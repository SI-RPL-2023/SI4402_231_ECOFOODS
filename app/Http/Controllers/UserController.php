<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transactions;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function succes()
    {
        return view('User.succes');
    }
    public function login()
    {
        return view('login');
    }
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function transaction()
    {
        $list = Transactions::all();
        return view('User.transaction', compact('list'));
    }
    public function checkout($id)
    {
        $list = Food::find($id);
        return view('User.checkout', compact('list'));
    }
    public function detail($id)
    {
        $list = Food::find($id);
        return view('User.detail', compact('list'));
    }
    public function home()
    {
        $list = Food::all();
        return view('User.home',compact('list'));
    }
    public function menu()
    {
        $list = Food::all();
        return view('User.menu',compact('list'));
    }
        public function cekregis(Request $request){
            $request->validate([
                'password' => 'confirmed'
            ]);
    
            $RegisterUser = User::create([
                'email' => $request->email,
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'birth' => $request->birth,
                'id_role' => 2,
                'password' => Hash::make($request->password),
            ]);
            if($RegisterUser){
                return redirect('/login');
            }
        
    }
    public function ceklogin(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        
        return redirect('/login');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function profile()
    {
        return view('user.profile');
    }

    public function updateprof(Request $request)
    {           
        $request->validate([
            'password' => 'confirmed'

        ]);
        $user = User::find(Auth::id());
        DB::table('foowdusers')->update([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'no_hp'=> $request->no_hp,
            'password'=> Hash::make($request->password),
            'alamat'=> $request->alamat
        ]);

        return back();
    }

    public function inputmakanan(Request $request){
        $inputmakanan = Transactions::create([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'no_hp'=> $request->no_hp,
            'alamat'=> $request->alamat,
            'pembayaran' => $request -> pembayaran,
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'status' => "Menunggu Konfirmasi"

        ]);
        if($inputmakanan){
            return redirect('/succes');
        }
    }
    

}
