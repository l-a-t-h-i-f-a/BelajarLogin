<?php 
// mengaktifkan session
session_start();
 
// menghapus session
session_destroy();
 
// mengalihkan halaman login
header("location:form.php?pesan=Anda berhasil logout.");
?>