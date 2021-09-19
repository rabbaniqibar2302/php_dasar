<?php
//variable local

//Deklarasi Variabel nama
$nama = "Qibar";//bersifat lokal

//membuat fungsi panggil nama
function getNama(){
    global $nama;//global berfungsi untuk memanggil lokal
    echo $nama;
}

//memanggil fungsi
getNama();
