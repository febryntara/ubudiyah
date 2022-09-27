<?php

namespace App\Http\Controllers;

use App\Models\SchoolEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolEventController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Kegiatan',
            'acara' => SchoolEvent::latest()->get()
        ];
        return view('admin.acara', $data);
    }
    public function detail(SchoolEvent $schoolEvent)
    {
        $data = [
            'title' => 'Daftar Kegiatan',
            'acara' => $schoolEvent
        ];
        return view('pages.kegiatan.detailKegiatan', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Acara Baru',
        ];
        return view('admin.tambah_acara', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'ketua_panitia' => 'required|string',
            'penanggung_jawab' => 'required|string',
            'jumlah_peserta' => 'required|numeric',
            'tanggal_mulai' => 'date|nullable',
            'tanggal_selesai' => 'date|nullable',
            'waktu_mulai' => 'string|nullable',
            'waktu_selesai' => 'string|nullable',
            'gambar.*' => 'nullable|file|mimes:jpeg,jpg,png,gif|max:2500',
        ]);

        // return $validated;
        $bool = SchoolEvent::create($validated);
        if ($bool) {
            if ($request->hasFile('gambar')) {
                $img_src = $request->file('gambar')->store('dynamic_images');
                $bool->images()->create([
                    'src' => $img_src
                ]);
            }
            return redirect()->route('acara.all')->with('success', 'Kegiatan Berhasil Dibuat');
        }
        return redirect()->route('acara.all')->with('error', 'Kegiatan Gagal Dibuat');
    }

    public function update(SchoolEvent $acara)
    {
        $data = [
            'title' => 'Perbaharui Kegiatan',
            'acara' => $acara
        ];
        return view('admin.ubah_acara', $data);
    }

    public function patch(SchoolEvent $acara, Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'ketua_panitia' => 'required|string',
            'penanggung_jawab' => 'required|string',
            'jumlah_peserta' => 'required|numeric',
            'tanggal_mulai' => 'date|nullable',
            'tanggal_selesai' => 'date|nullable',
            'waktu_mulai' => 'string|nullable',
            'waktu_selesai' => 'string|nullable',
            'gambar.*' => 'nullable|file|mimes:jpeg,jpg,png,gif|max:2500',
        ]);
        // dd($schoolEvent->images);
        $bool = $acara->update($validated);
        // return $acara->images->count();
        if ($bool) {
            if ($request->hasFile('gambar')) {
                // if ($acara->images->count() > count($request->file('gambar'))) {
                //     foreach ($acara->images as $key => $value) {
                //         Storage::delete($value->src);
                //     }
                //     $acara->images()->delete();
                // }
                // foreach ($request->file('gambar') as $item => $value) {
                //     if ($item < $acara->images->count()) {
                //         Storage::delete($acara->images[$item]->src);
                //     }
                //     $is_delete = isset($acara->images[$item]) ? $acara->images[$item]->delete() : true;
                //     if ($is_delete) {
                //         $img_src = $value->store('dynamic_images');
                //         $acara->images()->create([
                //             'src' => $img_src
                //         ]);
                //     }
                // }
                $gambar_acara = $acara->images->first();
                $gambar_acara->update([
                    'src' => $request->file('gambar')->store('dynamic_images')
                ]);
            }
            return back()->with('success', 'Kegiatan Berhasil Diperbaharui');
        }
        return back()->with('error', 'Kegiatan Gagal Diperbaharui');
    }

    public function delete(SchoolEvent $acara)
    {
        foreach ($acara->images as $key => $value) {
            Storage::delete($value->src);
        }
        $acara->images()->delete();
        $bool = $acara->delete();
        if ($bool) {
            return redirect()->route('acara.all')->with('success', 'Kegiatan Berhasil Dihapus');
        }
        return redirect()->route('acara.all')->with('error', 'Kegiatan Gagal Dihapus');
    }

    public function statusChange(SchoolEvent $acara, Request $request)
    {
        $validated = $request->validate([
            'status_kegiatan' => 'required|string'
        ]);
        $bool = $acara->update($validated);
        if ($bool) {
            return back()->with('success', 'Status Kegiatan Berhasil Diperbaharui');
        }
        return back()->with('error', 'Status Kegiatan Gagal Diperbaharui');
    }
}
