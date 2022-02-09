<?php

// IMPORT Function
require 'function.php';


// UPDATE

$id = $_GET["id"];

$mytodo = query("SELECT * FROM mytodo WHERE id = $id ")[0];

if ( isset($_POST["submit"]) ) {

    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal mengubah data ');
            </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP | ToDo-List </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">

                <div class="card">
                    <div class="card-header shadow-sm bg-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h1 class="display-5 text-primary"><i class="fas fa-check-double"></i> Update To-Do List </h1>
                            </div>
                            <div class="col-md-2">
                                <h1 class="display-5 text-dark">
                                    <a href="index.php"><i class="fas fa-arrow-left	text-dark"></i></a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <li class="list-group-item">
                            <form action="" method="POST" autocomplete="off">

                                <div class="input-group">
                                    <input type="text" name="id" value="<?= $mytodo['id'] ?>" hidden >
                                    <input type="text" class="form-control" name="nama_todo" value="<?= $mytodo['nama']; ?>" placeholder="ketik disini">
                                    <div class="input-group-append text-info">
                                        <span class="input-group-text bg-white py-0">
                                            <button type="submit" name="submit" class="btn btn-sm text-success">
                                                <i class="far fa-edit fa-lg"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>

                            </form>
                        </li>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>