<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pass = new Pass();
        $pass = $pass->where('status', '=', 'Ожидание')->get();
        
        return view('home', ['pass' => $pass]);
    }
    public function accept($id){
        $role = auth()->user()->role;
        if ($role == 'admin')
        { 
            $pass = Pass::find($id);
            $pass->status = 'Одобрено';
            $pass->save();
            return redirect('/home');
        } else {
            return redirect('/home');
        }
    }
    public function deny($id){
        $role = auth()->user()->role;
        if ($role == 'admin')
        { 
            $pass = Pass::find($id);
            $pass->status = 'Отклонено';
            $pass->save();
            return redirect('/home');
        } else {
            return redirect('/home');
        }
        
    }
}
