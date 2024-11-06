<div class="container-fluid print">
    <div class="navbar-header">
</div>
    <?php
    $ids = $_SESSION['id'];
    ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="?page=alat-tampil"> <i class="mdi mdi-timer-sand"></i> Data Alat Standar </a></li>
            <li><a href="?page=ruang-tampil"> <i class="glyphicon glyphicon-blackboard"></i> Data Ruang </a></li>
            <li><a href="?page=ubah&id="><i class="glyphicon glyphicon-cog"></i> SET</a></li>
            <li><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> KELUAR</a></li>
        </ul>
    </div>
</div>
<div>
<ul class="nav print">

          <li class="nav-item">
            <a class="nav-link" href="?page=alat-tampil">
              <i class="mdi mdi-scale-balance menu-icon "></i>
              <span class="menu-title">Data Alat Standar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?page=ruang-tampil">
              <i class="mdi mdi-playlist-plus menu-icon"> </i>
              <span class="menu-title">Data Ruang</span>
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
</div>