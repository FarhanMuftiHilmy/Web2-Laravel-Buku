<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- add bootstrap starter template -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
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
                


                

                <div class="links">
                    <!-- <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                    <a href="./">Home</a>
                    <a href="/instalasi_laravel">Instalasi Laravel</a>
                    <a href="/about">About</a>
                    <a href="/buku">Buku</a>
                </div>
            </div>
        </div>
    </body>
</html>
