<?php
    require"function.php";
    $cekId= $_GET["id"];
    
    $query="DELETE FROM galeri album WHERE id=$cekId";
    mysqli_query($koneksi,$query );

    echo "
        <script>
            alert('data berhasil dihaus!');
            document.location.href='admin.php';
        </script>
    ";
    
?>