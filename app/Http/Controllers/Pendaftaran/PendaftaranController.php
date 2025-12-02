<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request){
        // 1. VALIDASI: Harus SAMA PERSIS dengan name="..." di HTML
        $validasi = $request->validate([
            'nama_lengkap'    => 'required|string|max:255', // HTML: name="nama_lengkap"
            'email'           => 'required|email|unique:students,email',
            'jalur'           => 'required|string',
            'image'           => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_panggilan'  => 'required|string|max:255', // HTML: name="nama_panggilan"
            'nomor_hp'        => 'required|string|max:15',
            'program_studi_1' => 'required|string',         // HTML: name="program_studi_1"
            'program_studi_2' => 'required|string',         // HTML: name="program_studi_2"
        ]);

        // 2. Upload Image
        $fotoName = null;
        if ($request->hasFile('image')) {
            $fotoName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('students', $fotoName, 'public'); 
            
            if (!$path) {
                return back()->with('error', 'Gagal upload gambar.');
            }
        }

        // 3. SIMPAN DATABASE: Mapping Kiri (DB) = Kanan (Form HTML)
        Student::create([
            // Kolom Database (Migration)   =>   Input Form HTML ($request)
            'nama_lengkap'   => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'email'          => $request->email,
            'nomor_hp'       => $request->nomor_hp,
            'jalur'          => $request->jalur,
            'image'          => $fotoName,
            
            // Perhatikan perbedaan ini:
            // DB kamu: programstudi_1 (tanpa underscore)
            // HTML kamu: program_studi_1 (pakai underscore)
            'programstudi_1' => $request->program_studi_1, 
            'programstudi_2' => $request->program_studi_2,
        ]);

        return back()->with('success', 'Berhasil Mendaftar!');
    }
}