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
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_dosen; ?></h1>
    </div>
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIP; ?></h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Jurusan; ?></h1>
    </div>
</div>
<div class="container">
<div class="row">
	<div class="col-lg-12" style="padding: 35px 10px;">
		<div class="d-sm-flex justify-content-between">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->Nama_mahasiswa; ?></h6>
		</div>
		<div class="d-sm-flex justify-content-between">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->NIM; ?></h6>
		</div>
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h6 class="h6 mb-0 text-gray-800"><?php echo $mahasiswa->Jurusan; ?></h6>
		</div>
	</div>
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
								<?php if ($doksidangtype1->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen_ttd; ?>" download>Laporan Tugas Akhir - ttd 1</a>
                                    </td>
								<?php }elseif ($doksidangtype1->status == 2 || $doksidangtype1->status == 4 || $doksidangtype1->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen; ?>" download>Laporan Tugas Akhir</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen; ?>" download>Laporan Tugas Akhir</a>
                                    </td>
                                <?php } ?>
								<?php if ($doksidangtype1->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="1" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype1->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="1" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype1->status == 6 || $doksidangtype1->status == 2 || $doksidangtype1->status == 4 || $doksidangtype1->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype1->dokumen_ttd; ?>" download>Laporan Tugas Akhir - Full Ttd</a>
                                    </td>
                                <?php }elseif ($doksidangtype1->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype1->createDate ?></span>
                                </td>
								<?php if ($doksidangtype1->status == 1 || $doksidangtype1->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
								<?php if ($doksidangtype2->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen_ttd; ?>" download>Bukti Bimbingan - ttd 1</a>
                                    </td>
								<?php }elseif ($doksidangtype2->status == 2 || $doksidangtype2->status == 4 || $doksidangtype2->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen; ?>" download>Bukti Bimbingan</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen; ?>" download>Bukti Bimbingan</a>
                                    </td>
                                <?php } ?>

								<?php if ($doksidangtype2->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="2" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype2->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="2" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype2->status == 6 || $doksidangtype2->status == 2 || $doksidangtype2->status == 4 || $doksidangtype2->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype2->dokumen_ttd; ?>" download>Bukti Bimbingan - Full Ttd</a>
                                    </td>
                                <?php }elseif ($doksidangtype2->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype2->createDate ?></span>
                                </td>
								<?php if ($doksidangtype2->status == 1 || $doksidangtype2->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
								<?php if ($doksidangtype3->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen_ttd; ?>" download>Form Pendaftaran Sidang Tugas Akhir - ttd 1</a>
                                    </td>
								<?php }elseif ($doksidangtype3->status == 2 || $doksidangtype3->status == 4 || $doksidangtype3->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen; ?>" download>Form Pendaftaran Sidang Tugas Akhir</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen; ?>" download>Form Pendaftaran Sidang Tugas Akhir</a>
                                    </td>
                                <?php } ?>

								<?php if ($doksidangtype3->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="3" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype3->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="3" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype3->status == 6 || $doksidangtype3->status == 2 || $doksidangtype3->status == 4 || $doksidangtype3->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype3->dokumen_ttd; ?>" download>Form Pendaftaran Sidang Tugas Akhir - Full Ttd</a>
                                    </td>
                                <?php }elseif ($doksidangtype3->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype3->createDate ?></span>
                                </td>
								<?php if ($doksidangtype3->status == 1 || $doksidangtype3->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
								<?php if ($doksidangtype5->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen_ttd; ?>" download>Berita Acara Seminar Kemajuan - ttd 1</a>
                                    </td>
								<?php }elseif ($doksidangtype5->status == 2 || $doksidangtype5->status == 4 || $doksidangtype5->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen; ?>" download>Berita Acara Seminar Kemajuan</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen; ?>" download>Berita Acara Seminar Kemajuan</a>
                                    </td>
                                <?php } ?>

								<?php if ($doksidangtype5->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="5" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype5->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganSidang'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="5" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($doksidangtype5->status == 6 || $doksidangtype5->status == 2 || $doksidangtype5->status == 4 || $doksidangtype5->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/sidang/<?php echo $doksidangtype5->dokumen_ttd; ?>" download>Berita Acara Seminar Kemajuan - Full Ttd</a>
                                    </td>
                                <?php }elseif ($doksidangtype5->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $doksidangtype5->createDate ?></span>
                                </td>
								<?php if ($doksidangtype5->status == 1 || $doksidangtype5->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
							<th class="text-center"><span>File Tandatangan</span></th>
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
								<?php if ($dokyudisiumtype1->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen_ttd; ?>" download>BA Sidang Tugas Akhir - ttd 1</a>
                                    </td>
								<?php }elseif ($dokyudisiumtype1->status == 2 || $dokyudisiumtype1->status == 4 || $dokyudisiumtype1->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen; ?>" download>BA Sidang Tugas Akhir</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen; ?>" download>BA Sidang Tugas Akhir</a>
                                    </td>
                                <?php } ?>

								<?php if ($dokyudisiumtype1->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="1" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype1->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="1" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype1->status == 6 || $dokyudisiumtype1->status == 2 || $dokyudisiumtype1->status == 4 || $dokyudisiumtype1->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype1->dokumen_ttd; ?>" download>BA Sidang Tugas Akhir - Full Ttd</a>
                                    </td>
                                <?php }elseif ($dokyudisiumtype1->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype1->createDate ?></span>
                                </td>
								<?php if ($dokyudisiumtype1->status == 1 || $dokyudisiumtype1->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
								<?php if ($dokyudisiumtype2->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen_ttd; ?>" download>Revisi Laporan Tugas Akhir - ttd 1</a>
                                    </td>
								<?php }elseif ($dokyudisiumtype2->status == 2 || $dokyudisiumtype2->status == 4 || $dokyudisiumtype2->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen; ?>" download>Revisi Laporan Tugas Akhir</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen; ?>" download>Revisi Laporan Tugas Akhir</a>
                                    </td>
                                <?php } ?>

								<?php if ($dokyudisiumtype2->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="2" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype2->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="2" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype2->status == 6 || $dokyudisiumtype2->status == 2 || $dokyudisiumtype2->status == 4 || $dokyudisiumtype2->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype2->dokumen_ttd; ?>" download>Revisi Laporan Tugas Akhir - Full Ttd</a>
                                    </td>
                                <?php }elseif ($dokyudisiumtype2->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype2->createDate ?></span>
                                </td>
								<?php if ($dokyudisiumtype2->status == 1 || $dokyudisiumtype2->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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
								<?php if ($dokyudisiumtype3->status == 3) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen_ttd; ?>" download>Surat Keterangan Perbaikan Tugas Akhir - ttd 1</a>
                                    </td>
								<?php }elseif ($dokyudisiumtype3->status == 2 || $dokyudisiumtype3->status == 4 || $dokyudisiumtype3->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen; ?>" download>Surat Keterangan Perbaikan Tugas Akhir</a>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen; ?>" download>Surat Keterangan Perbaikan Tugas Akhir</a>
                                    </td>
                                <?php } ?>

								<?php if ($dokyudisiumtype3->status == 1 && $anakbimbing->pembimbing == 1) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="3" name="type">
                                            <input type="hidden" value="3" name="status">

                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype3->status == 3 && $anakbimbing->pembimbing == 2) { ?>
									<td>
                                        <form method="POST" action="<?php echo base_url('updateTandaTanganYudisium'); ?>" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $mahasiswa->NIM; ?>" name="nim">
                                            <input type="hidden" value="3" name="type">
                                            <input type="hidden" value="6" name="status">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
								<?php }elseif ($dokyudisiumtype3->status == 6 || $dokyudisiumtype3->status == 2 || $dokyudisiumtype3->status == 4 || $dokyudisiumtype3->status == 5) { ?>
									<td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/yudisium/<?php echo $dokyudisiumtype3->dokumen_ttd; ?>" download>Surat Keterangan Perbaikan Tugas Akhir - Full Ttd</a>
                                    </td>
                                <?php }elseif ($dokyudisiumtype3->status == 3 && $anakbimbing->pembimbing == 1) { ?>
                                    <td class="text-center">
										<span class="label label-success">Belum ditandatangani pembimbing 2</span>
									</td>
                                <?php }else{ ?>
									<td class="text-center">
										<span class="label label-success">Belum ditandatangi</span>
									</td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokyudisiumtype3->createDate ?></span>
                                </td>
								<?php if ($dokyudisiumtype3->status == 1 || $dokyudisiumtype3->status == 3) { ?>
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
                                <td class="text-center">
                                    <span class="label label-success">File belum di upload</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-success">-</span>
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