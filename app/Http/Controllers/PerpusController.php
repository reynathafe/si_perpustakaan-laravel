<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PerpusController extends Controller
{
    # .. Beranda pada tampilan pegawai
    public function berandaBook()
    {
        $gb = DB::table('tb_buku')->paginate(5);
        return view('projectUAS.beranda', ['gmb' => $gb]);
    }

    #------------------------------------------------------------------
    # .. Tampilan seluruh data pada tampilan pegawai
    public function tmDataBuku()
    {
        $bk = DB::table('tb_buku')->get();
        return view('projectUAS.tampBuku', ['buku' => $bk]);
    }

    public function tmDataAng()
    {
        $ang = DB::table('tb_anggota')->get();
        return view('projectUAS.tampAnggota', ['anggota' => $ang]);
    }

    public function tmDataPinjam()
    {
        $pinj = DB::table('tb_pinjaman')->get();
        return view('projectUAS.tampPinjaman', ['pinjaman' => $pinj]);
    }

    public function tmDataKembali()
    {
        $kmb = DB::table('tb_kembali')->get();
        return view('projectUAS.tampKembali', ['kembali' => $kmb]);
    }

    #------------------------------------------------------------------
    # .. Proses input/simpan data buku pada tampilan pegawai
    public function inpBook()
    {
        return view('projectUAS.inBuku');
    }

    public function psBuku(Request $x)
    {
        $file = $x->file('foto'); //foto : nama name di form inputan
        $nm_file = time() . "_" . $file->getClientOriginalName(); //ambil nama file
        $nm_folder = 'Gambar'; //nama folder Gambar
        $file->move($nm_folder, $nm_file); //upload ke folder
        $pathPublic = $nm_folder . "/" . $nm_file;

        DB::table('tb_buku')->insert([
            'id_bk' => $x->id_bk,
            'jd_bk' => $x->judul,
            'penulis_bk' => $x->tulis,
            'penerbit_bk' => $x->terbit,
            'thn_bk' => $x->thn,
            'jenis_bk' => $x->jns,
            'stok' => $x->jml,
            'no_rak' => $x->no_rak,
            'gambar' => $pathPublic,
        ]);
        return redirect('/Buku');
    }

    #------------------------------------------------------------------
    # .. Proses input/simpan data anggota pada tampilan pegawai
    public function inpAngg()
    {
        return view('projectUAS.inAnggota');
    }

    public function psAngg(Request $x)
    {
        DB::table('tb_anggota')->insert([
            'nim' => $x->nim,
            'nama_ang' => $x->nama,
            'prodi' => $x->prodi,
            'angkatan' => $x->angk,
        ]);
        return redirect('/Anggota');
    }

    #------------------------------------------------------------------
    # .. Proses input/simpan data pinjaman pada tampilan pegawai
    public function idPK()
    {
        $angg = DB::table('tb_anggota')->get();
        $peg = DB::table('tb_pegawai')->get();
        $bk = DB::table('tb_buku')->get();
        return view('projectUAS.inPinjaman', ['anggota1' => $angg, 'pegawai1' => $peg, 'buku1' => $bk]);
    }

    public function psPinjam(Request $x)
    {
        DB::table('tb_pinjaman')->insert([
            'id_pj' => $x->id_pj,
            'tgl_pj' => $x->pjm,
            'tgl_kmb' => $x->kmb,
            'nim' => $x->nim,
            'id_pg' => $x->id_pg,
            'id_bk' => $x->id_bk,
        ]);
        return redirect('/Pinjaman');
    }

    #------------------------------------------------------------------
    # .. Proses input/simpan data kembali pada tampilan pegawai
    public function idPK2()
    {
        $pj = DB::table('tb_pinjaman')->get();
        $bk = DB::table('tb_buku')->get();
        $pg = DB::table('tb_pegawai')->get();
        return view('projectUAS.inKembali', ['peg' => $pg, 'pinjam' => $pj, 'buku' => $bk]);
    }

    public function psKembali(Request $x)
    {
        DB::table('tb_kembali')->insert([
            'id_kmb' => $x->id_kmb,
            'tgl_kmb' => $x->kmb,
            'jml_telat' => $x->jml,
            'jml_denda' => $x->jml*5000,
            'id_pj' => $x->id_pj,
            'id_bk' => $x->id_bk,
            'id_pg' => $x->id_pg
        ]);
        return redirect('/Kembali');
    }

    #------------------------------------------------------------------
    # .. Proses update data buku pada tampilan pegawai
    public function upBook($id)
    {
        $bk1 = DB::table('tb_buku')->where('id_bk', $id)->get();
        return view('projectUAS.upBuku', ['kirim' => $bk1]);
    }

    public function puBook(Request $xy)
    {
        $file = $xy->file('foto');
        if (file_exists($file)) {
            $nm_file = time() . "_" . $file->getClientOriginalName(); //ambil nama file
            $nm_folder = 'Gambar'; //nama folder Gambar
            $file->move($nm_folder, $nm_file); //upload ke folder
            $pathPublic = $nm_folder . "/" . $nm_file;
        } else {
            $pathPublic = $xy->pathfoto;
        }

        DB::table('tb_buku')->where('id_bk', $xy->id)->update([
            'id_bk' => $xy->id,
            'jd_bk' => $xy->judul,
            'penulis_bk' => $xy->tulis,
            'penerbit_bk' => $xy->terbit,
            'thn_bk' => $xy->thn,
            'jenis_bk' => $xy->jns,
            'stok' => $xy->jml,
            'no_rak' => $xy->no_rak,
            'gambar' => $pathPublic,
        ]);
        return redirect('/Buku');
    }

    #------------------------------------------------------------------
    # .. Proses update data anggota pada tampilan pegawai
    public function upAngg($id)
    {
        $bk1 = DB::table('tb_anggota')->where('nim', $id)->get();
        return view('projectUAS.upAnggota', ['kirim' => $bk1]);
    }

    public function puAngg(Request $xy)
    {
        DB::table('tb_anggota')->where('nim', $xy->nim)->update([
            'nim' => $xy->nim,
            'nama_ang' => $xy->nama,
            'prodi' => $xy->prodi,
            'angkatan' => $xy->angk,
        ]);
        return redirect('/Anggota');
    }

    #------------------------------------------------------------------
    # .. Proses update data pinjaman pada tampilan pegawai
    public function upPinjam($id)
    {
        $angg = DB::table('tb_anggota')->get();
        $peg = DB::table('tb_pegawai')->get();
        $bk = DB::table('tb_buku')->get();

        # .. Join
        $jPinjam = DB::table('tb_pinjaman')
            ->join('tb_anggota', 'tb_pinjaman.nim', '=', 'tb_anggota.nim')
            ->join('tb_buku', 'tb_pinjaman.id_bk', '=', 'tb_buku.id_bk')
            ->join('tb_pegawai', 'tb_pinjaman.id_pg', '=', 'tb_pegawai.id_pg')
            ->where('id_pj', $id)
            ->get();
        return view('projectUAS.upPinjaman', ['joinPj' => $jPinjam, 'anggota1' => $angg, 'pegawai1' => $peg, 'buku1' => $bk]);
    }

    public function puPinjam(Request $xy)
    {
        DB::table('tb_pinjaman')->where('id_pj', $xy->id_pj)->update([
            'id_pj' => $xy->id_pj,
            'tgl_pj' => $xy->pjm,
            'tgl_kmb' => $xy->kmb,
            'nim' => $xy->nim,
            'id_pg' => $xy->id_pg,
            'id_bk' => $xy->id_bk,
        ]);
        return redirect('/Pinjaman');
    }

    #------------------------------------------------------------------
    # .. Proses update data kembali pada tampilan pegawai
    public function upKembali($id)
    {
        $pj = DB::table('tb_pinjaman')->get();
        $bk = DB::table('tb_buku')->get();
        $pg = DB::table('tb_pegawai')->get();

        # .. Join
        $jKembali = DB::table('tb_kembali')
            ->join('tb_pinjaman', 'tb_kembali.id_pj', '=', 'tb_pinjaman.id_pj')
            ->join('tb_buku', 'tb_kembali.id_bk', '=', 'tb_buku.id_bk')
            ->join('tb_pegawai', 'tb_kembali.id_pg', '=', 'tb_pegawai.id_pg')
            ->where('id_kmb', $id)
            ->get();
        return view('projectUAS.upKembali', ['joinKmb' => $jKembali,  'pinjam' => $pj, 'buku' => $bk, 'peg' => $pg]);
    }

    public function puKembali(Request $xy)
    {
        DB::table('tb_kembali')->where('id_kmb', $xy->id_kmb)->update([
            'id_kmb' => $xy->id_kmb,
            'tgl_kmb' => $xy->kmb,
            'jml_telat' => $xy->jml,
            'jml_denda' => $xy->jml*5000,
            'id_pj' => $xy->id_pj,
            'id_bk' => $xy->id_bk,
            'id_pg' => $xy->id_pg
        ]);
        return redirect('/Kembali');
    }

    #------------------------------------------------------------------
    # .. Hapus data pada tampilan pegawai
    public function delBook($id)
    {
        $perpus = PerpusModel::find($id);
        $perpus->delete();
        File::delete($perpus->foto);
        return redirect('/Buku');
    }

    public function delAnggota($id)
    {
        DB::table('tb_anggota')->where('nim', $id)->delete();
        return redirect('/Anggota');
    }

    public function delPinjaman($id)
    {
        DB::table('tb_pinjaman')->where('id_pj', $id)->delete();
        return redirect('/Pinjaman');
    }

    public function delKembali($id)
    {
        DB::table('tb_kembali')->where('id_kmb', $id)->delete();
        return redirect('/Kembali');
    }

    #------------------------------------------------------------------
    # .. Join untuk laporan pada tampilan pegawai
    public function joinTabel()
    {
        $jTabel = DB::table('tb_anggota')
            ->join('tb_pinjaman', 'tb_pinjaman.nim', '=', 'tb_anggota.nim')
            ->join('tb_buku', 'tb_pinjaman.id_bk', '=', 'tb_buku.id_bk')
            ->join('tb_pegawai', 'tb_pinjaman.id_pg', '=', 'tb_pegawai.id_pg')
            ->get();
        return view('projectUAS.laporan')->with('data', $jTabel);
    }

    #------------------------------------------------------------------
    # .. Log in pada tampilan
    public function login()
    {
        return view('projectUAS.loginPeg');
    }

    public function login1(Request $a) {
        $cek = $a -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)) {
            $a -> session() -> regenerate();
            if ($a -> email == 'admin@gmail.com') {
                return redirect() -> intended('/Perpustakaan/Users');
            }
            else {
                return redirect() -> intended('/Beranda');
            }
        }

        return back() -> with('loginError', 'Maaf ! Log in gagal');
    }

    public function logout(Request $a) {
        Auth::logout();
        $a -> session() -> invalidate();
        $a -> session() -> regenerateToken();
        return redirect('/Perpustakaan/Login');
    }

    #------------------------------------------------------------------
    # .. Ubah kata sandi
    public function upSandi() {
        return view('projectUAS.upLogin');
    }

    public function puSandi(Request $xy)
    {
        DB::table('users')->where('email', $xy->email)->update([
            'password' => Hash::make($xy -> password1)
        ]);
        return redirect('/Perpustakaan/Login');
    }

    #----------------------------------------------------------------------------------------------------------
    # .. Tampilan untuk anggota
    public function tmBerandaBuku()
    {
        $bk1 = DB::table('tb_buku')->get();
        return view('AngProjectUAS.beranda', ['buku1' => $bk1]);
    }

    #----------------------------------------------------------------------------------------------------------
    # .. Tampilan pegawai untuk Admin
    public function tmp_AdmPegawai()
    {
        $pgw = DB::table('tb_pegawai')->get();
        return view('ProjectUAS.adm_tampPegawai', ['pgw1' => $pgw]);
    }

    # .. Tampilan pegawai untuk Admin
    public function tmp_AdmUsers()
    {
        $pgw = DB::table('users')->get();
        return view('ProjectUAS.adm_tampUsers', ['pgw1' => $pgw]);
    }

    # .. Tampilan anggota untuk Admin
    public function tmp_AdmAnggota()
    {
        $pgw = DB::table('users')->get();
        return view('ProjectUAS.adm_tampUsers', ['pgw1' => $pgw]);
    }

    #------------------------------------------------------------------
    # .. Proses input/simpan data pegawai pada tampilan admin
    public function inpPeg()
    {
        return view('ProjectUAS.adm_inPegawai');
    }

    public function psPeg(Request $x)
    {
        DB::table('tb_pegawai')->insert([
            'id_pg' => $x->id,
            'nama_peg' => $x->nama,
            'email_pg' => $x->email,
            'alamat' => $x->alamat
        ]);
        return redirect('/Perpustakaan/Pegawai');
    }

    # .. Proses input/simpan data users pada tampilan admin
    public function inpUsers()
    {
        return view('ProjectUAS.adm_inUsers');
    }

    public function psUsers(Request $x)
    {
        DB::table('users')->insert([
            'name' => $x->nama,
            'email' => $x->email,
            'password' => Hash::make($x->pass)
        ]);
        return redirect('/Perpustakaan/Users');
    }

    #------------------------------------------------------------------
    # .. Proses update data pegawai pada tampilan admin
    public function upPeg($id)
    {
        $bk1 = DB::table('tb_pegawai')->where('id_pg', $id)->get();
        return view('ProjectUAS.adm_upPegawai', ['kirim' => $bk1]);
    }

    public function puPeg(Request $x)
    {
        DB::table('tb_pegawai')->where('id_pg', $x->id)->update([
            'id_pg' => $x->id,
            'nama_peg' => $x->nama,
            'email_pg' => $x->email,
            'alamat' => $x->alamat
        ]);
        return redirect('/Perpustakaan/Pegawai');
    }

    # .. Proses update data anggota pada tampilan admin
    public function upUsers($id)
    {
        $bk1 = DB::table('users')->where('id', $id)->get();
        return view('ProjectUAS.adm_upUsers', ['kirim' => $bk1]);
    }

    public function puUsers(Request $x)
    {
        DB::table('users')->where('id', $x->id)->update([
            'id' => $x->id,
            'name' => $x->nama,
            'email' => $x->email,
            'password' => Hash::make($x->pass)
        ]);
        return redirect('/Perpustakaan/Users');
    }

    #------------------------------------------------------------------
    # .. Proses hapus data pegawai pada tampilan admin
    public function delPeg($id)
    {
        DB::table('tb_pegawai')->where('id_pg', $id)->delete();
        return redirect('/Perpustakaan/Pegawai');
    }

    # .. Proses tampilan data anggota pada tampilan admin
    public function tmDataAnggota()
    {
        $ang = DB::table('tb_anggota')->get();
        return view('projectUAS.adm_tampAnggota', ['anggota' => $ang]);
    }

    # .. Proses input data anggota pada tampilan admin
    public function inpAnggota()
    {
        return view('projectUAS.adm_inAnggota');
    }

    public function psAnggota(Request $x)
    {
        DB::table('tb_anggota')->insert([
            'nim' => $x->nim,
            'nama_ang' => $x->nama,
            'prodi' => $x->prodi,
            'angkatan' => $x->angk,
        ]);
        return redirect('/Perpustakaan/Anggota');
    }

    # .. Proses update data anggota pada tampilan admin
    public function upAnggota($id)
    {
        $bk1 = DB::table('tb_anggota')->where('nim', $id)->get();
        return view('projectUAS.adm_upAnggota', ['kirim' => $bk1]);
    }

    public function puAnggota(Request $xy)
    {
        DB::table('tb_anggota')->where('nim', $xy->nim)->update([
            'nim' => $xy->nim,
            'nama_ang' => $xy->nama,
            'prodi' => $xy->prodi,
            'angkatan' => $xy->angk,
        ]);
        return redirect('/Perpustakaan/Anggota');
    }

    # .. Proses hapus data anggota pada tampilan admin
    public function delAngg($id)
    {
        DB::table('tb_anggota')->where('nim', $id)->delete();
        return redirect('/Perpustakaan/Anggota');
    }
}

