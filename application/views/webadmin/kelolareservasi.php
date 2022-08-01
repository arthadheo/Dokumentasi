<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Reservasi</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalSubscriptionForm">
                    <i class="fas fa-sm"></i>Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Lihat detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Lihat detail</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>Dewo</td>
                                <td>2121@gmail.com</td>
                                <td>085745123656</td>
                                <td><a href="<?php echo base_url(); ?>EmailReservasi">Lihat disini</a></td>
                                <td>
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Edit
                                    </button>

                                    <input type="hidden" value="" name="id_pelanggan">
                                    <a href="#" onclick="return confirm('Yakin ingin dihapus?')" class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->