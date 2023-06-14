<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\biodata;
use App\Models\pendidikan_akhir;
use App\Models\riwayat_pekerjaan;
use App\Models\riwayat_pelatihan;
use App\Models\User;
class BiodataController extends Controller
{
    public function index($id)
    {
        $data = DB::table('biodata')->get();
        return view('dashboard', ['data' => $data]);

    }


    public function create()
    {
        $data = biodata::select('id', 'nama')->get();
        return view('dashboard', compact('data'));
    }


public function store(Request $request)
{
    $biodata = biodata::create($request->all());
    $biodata = pendidikan_akhir::create($request->all());
    $biodata = riwayat_pekerjaan::create($request->all());
    $biodata = riwayat_pelatihan::create($request->all());
    
    // Validasi s$datas jika diperlukan
    $request->validate([
        //biodata
            'posisi'=>'required',
            'nama'=>'required',
            'noktp'=>'required',
            'ttl'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'goldar'=>'required',
            'status'=>'required',
            'alamat1'=>'required',
            'alamat2'=>'required',
            'email'=>'required',
            'notlp'=>'required',
            'orgdekat'=>'required',
            'skill'=>'required',
            'bersedia'=>'required',
            'gaji'=>'required',
        //pendidikan akhir
            'penakhir'=>'required',
            'institusi'=>'required',
            'jurusan'=>'required',
            'tahlulus'=>'required',
            'ipk'=>'required',
        //riwayat pekerjaan
            'perusahaan'=>'required',
            'posakhir'=>'required',
            'gajiakhir'=>'required',
            'tahun'=>'required',
        //riwayat pelatihan
            'kursus'=>'required',
            'sertifikat'=>'required',
            'tahun'=>'required',
    ]);

    // Simpan data ke dalam tabel 'biodata'
    $biodata = new biodata;
    $biodata->nama = $request->nama;
    $biodata->posisi = $request->posisi;
    $biodata->noktp = $request->noktp;
    $biodata->ttl = $request->ttl;
    $biodata->jk = $request->jk;
    $biodata->agama = $request->agama;
    $biodata->goldar = $request->goldar;
    $biodata->status = $request->status;
    $biodata->alamat1 = $request->alamat1;
    $biodata->alamat2 = $request->alamat2;
    $biodata->email = $request->email;
    $biodata->notlp = $request->notlp;
    $biodata->orgdekat = $request->orgdekat;
    $biodata->skill = $request->skill;
    $biodata->bersedia = $request->bersedia;
    $biodata->gaji = $request->gaji;
        $biodata->save();

    // Simpan data ke dalam tabel 'pendidikan akhir'
    $pendidikan_akhir = new pendidikan_akhir;
    $pendidikan_akhir->penakhir = $request->penakhir;
    $pendidikan_akhir->institusi = $request->institusi;
    $pendidikan_akhir->jurusan = $request->jurusan;
    $pendidikan_akhir->tahlulus = $request->tahlulus;
    $pendidikan_akhir->ipk = $request->ipk;
    $pendidikan_akhir->id = $biodata->id;
    $pendidikan_akhir->save();

    // Simpan data ke dalam tabel 'riwayat pekerjaan'
    $riwayat_pekerjaan = new riwayat_pekerjaan;
    $riwayat_pekerjaan->perushaaan = $request->perushaaan;
    $riwayat_pekerjaan->posakhir = $request->posakhir;
    $riwayat_pekerjaan->gajiakhir = $request->gajiakhir;
    $riwayat_pekerjaan->tahun = $request->tahun;
    $riwayat_pekerjaan->id = $biodata->id;
    $riwayat_pekerjaan->save();

    // Simpan data ke dalam tabel 'riwayat pelatihan'
    $riwayat_pelatihan = new riwayat_pelatihan;
    $riwayat_pelatihan->kursus = $request->kursus;
    $riwayat_pelatihan->sertifikat = $request->sertifikat;
    $riwayat_pelatihan->tahun = $request->tahun;
    $riwayat_pelatihan->id = $biodata->id;
    $riwayat_pelatihan->save();

    // Redirect atau lakukan tindakan lainnya setelah menyimpan data
    return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan');
}

public function destroy($id)
{
   $data=biodata::find($id);
   $data->delete();
   return redirect('dashboard')->with('success','Data berhasil dihapus');
}



