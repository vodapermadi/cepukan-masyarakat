{{-- Stop trying to control. --}}
{{-- In work, do what you enjoy. --}}
<div class="container">
    <div class="row justify-content-center">
        @if (Auth::user()->level == 'masyarakat')
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">{{ __('Form Pengaduan') }}</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="date" class="form-control" wire:model='tanggal_pengaduan'>
                        </div>
                        <div class="mb-3">
                            <textarea wire:model="isi_laporan" cols="30" rows="5" class="form-control" placeholder="Isi Laporan"></textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <a href="/home" class="btn btn-danger py-2" style="width: 40%">Back</a>
                            <button type="submit" wire:click='store' class="btn btn-primary py-2"
                                style="width: 40%">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($updateMode)
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">{{ __('Form Pengaduan') }}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <input type="date" class="form-control" wire:model='tanggal_pengaduan' disabled>
                    </div>
                    <div class="mb-3">
                        <textarea wire:model="isi_laporan" cols="30" rows="5" class="form-control" placeholder="Isi Laporan" disabled></textarea>
                    </div>
                    <div class="mb-3">
                        <select wire:model='status' class="form-control">
                            <option value="belum">Belum</option>
                            <option value="proses">proses</option>
                            <option value="selesai">selesai</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <a href="/home" class="btn btn-danger py-2" style="width: 40%">Back</a>
                        <button type="submit" wire:click='update' class="btn btn-primary py-2"
                            style="width: 40%">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-md-8 text-center">
            <table class="table">
                <tr>
                    <th>NIK</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Laporan</th>
                    <th>Status</th>
                    @if (Auth::user()->level == 'petugas' or Auth::user()->level == 'admin')
                        <th>Action</th>
                    @endif
                </tr>
                @foreach ($datas as $d)
                    <tr>
                        <td>{{ $d->nik }}</td>
                        <td>{{ $d->tanggal_pengaduan }}</td>
                        <td>{{ $d->isi_laporan }}</td>
                        <td>{{ $d->status }}</td>
                        @if (Auth::user()->level == 'petugas' or Auth::user()->level == 'admin')
                        <td>
                            <button class="btn btn-success" wire:click='edit({{ $d->id }})'>Edit</button>
                            <button class="btn btn-danger" wire:click='destroy({{ $d->id }})'>Delete</button>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </table>
            <div>
                <a href="/home" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
