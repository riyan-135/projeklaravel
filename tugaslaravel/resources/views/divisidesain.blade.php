<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .jumbotron{
            background-color: transparent;
            color: white;
            margin-top: 60px;
        }
        .gambar{
            background-image: url("/gambar.png");
            background-repeat: no-repeat;
            -webkit-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -o-background-size: 100% 100%;
            background-size: 100% 100%;
            height: 500px;
        }

    </style>
</head>
<body>
    
    <div class="container-fluid" style="background-color: yellow;">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><img src="/unnamed.jpg" style="height: 100px;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">About Us</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid gambar">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Hello, Welcome To Importir.org</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 style="font-family: Arial, Helvetica, sans-serif;">Data Karyawan Divisi Desain</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Handphone</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($karyawan as $tampil)
                            <td>{{ $tampil }}</td>
                        @endforeach
                      </tr>
                      <tr>
                        @foreach($karyawan2 as $muncul)
                            <td>{{ $muncul }}</td>
                        @endforeach
                      </tr>
                      <tr>
                        @foreach($karyawan3 as $muncul)
                            <td>{{ $muncul }}</td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
    

<script>src="/js/bootstrap.min.js"</script>
    
</body>
</html>