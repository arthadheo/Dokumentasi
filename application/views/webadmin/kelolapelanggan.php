<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Data Pelanggan</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- modal tambah -->
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Pelanggan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo base_url('KelolaPelanggan') ?>">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                <input type="text" name="nama_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form3">Nama</label>
                </div>

                <div class="md-form mb-4">
                <input type="email" name="email_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Email</label>
                </div>

                <div class="md-form mb-4">
                <input type="password" name="katasandi_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Password</label>
                </div>

                <div class="md-form mb-4">
                <input type="password" name="katasandi_pelanggan2" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Ulangi Password</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="nomor_telepon_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Nomor Telepon</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="alamat_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Alamat Rumah</label>
                </div>

                <div class="md-form mb-4">
                <input type="date" name="Birthdate" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Tanggal Lahir</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="point_pelanggan" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Poin</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary">Submit <i class="ml-1"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal tambah end -->


<!-- modal edit end -->
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
                                <th>Alamat Pelanggan</th>
                                <th>Point Pelanggan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat Pelanggan</th>
                                <th>Point Pelanggan</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <?php foreach ($pelanggan as $pl) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $pl->nama_pelanggan; ?></td>
                                <td><?php echo $pl->email_pelanggan; ?></td>
                                <td><?php echo $pl->nomor_telepon_pelanggan; ?></td>
                                <td><?php echo $pl->alamat_pelanggan; ?></td>
                                <td><?php echo $pl->point_pelanggan; ?></td>
                                <td>
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Edit
                                    </button>

                                    <input type="hidden" value="<?php echo $pl->id_pelanggan; ?>" name="id_pelanggan">
                                    <a href="<?= base_url('KelolaPelanggan/deletepelanggan/'.$pl->id_pelanggan) ?>" onclick="return confirm('Yakin ingin dihapus?')" class="btn btn-primary" type="button">
                                        <i class="fas fa-sm"></i>Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
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