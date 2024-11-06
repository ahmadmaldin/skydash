<?php
// user
if (empty($_GET["page"])) {
    include "dashboard/dashboard-pegawai.php";
} elseif ($_GET['page'] == 'ubah') {
    include "user/form-ubah.php";
} elseif ($_GET['page'] == 'proses-ubah') {
    include "user/proses-ubah.php";
    // Pegawai
} elseif ($_GET['page'] == 'pegawai-tampil') {
    include "pegawai/tampil.php";
} elseif ($_GET['page'] == 'pegawai-detail') {
    include "pegawai/detail.php";
} elseif ($_GET['page'] == 'pegawai-edit') {
    include "pegawai/edit.php";
} elseif ($_GET['page'] == 'pegawai-update') {
    include "pegawai/update.php";
} elseif ($_GET['page'] == 'pegawai-print-detail') {
    include "pegawai/print-detail.php";
} elseif ($_GET['page'] == 'pegawai-kirim') {
    include "pegawai/kirim.php";
}

// alat
  elseif ($_GET['page'] == 'alat-tampil') {
    include "alat/tampil.php";
} elseif ($_GET['page'] == 'alat-detail') {
    include "alat/detail.php";
} elseif ($_GET['page'] == 'alat-edit') {
    include "alat/edit.php";
} elseif ($_GET['page'] == 'alat-update') {
    include "alat/update.php";
} elseif ($_GET['page'] == 'alat-print-detail') {
    include "alat/print-detail.php";
} elseif ($_GET['page'] == 'alat-kirim') {
    include "alat/kirim.php";
}elseif ($_GET['page'] == 'alat-hapus') {
    include "alat/hapus.php";
}elseif ($_GET['page'] == 'alat-tambah') {
    include "alat/tambah.php";
} elseif ($_GET['page'] == 'alat-simpan') {
    include "alat/simpan.php";
}

// ruang
elseif ($_GET['page'] == 'ruang-tampil') {
    include "ruang/tampil.php";
} elseif ($_GET['page'] == 'ruang-detail') {
    include "ruang/detail.php";
} elseif ($_GET['page'] == 'ruang-edit') {
    include "ruang/edit.php";
} elseif ($_GET['page'] == 'ruang-update') {
    include "ruang/update.php";
} elseif ($_GET['page'] == 'ruang-print-detail') {
    include "ruang/print-detail.php";
} elseif ($_GET['page'] == 'ruang-kirim') {
    include "ruang/kirim.php";
}elseif ($_GET['page'] == 'ruang-hapus') {
    include "ruang/hapus.php";
}elseif ($_GET['page'] == 'ruang-tambah') {
    include "ruang/tambah.php";
} elseif ($_GET['page'] == 'ruang-simpan') {
    include "ruang/simpan.php";
}elseif ($_GET['page'] == 'ruang-realtime') {
        include "ruang/realtime.php";
    
}

// kalibrasi
elseif ($_GET['page'] == 'kalibrasi-tampil') {
    include "kalibrasi/tampil.php";
} elseif ($_GET['page'] == 'kalibrasi-detail') {
    include "kalibrasi/detail.php";
} elseif ($_GET['page'] == 'kalibrasi-edit') {
    include "kalibrasi/edit.php";
} elseif ($_GET['page'] == 'kalibrasi-update') {
    include "kalibrasi/update.php";
} elseif ($_GET['page'] == 'kalibrasi-print-detail') {
    include "kalibrasi/print-detail.php";
} elseif ($_GET['page'] == 'kalibrasi-kirim') {
    include "kalibrasi/kirim.php";
} elseif ($_GET['page'] == 'kalibrasi-tambah') {
    include "kalibrasi/tambah.php";
} elseif ($_GET['page'] == 'kalibrasi-simpan') {
    include "kalibrasi/simpan.php";
}elseif ($_GET['page'] == 'kalibrasi-hapus') {
    include "kalibrasi/hapus.php";
}

// monitor
elseif ($_GET['page'] == 'monitor-tampil') {
    include "monitor/tampil.php";
} elseif ($_GET['page'] == 'monitor-detail') {
    include "monitor/detail.php";
} elseif ($_GET['page'] == 'monitor-edit') {
    include "monitor/edit.php";
} elseif ($_GET['page'] == 'monitor-update') {
    include "monitor/update.php";
} elseif ($_GET['page'] == 'monitor-print-detail') {
    include "monitor/print-detail.php";
} elseif ($_GET['page'] == 'monitor-kirim') {
    include "monitor/kirim.php";
} elseif ($_GET['page'] == 'monitor-tambah') {
    include "monitor/tambah.php";
} elseif ($_GET['page'] == 'monitor-simpan') {
    include "monitor/simpan.php";
} elseif ($_GET['page'] == 'monitor-hapus') {
    include "monitor/hapus.php";
}