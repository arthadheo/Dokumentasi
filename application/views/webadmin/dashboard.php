<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<?php if ($user->level == 1) { ?>
<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_mahasiswa; ?> (Mahasiswa)</h1>
    </div>
    <div class="d-sm-flex justify-content-between">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIM;?></h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800"><?php echo $user->Jurusan;?></h1>
    </div>
</div>
<!-- Content Row -->
<div class="row" style="padding-top: 25px;">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Proposal Pengajuan Tugas Akhir
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $dokumenProposal; ?>%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?php echo $dokumenProposal; ?>%" aria-valuenow="<?php echo $dokumenProposal; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Seminar Kemajuan
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $dokumenSeminar; ?>%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?php echo $dokumenSeminar; ?>%" aria-valuenow="<?php echo $dokumenSeminar; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sidang Tugas Akhir
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $dokumenSidang; ?>%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?php echo $dokumenSidang; ?>%" aria-valuenow="<?php echo $dokumenSidang; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Yudisium
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $dokumenYudisium; ?>%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?php echo $dokumenYudisium; ?>%" aria-valuenow="<?php echo $dokumenYudisium; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

<div class="row">
    
</div>
<!-- Content Row -->

<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div 
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="nav-link m-0 font-weight-bold text-primary" href="<?php echo base_url(); ?>dok-proposal">
                    <span>Dokumen Proposal Tugas Akhir</span></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <i class="fas fa-file" style="font-size:100px;color:lightblue;text-align: center;">></i>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="nav-link m-0 font-weight-bold text-primary" href="<?php echo base_url(); ?>dok-seminar">
                    <span>Dokumen Seminar Kemajuan Tugas Akhir</span></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <i class="fas fa-file" style="font-size:100px;color:lightblue;text-align: center;">></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="nav-link m-0 font-weight-bold text-primary" href="<?php echo base_url(); ?>dok-sidang">
                    <span>Dokumen Sidang Tugas Akhir</span></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <i class="fas fa-file" style="font-size:100px;color:lightblue;text-align: center;">></i>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="nav-link m-0 font-weight-bold text-primary" href="<?php echo base_url(); ?>dok-yudisium">
                    <span>Dokumen Yudisium</span></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <i class="fas fa-file" style="font-size:100px;color:lightblue;text-align: center;">></i>
            </div>
        </div>
    </div>
</div>
<?php }elseif ($user->level == 2) { ?>
<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
        <div class="d-sm-flex justify-content-between">
		<h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_admin; ?></h1>
	</div>
	<div class="d-sm-flex justify-content-between">
		<h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIP; ?></h1>
	</div>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Admin Prodi <?php echo $user->Jurusan; ?></h1>
	</div>
</div>



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="padding-top: 3%;">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
            <div>
                <thead><h4>Daftar Mahasiswa Ilmu Komputer</h4></thead>
            </div>
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Nama Mahasiswa</span></th>
							<th><span>Nim</span></th>
							<th class="text-center"><span>Angkatan</span></th>
							<th>Action</th>
							<!-- <th></th> -->
						</tr>
					</thead>
                    <?php foreach($mahasiswa as $val) { ?>
					<tbody>
						<tr>
							<td>
								<a href="#" class="user-link"><?php echo $val->Nama_mahasiswa ?></a>
							</td>
							<td>
                                <?php echo $val->NIM ?>
							</td>
							<td class="text-center">
								<span class="label label-success"><?php echo $val->Angkatan ?></span>
							</td>
							<td style="width: 20%;">
                                <a href="<?php echo base_url(); ?>admin-validasi/<?php echo $val->NIM ?>" class="btn btn-primary">Lihat</a>
							</td>
                            <!-- <td>
                                <img src="<?php echo base_url(); ?>assets_admin/img/bell-fill.svg" alt="Notifikasi">
                            </td> -->
						</tr
					</tbody>
                    <?php } ?>
				</table>
			</div>
			<ul class="pagination pull-right">
				<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<?php }elseif ($user->level == 3) { ?>
<!-- Page Heading -->
<div style="width: 300px; height:100px; padding:15px; background-color:#B1E1FF; box-shadow: 10px 10px;">
        <div class="d-sm-flex justify-content-between">
		<h1 class="h5 mb-0 text-gray-800"><?php echo $user->Nama_dosen; ?></h1>
	</div>
	<div class="d-sm-flex justify-content-between">
		<h1 class="h5 mb-0 text-gray-800"><?php echo $user->NIP; ?></h1>
	</div>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Dosen Prodi <?php echo $user->Jurusan; ?></h1>
	</div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="padding-top: 3%;">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
            <div>
                <thead><h4>Daftar Mahasiswa Ilmu Komputer</h4></thead>
            </div>
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th class="text-center"><span>Nama Mahasiswa</span></th>
							<th class="text-center"><span>Nim</span></th>
							<th class="text-center"><span>Angkatan</span></th>
							<th class="text-center">Pembimbing</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<?php foreach($anakbimbing as $val) { ?>
					<tbody>
						<tr>
							<td class="text-center">
								<a href="#" class="user-link"><?php echo $val->Nama_mahasiswa ?></a>
							</td>
							<td class="text-center">
                                <?php echo $val->NIM ?>
							</td>
							<td class="text-center">
								<span class="label label-success"><?php echo $val->Angkatan ?></span>
							</td>
                            <td class="text-center">
                                <?php if ($val->pembimbing == 1) { echo "<span class='label label-success'>Pembimbing 1</span>"; }elseif($val->pembimbing == 2){ echo "<span class='label label-success'>Pembimbing 2</span>"; } ?>
							</td>
							<td class="text-center">
                                <a href="<?php echo base_url(); ?>dosen-validasi/<?php echo $val->NIM ?>" class="btn btn-primary">Lihat</a>
							</td>
						</tr
					</tbody>
                    <?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php } ?>


</div>

<!-- Content Row -->