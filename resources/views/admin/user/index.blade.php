@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex fleex-warp justify-content-between align-items-center">
            <div class="mb-1">
                <a href="{{ route('userCreate') }}" class="btn btn-sm btn-warning"><i class="fas fa-plus mr-2"></i>Tambah
                    Data</a>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2">Excel</i>
                </a>

                <a href="#" class="btn btn-sm btn-danger">
                    <i class="fas fa-file-excel mr-2">PDF</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-center">
                                    @if ($item->jabatan == 'admin')
                                        <span class="badge badge-success badge-success">
                                            {{ $item->jabatan }}
                                        </span>
                                    @else
                                        <span class="badge badge-primary badge-pill">
                                            {{ $item->jabatan }}
                                        </span>
                                    @endif

                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
