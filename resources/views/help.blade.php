@extends('layouts.master')

@section('content')
<div class="title m-b-md">
    INSTALASI LARAVEL
</div>
<p>
-	Untuk membuat proyek baru dalam laravel, langkah pertama adalah pastikan sudah mendownload composer terlebih dahulu dengan command composer global about             
    <br>"composer global about" 
</p>
<p>
-	Setelah composer berhasil terpasang, tentukan direktori mana yang akan menjadi tempat proyek laravel, disini saya memilih direktori C:\Users\HILMI , kemudian masukkan command berikut pada cmd
    <br>"laravel new UTS_WEB2_2020"
</p>

<p>
Command tersebut berfungsi untuk membuat instalasi laravel dengan seluruh dependensinya pada direktori tersebut. Tunggu sampai proses download selesai. Disini saya tidak akan menggunakan proyek tersebut, tetapi saya akan menggunakan laravel dengan versi 7.6.0 pada direktori C:\Users\HILMI\UTS Untuk mendowload laravel dengan versi terentu dapat menggunakan command berikut.  
<br>"composer create-project –prefer-dist laravel/laravel:^7.6.0 UTS_WEB2_2020"
</p>

<p>
Tunggu sampai prosesnya selesai. Setelah itu untuk menjalankan proyek yang baru saja dibuat dengan terlebih dulu masuk pada direktori proyek yaitu C:\Users\HILMI\UTS\UTS_WEB2_2020 lalu masukkan command  berikut.
<br>"php artisan serve"
</p>

<p>
Dengan itu, maka server akan berjalan dan tampilan dapat dilihat melalui browser dengan alamat localhost:8000.

@endsection