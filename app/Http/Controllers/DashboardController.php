<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profil;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index_admin(){
        $profil = DB::table('profil')->get();
        return view('admin.dashboard', compact('profil'));
    }
    public function index_user(){

        $profil = DB::table('profil')->where('email',Auth()->user()->email )->get();
        $count = DB::table('profil')->where('email',Auth()->user()->email )->count();
        $pengalaman = DB::table('pengalaman')->where('email',Auth()->user()->email )->get();
        return view('user.dashboard',compact('profil','pengalaman','count'));
    }
    public function profil_user($email){
        return view('user.bio',compact('email'));
    }
    public function profil_post(Request $request, $email){
        $email_user = DB::table('profil')->select('email')->where('email', $email)->limit(1)->orderByDesc('id')->first();
        if (empty($email_user)==true) {
            $validatedData = $request->validate([
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'profil' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'tempatlahir' => 'required',
                'tgllahir' => 'required',
                'pendidikan' => 'required',
                'tahunmasuk' => 'required',
                'tahunlulus' => 'required',
                'studi' => 'required',
                'uni' => 'required',
                'ipk' => 'required',
                'photo' => 'required',
                'passion' => 'required',
                ]);

            if ($request->file('photo')) {
                $validatedData['photo'] = $request->file('photo')->store('photos');
            }
            Profil::create($validatedData);
                session()->flash("success", "Data Berhasil Ditambahkan");

                return redirect('/user/dashboard');
        }else{
            $validatedData = $request->validate([
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'profil' => 'required',
                'alamat' => 'required',
                'tempatlahir' => 'required',
                'tgllahir' => 'required',
                'pendidikan' => 'required',
                'tahunmasuk' => 'required',
                'tahunlulus' => 'required',
                'studi' => 'required',
                'uni' => 'required',
                'ipk' => 'required',
                'photo' => 'required',
                'passion' => 'required',

                ]);

            if ($request->file('photo')) {
                $validatedData['photo'] = $request->file('photo')->store('photos');
            }
            Profil::where('email',$email)->update($validatedData);
            session()->flash("success", "Data Berhasil Diupdate");

            return redirect('/user/dashboard');
        }
    }

    public function pengalaman_post(Request $request, $email)
    {
        if ($request->tahunberakhir == null) {
            $thnakhir = '';
        } else {
            $thnakhir = $request->tahunberakhir;
        }

        DB::table('pengalaman')->insert([
            'pengalaman' => $request->pengalaman,
            'tahunmulai' => $request->tahunmulai,
            'tahunberakhir' => $thnakhir,
            'email' => $request->email,
            'company' => $request->company,
            'posisi' => $request->posisi,
            'deskripsi' => $request->deskripsi,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

            session()->flash("success", "Data Berhasil Ditambahkan");

            return redirect('/user/dashboard');

    }
    public function pengalaman_user($email){
        return view('user.pengalaman',compact('email'));
    }
}