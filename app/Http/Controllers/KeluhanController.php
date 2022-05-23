<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use Illuminate\Support\Facades\Auth;

class KeluhanController extends Controller
{
    public function insert()
    {
        return view('keluhan.insert');
    }
    public function insertProcess(Request $request)
    {
        $keluhan = new Keluhan;
        $keluhan->user_id = Auth::user()->id;
        $keluhan->content = $request->content;
        $keluhan->status = $request->status;
        $keluhan->save();

        return redirect('/dashboard');
    }
    public function edit($id)
    {
        $keluhan = Keluhan::find($id);
        return view('keluhan.edit', compact('keluhan'));
    }
    public function editProcess(Request $request, $id)
    {
        $data = Keluhan::find($id);
        $data->content = $request->content;
        $data->update();
        return redirect('/dashboard');
    }
    public function adminEdit($id)
    {
        $keluhan = Keluhan::find($id);
        return view('admin.edit', compact('keluhan'));
    }
    public function adminEditProcess(Request $request, $id)
    {
        $data = Keluhan::find($id);
        $data->content = $request->content;
        $data->status = $request->status;
        $data->update();
        return redirect('/admin/dashboard');
    }
    public function delete($id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->delete();
        return redirect('/dashboard');
    }

    public function adminDelete($id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->delete();
        return redirect('/admin/dashboard');
    }
}
