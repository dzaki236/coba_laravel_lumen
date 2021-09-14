<?php

namespace App\Http\Controllers;

use App\Models\Buku;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;

class BukuController extends Controller
{
            public function index()
            {
                        # code...
                        $buku = Buku::all();
                        return response()->json($buku);
            }
            public function detail($id)
            {
                        # code...
                        $buku = Buku::find(
                                    $id
                        );
                        return response()->json($buku);
            }
            public function create(Request $request)
            {
                        # code...
                        // $this->validate($request,['*' => 'required']);
                        // {
                        //             "judul":"test",
                        //             "penulis":"test",
                        //             "penerbit":"test",
                        //             "tahun_terbit":2020,
                        //             "sinopsis":"ini sinopsis"
                        //         }
                        $data = $request->all();
                        $buku = Buku::create(
                                    $data
                        );
                    
                        return response()->json($buku);
            }
            public function edit($id)
            {
                        # code...
                        $buku = Buku::find(
                                    $id
                        );
                        return response()->json($buku);
            }
            public function update(Request $request,$id)
            {
                        # code...
                        // $this->validate($request,['*' => 'required']);
                        // {
                        //             "judul":"test",
                        //             "penulis":"test",
                        //             "penerbit":"test",
                        //             "tahun_terbit":2020,
                        //             "sinopsis":"ini sinopsis"
                        //         }
                        $data = $request->all();
                        $buku = Buku::find($id);
                        $buku->update(
                                    $data
                        );
                        return response()->json($buku);
            }
            public function delete($id)
            {
                        # code...
                        Buku::find($id)->delete();
                        $msg = ['message'=>'data deleted!'];
                        return response()->json($msg);
            }
}
