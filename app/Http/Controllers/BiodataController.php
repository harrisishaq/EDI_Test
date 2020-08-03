<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Biodata;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('add-edit', ['edit' => false]);
    }

    public function create(Request $request)
    {
        $data = $request->except(['_method', '_token']);
        $data['users_id'] = Auth::id();
        $old_data = Biodata::where('users_id', $data['users_id'])->get();

        if (count($old_data)){
        	return redirect('/home')->withErrors(__('Data Sudah Ada.'));
        } else {
        	Biodata::create($data);

        	return redirect('/home')->withSuccess(__('Data Berhasil Ditambahkan.'));
        }        
    }
}
