<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Graha Wisata Kita</title>
</head>

<body>
    {{-- navbar --}}
    <header class="navbar">
        <div class="nav-wrapper">
            {{-- nav menu --}}
            <img src="{{ asset('img/brand.png') }}" alt="" class="logo">
            <ul class="menu">
                <li class="menu-item"><a href="#" class="menu-link">Homepage</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Tentang</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Daftar Hotel</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Bantuan</a></li>
            </ul>

            {{-- dropdown --}}
            <div class="dropdown">
                <img src="{{ asset('img/indo.png') }}" alt="">
                <span>Indonesia (ID)</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=24>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <div class="dropdown-content">
                    <p>Bahasa Indonesia</p>
                    <p>Bahasa Inggris</p>
                    <p>Bahasa Jepang</p>
                </div>
            </div>

            {{-- nav content --}}
            <div class="nav-content">
                {{-- vector --}}
                <svg class="vector-1" width="814" height="161" viewBox="0 0 814 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M813.5 1C802.902 56.6169 638.067 209.954 454 143C269.933 76.0459 75.597 181.655 -1 143" stroke="white" stroke-opacity="0.3" />
                </svg>
                <svg class="vector-2" width="865" height="274" viewBox="0 0 865 274" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 273C168.986 117.609 337.275 313.8 501.109 97.2461C664.944 -119.308 864 97.2461 864 97.2461" stroke="white" stroke-opacity="0.3" />
                </svg>
                <svg class="vector-3" width="812" height="120" viewBox="0 0 812 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 25.6865C0 25.6865 116.015 130.801 339 17.6864C490.769 -59.302 647.351 157.613 811.5 113.186" stroke="white" stroke-opacity="0.3" />
                </svg>
                <svg class="vector-4" width="573" height="367" viewBox="0 0 573 367" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-2 3.85071C164.173 -31.9349 200.787 279.399 572 366" stroke="white" stroke-opacity="0.3" />
                </svg>
                <svg class="vector-5" width="810" height="175" viewBox="0 0 810 175" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.5 151C-1.5 151 41.4996 241.664 261.5 63.0001C481.5 -115.664 741 166 809.5 0.5" stroke="white" stroke-opacity="0.3" />
                </svg>

                {{-- text --}}
                <div class="rectangle-3"></div>
                <div class="content-title">
                    HOTEL OPERATOR
                </div>
                <div class="content-1">
                    Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda
                </div>
                <div class="content-2">
                    GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.
                </div>
                <button class="content-3">
                    Konsultasikan Bisnis Saya
                </button>
                <div class="nav-img"></div>
                <div class="content-4">
                    <a href="#footer">
                        Scroll &emsp;
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="icon" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>


    {{-- main --}}
    <main>
        {{-- our workflow --}}
        <div class="main-1">
            <div class="rectangle-3"></div>
            <div class="content-title">
                OUR WORKFLOW
            </div>
            <div class="content-1">
                Proses Kerja Kami dalam Meningkatkan Kualitas Properti
            </div>
            <svg class="vector-1" width="1381" height="411" viewBox="0 0 1381 411" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 335.577C234.691 496.317 370.026 342.468 468 335.577C565.974 328.687 657.148 340.539 825 360.5C992.852 380.461 1379 2 1379 2" stroke="#EEEEEE" stroke-width="3" />
            </svg>

            <img src="{{ asset('img/tantangan.png') }}" alt="" class="img-1">
            <div class="sub-title-1">
                Tantangan
            </div>
            <div class="description-1">
                Setiap property memiliki <br>tantangan tersendiri dan GWA <br>sangat memahami hal tersebut.
            </div>
            <div class="sub-title-2">
                Rumusan
            </div>
            <div class="description-2">
                Setiap tantangan akan dirumuskan <br>menjadi sebuah hal yang harus dicari <br>jalan keluarnya oleh kami
            </div>
            <div class="sub-title-3">
                Goals
            </div>
            <div class="description-3">
                Dari rumusan masalah, kami memberikan <br>respon cepat dan jalan keluar jangka <br>pendek - menengah - panjang.
            </div>
            <div class="sub-title-4">
                Ideas
            </div>
            <div class="description-4">
                Setiap rumusan menjadikan ide-ide <br>kreatif bagi kami untuk meningkatkan <br>kualitas property mitra.
            </div>
            <img src="{{ asset('img/rumusan.png') }}" alt="" class="img-2">
            <img src="{{ asset('img/goals.png') }}" alt="" class="img-3">
            <img src="{{ asset('img/ideas.png') }}" alt="" class="img-4">
        </div>

        {{-- our services --}}
        <div class="main-2">
            {{-- title --}}
            <div class="rectangle-3"></div>
            <div class="content-title">
                OUR SERVICES
            </div>
            <div class="content-1">
                Apa Saja yang Bisa Kami Bantu ?
            </div>
            <div class="container">
                {{-- menu 1 --}}
                <div class="menu-1">
                    <div class="title-number">01</div>
                    <img src="{{ asset('img/s-asset.png') }}" alt="" class="img-1">
                    <div class="title">
                        Revenue <br>Management Service
                    </div>
                    <button class="btn-services">
                        Saya Tertarik &nbsp;&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
                {{-- menu 2 --}}
                <div class="menu-2">
                    <div class="title-number">02</div>
                    <img src="{{ asset('img/s-full.png') }}" alt="" class="img-2">
                    <div class="title">
                        Full Manage <br>Service
                    </div>
                    <button class="btn-services">
                        Saya Tertarik &nbsp;&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
                {{-- menu 3 --}}
                <div class="menu-3">
                    <div class="title-number">03</div>
                    <img src="{{ asset('img/s-revenue.png') }}" alt="" class="img-3">
                    <div class="title">
                        Asset Monetize <br>Service
                    </div>
                    <button class="btn-services">
                        Saya Tertarik &nbsp;&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- our projects --}}
        <div class="main-3">
            <div class="main-wrapper">
                <div class="rectangle-3"></div>
                <div class="content-title">
                    OUR LATEST PROJECTS
                </div>
                <div class="rectangle-3"></div>
            </div>
            <div class="content-1">
                Project Terbaru Kami
            </div>

            <!-- Slider main container -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide slide-1">
                        <div class="slide-header">
                            1/4 OPERATIONAL PROJECT
                        </div>
                        <div class="slide-content">
                            Townhouse Oak
                        </div>
                        <div class="slide-footer">
                            Brand tertinggi di OYO
                        </div>
                    </div>
                    <div class="swiper-slide slide-2">
                        <div class="slide-header">
                            2/4 OPERATIONAL PROJECT
                        </div>
                        <div class="slide-content">
                            Townhouse Spruce
                        </div>
                        <div class="slide-footer">
                            Brand tertinggi di Tokped
                        </div>
                    </div>
                    <div class="swiper-slide slide-3">
                        <div class="slide-header">
                            4/4 OPERATIONAL PROJECT
                        </div>
                        <div class="slide-content">
                            Townhouse Birch
                        </div>
                        <div class="slide-footer">
                            Brand tertinggi di BNB
                        </div>
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>


        {{-- out testimonials --}}
        <div class="main-4">
            <div class="rectangle-3"></div>
            <div class="content-title">
                OUR TESTIMONIALS
            </div>
            <div class="content-1">
                Yang Klien Kami Katakan
            </div>
            <div class="content-2">
                <img src="{{ asset('img/left-quotes.png') }}" alt="" class="quote">
                <div class="text">
                    GWA Group membantu hotel <br>saya untuk menjangkau lebih banyak <br>client dan memberikan saran <br>monetisasi yang tidak pernah saya <br>bayangkan sebelumnya
                </div>
            </div>
            <div class="content-3">
                <img src="{{ asset('img/yellow-hotel.png') }}" alt="" class="yellow-hotel">
                <div class="text">
                    <div class="name">Chaim Desmond</div>
                    <div class="status">CEO of Yellow Hotel</div>
                </div>
            </div>
            <img src="{{ asset('img/ceo.png') }}" class="ceo">
            <div class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=50>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                &emsp;&nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=50>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>
        </div>

        {{-- hubungi kami --}}
        <div class="main-5">
            <div class="text">
                <div class="rectangle-3"></div>
                <div class="content-title">
                    HUBUNGI KAMI
                </div>
                <div class="content-1">
                    Ingin Mendiskusikan Bisnis Pariwisata Anda ?
                </div>
                <div class="content-2"></div>
                <div class="content-3">
                    Ada kepentingan bisnismu yang ingin <br>didikusikan dengan kami, yuk segera isi form <br>disamping, konsultasinya gratis kok !
                </div>
            </div>
            <div class="form">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
                <label for="nama">Nama Perusahaan</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Perusahaan">
                <label for="nama">Nomor Whatsapp Aktif</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nomor Whatsapp">
                <div class="btn">
                    Jadwalkan Konsultasi&emsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="icon" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </div>
            </div>
        </div>

        <footer class="footer" id="footer">
            <img src="{{ asset('img/brand.png') }}" alt="" class="logo">
            <div class="content-1">
                <div class="content-item">
                    <div>Halaman Utama</div>
                    <a>Homepage</a>
                </div>
                <div class="content-item">
                    <div>Perusahaan</div>
                    <a>Tentang Kami</a>
                    <a>Daftar Hotel</a>
                </div>
                <div class="content-item">
                    <div>Temukan Kami</div>
                    <a>Bantuan</a>
                    <a>Hubungi Kami</a>
                </div>
                <div class="content-item">
                    <div>Social Media</div>
                    <div>
                        <a href="#">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M43.4167 31.0783C43.4167 38.9649 38.715 43.6666 30.8284 43.6666H28.25C27.0583 43.6666 26.0833 42.6916 26.0833 41.4999V28.9983C26.0833 28.4133 26.56 27.9149 27.145 27.9149L30.9583 27.8499C31.2617 27.8283 31.5217 27.6116 31.5867 27.3083L32.345 23.1699C32.41 22.7799 32.1067 22.4116 31.695 22.4116L27.08 22.4766C26.4733 22.4766 25.9967 21.9999 25.975 21.4149L25.8884 16.1066C25.8884 15.7599 26.17 15.4566 26.5383 15.4566L31.7383 15.3699C32.1066 15.3699 32.3884 15.0883 32.3884 14.72L32.3017 9.5199C32.3017 9.15156 32.02 8.86992 31.6517 8.86992L25.8017 8.95661C22.205 9.02161 19.345 11.9683 19.41 15.5649L19.5183 21.5233C19.54 22.1299 19.0634 22.6066 18.4567 22.6283L15.8567 22.6716C15.4883 22.6716 15.2067 22.9532 15.2067 23.3216L15.2717 27.4383C15.2717 27.8066 15.5533 28.0882 15.9217 28.0882L18.5217 28.0449C19.1284 28.0449 19.605 28.5216 19.6267 29.1066L19.8216 41.4566C19.8433 42.6699 18.8683 43.6666 17.655 43.6666H12.6717C4.785 43.6666 0.0833435 38.9649 0.0833435 31.0566V12.9216C0.0833435 5.03491 4.785 0.333252 12.6717 0.333252H30.8284C38.715 0.333252 43.4167 5.03491 43.4167 12.9216V31.0783Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="44" height="36" viewBox="0 0 44 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5833 0.666748H10.9167C4.41668 0.666748 0.0833435 5.00008 0.0833435 11.5001V24.5001C0.0833435 31.0001 4.41668 35.3334 10.9167 35.3334H32.5833C39.0833 35.3334 43.4167 31.0001 43.4167 24.5001V11.5001C43.4167 5.00008 39.0833 0.666748 32.5833 0.666748ZM25.845 20.2317L20.4933 23.4384C18.3266 24.7384 16.55 23.7418 16.55 21.2068V14.7718C16.55 12.2368 18.3266 11.2401 20.4933 12.5401L25.845 15.7467C27.9034 17.0034 27.9034 18.9967 25.845 20.2317Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.8283 0.333252H12.6717C4.78501 0.333252 0.0833435 5.03492 0.0833435 12.9216V31.0566C0.0833435 38.9649 4.78501 43.6666 12.6717 43.6666H30.8067C38.6933 43.6666 43.395 38.9649 43.395 31.0783V12.9216C43.4167 5.03492 38.715 0.333252 30.8283 0.333252ZM21.75 30.4066C17.1133 30.4066 13.3433 26.6366 13.3433 21.9999C13.3433 17.3633 17.1133 13.5933 21.75 13.5933C26.3867 13.5933 30.1567 17.3633 30.1567 21.9999C30.1567 26.6366 26.3867 30.4066 21.75 30.4066ZM34.5767 10.9066C34.4683 11.1666 34.3167 11.4049 34.1217 11.6216C33.905 11.8166 33.6667 11.9683 33.4067 12.0766C33.1467 12.1849 32.865 12.2499 32.5833 12.2499C31.9983 12.2499 31.4567 12.0333 31.045 11.6216C30.85 11.4049 30.6983 11.1666 30.59 10.9066C30.4817 10.6466 30.4167 10.3649 30.4167 10.0833C30.4167 9.80159 30.4817 9.51992 30.59 9.25992C30.6983 8.97825 30.85 8.76159 31.045 8.54492C31.5433 8.04659 32.3017 7.80825 32.995 7.95992C33.1467 7.98159 33.2767 8.02492 33.4067 8.08992C33.5367 8.13325 33.6667 8.19825 33.7967 8.28492C33.905 8.34992 34.0133 8.45825 34.1217 8.54492C34.3167 8.76159 34.4683 8.97825 34.5767 9.25992C34.685 9.51992 34.75 9.80159 34.75 10.0833C34.75 10.3649 34.685 10.6466 34.5767 10.9066Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-2"></div>
            <div class="content-3">
                <div class="content-item">
                    <a href="#">Pemberitahuan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="flex">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.2046 17.4099H13.8576" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23.0309 14.3208V17.4093" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.6263 17.3738C27.6263 25.2788 21.4493 31.6763 13.8384 31.6763" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.2219 31.6767C28.9128 31.6767 25.9714 29.9119 23.8572 27.136" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.515 41.3844H28.5453C37.7372 41.3844 41.414 37.7076 41.414 28.5157V17.4854C41.414 8.29347 37.7372 4.6167 28.5453 4.6167H17.515C8.32308 4.6167 4.64632 8.29347 4.64632 17.4854V28.5157C4.64632 37.7076 8.32308 41.3844 17.515 41.3844Z" stroke="white" stroke-width="2.12121" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{-- dropdown --}}
                    <div class="dropdown">
                        <span>Bahasa Indonesia</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=24>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                        <div class="dropdown-content">
                            <p>Bahasa Indonesia</p>
                            <p>Bahasa Inggris</p>
                            <p>Bahasa Jepang</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-4">
                &copy; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.
            </div>
        </footer>

    </main>

    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
</body>

</html>
