<?php
require "koneksi.php";
require "function.php";

if(isset($_GET["id"])){
    $id = ($_GET["id"]);
    if (delete($_GET["id"]) > 0) {   
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
