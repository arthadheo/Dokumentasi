<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>dashboard">
    <div class="sidebar-brand-text">Universitas Pertamina</div>
</a>

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<?php if ($user->level == 1) { ?>
    <!-- Heading -->
<div class="sidebar-heading">
    Menu Pendaftaran
</div>

<!-- Nav Item - Pages Collapse Menu -->

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>dok-proposal">
        <span>Proposal Tugas Akhir</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>dok-seminar">
        <span>Seminar Kemajuan Tugas Akhir</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>dok-sidang">
        <span>Sidang Tugas Akhir</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>dok-yudisium">
        <span>Yudisium</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<?php } elseif ($user->level == 2) { ?>
<?php } elseif ($user->level == 3) { ?>
<?php } ?>


<!-- Sidebar Toggler (Sidebar) -->


<!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->