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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/selection.js') }}"></script>
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
            <a class="navbar-brand" href="/">Universitas Walisongo Ujung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full" style="background-image: url('img/buku.jpg')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="img/logo.jpg" width="150px" alt="..." />
            <h1 class="text-white fs-3 fw-bolder" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Perpustakaan CERMAN UWU</h1>
            <p class="text-white-50 mb-0">Web Perpustakaan Cerdas Mantap Universitas Walisongo Ujung (UWU)</p>
        </div>
    </header>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Ingin Melakukan Kunjungan?</h2>
                    <p class="lead">Untuk mengunjungi Perpustakaan Cerdas Mantap, silahkan melakukan reservasi dengan menekan tombol dibawah ini.</p>
                    <button type="button" class="btn btn-primary mx-auto d-block mt-5" data-bs-toggle="modal" data-bs-target="#modalReservasi">
                        Buat Reservasi
                    </button>
                </div>
                <div class="col-lg-6 text-center">
                    <h2>Ingin Mengecek Reservasi?</h2>
                    <p class="lead">Jika sudah melakukan reservasi dan ingin melihat detailnya silahkan tekan tombol dibawah ini.</p>
                    <button type="button" class="btn btn-primary mx-auto d-block mt-5" data-bs-toggle="modal" data-bs-target="#modalCek">
                        Cek Tiket
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalReservasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Reservasi Kunjungan Perpustakaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('reserve')}}" id="resForm" method="POST">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pilihHari">Hari</label>
                            <select class="form-select" id="pilihHari" name="hari" required>
                                <option value="">Pilih Hari...</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jum'at</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pilihSesi">Sesi</label>
                            <select class="form-select" id="pilihSesi" name="sesi" required>
                                <option value="">Pilih Sesi...</option>
                                <option value="sesi1">Sesi 1 (08:30 - 09:30)</option>
                                <option value="sesi2">Sesi 2 (09:45 - 10:45)</option>
                                <option value="sesi3">Sesi 3 (11:00 - 12:00)</option>
                                <option value="sesi4">Sesi 4 (13:30 - 14:30)</option>
                            </select>
                        </div>
                        <div class="modal-footer d-block">
                            <p>
                                Catatan :
                            </p>
                            <p>
                                - Tiket reservasi berlaku pada minggu yang sama pada saat melakukan reservasi.
                            </p>
                            <p>
                                - Jika reservasi pada hari yang sudah terlewat, maka tiket reservasi tersebut dapat digunakan pada minggu selanjutnya.
                            </p>
                            <button type="submit" class="btn btn-warning float-end">Buat Reservasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cek Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('cek')}}" method="POST">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kode Tiket</label>
                            <input type="text" class="form-control" id="tiket" name="kode" placeholder="Kode Tiket" required />
                        </div>
                        <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-warning float-end">Cek Tiket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Image element - set the background image for the header in the line below-->
    <div class="py-5 bg-image-full" style="background-image: url('img/perpus.jpg')">
        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 20rem"></div>
    </div>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Jadwal Buka</h2>
                    <p class="lead">Jadwal pengunjungan perpustakaan yang tersedia.</p>
                    <table class="tg mx-auto">
                        <thead>
                            <tr>
                                <th class="tg-fixv"></th>
                                <th class="tg-r6re">Senin</th>
                                <th class="tg-cacx">Selasa</th>
                                <th class="tg-cacx">Rabu</th>
                                <th class="tg-cacx">Kamis</th>
                                <th class="tg-cacx">Jum'at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tg-r6re">Sesi 1</td>
                                <td class="tg-c3ow">08:30 - 09:30</td>
                                <td class="tg-baqh">08:30 - 09:30</td>
                                <td class="tg-baqh">08:30 - 09:30</td>
                                <td class="tg-baqh">08:30 - 09:30</td>
                                <td class="tg-baqh">08:30 - 09:30</td>
                            </tr>
                            <tr>
                                <td class="tg-r6re">Sesi 2</td>
                                <td class="tg-c3ow">09:45 - 10:45</td>
                                <td class="tg-baqh">09:45 - 10:45</td>
                                <td class="tg-baqh">09:45 - 10:45</td>
                                <td class="tg-baqh">09:45 - 10:45</td>
                                <td class="tg-baqh">09:45 - 10:45</td>
                            </tr>
                            <tr>
                                <td class="tg-cacx">Sesi 3</td>
                                <td class="tg-baqh">11:00 - 12:00</td>
                                <td class="tg-baqh">11:00 - 12:00</td>
                                <td class="tg-baqh">11:00 - 12:00</td>
                                <td class="tg-baqh">11:00 - 12:00</td>
                                <td class="tg-baqh">-</td>
                            </tr>
                            <tr>
                                <td class="tg-cacx">Sesi 4</td>
                                <td class="tg-baqh">13:30 - 14:30</td>
                                <td class="tg-baqh">13:30 - 14:30</td>
                                <td class="tg-baqh">13:30 - 14:30</td>
                                <td class="tg-baqh">13:30 - 14:30</td>
                                <td class="tg-baqh">13:30 - 14:30</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-0">*Kuota kunjungan terbatas sesuai dengan ketentuan dari pihak perpustakaan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Kelompok 2 PAW 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>