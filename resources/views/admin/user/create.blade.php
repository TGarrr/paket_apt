@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex fleex-warp justify-content-between align-items-center">
            <div class="mb-1">
                <a href="{{ route('user') }}" class="btn btn-sm btn-success"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-6">
                    <form action="" method="post">
                        <label class="form-label">
                            <span class="text-danger">*</span>Nama :
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                    </form>
                </div>

                <div class="col-md-6">
                    <form action="" method="post">
                        <label class="form-label">
                            <span class="text-danger">*</span>Email :
                        </label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukan Email">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <label class="form-label">
                            <span class="text-danger">*</span>Jabatan :
                        </label>
                        <select name="jabatan" class="form-control">
                            <option selected disabled>--Pilih Jabatan--</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <form action="" method="post">
                        <label class="form-label">
                            <span class="text-danger">*</span>Password :
                        </label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukan Password">
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="" method="post">
                        <label class="form-label">
                            <span class="text-danger">*</span>Password Konfirmasi :
                        </label>
                        <input type="password" class="form-control" id="password" name="password_confirmation"
                            placeholder="Konfirmasi Password">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
