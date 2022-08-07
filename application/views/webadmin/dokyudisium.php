<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
</head>
<body>
<div class="container-fluid">
	<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
		<div class="d-sm-flex justify-content-between">
			<h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_mahasiswa; ?></h1>
		</div>
		<div class="d-sm-flex justify-content-between">
			<h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIM;?></h1>
		</div>
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h5 mb-0 text-gray-800"><?php echo $user->Jurusan;?></h1>
		</div>
	</div>
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
            <div>
                <thead><h4  class="text-center" style="padding-bottom:15px;">Dokumen Yudisium</h4></thead>
            </div>
			<div class="table-responsive">
			<table class="table user-list">
					<thead>
						<tr>
							<th class="text-center"><span>Judul Dokumen</span></th>
							<th class="text-center"><span>Deadline</span></th>
							<th class="text-center"><span>File</span></th>
							<th class="text-center"><span>File Tandatangan</span></th>
							<th class="text-center"><span>Send Date</span></th>
							<th class="text-center"><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
						</thead>
						<?php if (isset($dokyudisiumtype1)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">BA Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen; ?>" download>Laporan Tugas Akhir</a>
                                </td>
                                <?php if ($dokyudisiumtype1->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype1->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype1->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype1->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype1->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
								<?php if ($dokyudisiumtype1->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">BA Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/1" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype2)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Revisi Laporan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen; ?>" download>Bukti Bimbingan</a>
                                </td>
                                <?php if ($dokyudisiumtype2->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype2->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype2->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype2->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype2->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype2->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Revisi Laporan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/2" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype3)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Perbaikan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen; ?>" download>Form Pendaftaran Sidang Tugas Akhir</a>
                                </td>
                                <?php if ($dokyudisiumtype3->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype3->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype3->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype3->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype3->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype3->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Perbaikan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/3" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype4)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Transkrip Mahasiswa 144 SKS</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype4->dokumen; ?>" download>Transkrip Mahasiswa</a>
                                </td>
                                <?php if ($dokyudisiumtype4->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype4->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype4->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype4->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype4->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype4->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Transkrip Mahasiswa 144 SKS</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/4" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype5)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Transkrip PEM Minimum 1300</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype5->dokumen; ?>" download>Transkrip PEM</a>
                                </td>
                                <?php if ($dokyudisiumtype5->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype5->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype5->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype5->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype5->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype5->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Transkrip PEM Minimum 1300</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/5" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype6)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Sertifikat TOEFL Minimum 475</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype6->dokumen; ?>" download>Sertifikat TOEFL</a>
                                </td>
                                <?php if ($dokyudisiumtype6->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype6->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype6->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype6->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype6->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype6->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Sertifikat TOEFL Minimum 475</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/6" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype7)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Bebas Pustaka</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype7->dokumen; ?>" download>Surat Keterangan Bebas Pustaka</a>
                                </td>
                                <?php if ($dokyudisiumtype7->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype7->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype7->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype7->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype7->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype7->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Bebas Pustaka</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/7" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype8)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Bebas Aset</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype8->dokumen; ?>" download>Surat Keterangan Bebas Aset</a>
                                </td>
                                <?php if ($dokyudisiumtype8->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype8->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype8->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype8->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype8->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype8->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Bebas Aset</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/8" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype9)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Lunas SPP</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype9->dokumen; ?>" download>Surat Keterangan Lunas SPP</a>
                                </td>
                                <?php if ($dokyudisiumtype9->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype9->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype9->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype9->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype9->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype9->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Surat Keterangan Lunas SPP</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/9" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype10)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Foto Hitam Putih 4 x 6</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype10->dokumen; ?>" download>Foto Hitam Putih</a>
                                </td>
                                <?php if ($dokyudisiumtype10->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype10->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype10->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype10->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype10->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype10->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Foto Hitam Putih 4 x 6</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/10" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype11)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Formulir Pendaftaran Yudisium</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype11->dokumen; ?>" download>Formulir Pendaftaran Yudisium</a>
                                </td>
                                <?php if ($dokyudisiumtype11->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype11->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype11->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype11->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype11->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype11->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Formulir Pendaftaran Yudisium</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/11" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>

					<?php if (isset($dokyudisiumtype12)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Kartu Keluarga</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype12->dokumen; ?>" download>Kartu Keluarga</a>
                                </td>
                                <?php if ($dokyudisiumtype12->dokumen_ttd) { ?>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
                                    </td>
								<?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype12->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokyudisiumtype12->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokyudisiumtype12->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokyudisiumtype12->status == 3) {
                                        $status = "File ditandatangi";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($dokyudisiumtype12->dokumen_ttd) { ?>
                                    <td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
                                <?php }else{ ?>
									<td class="text-center">
									</td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Kartu Keluarga</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadYudisium'); ?>/12" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-8"><input type="file" name="file"></div>
                                            <div class="col-4"><button type="submit">Upload</button></div>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">Belum diupload</span>
                                </td>
                                <td>
                                </td>
                            </tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>	

</body>

</html>