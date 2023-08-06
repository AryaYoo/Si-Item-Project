@extends('layouts.main')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Album example · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>


    </head>

    <body>

        {{-- <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header> --}}

        <main>

            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Si I-Tem</h1>
                        <p class="lead text-muted">Si I-Tem adalah aplikasi berbasis web yang menyediakan layanan
                            jual beli barang elektronik bekas dan baru. layanan ini membantu anak kost dan masyarakat dengan
                            ekonomi
                            menengah ke bawah untuk membeli barang elektronik yang dibutuhkan dengan harga yang murah dan
                            kualitas bagus.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary my-2">Ayo belanja di Si I-Tem</a>
                            {{-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
                        </p>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Televisi"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                <title>Placeholder</title>
                                <image src="{{ Vite::asset('public/images/barang.jpg') }}" width="100%" height="225" />
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Barang elektronik sangat bekas sangat banyak ditemukan di tempat barang rongsokan
                                        padahal tidak jarang dari barang barang tersebut masih berfungsi dengan baik , namun banyak orang yang membuang
                                        barang tersebut dengan alasan tidak tahu mau memberikan barang tersebut kepada siapa.
                                        hal tersebut menjadikan sampah elektronik makin membludak. oleh karena itu inovasi dari pemudah indonesia
                                        menciptakan platform jual beli barang elektronik bekas untuk mengurangi sampah elektronik.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary">View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                <title>Placeholder</title>
                                <image src="{{ Vite::asset('public/images/barang2.png') }}" width="100%" height="225" />
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Kini, dengan inovasi terbaru kami, barang elektronik kami siap mengantar kemana saja untuk memenuhi kebutuhan teknologi Anda. Nikmati kemudahan berbelanja dan manfaatkan teknologi canggih yang dapat diandalkan dari kami.
                                        Jadikan hidup Anda lebih praktis dan efisien dengan produk kami yang siap mendukung gaya hidup modern Anda. Dengan jaringan pengiriman yang luas, kami menjamin barang elektronik berkualitas terbaik kami tiba dengan tepat waktu di depan pintu Anda. Percayakan kebutuhan teknologi Anda pada kami, dan rasakan pengalaman berbelanja yang tak tertandingi.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                <image src="{{ Vite::asset('public/images/barang3.jpg') }}" width="100%" height="225" />
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Merawat barang elektronik dengan baik akan membantu memperpanjang umur dan kinerjanya. Berikut adalah beberapa tips untuk merawat barang elektronik agar tetap awet:
                                        <li>Jaga Kebersihan: Rajin membersihkan barang elektronik dari debu, kotoran, dan sidik jari. Gunakan kain lembut atau kain mikrofiber untuk membersihkan permukaan tanpa merusak lapisan pelindung atau layar.</li>
                                        <li>Matikan dengan Benar: Pastikan untuk mematikan barang elektronik secara benar setelah digunakan, terutama sebelum mencabut kabel daya. Jangan mencabut kabel dengan menarik tali secara paksa.</li>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                    <image src="{{ Vite::asset('public/images/barang4.jpg') }}" width="100%" height="225" />
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                        y="50%" fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Memilih barang elektronik yang tepat adalah penting untuk memastikan Anda mendapatkan produk yang sesuai dengan kebutuhan dan ekspektasi Anda. Berikut adalah beberapa tips untuk membantu Anda memilih barang elektronik dengan bijaksana:
                                        <li>Identifikasi Kebutuhan Anda </li>
                                        <li>Tetapkan Anggaran </li>
                                        <li>Pilih Merek Terpercaya</li>
                                        <li>Cek Garansi dan Layanan Purna Jual</li>
                                        <li>Baca Kebijakan Pengembalian</li>
                                        <li>Cek Kompatibilitas</li>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                    <image src="{{ Vite::asset('public/images/barang5.jpg') }}" width="100%" height="225" />
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                        y="50%" fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Memilih barang elektronik untuk anak kuliah memerlukan pertimbangan khusus agar sesuai dengan kebutuhan akademik dan gaya hidup mereka. Berikut adalah beberapa tips untuk memilih barang elektronik yang tepat untuk anak kuliah:
                                        <ol>
                                            <li> Pertimbangkan kebutuhan portabilitas anak Anda. Jika anak kuliah sering bepergian atau berpindah-pindah kelas, pilih laptop yang ringan dan mudah dibawa.</li>
                                            <li>Penting untuk memastikan bahwa perangkat elektronik dilengkapi dengan fitur keamanan dan privasi yang memadai.</li>
                                        </ol>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false"> --}}
                                    <image src="{{ Vite::asset('public/images/barang6.jpg') }}" width="100%" height="225" />
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%"
                                        y="50%" fill="#eceeef" dy=".3em"></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">🎉🍹 SUPER PROMO 50% OFF! 🍹🎉

                                        Dapatkan pengalaman memasak yang lebih menyenangkan dan praktis dengan Blender Philips terbaik! Hanya untuk Anda, kami hadir dengan penawaran menarik: Diskon 50% untuk setiap pembelian Blender Philips!

                                        🔥 Blender Philips - Jaminan Kualitas Terbaik 🔥

                                        ✔️ Desain Stylish dan Elegan - Tampilan yang cantik untuk mempercantik dapur Anda.
                                        ✔️ Teknologi Tinggi - Performa optimal untuk menghaluskan dan mencampur bahan dengan mudah.
                                        ✔️ Kapasitas Besar - Hadir dengan kapasitas yang cukup untuk memenuhi kebutuhan masakan Anda.
                                        </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
                <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                        href="../getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>
@endsection
