<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dokumen Proposal</title>

    <!-- Custom fonts for this template-->
</head>
<body>
<div class="container-fluid">
<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_admin ?></h1>
    </div>
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIP ?></h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Jurusan ?></h1>
    </div>
</div>
<div class="container">
	<div class="col-lg-12" style="padding: 35px 10px;">
		<div class="d-sm-flex justify-content-between">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->Nama_mahasiswa ?></h6>
		</div>
		<div class="d-sm-flex justify-content-between">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->NIM ?></h6>
		</div>
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->Jurusan ?></h6>
		</div>
<div class="row" style="padding:5px ;">
	</div>
		<div class="main-box clearfix">
            <div>
                <thead><h4  class="text-center" style="padding-bottom:15px;">Dokumen Proposal Tugas Akhir</h4></thead>
            </div>
			<div class="table-responsive">
			<table class="table user-list">
                    <?php if (isset($dokproposal)) { ?>
					<thead>
						<tr>
							<th class="text-center"><span>Judul Dokumen</span></th>
							<th class="text-center"><span>Deadline</span></th>
                            <th class="text-center"><span>Download</span></th>
                            <th class="text-center"><span>Send Date</span></th>
                            <th class="text-center"><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Proposal Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/proposal/<?php echo $dokproposal->dokumen; ?>" download>Dokumen Proposal Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokproposal->createDate; ?></span>
                                </td>
								<?php  if ($dokproposal->status == 1 || $dokproposal->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/1/<?php echo $dokproposal->nim ?>/0/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/1/<?php echo $dokproposal->nim ?>/0/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokproposal->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokproposal->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                </td>
                            </tr>
                        </tbody>
					<?php }else{ ?>
                        <thead>
                            <tr>
                                <th class="text-center"><span>Judul Dokumen</span></th>
                                <th class="text-center"><span>Deadline</span></th>
                                <th class="text-center"><span>File</span></th>
                                <th class="text-center"><span>Send Date</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Proposal Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
            <div>
                <thead><h4  class="text-center" style="padding-bottom:15px;">Dokumen Seminar Tugas Akhir</h4></thead>
            </div>
			<div class="table-responsive">
			<table class="table user-list">
                    <?php if (isset($dokseminar)) { ?>
					<thead>
						<tr>
							<th class="text-center"><span>Judul Dokumen</span></th>
							<th class="text-center"><span>Deadline</span></th>
							<th class="text-center"><span>File</span></th>
                            <th class="text-center"><span>Send Date</span></th>
                            <th class="text-center"><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Seminar Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/seminar/<?php echo $dokseminar->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokseminar->createDate; ?></span>
                                </td>
                                <?php  if ($dokseminar->status == 1 || $dokseminar->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/2/<?php echo $dokproposal->nim ?>/0/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/2/<?php echo $dokproposal->nim ?>/0/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokseminar->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokseminar->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <thead>
                            <tr>
                                <th class="text-center"><span>Judul Dokumen</span></th>
                                <th class="text-center"><span>Deadline</span></th>
                                <th class="text-center"><span>File</span></th>
                                <th class="text-center"><span>Send Date</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Seminar Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
<br>
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
            <div>
                <thead><h4  class="text-center" style="padding-bottom:15px;">Dokumen Sidang Tugas Akhir</h4></thead>
            </div>
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th class="text-center"><span>Judul Dokumen</span></th>
							<th class="text-center"><span>Deadline</span></th>
							<th class="text-center"><span>File</span></th>
                            <th class="text-center"><span>Send Date</span></th>
                            <th class="text-center"><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<?php if (isset($doksidangtype1)) { ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen; ?>" download>Dokumen Sidang Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype1->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype1->status == 1 || $doksidangtype1->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype1->nim ?>/1/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype1->nim ?>/1/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype1->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype1->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    <?php }else{ ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <span class="label label-success">Dokumen Sidang Tugas Akhir</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">25/12/2022</span>
                                </td>
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen; ?>" download>Bukti Bimbingan</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype2->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype2->status == 1 || $doksidangtype2->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype2->nim ?>/2/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype2->nim ?>/2/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype2->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype2->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen; ?>" download>Form Pendaftaran Sidang Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype3->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype3->status == 1 || $doksidangtype3->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype3->nim ?>/3/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype3->nim ?>/3/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype3->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype3->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype4->dokumen; ?>" download>Transkrip Mahasiswa</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype4->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype4->status == 1 || $doksidangtype4->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype4->nim ?>/4/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype4->nim ?>/4/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype4->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype4->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen; ?>" download>Berita Acara Seminar Kemajuan</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype5->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype5->status == 1 || $doksidangtype5->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype5->nim ?>/5/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype5->nim ?>/5/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype5->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype5->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                <td class="text-center">
                                    <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype6->dokumen; ?>" download>Form Keterangan Bebas Pinjam Laboratorium</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype6->createDate; ?></span>
                                </td>
                                <?php  if ($doksidangtype6->status == 1 || $doksidangtype6->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype6->nim ?>/6/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/3/<?php echo $doksidangtype6->nim ?>/6/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($doksidangtype6->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($doksidangtype6->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype1->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype1->status == 1 || $dokyudisiumtype1->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype1->nim ?>/1/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype1->nim ?>/1/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype1->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype1->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype2->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype2->status == 1 || $dokyudisiumtype2->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype2->nim ?>/2/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype2->nim ?>/2/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype2->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype2->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype3->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype3->status == 1 || $dokyudisiumtype3->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype3->nim ?>/3/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype3->nim ?>/3/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype3->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype3->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype4->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype4->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype4->status == 1 || $dokyudisiumtype4->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype4->nim ?>/4/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype4->nim ?>/4/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype4->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype4->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype5->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype5->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype5->status == 1 || $dokyudisiumtype5->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype5->nim ?>/5/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype5->nim ?>/5/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype5->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype5->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype6->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype6->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype6->status == 1 || $dokyudisiumtype6->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype6->nim ?>/6/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype6->nim ?>/6/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype6->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype6->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype7->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype7->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype7->status == 1 || $dokyudisiumtype7->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype7->nim ?>/7/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype7->nim ?>/7/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype7->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype7->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype8->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype8->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype8->status == 1 || $dokyudisiumtype8->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype8->nim ?>/8/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype8->nim ?>/8/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype8->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype8->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype9->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype9->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype9->status == 1 || $dokyudisiumtype9->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype9->nim ?>/9/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype9->nim ?>/9/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype9->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype9->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype10->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype10->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype10->status == 1 || $dokyudisiumtype10->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype10->nim ?>/10/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype10->nim ?>/10/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype10->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype10->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype11->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype11->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype11->status == 1 || $dokyudisiumtype11->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype11->nim ?>/11/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype11->nim ?>/11/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype11->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype11->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
                                    <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype12->dokumen; ?>" download>Dokumen Seminar Tugas Akhir</a>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype12->createDate; ?></span>
                                </td>
                                <?php  if ($dokyudisiumtype12->status == 1 || $dokyudisiumtype12->status == 5) { ?>
									<td class="column text-center">
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype12->nim ?>/12/2" class="btn btn-success">Setuju</a>
										<a href="<?php echo base_url(); ?>validasiAdmin/4/<?php echo $dokyudisiumtype12->nim ?>/12/4" class="btn btn-danger">Tidak!</a>
									</td>
									<td>
										<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
									</td>
								<?php }elseif ($dokyudisiumtype12->status == 2) { ?>
									<td class="text-center">
										<span class="label label-success">File disetujui</span>
									</td>
								<?php }elseif ($dokyudisiumtype12->status == 4) { ?>
									<td class="text-center">
										<span class="label label-success">File tidak disetujui</span>
									</td>
								<?php } ?>
                                <td>
                                </td>
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
                                <td class="text-center">
									<span class="label label-success">File belum diupload</span>
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
<br>

<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div>
                <thead><h4  class="text-center">Pilih Dosen Pembimbing</h4></thead>
            </div>
            <div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th class="text-center"><span>Pembimbing</span></th>
							<th class="text-center"><span>Pilih</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td class="text-center">
								<span class="label label-success">Pembimbing 1</span>
							</td>
							<form>
								<td class="text-center">
									<select name="dosbing1">
									<?php foreach ($dosen as $val) { ?>
										<option value="<?php echo $val->NIP ?>"><?php echo $val->Nama_dosen ?></option>
									<?php } ?>
									</select>
								</td>
								<td class="text-center">
									<button class="btn btn-primary btn-user btn-block" type="submit">Submit</button>
								</td>
							</form>
                        </tr>
						<tr>
                            <td class="text-center">
								<span class="label label-success">Pembimbing 2</span>
							</td>
							<td class="text-center">
								<form>
									<select name="dosbing2">
									<?php foreach ($dosen as $val) { ?>
										<option value="<?php echo $val->NIP ?>"><?php echo $val->Nama_dosen ?></option>
									<?php } ?>
									</select>
								</form>
							</td>
							<td class="text-center">
								<button class="btn btn-primary btn-user btn-block" type="submit">Submit</button>
							</td>
                        </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

</div>


</body>

</html>