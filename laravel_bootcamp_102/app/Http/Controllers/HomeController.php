<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class HomeController extends Controller
{
   // public function merhaba() {
        //$users = DB::table('users')->get(); //Veritabanından kullanıcıları çeker
        //$users = User::all(); //Model kullanarak veri çekme
        //dd($users);
        //var_dump($users)

        //$products = Product::with(['user'])->get();
     //   $products = DB::table('users')
       //     ->join('products','products.created_by','=','users.id')
         //   ->select('users.name','products.name') //burdan hem kullanıcı adını hem de ürün adını almayı yapınız
           // ->get();

       // return view('users.index', compact('products')); //->with(['users' => $users]); // merhaba isimli view dosyasına kullanıcılar yollandı
  //  }

    public function createView()
    {
        return view('users.create');
    }

    public function create(Request $request )
    {
        //$data = $request->all() ;
        //dd($data);
        $password = $request->get('password');

        DB::table('users')->insert([
           'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request)
        ]);
        return 'Kayıt başarıyla tamamlandı!';

    }
    public function updateView($id)
    {
        $user = User::where('id',$id)->get();
        $user =$user->first();
        return view('users.update',compact('user'));
    }
    public function update()
    {
        User::where('id',$id)->update([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
             'updated_at'=> $request-> Carbon::now(),
            ]
        );
        return ("Başarıyla Güncellendi");
    }
    public function indexView()
    {
        $users = User::where('deleted_at','=',null)->get();
        return view('users.index',compact('users'));
    }
    public function delete($id){
        //DB::table('users')->where('id','=',$id)->delete(); // HARD DELETEDİR ÇOK İYİ BİR ŞEY DEĞİL.
        DB::table('users')->where('id', '=', $id)->update([
            'deleted_at' => Carbon::now()
        ]);
        return 'Başarıyla Silindi';
    }
}
