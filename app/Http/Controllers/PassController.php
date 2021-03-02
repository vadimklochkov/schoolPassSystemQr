<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use Illuminate\Http\Request;

class PassController extends Controller
{
    public function regPass(Request $req)
    {
        $path = $req->file('image')->store('uploads', 'public');
        if($req->input('type') == 'Временный (для посещения)'){
            return view('regpass1', ['req' => $req], ['path' => $path]);
        } else {
            $pass = new Pass();
            $pass->name = $req->input('name');
            $pass->email = $req->input('email');
            $pass->type = $req->input('type');
            $pass->image = $path;
            $token = md5(rand(-999999999999999999, 999999999999999999)). md5(rand(-999999999999999999, 999999999999999999)). md5(rand(-999999999999999999, 999999999999999999));
            $token = md5($token);
            $pass->token = $token;
            $pass->status = 'Ожидание';
            $pass->save();
            return view('youNewPass', ['token' => $token]);
        }
    }
    public function regPassTimed(Request $req){
        $pass = new Pass();
        $date1 = date('d-m', strtotime($req->input('date1')));
        $date2 = date('d-m', strtotime($req->input('date2')));
        $pass->name = $req->input('name');
        $pass->email = $req->input('email');
        $pass->type = $req->input('type');
        $pass->date1 = $date1;
        $pass->date2 = $date2;
        $pass->comm = $req->input('comm');
        $pass->image = $req->input('image');
        $token = md5(rand(-999999999999999999, 999999999999999999)). md5(rand(-999999999999999999, 999999999999999999)). md5(rand(-999999999999999999, 999999999999999999));
        $token = md5($token);
        $pass->token = $token;
        $pass->status = 'Ожидание';
        $pass->save();
        return view('youNewPass', ['token' => $token]);
    }
    public function getPass(Request $req){
        $pass = new Pass();
        $pass = $pass->where('token', '=', $req->input('token'))->where('status', '=', 'Одобрено')->get();
        $qr = "127.0.0.1:8000/pass/". $req->input('token');        
        return view('youPass', ['pass' => $pass], ['qr' => $qr]);
    }
    public function getPassId($id){
        $pass = new Pass();
        $pass = $pass->where('token', '=', $id)->where('status', '=', 'Одобрено')->get();
        $qr = "127.0.0.1:8000/pass/" . $id;
        return view('youPass', ['pass' => $pass], ['qr' => $qr]);
    }
}
