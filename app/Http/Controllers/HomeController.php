<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }
    public function index(){

        $data = User::get();

        return view ('index',compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
       $validator = Validator::make($request->all(),[
        'ID' => 'required',
        'Nomor Pengajuan'=> 'required',
        'Tanggal'=> 'required',
        'Keterangan'=> 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['ID'] = $request->id;
       $data['nomor_pengajuan'] = $request->nomor_pengajuan;
       $data['tanggal_Pengajuan'] = $request->tanggal_pengajuan;
       $data['Keterangan'] = $request->keterangan;


       User::create($data);

       return redirect()->route('index');
    }
}