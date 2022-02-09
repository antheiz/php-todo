<?php

// IMPORT Function
require 'function.php';

// CREATE
if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil ditambahkan!');                
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal!');
            </script>
        ";
        echo mysqli_error($db);
    }

}


?>