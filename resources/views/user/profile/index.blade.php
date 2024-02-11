@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="/assets/admin/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Nina Mcintire</h3>
                            <p class="text-muted text-center">2112342321</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Jurusan</b> <a class="float-right">Sistem Informasi</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">sample@email.com</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">089832482912</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#updateProfile"
                                        data-toggle="tab">Update Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#changePassword" data-toggle="tab">Change
                                        Password</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="updateProfile">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="nim" class="col-sm-2 col-form-label">NIM/NISN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nim"
                                                    placeholder="NIM/NISN" name="nim">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Nama Lengkap" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="instansi"
                                                    placeholder="Nama instansi, sekolah atau perguruan tinggi "
                                                    name="instansi">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jurusan"
                                                    placeholder="Jurusan" name="jurusan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 col-form-label">HP/WA</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="phone"
                                                    placeholder="Nomor HP atau WA aktif" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="Alamat Lengkap" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profile" class="col-sm-2 col-form-label">Profile</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="profile"
                                                        name="profile">
                                                    <label class="custom-file-label" for="profile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="changePassword">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="newPassword" class="col-sm-2 col-form-label">New</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="newPassword"
                                                    placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="confirmPassword"
                                                    placeholder="Type New Password Again">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
