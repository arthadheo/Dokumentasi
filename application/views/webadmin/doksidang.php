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
<?php foreach ($mahasiswa as $mh) { ?>
<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $mh->Nama_mahasiswa; ?></h1>
    </div>
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $mh->NIM;?></h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $mh->Jurusan;?></h1>
    </div>
</div>
<?php } ?>
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
							<th class="text-center"><span>Upload</span></th>
                            <th class="text-center"><span>Download</span></th>
                            <th class="text-center"><span>Send Date</span></th>
                            <th class="text-center"><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <td class="text-center">
								<span class="label label-success">Laporan Tugas Akhir</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile1">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
							</td>
                        </tr>
                        <tr>
                            <td class="text-center">
								<span class="label label-success">Bukti Bimbingan</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile2">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
								<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
							</td>
                        </tr>
                        <tr>
                            <td class="text-center">
								<span class="label label-success">Form Pendaftaran Sidang Tugas Akhir</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile3">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
								<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
							</td>
                        </tr>
                        <tr>
                            <td class="text-center">
								<span class="label label-success">Transkrip Mahasiswa</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile4">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
								
							</td>
                        </tr>
                        <tr>
                            <td class="text-center">
								<span class="label label-success">Berita Acara Seminar Kemajuan</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile4">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
								<img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
							</td>
                        </tr>
                        <tr>
                            <td class="text-center">
								<span class="label label-success">Form Keterangan Bebas Pinjam Laboratorium</span>
							</td>
							<td class="text-center">
								<span class="label label-success">25/12/2022</span>
							</td>
							<td class="text-center">
                                <input class="form btn" type="file" id="formFile4">
							</td>
							<td class="text-center">
                                <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Download</button>
							</td>
                            <td class="text-center">
                                <span class="label label-success">20/12/2022</span>
                            </td>
                            <td class="text-center">
                                <span class="label label-success">In Progress</span>
                            </td>
							<td>
								
							</td>
                        </tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

</body>

</html>