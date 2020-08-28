<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function merhaba() {
        //$users = DB::table('users')->get(); //Veritabanından kullanıcıları çeker
        //$users = User::all(); //Model kullanarak veri çekme
        //dd($users);
        //var_dump($users)

        //$products = Product::with(['user'])->get();
        $products = DB::table('users')
            ->join('products','products.created_by','=','users.id')
            ->select('users.name','products.name') //burdan hem kullanıcı adını hem de ürün adını almayı yapınız
            ->get();

        return view('users.index', compact('products')); //->with(['users' => $users]); // merhaba isimli view dosyasına kullanıcılar yollandı
    }

    public function createView()
    {
        return view('users.create');
    }

    public function create()
    {
        return 'Kayıt başarıyla tamamlandı!';
    }
}
