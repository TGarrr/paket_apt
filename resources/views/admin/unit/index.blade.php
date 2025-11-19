@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-building mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex fleex-warp justify-content-between align-items-center">
            <div class="mb-1">
                <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
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
                            <th>ID UNIT</th>
                            <th>NAMA UNIT</th>
                            <th>ID TOWER (Nama Tower)</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>UNT001</td>
                            <td>1101</td>
                            <td>Towor 1</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
