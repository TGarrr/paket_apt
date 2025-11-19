@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-exchange-alt"></i>
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
                            <th>ID TRANSAKSI</th>
                            <th>CREATE BY</th>
                            <th>TANGGAL DI UBAH</th>
                            <th>ID CONTRACT</th>
                            <th>ID JENIS PAKET</th>
                            <th>NAMA KURIR</th>
                            <th>FOTO PAKET</th>
                            <th>NOMOR RESI</th>
                            <th>STATUS PAKET</th>
                            <th>NAMA PENGAMBIL</th>
                            <th>FOTO PENGAMBIL</th>
                            <th>TANGGAL DI AMBIL</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>TRS001</td>
                            <td>KARYAWAN</td>
                            <td>05-12-25</td>
                            <td>CNTR001</td>
                            <td>EKS001</td>
                            <td>JNS001</td>
                            <td>rafli</td>
                            <td>IMG</td>
                            <td>Nomor Resi</td>
                            <td>
                                <span class="badge badge-danger badge-pill">
                                    CANCLE
                                </span>
                            </td>
                            <td>IMG</td>
                            <td>reza</td>
                            <td>foto pengambil</td>
                            <td>tanggal ambil</td>
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
