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
        $b = DB::table('antrians')->get();

        $nomorTampil;
        $n = 0;

        if($a == null)
        {
            foreach ($b as $i) {
                $n++;
            }
            if($n == 0){
                $nomorTampil = 0;
            }
            else{
                foreach ($b as $i) {
                    $nomorTampil = $i->nomor;
                }
            }
        }
        else
        {
            $nomorTampil = $a->nomor;
            DB::table('antrian_sementaras')->where('nomor',$nomorTampil)->delete();
        }
        return $nomorTampil;
    }

    public function tampil()
    {
        $a = DB::table('antrian_sementaras')->first();
        $b = DB::table('antrians')->get();

        $nomorTampil;
        $n = 0;

        if($a == null)
        {
            foreach ($b as $i) {
                $n++;
            }
            if($n == 0){
                $nomorTampil = 0;
            }
            else{
                foreach ($b as $i) {
                    $nomorTampil = $i->nomor;
                }
            }
        }
        else
        {
            $nomorTampil = $a->nomor;
            $nomorTampil -= 1;
        }
        return $nomorTampil;
    }

    public function tampilAkhir()
    {
        $a = DB::table('antrians')->get();
        $n = 0;
        foreach ($a as $i) {
            $n++;
        }

        if($n == 0)
        {
            $nomorTampil = 1;
        }
        else
        {
            foreach ($a as $i) {
                $nomorTampil = $i->nomor;
            }
            $nomorTampil += 1;
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


    public function Admin1()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->tampil();
        return view('pengunjung/view2', ['nomor' => $nomorTampil , 'admin' => '1']);
    }
    public function Admin2()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->tampil();
        return view('pengunjung/view2', ['nomor' => $nomorTampil , 'admin' => '2']);
    }
    

    public function panggilAdmin1()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->index();
        DB::table('admin_panggils')
              ->where('id', 1)
              ->update(['loket' => 1]);
        return redirect('/adminA1');
    }

    public function panggilAdmin2()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->index();
        DB::table('admin_panggils')
              ->where('id', 1)
              ->update(['loket' => 2]);
        return redirect('/adminA2');
    }

    public function Pengunjung()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->tampilAkhir();
        return view('pengunjung/coba', ['nomor' => $nomorTampil]);

    }

    public function ViewNomor()
    {
        $nomorTampil = app('App\Http\Controllers\AntrianController')->tampil();
        $nomorTampil = json_encode(array("nomor" => $nomorTampil));
        echo $nomorTampil;
    }
    public function ViewAdmin()
    {
        $admin = DB::table('admin_panggils')->get();
        foreach ($admin as $i) {
            $admin = $i->loket;
        }
        $admin = json_encode(array("admin" => $admin));
        echo $admin;
    }
    public function ViewJml()
    {
        $jml = app('App\Http\Controllers\AntrianController')->jml_antrian();
        $jml = json_encode(array("jml" => $jml));
        echo $jml;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = DB::table('antrians')->get();
        $nomor_lama = 0;

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
        return view('pengunjung/print', ['nomor' => $nomor]);
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

        return redirect('/rekappengunjung')->with('status', 'Antrian berakhir, total antrian hari ini '.$nomor_lama);
    }

    public function historiAntrian()
    {
        $histori = HistoriAntrian::all();
        return view('petugas/rekap', ['histori' => $histori]);
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
