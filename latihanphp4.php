// Follow my Instagram @arifnoerramadhan for more info thank you
<?php

$username = "admin";
$password = "12345679";

if($username == "admin" && $password == "123456789"){
    echo "Username dan Password sesuai, Login Berhasil!" . PHP_EOL;
} else if($username != "admin" && $password == "123456789"){
    echo "Username Salah, Login Gagal!" . PHP_EOL;  
} else if($username == "admin" && $password != "123456789"){
    echo "Password Salah, Login Gagal!" . PHP_EOL;
}else {
    echo "Username dan Password tidak sesuai, Login Gagal!" . PHP_EOL;
}

// Output :
// Password Salah, Login Gagal!