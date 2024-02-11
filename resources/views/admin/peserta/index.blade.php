@extends('layouts.main')

@push('links')
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('scripts')
    <script src="/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/admin/plugins/jszip/jszip.min.js"></script>
    <script src="/assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#table_peserta").DataTable({
                "paging": true,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel"]
            }).buttons().container().appendTo('#table_peserta_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush

@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-body">
                    <div id="table_peserta_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table_peserta"
                                    class="table table-bordered table-striped dataTable dtr-inline text-center"
                                    aria-describedby="table_peserta_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="table_peserta"
                                                rowspan="1" colspan="1" aria-sort="ascending">NIM/NISN</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_peserta" rowspan="1"
                                                colspan="1">Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_peserta" rowspan="1"
                                                colspan="1">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_peserta" rowspan="1"
                                                colspan="1">Jurusan/Prodi</th>
                                            <th class="sorting" tabindex="0" aria-controls="table_peserta" rowspan="1"
                                                colspan="1">Status</th>
                                            <th tabindex="0" rowspan="1" class="no-print">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-success">DITERIMA</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="dtr-control sorting_1" tabindex="0">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="dtr-control sorting_1" tabindex="0">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-success">DITERIMA</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-success">DITERIMA</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-success">DITERIMA</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-success">DITERIMA</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1 dtr-control">2132423041</td>
                                            <td>Jhon Doe</td>
                                            <td>sample@mail.com</td>
                                            <td>Sistem Informasi</td>
                                            <td><span class="badge py-2 px-2 bg-danger">PROSES</span></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="">Terima</a>
                                                <a class="btn btn-sm btn-warning" href="">Tolak</a>
                                                <span class="px-2">|</span>
                                                <a class="btn btn-sm btn-info" href="">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">NIM/NISN</th>
                                            <th rowspan="1" colspan="1">Nama</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">Jurusan</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1">Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
