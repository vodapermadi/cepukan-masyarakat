<?php

namespace App\Http\Livewire;

use App\Models\Pengaduan as ModelsPengaduan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pengaduan extends Component
{
    public $nik, $tanggal_pengaduan, $isi_laporan,$updateMode = false,$id_pengaduan;
    
    public function render()
    {
        $datas = DB::table('pengaduans')
        ->join('users', 'pengaduans.id_user', '=', 'users.id')
        ->select('pengaduans.*', 'users.*')
        ->orderBy('tanggal_pengaduan','desc')
        ->get();
        // dd($datas);
        return view('livewire.pengaduan', compact('datas'));
    }
    
    public function store()
    {
        $pengaduan = new ModelsPengaduan([
            'tanggal_pengaduan' => $this->tanggal_pengaduan,
            'id_user' => auth()->user()->id,
            'isi_laporan' => $this->isi_laporan,
        ]);
        $pengaduan->save();
        $this->reset();
    }
    
    public function edit($id)
    {
        $data = ModelsPengaduan::find(($id-1));
        $this->updateMode = true;
        $this->id_pengaduan = $data->id;
        $this->nik = $data->nik;
        $this->tanggal_pengaduan = $data->tanggal_pengaduan;
        $this->isi_laporan = $data->isi_laporan;
        dd($this->id_pengaduan);
    }

    public function update()
    {
        $pengaduan = ModelsPengaduan::find($this->id_pengaduan);
        $this->nik = auth()->user()->nik;
        $pengaduan->update([
            'nik' => $this->nik,
            'tanggal_pengaduan' => $this->tanggal_pengaduan,
            'isi_laporan' => $this->isi_laporan,
        ]);
        $this->reset();
    }

    public function destroy($id)
    {
        $lapor = ModelsPengaduan::find(($id - 1));
        $lapor->delete();
        $this->reset();
    }
}