    public function edit($id, Request $request)
    {
        $data=biodata::find($id);
        return view('edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $data=biodata::findOrFail($id);
        $data->update($request->except(['_token','submit']));
        return redirect('dashboard')->with('success','Data berhasil diupdate');
    }

}

// public function store(Request $request)
//    {
//         $request->session()->flash('posisi', $request->posisi); 
//         $request->session()->flash('nama', $request->nama); 
//         $request->session()->flash('noktp', $request->noktp); 
//         $request->session()->flash('ttl', $request->ttl); 
//         $request->session()->flash('jk', $request->jk); 
//         $request->session()->flash('agama', $request->agama); 
//         $request->session()->flash('goldar', $request->goldar); 
//         $request->session()->flash('status', $request->status); 
//         $request->session()->flash('alamat1', $request->alamat1); 
//         $request->session()->flash('alamat2', $request->alamat2); 
//         $request->session()->flash('email', $request->email); 
//         $request->session()->flash('notlp', $request->notlp);
//         $request->session()->flash('orgdekat', $request->orgdekat); 
//         $request->session()->flash('skill', $request->skill); 
//         $request->session()->flash('bersedia', $request->bersedia); 
//         $request->session()->flash('gaji', $request->gaji); 
//         $request->validate([
//             'posisi'=>'required',
//             'nama'=>'required',
//             'noktp'=>'required|numeric',
//             'ttl'=>'required',
//             'jk'=>'required',
//             'agama'=>'required',
//             'goldar'=>'required',
//             'status'=>'required',
//             'alamat1'=>'required',
//             'alamat2'=>'required',
//             'email'=>'required',
//             'notlp'=>'required | numeric',
//             'orgdekat'=>'required',
//             'skill'=>'required',
//             'bersedia'=>'required',
//             'gaji'=>'required'
//         ],[
//             'posisi.required'=> 'Posisi wajib di isi',
//             'nama.required'=> 'Nama wajib di isi',
//             'noktp.required'=> 'No KTP wajib di isi',
//             'noktp.numeric'=> 'No KTP di isi angka',
//             'notlp.required'=> 'No Telfon wajib di isi',
//             'notlp.numeric'=> 'No Telfon di isi angka',
//             'ttl.required'=> 'Tempat Tanggal Lahir wajib di isi',
//             'jk.required'=> 'Jenis Kelamin wajib di isi',
//             'agama.required'=> 'Agama Wajib disi',
//             'goldar.required'=> 'Golongan Darah wajib di isi',
//             'status.required'=> 'Status wajib di isi',
//             'alamat1.required'=> 'Alamat wajib di isi',
//             'alamat2.required'=> 'Alamat wajib di isi',
//             'email.required'=> 'Email wajib di isi',
//             'orgdekat.required'=> 'wajib di isi',
//             'skill.required'=> 'Skill wajib di isi',
//             'bersedia.required'=>'wajib di isi',
//             'gaji.required'=>'wajib di isi',
//         ]);
//             $data=[
//                 'nama'=>$request->nama,
//                 'posisi'=>$request->posisi,
//                 'noktp'=>$request->noktp,
//                 'ttl'=>$request->ttl,
//                 'jk'=>$request->jk,
//                 'agama'=>$request->agama,
//                 'goldar'=>$request->goldar,
//                 'status'=>$request->status,
//                 'alamat1'=>$request->alamat1,
//                 'alamat2'=>$request->alamat2,
//                 'email'=>$request->email,
//                 'orgdekat'=>$request->orgdekat,
//                 'skill'=>$request->skill,
//                 'bersedia'=>$request->bersedia,
//                 'gaji'=>$request->gaji,
//                 'ttl'=>$request->ttl,
//             ];
//         Talent::create($data);
//         return redirect('/sukses')->with('success','Data berhasil ditambahkan kedalam Database');
//     }

    

