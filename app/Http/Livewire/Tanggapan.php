<?php

namespace App\Http\Livewire;

use App\Models\Tanggapan as ModelsTanggapan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Tanggapan extends Component
{
    public function render()
    {
        $datas = DB::table('tanggapans')
            ->join('pengaduans','tanggapans.id_pengaduan','=','pengaduans.id')
            ->join('users','tanggapans.id_user','=','users.id')
            ->select('tanggapans.*','pengaduans.*','users.*')
            ->get();
        // $user = DB::table('tanggapans')
        //     ->select('tanggapans.*','users.*')
        //     ->first();
        // dd($pengaduan,$user);
        return view('livewire.tanggapan',compact('datas'));
    }
}
