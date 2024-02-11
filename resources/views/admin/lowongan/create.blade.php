@extends('layouts.main')

@section('content')
    <!-- Header -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Lowongan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/lowongan">Lowongan</a></li>
                        <li class="breadcrumb-item active">Tambah Lowongan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">                
                <form class="form-horizontal">
                    <div class="card-body"> 
                        <div class="form-group row">
                            <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="posisi" placeholder="Nama Posisi Kerja Praktek">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="posisi" placeholder="Nama Posisi Kerja Praktek">
                            </div>
                        </div>                        
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-danger float-right">Sign in</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
