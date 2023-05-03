<?php

namespace App\Http\Controllers\API;

use App\Bantuan\needApi;
use App\Http\Controllers\Controller;
use App\Models\trash;
use Exception;
use Illuminate\Http\Request;

class trashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = trash::all();

        if($data){
            return needApi::createApi(200, 'Selamat data berhasil di masukan', $data);
        } else {
            return needApi::createApi(404, 'maaf data tidak dapat di proses');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate ([
                'username' => 'required',
                'jenis' => 'required',
                'qty' => 'required',

            ]);

            $trash = Trash::create([
                'username' => $request->username,
                'jenis' => $request->jenis,
                'qty' => $request->qty
            ]);

            // ini API nya
            $data = trash::where('id', '=', $trash->id)->get();
            if($data){
                return needApi::createApi(200, 'Selamat data berhasil di masukan', $data);
            } else {
                return needApi::createApi(404, 'maaf data tidak dapat di proses');
            }
        } catch (Exception $error) {
            return needApi::createApi(404, 'maaf data tidak dapat di proses');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = trash::where('id', '=', $id)->get();
            if($data){
                return needApi::createApi(200, 'Selamat data berhasil di masukan', $data);
            } else {
                return needApi::createApi(404, 'maaf data tidak dapat di proses');
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
