<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <script src="{{ asset('js/jquery.js') }}"> </script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"> </script>
        <!-- Styles -->

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

            
            <div class="container">
                <h4>Tambah Buku</h4>
                <form method="post" action="{{ route('buku.store') }}" enctype="multipart/form-data" >
                    @if(count($errors)>0)
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <form method="post" action="{{ route('buku.store') }} " >
                            @csrf
                            <table class="table table-stripped">
                                <tr>
                                    <td>Judul</td>
                                    <td><input type="text" name="judul"></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td><input type="text" name="penulis"></td>
                                </tr>
                                <tr>
                                    <td>Upload Foto</td>
                                    <td><input type="file" class="form-control" name="foto"></td>
                                </tr>
                                
                                <tr>
                                    <td>Harga</td>
                                    <td><input type="text" name="harga"></td>
                                </tr>
                                <tr>    
                                    <td>Tgl Terbit</td>
                                    <td><input type="text" class="date" name="tgl_terbit"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-light">Simpan</button>
                                        <a class="btn btn-light" href="/buku">Batal</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                </form>
            </div>

        <script src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript">
            $('.date').datepicker({
                format:'yyyy/mm/dd',
                autoclose:'true'
            });
        </script>
           
        
    </body>
</html>
