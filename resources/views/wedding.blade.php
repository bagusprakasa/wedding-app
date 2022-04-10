<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('') }}img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('') }}img/favicon/favicon-32x32.png" sizes="16x16" />

    <title>Levidio Wedding Vol 2 - Website Templates</title>

    <!-- CSS  -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Root-Icon -->
    <link rel="stylesheet" href="https://cdn.rootpixel.net/assets/rooticon/v2/rooticon.css">
    <!-- Glide -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css"
        integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css"
        integrity="sha512-wCwx+DYp8LDIaTem/rpXubV/C1WiNRsEVqoztV0NZm8tiTvsUeSlA/Uz02VTGSiqfzAHD4RnqVoevMcRZgYEcQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"
        integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Aos Animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- App -->
    <link rel="stylesheet" href="{{ asset('') }}css/app.min.css">
    <link rel="stylesheet" href="{{ asset('') }}fontawesome/css/all.css">
    <script src="{{ asset('') }}fontawesome/js/all.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
</head>

<body class="opening-show">
    <!-- <body> -->

    <section id="opening">
        <div class="container text-center" data-aos="fade-in" data-aos-duration="1500">
            <div class="text-dec text-dec-white mb-4">Wedding Invitation</div>
            <h2 class="font-type-secondary mb-2" style="font-size:55px">Sektiawan Widiatmoko A.Md. Farm. & Nuril Afifah
                S.Kom.</h2>
            <img src="{{ asset('') }}img/decoration/foliage-horizontal-1.svg" alt="" class="w-75 w-md-30rem my-3">

            <div class="fw-bold mt-8">Halo, <span id="guest"></span></div>
            <div>Anda diundang dalam acara pernikahan kami!</div>

            <div id="countdown-row" class="row justify-content-center mt-8 mb-5">
                <div class="col-auto">
                    <div class="text-sm fw-bold" data-days>10</div>
                    <div class="text-sm fw-bold">HARI</div>
                </div>
                <div class="col-auto">
                    <div class="text-sm" data-hours>10</div>
                    <div class="text-sm fw-bold">JAM</div>
                </div>
                <div class="col-auto">
                    <div class="text-sm fw-bold" data-minutes>10</div>
                    <div class="text-sm fw-bold">MENIT</div>
                </div>
                <div class="col-auto">
                    <div class="text-sm fw-bold" data-seconds>10</div>
                    <div class="text-sm fw-bold">DETIK</div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <button id="btn-open-opening" class="btn btn-primary">Buka Undangan</button>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-md">
        <div class="container">
            <div class="navbar-brand px-0 d-md-none">
                <h4 class="font-type-secondary text-white">Our Invitation</h4>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <h6 class="mb-0"><i class="ri ri-menu"></i></h6>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-2">Undangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-3">Cerita kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-4">Mempelai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#section-5">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container py-10 text-white text-center">
            <h6 class="text-dec text-dec-white mb-4">Wedding Invitation</h6>
            <h1 class="font-type-secondary mb-2">Sektiawan Widiatmoko A.Md. Farm. & Nuril Afifah S.Kom.</h1>
            <img src="{{ asset('') }}img/decoration/foliage-horizontal-1.svg" alt="" class="w-75 w-md-30rem mt-3"
                style="margin-bottom: 16rem;">

            <div class="row justify-content-center mb-8">
                <div class="col-auto">
                    <a href="#section-2" class="btn btn-primary page-scroll">Buka Undangan</a>
                </div>
            </div>
        </div>
    </header>

    <section id="section-1">
        <div class="container">
            <div class="text-lg text-dark-500 text-center font-semibold mb-4" data-aos="fade-up"
                data-aos-duration="1000">
                “Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu
                sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih
                dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum
                yang berpikir.”
            </div>
            <div class="text-lg text-dark-500 text-center font-light" data-aos="fade-up" data-aos-duration="1200">
                QS. Ar-Rum (30): 21
            </div>
        </div>
    </section>

    <section id="section-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="container d-flex flex-column align-items-center justify-content-center text-white text-center">
            <h2 class="font-type-secondary">Join us & Celebrate!</h2>
            <div class="text-lg text-spacing-default">Akad nikah & Resepsi</div>
            <div id="text-dec-section-2">
                <h2>I & N</h2>
            </div>

            <div class="row">
                <div class="col-auto">
                    <h6>May, 22nd 2022 <i class="ri ri-calendar ml-1"></i></h6>
                </div>
                <div class="col-auto font-light">|</div>
                <div class="col-auto">
                    <h6><i class="ri ri-calendar mr-1"></i> 11.00 am</h6>
                </div>
            </div>
            <h6 class="my-2">Rumah Mempelai Wanita(Kediaman Bapak Gidan)</h6>
            <div class="text-md">Kp Semiring RT002/RW003 Desa Demung Kecamatan Besuki Kabupaten Sibon</div>
        </div>
    </section>

    <section id="section-3">
        <div class="container text-dark-500">
            <div class="text-center mb-8">
                <h2 class="font-type-secondary">How we met?</h2>
                <div class="text-lg text-spacing-default my-2">Cerita kami</div>
                <img src="{{ asset('') }}img/decoration/foliage-horizontal-2.svg" alt="" class="w-75 w-md-30rem">
            </div>

            <div class="row overflow-hidden" id="section-3-row">
                <div class="col-lg">
                    <div id="section-3-card-1" class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Saling berselisih</div>
                            <p class="text-dark-500">
                                Berada dilingkungan yang sama tapi dengan denah yang berbeda, 3,5 tahun mungkin
                                berselisih jalan, tapi tidak pada 1 titik temu Qadarullah...
                            </p>
                        </div>
                    </div>
                    <div id="section-3-card-3" class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Pertemuan Pertama</div>
                            <p class="text-dark-500">
                                Pertama kali bertemu dan berkenalan untuk sebatas tau "oh ini orangnya", lalu
                                memperpanjang harap dalam istikharah, semoga Allah yakinkan, Semoga Allah mudahkan.
                            </p>
                        </div>
                    </div>
                    <div id="section-3-card-5" class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Pemberkasan KUA</div>
                            <p class="text-dark-500">
                                Pertemuan ketiga, Mengurus segala administrasi dan kesiapan, bimbingan ke KUA
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('') }}img/decoration/list-decoration-section-3.svg" alt="">
                </div>
                <div class="col-lg">
                    <div id="section-3-card-2" class="card" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Waktu dan tempat enggan menyatu</div>
                            <p class="text-dark-500">
                                Jejak kaki sudah menuntun ke tempat yang sama, namun waktu belum mau membersamai.
                                Akhirnya masih berjalan sendiri dengan kisah berbeda. Semoga Allah izinkan melangkah
                                beriringan
                            </p>
                        </div>
                    </div>
                    <div id="section-3-card-4" class="card" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Lamaran dan Tunangan</div>
                            <p class="text-dark-500">
                                Pertemuan kedua, datang bersama keluarga besar dengan maksud Khitbah dan Alhamdulillah,
                                Allah tetapkan pilihan hati.
                            </p>
                        </div>
                    </div>
                    <div id="section-3-card-6" class="card" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-md text-dark mb-4">Akad Nikah</div>
                            <p class="text-dark-500">
                                Pertemuan ke empat, akad nikah Insya Allah semakin Allah kuatkan. Karena pintu rumah
                                sudah terketuk maka kita bersiap membuka pintu hati.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="section-4">
        <div class="container">
            <h2 class="font-type-secondary text-dark text-center mb-5 mb-lg-10" data-aos="fade-up"
                data-aos-duration="1000">Mohon Doa & Restu</h2>
            <div class="row g-0 justify-content-around justify-content-lg-center">
                <div class="col-md-auto order-2 order-lg-1 d-flex flex-column align-items-center d-md-block text-center text-md-start mb-10 mb-lg-0"
                    data-aos="fade-right" data-aos-duration="1400">
                    <div class="img-wrapper img-wrapper-left mb-8">
                        <img src="{{ asset('') }}img/lelaki.jpg" alt="" style="width:277px;height:277px">
                    </div>
                    <h3 class="font-type-secondary text-dark">Sektiawan Widiatmoko A.Md. Farm.</h3>
                    <!-- <div class="text-md text-dark font-normal mb-3">@mr</div> -->
                    <!-- <p class="text-dark-500 font-light max-w-100 max-w-md-27rem">
                        A et mattis risus non facilisi nisl, etiam tellus. Pretium nunc tellus vulputate odio scelerisque nulla et bibendum. Mauris odio aliquam pellentesque enim rutrum netus massa diam augue.
                    </p> -->
                </div>
                <div class="col-lg-auto order-1 order-lg-2 d-flex justify-content-center align-items-center align-items-lg-start mb-10 mb-lg-0"
                    data-aos="fade-up" data-aos-duration="1200">
                    <img src="{{ asset('') }}img/decoration/foliage-horizontal-2.svg" alt=""
                        class="w-75 w-md-30rem">
                </div>
                <div class="col-md-auto order-3 d-flex flex-column align-items-center d-md-block text-center text-md-start"
                    data-aos="fade-left" data-aos-duration="1400">
                    <div class="img-wrapper img-wrapper-right mb-8" style="background-color:#ffffff">
                        <img src="{{ asset('') }}img/wanita.png" alt="" style="width:185px;height:314px">
                    </div>
                    <h3 class="font-type-secondary text-dark">Nuril Afifah S.Kom.</h3>
                    <!-- <div class="text-md text-dark font-normal mb-3">@ms <a href="https://fontawesome.com/v4.7/get-started/" target="_blank"><i class="fab fa-instagram" style="color: black;"></i></a></div> -->
                    <!-- <p class="text-dark-500 font-light max-w-100 max-w-md-27rem">
                        A et mattis risus non facilisi nisl, etiam tellus. Pretium nunc tellus vulputate odio scelerisque nulla et bibendum. Mauris odio aliquam pellentesque enim rutrum netus massa diam augue.
                    </p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="section-5">
        <div class="container text-dark text-center">
            <h2 class="font-type-secondary">Look at Our Happiness</h2>
            <div class="text-lg text-spacing-default my-2">Galeri</div>

            <div id="row-lightgallery" class="row gy-4 mt-10 overflow-hidden">
                <div class="col-4" data-aos="fade-up" data-aos-duration="1000">
                    <div data-src="{{ asset('') }}img/gallery/1.jpg" class="obj-fit obj-fit-cover w-100 h-18rem h-sm-30rem h-lg-50rem">
                        <img src="{{ asset('') }}img/gallery/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="1200">
                    <div data-src="{{ asset('') }}img/gallery/2.jpg"  class="obj-fit obj-fit-cover w-100 h-18rem h-sm-30rem h-lg-50rem">
                        <img src="{{ asset('') }}img/gallery/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="1400">
                    <div data-src="{{ asset('') }}img/gallery/3.jpg"  class="obj-fit obj-fit-cover w-100 h-18rem h-sm-30rem h-lg-50rem">
                        <img src="{{ asset('') }}img/gallery/3.jpg" alt="">
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="1600">
                    <div data-src="{{ asset('') }}img/gallery/4.jpg" class="obj-fit obj-fit-cover w-100 h-8rem h-sm-18rem h-lg-32rem">
                        <img src="{{ asset('') }}img/gallery/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="1800">
                    <div data-src="{{ asset('') }}img/gallery/5.jpg" class="obj-fit obj-fit-cover w-100 h-8rem h-sm-18rem h-lg-32rem">
                        <img src="{{ asset('') }}img/gallery/5.jpg" alt="">
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="2000">
                    <div data-src="{{ asset('') }}img/gallery/6.jpg" class="obj-fit obj-fit-cover w-100 h-8rem h-sm-18rem h-lg-32rem">
                        <img src="{{ asset('') }}img/gallery/6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="section-5">
        <div class="container text-dark text-center">
            <h2 class="font-type-secondary">Look at Our Happiness</h2>
            <div class="text-lg text-spacing-default my-2">Lokasi</div>

            <div id="row-lightgallery" class="row gy-4 mt-10 overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5546223978286!2d113.71217605951345!3d-7.7308386288040145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6fde6bb67c982858!2zN8KwNDQnMDkuNSJTIDExM8KwNDInMzguOSJF!5e0!3m2!1sid!2sid!4v1648990449929!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section id="section-5">
        <div class="container text-dark text-center">
            <h2 class="font-type-secondary">Kirim Doa dan Ucapan</h2>
            <div class="text-lg text-spacing-default my-2">Tuliskan sesuatu ucapan berupa harapan ataupun doa untuk
                kedua mempelai.</div>

            <div id="row-lightgallery" class="row gy-4 mt-10 overflow-hidden">
                <form action="{{ route('simpan') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Tulis Nama Lengkap Anda" name="name"
                                required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Tulis Email Anda (Optional)"
                                name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="">No Handphone</label>
                            <input type="number" class="form-control"
                                placeholder="Tulis No Handphone Anda (Optional)" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" placeholder="Tulis Alamat Anda (Optional)"
                                name="addres">
                        </div>
                        <div class="col-md-12">
                            <label for="">Ucapan dan Doa</label>
                            <textarea class="form-control" placeholder="Tulis Ucapan dan Doa Anda Untuk Kedua Mempelai (Optional)"
                                name="saying"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">Apakah anda akan hadir memenuhi undangan saya?</label>
                            <select name="present" class="form-control select2" required>
                                <option value="1">Hadir</option>
                                <option value="0">Tidak Hadir</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:20px"><i
                                class="fa fa-save"></i>
                            Simpan</button>
                </form>
            </div>
        </div>
    </section>


    <footer id="footer">
        <div class="container">
            <div class="row font-light">
                <div class="col-md mb-3 mb-md-0">
                    Copyright Bagus Prakasa - All Rights Reserved
                </div>
                <div class="col-auto">
                    {{-- galihbagus555@gmail.com --}}
                    <a href="https://www.instagram.com/galih_gorila/"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/bagusprakasa"><i class="fab fa-github"></i></a>
                    <a href="https://wa.me/083847023897"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <button id="btn-play" class="btn btn-light">
        <i class="ri ri-volume-high"></i>
    </button>
    <a href="#header" id="btn-to-top" class="btn btn-light page-scroll  ">
        <i class="ri ri-arrow-up"></i>
    </a>

    <audio controls id="audio" class="d-none" loop>
        <source src="{{ asset('') }}music1.mp3" type="audio/mpeg">
        <!-- Your browser does not support the audio element. -->
    </audio>

    <!-- JS -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"
        integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Countdown -->
    <script src="https://cdn.jsdelivr.net/npm/timezz@6.1.0/dist/timezz.min.js"></script>
    <!-- Glide -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"
        integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Aos Animation os scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
        integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- App -->
    <script src="{{ asset('') }}js/app.js"></script>
</body>

</html
