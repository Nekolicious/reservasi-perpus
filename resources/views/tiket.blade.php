<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UWU | Perpustakaan Cerman</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/jquery.js"></script>
    <script src="js/selection.js"></script>
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-r6re {
            background-color: #acacac;
            border-color: inherit;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-fixv {
            background-color: #000000;
            border-color: inherit;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-cacx {
            background-color: #acacac;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Perpustakaan Cerdas Mantap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Tiket Anda</h2>
                    <table class="tg mx-auto" style="table-layout: fixed; width: 322px">
                        <colgroup>
                            <col style="width: 50px">
                            <col style="width: 272px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="tg-amwm" colspan="2">Tiket Reservasi Perpustakaan CERMAN UWU</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tg-baqh">Kode</td>
                                <td class="tg-af47">{{ $data['kode'] }}</td>
                            </tr>
                            <tr>
                                <td class="tg-baqh">NIM</td>
                                <td class="tg-af47">{{ $data['nim'] }}</td>
                            </tr>
                            <tr>
                                <td class="tg-baqh">Nama</td>
                                <td class="tg-af47">{{ $data['nama'] }}</td>
                            </tr>
                            <tr>
                                <td class="tg-baqh">Hari</td>
                                <td class="tg-af47">{{ $data['hari'] }}</td>
                            </tr>
                            <tr>
                                <td class="tg-baqh">Sesi</td>
                                <td class="tg-af47">{{ $data['sesi'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary my-2" href="/">Kembali</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Kelompok 5 PAW 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>