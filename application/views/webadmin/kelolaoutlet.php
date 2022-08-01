<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kelola Outlet</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

                
<!-- modal tambah -->
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Outlet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo base_url('KelolaOutlet') ?>">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                <input type="text" name="nama_store" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form3">Nama</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="lokasi_store" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Lokasi</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="nomor_telepon_restoran" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Nomor Telepon</label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="kuota" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Kuota</label>
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

<!-- modal edit -->
<?php foreach($store as $str) { ?>
<div class="modal fade" id="modalEdit<?php echo $str->id_store; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open_multipart('KelolaOutlet/edit_store'); ?>
            <input type="hidden" name="id_store" value="<?php echo $str->id_store; ?>"/>
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Edit Outlet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo base_url('KelolaOutlet') ?>">
            <div class="modal-body mx-3">
                <!-- <div class="md-form mb-5">
                <input type="hidden" name="id_store" class="form-control validate" value="<?php echo $store->id_store ?>">
                </div> -->

                <div class="md-form mb-5">
                <input type="text" name="nama_store" class="form-control validate" value="<?php echo $str->nama_store; ?>">
                <label data-error="wrong" data-success="right" for="form3"></label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="lokasi_store" class="form-control validate" value="<?php echo $str->lokasi_store; ?>">
                <label data-error="wrong" data-success="right" for="form2"></label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="nomor_telepon_restoran" class="form-control validate" value="<?php echo $str->nomor_telepon_restoran; ?>">
                <label data-error="wrong" data-success="right" for="form2"></label>
                </div>

                <div class="md-form mb-4">
                <input type="text" name="kuota" class="form-control validate" value="<?php echo $str->kuota; ?>">
                <label data-error="wrong" data-success="right" for="form2"></label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary">Submit <i class="ml-1"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>

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
                                <th>Lokasi</th>
                                <th>Nomor Telepon</th>
                                <th>Kuota</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Nomor Telepon</th>
                                <th>Kuota</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <?php foreach ($store as $str) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $str->nama_store; ?></td>
                                <td><?php echo $str->lokasi_store; ?></td>
                                <td><?php echo $str->nomor_telepon_restoran; ?></td>
                                <td><?php echo $str->kuota; ?></td>
                                <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalEdit<?php echo $str->id_store; ?>">
                                    <i class="fas fa-sm"></i>Edit
                                </button>
                                    
                                    <input type="hidden" value="<?php echo  $str->id_store; ?>" name="id_store">
                                    <a href="<?= base_url('KelolaOutlet/delete/'.$str->id_store) ?>" onclick="return confirm('Yakin ingin dihapus?')" class="btn btn-primary" type="button">
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