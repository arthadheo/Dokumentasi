<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dokumen Seminar</title>

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
                                <?php if ($dokseminar->status == 4) { ?>
                                    <td>
                                        <form method="POST" action="<?php echo base_url('updateSeminar'); ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8"><input type="file" name="file1"></div>
                                                <div class="col-4"><button type="submit">Upload</button></div>
                                            </div>
                                        </form>
                                    </td>
                                <?php }else { ?>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>document/proposal/<?php echo $dokseminar->dokumen; ?>" download>Dokumen Proposal Tugas Akhir</a>
                                    </td>
                                <?php } ?>
                                <td class="text-center">
                                    <span class="label label-success"><?php echo $dokseminar->createDate; ?></span>
                                </td>
                                <td class="text-center">
                                    <?php 
                                    if ($dokseminar->status == 1) {
                                        $status = "File terupload";
                                    }elseif ($dokseminar->status == 2) {
                                        $status = "File disetujui";
                                    }elseif ($dokseminar->status == 4) {
                                        $status = "File tidak disetujui";
                                    }elseif ($dokseminar->status == 5) {
                                        $status = "File update terupload";
                                    }
                                    ?>
                                    <span class="label label-success"><?php echo $status ?></span>
                                </td>
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
                                <td>
                                    <form method="POST" action="<?php echo base_url('uploadSeminar'); ?>" enctype="multipart/form-data">
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