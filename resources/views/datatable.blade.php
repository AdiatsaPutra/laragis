@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 mb-5" style="overflow-x:auto;">
    <table>
        <tr>
            <th style="min-width: 180px;">Lattitude</th>
            <th style="min-width: 180px;">Lattitude</th>
            <th style="min-width: 180px;">Last Name</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
            <th style="min-width: 180px;">Points</th>
        </tr>
        @foreach ($datasurvey as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->lattitude }}</td>
            <td>{{ $data->longtitude }}</td>
            <td>{{ $data->namalokasi }}</td>
            <td>{{ $data->kategori }}</td>
            <td>{{ $data->rt }}</td>
            <td>{{ $data->rw }}</td>
            <td>{{ $data->kelurahan }}</td>
            <td>{{ $data->kecamatan }}</td>
            <td>{{ $data->pic1 }}</td>
            <td>{{ $data->pic2 }}</td>
            <td>{{ $data->telp1 }}</td>
            <td>{{ $data->telp2 }}</td>
            <td>{{ $data->namasurveyor }}</td>
            <td>{{ $data->tanggal }}</td>
            <td><img src="{{ $data->fotolokasi1 }}" style="width: 180px;" alt=""></td>
            <td><img src="{{ $data->fotolokasi2 }}" style="width: 180px;" alt=""></td>
            @endforeach
        </tr>
    </table>
</div>

@endsection
