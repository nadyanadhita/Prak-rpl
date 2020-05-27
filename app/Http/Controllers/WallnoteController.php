<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WallnoteController extends Controller
{
    public function StokMasuk(){
    	// mengambil data dari table stokmasuk
        $data = DB::table('stokmasuk')->get();

    	// mengirim data stokmasuk ke view StokMasuk
        return view('StokMasuk',['data' => $data]);
    }
    
    // method untuk menampilkan view form tambah stokmasuk
    public function tambahStokMasuk(){
	    // memanggil view tambah
        return view('TambahSM');
    }

    // method untuk insert data ke table stokmasuk
    public function tambahSM(Request $data){
	    // insert data ke table pegawai
        DB::table('stokmasuk')->insert([
            'KodeTransaksi' => $data->KodeTransaksi,
            'NamaItem' => $data->NamaItem,
            'Jumlah' => $data->Jumlah
        ]);
	    // alihkan halaman ke halaman stokmasuk
        return redirect('/stokmasuk');
    }

    // method untuk edit data pegawai
    public function updateStokMasuk($KodeTransaksi){
	    // mengambil data pegawai berdasarkan id yang dipilih
        $data = DB::table('stokmasuk')->where('KodeTransaksi',$KodeTransaksi)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
        return view('updateSM', compact('data'));
    }

    public function updateSM(Request $data, $KodeTransaksi) {
        DB::table('stokmasuk') -> where('KodeTransaksi', $KodeTransaksi) -> update([
            'KodeTransaksi' => $data ->KodeTransaksi,
            'NamaItem' => $data ->NamaItem,
            'Jumlah' => $data ->Jumlah
        ]);
        return redirect('/stokmasuk');
    }

    public function deleteSM($KodeTransaksi) {
        DB::table('stokmasuk')
        ->where('KodeTransaksi', $KodeTransaksi)
        ->delete();
        return redirect('/stokmasuk');
    }

    public function StokKeluar(){
    	// mengambil data dari table stokmasuk
        $data = DB::table('stokkeluar')->get();

    	// mengirim data stokmasuk ke view StokMasuk
        return view('StokKeluar',['data' => $data]);
    }
    
    // method untuk menampilkan view form tambah stokmasuk
    public function tambahStokKeluar(){
	    // memanggil view tambah
        return view('TambahSK');
    }

    // method untuk insert data ke table stokmasuk
    public function tambahSK(Request $data){
	    // insert data ke table pegawai
        DB::table('stokkeluar')->insert([
            'KodeTransaksi' => $data->KodeTransaksi,
            'NamaItem' => $data->NamaItem,
            'Jumlah' => $data->Jumlah
        ]);
	    // alihkan halaman ke halaman stokmasuk
        return redirect('/stokkeluar');
    }

    // method untuk edit data pegawai
    public function updateStokKeluar($KodeTransaksi){
	    // mengambil data pegawai berdasarkan id yang dipilih
        $data = DB::table('stokkeluar')->where('KodeTransaksi',$KodeTransaksi)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
        return view('updateSK', compact('data'));
    }

    public function updateSK(Request $data, $KodeTransaksi) {
        DB::table('stokkeluar') -> where('KodeTransaksi', $KodeTransaksi) -> update([
            'KodeTransaksi' => $data ->KodeTransaksi,
            'NamaItem' => $data ->NamaItem,
            'Jumlah' => $data ->Jumlah
        ]);
        return redirect('/stokkeluar');
    }

    public function deleteSK($KodeTransaksi) {
        DB::table('stokkeluar')
        ->where('KodeTransaksi', $KodeTransaksi)
        ->delete();
        return redirect('/stokkeluar');
    }

}