<?php

// IMPORT Function
require 'function.php';

$id = $_GET["id"];

// DELETE
if ( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal menghapus data!');
        </script>
    ";
}


?>