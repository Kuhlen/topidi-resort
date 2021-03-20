<?php
if($_POST['kirim']){
	$admin = 'admin@langit-topidi.com';
	
	$nama	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
    $telepon= htmlentities($_POST['phone']);
	$judul	= htmlentities($_POST['subject']);
	$pesan	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>