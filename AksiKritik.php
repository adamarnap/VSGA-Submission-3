<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$kritik =$_POST['kritik'];

 
if($nama == ""){
	header("location:index.php?nama=null");
}else{
	echo "Nama Pengkritik Adalah : ". $nama ."<br>"; 
}

if($email == ""){
    header("location:index.php?email=null");
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location:index.php?email=emailtypeerr");
}else{
    echo "Email Pengritik Adalah : ". $email ."<br>";
}

if($kritik == ""){
    header("location:index.php?kritik=null");
}else{
    echo "Kritik dan Saran : ". $kritik ."<br>";
}


?>