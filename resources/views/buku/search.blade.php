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

            
            <div class="container">
                @if(count($data_buku))
                    <div class="alert alert-success"> Ditemukan <strong>{{ count($data_buku) }}</strong> data dengan kata:<strong>{{ $cari }}</strong>
                    </div>
                    @if(Session::has('pesan'))
                        <div class="alert alert-success">{{Session::get('pesan')}}</div>
                    @endif
                    <h4>Data Buku</h4>
                    <p align="right">
                        <a href="{{ route('buku.create') }}" class="btn btn-primary">
                            Tambah Buku
                        </a>
                    </p>
                    <form action="{{ route('buku.search') }}" method="get">@csrf
                        <input type="text" name="kata" class="form-control" placeholder="Cari..." style="width:30%; display:inline; margin-top:10px; margin-bottom:10px; float:right;">
                    </form>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Harga</th>
                                <th>Tgl. Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_buku as $buku)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $buku->judul }}</td>
                                    <td>{{ $buku->penulis }}</td>
                                    <td>{{ "Rp ".number_format($buku->harga,2,',','.') }}</td>
                                    <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                                    <td>
                                        <form action="{{ route('buku.destroy',$buku->id) }}" method="post">
                                            @csrf
                                            <a href="{{ route('buku.edit',$buku->id) }}" class="btn btn-info">ubah</a>
                                            <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah anda yakin menghapus?')">
                                                hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <div class="kiri"><strong>Jumlah Buku: {{ $jumlah_buku }}</strong></div>
                        <div class="kanan">{{ $data_buku->links() }}</div>
                    </div>
                @else
                    <div>
                        <h4> Data yang anda cari:{{ $cari }} tidak ditemukan </h4>
                    </div>
                @endif
            </div>
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
