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
                <h4>Edit Buku</h4>
                <form method="post" action="{{ route('buku.update', $buku->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" id="judul" name="judul" class="form-control" value="{{ $buku->judul }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Penulis</label>
                        <div class="col-sm-9">
                            <input type="text" id="penulis" name="penulis" class="form-control" value="{{ $buku->penulis }}">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" ic="harga" name="harga" class="form-control" value="{{ $buku->harga }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Tgl Terbit</label>
                        <div class="col-sm-9">
                            <input type="text" ic="tgl_terbit" name="tgl_terbit" class="form-control" value="{{ $buku->tgl_terbit }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <img src="{{ asset('images/'.$buku->foto) }}" style="width: 100px">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="judul_buku" class="col-sm-3 col-form-label">Ganti foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="foto">
                            <label>*) Apabila Gambar tidak diganti, kosongkan saja.</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a class="btn btn-warning" href="/buku">Batal</a>
                        </div>
                    </div>

                   
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
