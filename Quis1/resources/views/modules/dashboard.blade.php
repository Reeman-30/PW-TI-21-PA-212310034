@extends('modules.templates.template')

@section('content')
    <div class="card mt-5">
        <h1 class="card-header">List nama Mahasiswa</h1>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['students'] as $index => $result)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $result['npm'] }}</td>
                            <td>{{ $result['nama'] }}</td>
                            <td>{{ $result['kota'] }}</td>
                            <td>{{ $result['jenis-kelamin'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
