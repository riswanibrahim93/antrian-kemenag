<?php

namespace App\Http\Controllers;
use App\Antrian;
use App\AntrianSementara;
use App\HistoriAntrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = DB::table('antrian_sementaras')->first();
        $nomorTampil;

        if($a == null)
        {
            $nomorTampil = "empty";
        }
        else
        {
            $nomorTampil = $a->nomor;

            DB::table('antrian_sementaras')->where('nomor',$nomorTampil)->delete();
        }
        return $nomorTampil;
    }

    public function jml_antrian()
    {
        $a = DB::table('antrian_sementaras')->get();
        $jml = 0;
        foreach ($a as $i) {
            $jml++;
        }
        return $jml;
    }

    public function panggilAdmin1()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->index();
        $jml = app('App\Http\Controllers\AntrianController')->jml_antrian();
        return view('pengunjung/view2', ['nomor' => $nomorTampil , 'admin' => 'Admin 1', 'jml_antrian' => $jml]);
    }

    public function panggilAdmin2()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->index();
        $jml = app('App\Http\Controllers\AntrianController')->jml_antrian();
        return view('pengunjung/view2', ['nomor' => $nomorTampil , 'admin' => 'Admin 2', 'jml_antrian' => $jml]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = DB::table('antrians')->get();

        if($a == null)
        {
            Antrian::create([
                'nomor' => '1'
            ]);
            AntrianSementara::create([
                'nomor' => '1'
            ]);
        }
        else
        {
            foreach ($a as $b) {
                $nomor_lama = $b->nomor;
            }
            $nomor = $nomor_lama + 1;

            Antrian::create([
                'nomor' => $nomor
            ]);
            AntrianSementara::create([
                'nomor' => $nomor
            ]);
        }
        return redirect('/pengunjung')->with('status', 'Silahkan Menunggu Antrian '.$nomor);
    }

    public function reset()
    {
        $a = DB::table('antrians')->get();
        foreach ($a as $b) {
            $nomor_lama = $b->nomor;
        }
        HistoriAntrian::create([
            'jumlah_antrian' => $nomor_lama
        ]);

        // delete antrian
        DB::table('antrians')->delete();
        DB::table('antrian_sementaras')->delete();

        return redirect('/pengunjung')->with('status', 'Antrian berakhir, total antrian hari ini '.$nomor_lama);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
