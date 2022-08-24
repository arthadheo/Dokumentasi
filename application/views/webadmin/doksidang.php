<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dokumen Sidang</title>

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
                <thead><h4  class="text-center" style="padding-bottom:15px;">Dokumen Sidang</h4></thead>
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
						<?php if (isset($doksidangtype1)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Laporan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype1->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/1" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen; ?>" download>Laporan Tugas Akhir</a>
                                    </td>
                                <?php } ?>
                                <?php if ($doksidangtype1->status == 3) { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen_ttd; ?>" download>Laporan Tugas Akhir - ttd 1</a>
                                    </td>
                                <?php }elseif ($doksidangtype1->status == 6 || $doksidangtype1->status == 4) { ?>
                                    <td class="text-center">    
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen_ttd; ?>" download>Laporan Tugas Akhir - full</a>
                                    </td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype1->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype1->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype1->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype1->status == 3) {
                                        $status = "File ditandatangi pembimbing 1";
                                    }elseif ($doksidangtype1->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype1->status == 5) {
                                        $status = "File update terupload";
                                    }elseif ($doksidangtype1->status == 6) {
                                        $status = "File sudah ditandatangani";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
								<?php if ($doksidangtype1->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Laporan Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/1" enctype="multipart/form-data">
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

					<?php if (isset($doksidangtype2)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Bukti Bimbingan</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype2->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/2" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen; ?>" download>Bukti Bimbingan</a>
                                    </td>
                                <?php } ?>
                                <?php if ($doksidangtype2->status == 3) { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen_ttd; ?>" download>Bukti Bimbingan - ttd 1</a>
                                    </td>
                                <?php }elseif ($doksidangtype2->status == 6 || $doksidangtype2->status == 4) { ?>
                                    <td class="text-center">    
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen_ttd; ?>" download>Bukti Bimbingan - full</a>
                                    </td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype2->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype2->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype2->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype2->status == 3) {
                                        $status = "File ditandatangi pembimbing 1";
                                    }elseif ($doksidangtype2->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype2->status == 5) {
                                        $status = "File update terupload";
                                    }elseif ($doksidangtype2->status == 6) {
                                        $status = "File sudah ditandatangani";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($doksidangtype2->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Bukti Bimbingan</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/2" enctype="multipart/form-data">
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

					<?php if (isset($doksidangtype3)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Form Pendaftaran Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype3->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/3" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen; ?>" download>Form Pendaftaran Sidang Tugas Akhir</a>
                                    </td>
                                <?php } ?>
                                <?php if ($doksidangtype3->status == 3) { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen_ttd; ?>" download>Bukti Bimbingan - ttd 1</a>
                                    </td>
                                <?php }elseif ($doksidangtype3->status == 6 || $doksidangtype3->status == 4) { ?>
                                    <td class="text-center">    
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen_ttd; ?>" download>Bukti Bimbingan - full</a>
                                    </td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype3->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype3->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype3->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype3->status == 3) {
                                        $status = "File ditandatangi pembimbing 1";
                                    }elseif ($doksidangtype3->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype3->status == 5) {
                                        $status = "File update terupload";
                                    }elseif ($doksidangtype3->status == 6) {
                                        $status = "File sudah ditandatangani";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($doksidangtype3->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Form Pendaftaran Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/3" enctype="multipart/form-data">
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

					<?php if (isset($doksidangtype4)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Transkrip Mahasiswa</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype4->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/4" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype4->dokumen; ?>" download>Transkrip Mahasiswa</a>
                                    </td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success">File tidak perlu tanda tangan dosen</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype4->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype4->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype4->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype4->status == 3) {
                                        $status = "File ditandatangi";
                                    }elseif ($doksidangtype4->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype4->status == 5) {
                                        $status = "File update terupload";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($doksidangtype4->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Transkrip Mahasiswa</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/4" enctype="multipart/form-data">
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

					<?php if (isset($doksidangtype5)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Berita Acara Seminar Kemajuan</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype5->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/5" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen; ?>" download>Berita Acara Seminar Kemajuan</a>
                                    </td>
                                <?php } ?>
                                <?php if ($doksidangtype5->status == 3) { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen_ttd; ?>" download>Berita Acara Seminar Kemajuan - ttd 1</a>
                                    </td>
                                <?php }elseif ($doksidangtype5->status == 6 || $doksidangtype5->status == 4) { ?>
                                    <td class="text-center">    
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen_ttd; ?>" download>Berita Acara Seminar Kemajuan - full</a>
                                    </td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype5->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype5->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype5->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype5->status == 3) {
                                        $status = "File ditandatangi";
                                    }elseif ($doksidangtype5->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype5->status == 5) {
                                        $status = "File update terupload";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($doksidangtype5->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Berita Acara Seminar Kemajuan</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/5" enctype="multipart/form-data">
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

					<?php if (isset($doksidangtype6)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Form Keterangan Bebas Pinjam Laboratorium</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <?php if ($doksidangtype6->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSidang'); ?>/6" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype6->dokumen; ?>" download>Form Keterangan Bebas Pinjam Laboratorium</a>
                                    </td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success">File tidak perlu tanda tangan dosen</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype6->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($doksidangtype6->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($doksidangtype6->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($doksidangtype6->status == 3) {
                                        $status = "File ditandatangi";
                                    }elseif ($doksidangtype6->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($doksidangtype6->status == 5) {
                                        $status = "File update terupload";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
                                <?php if ($doksidangtype6->dokumen_ttd) { ?>
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
                                    <span class="label label-success">Form Keterangan Bebas Pinjam Laboratorium</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSidang'); ?>/6" enctype="multipart/form-data">
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

</body>

</html>