<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use App\Models\Transactions; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminlogin()
    {
        $count =  Food::count();
        $tr =  Transactions::count();
        $user = User::count();
        $transaksi = Transactions::sum('harga');
        $list = User::all();
        return view('Admin.homeadmin',compact(['list'],['count'],['transaksi'],['tr'],['user']));
    }
    public function tableadmin() 
    {
        
        $list = Food::all(); 
        return view('Admin.tableadmin', compact(['list'])); 
    } 
    public function inputadmin() 
    {
        return view('Admin.admininput');
    } 
    public function konfirmasi($id) 
    { 
        $list = Transactions::find($id); 
        return view('Admin.konfirmasi' , compact(['list'])); 
    }
    public function validateadmin()
    { 
   
        $list = Transactions::all(); 
        return view('Admin.validateadmin', compact(['list']));
    }
    public function cekloginadmin(Request $request)
    {
        $request->validate([ 
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/Admin/homeadmin');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password', 
        ]);
    }
    public function cekinput(Request $request){
        $ekstensi = $request->file('foto')->clientExtension();
        $nama = $request->nama_makanan.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('foto')->storeAs('images', $nama);
        $request['foto'] = $nama;
        $cekinput = Food::create([
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $nama,
        ]);
        if($cekinput){
            return redirect('/Admin/tableadmin'); 
        }
    }
    public function konfirmasipesanan(Request $request, $id){ 
        $konfirmasipesanan = Transactions::find($id); 
        $konfirmasipesanan->update($request->except('_token')); 
        return redirect('/Admin/validateadmin'); 
    }
    public function deletemakanan($id){
        $deletemakanan = Food::find($id);
        $deletemakanan->delete();
        return redirect('/Admin/tableadmin');
    } 

    public function destroy(Post $post){
        Post::destroy($post->id);
        return redirect('/Admin/tableadmin');
    }

    public function editmakanan($id)
    {
        $makanan = Food::find($id);
        return view('Admin.editmakanan', compact('makanan'));
    }

    public function updatemakanan(Request $request, $id)
    {
        $makanan = Food::find($id);

        $request->validate([
            'nama_makanan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $ekstensi = $request->file('foto')->getClientOriginalExtension();
            $nama = $request->nama_makanan . '-' . now()->timestamp . '.' . $ekstensi;
            $request->file('foto')->storeAs('images', $nama);
            $makanan->foto = $nama;
        }

        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->harga = $request->harga;
        $makanan->save();

        return redirect('/Admin/tableadmin');
    }
}
