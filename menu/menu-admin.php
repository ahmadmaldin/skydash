<?php
$ids = $_SESSION['id'];
?>

<div class="container-fluid print">
  <div class="navbar-header">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link" href="?page=user-tampil">
          <i class="mdi mdi-face  menu-icon"></i>
          <span class="menu-title"> User </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=pegawai-tampil">
          <i class="mdi mdi-human  menu-icon"></i>
          <span class="menu-title"> Pegawai</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="config/backup.php">
          <i class="mdi mdi-database menu-icon"></i>
          <span class="menu-title">BackUp DB</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=ubah&id=<?php echo $ids; ?>">
          <i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Setting</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Keluar</span>
        </a>
      </li>
    </ul>