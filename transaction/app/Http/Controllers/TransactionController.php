<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TransactionController extends Controller
{
    public function show(){
        $info = Auth::user();
        return view('home',[
            "info" => $info,
        ]);
    }
    public function index(Request $request){
        DB::transaction(function () use ($request) {
            $user = User::where('id', Auth::user()->id)->lockForUpdate()->first();
            if ($user->balance < $request->money) {
                throw new \Exception('У вас на счету нету таких денег');
            }
            //Снимаем деньги со счета пользователя 
            $user->decrement('balance', $request->money);
            //Переводим деньги другому пользователю
            User::where('id', $request->receiver_id)->increment('balance', $request->money);
        });

        
        return redirect()->route('home');
    }
}
