<?php

require 'function.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
    echo"<script>
    alert('Data berhasil dihapus');
    window.location.herf = 'index.php';
   </script>";
} else {
    echo
    "<script>
    alert('Data gagal di hapus');
    window.location.href = 'index.php';
    )
    </script>";
}

?>