{{-- The Master doesn't talk, he acts. --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <table class="table text-center">
                        <tr>
                            <th>Laporan</th>
                            <th>Tanggal di Tanggapi</th>
                            <th>Status</th>
                            <th>Pelapor</th>
                        </tr>
                        @foreach ($datas as $p)
                            <tr>
                                <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->tanggal_tanggapan }}</td>
                                <td>{{ $p->status }}</td>
                                <td>{{ $p->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
