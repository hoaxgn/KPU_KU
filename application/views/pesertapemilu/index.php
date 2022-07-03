<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>


<div class="container mt-10 mx-auto sticky top-0">
    <nav class="mx-5 rounded-md bg-slate-100 p-2">
        <ol class="list-reset flex">
            <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
            <li><span class="text-gray-500 mx-2">/</span></li>
            <li> <span class="text-gray-500 uppercase">PARTAI POLITIK</a></li>
        </ol>
    </nav>

    <h2 class="text-center uppercase text-2xl mt-10">partai politik peserta pemilu tahun 2014</h2>

    <div class="mx-auto mt-10">
        <div class="flex flex-col mt-10 p-2">
            <div class="grid md:grid-cols-2 gap-2 grid-cols-1 lg:grid-cols-4">
                <div class="parpol group relative">
                    <a href="<?php base_url(); ?>./profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/1.jpg" alt="">
                    </a>
                </div>
                <div class="parpol group relative">
                    <a href="<?php base_url(); ?>pesertapemilu/profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/2.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>pesertapemilu/profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/pks.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>pesertapemilu/profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/4.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/5.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/6.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/7.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/8.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/9.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/10.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/11.jpg" alt="">
                    </a>
                </div>
                <div class="h-15 parpol group relative">
                    <a href="<?php base_url(); ?>profilparpol">
                        <img class="absolute group-hover:scale-105 transition-all duration-500 w-full h-full bg-cover bg-center" src="<?= base_url(); ?>assets/img/parpol/12.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- DCT DPR -->
    <h1 class="text-center uppercase text-2xl mt-10 break-words">Daftar Calon Tetap <br> Dewan Perwakilan Rakyat Republik Indonesia pemilihan Umum Tahun 2014</h1>

    <div class="w-full h-auto mx-auto">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- START TABLE -->
                    <div class="shadow-lg bg-white max-w-sm text-black m-5 ">
                        <a href="#!">
                            <img src="<?= base_url(); ?>assets/img/parpol/1.jpg" alt="" />
                        </a>
                        <div class="p-5 text-center">
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pas Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis kelamin</th>
                                        <th>Tempat Tinggal Calon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michaels</td>
                                        <td>L</td>
                                        <td>Kota Depok</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>chaels</td>
                                        <td>L</td>
                                        <td>Kota Surabaya</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michae</td>
                                        <td>L</td>
                                        <td>Kota Bogor</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Mils</td>
                                        <td>L</td>
                                        <td>Kota Jakarta</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="border-1 border-black mt-4">
                            <span>jumlah Laki-laki :4</span>
                            <span>jumlah Perempuan:4</span>
                            <span>jumlah Presentase:10%</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
                <div class="swiper-slide">

                    <div class="shadow-lg bg-white max-w-sm text-black m-5">
                        <a href="#!">
                            <img src="<?= base_url(); ?>assets/img/parpol/2.jpg" alt="" />
                        </a>
                        <div class="p-5 text-center">
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pas Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis kelamin</th>
                                        <th>Tempat Tinggal Calon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michaels</td>
                                        <td>L</td>
                                        <td>Kota Depok</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>chaels</td>
                                        <td>L</td>
                                        <td>Kota Surabaya</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michae</td>
                                        <td>L</td>
                                        <td>Kota Bogor</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Mils</td>
                                        <td>L</td>
                                        <td>Kota Jakarta</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="border-1 border-black mt-4">
                            <span>jumlah Laki-laki :4</span>
                            <span>jumlah Perempuan:4</span>
                            <span>jumlah Presentase:10%</span>
                        </div>
                    </div>
                    <!-- END -->
                </div>
                <div class="swiper-slide">
                    <div class="shadow-lg bg-white max-w-sm text-black m-5">
                        <div class="w-5 h-5 bg-blue-500">
                            <img class="object-cover" src="<?= base_url(); ?>assets/img/parpol/5.jpg" alt="" />
                        </div>
                        <div class="p-5 text-center">
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pas Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis kelamin</th>
                                        <th>Tempat Tinggal Calon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michaels</td>
                                        <td>L</td>
                                        <td>Kota Depok</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>chaels</td>
                                        <td>L</td>
                                        <td>Kota Surabaya</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Michae</td>
                                        <td>L</td>
                                        <td>Kota Bogor</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                                        <td>Mils</td>
                                        <td>L</td>
                                        <td>Kota Jakarta</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="border-1 border-black mt-4">
                            <span>jumlah Laki-laki :4</span>
                            <span>jumlah Perempuan:4</span>
                            <span>jumlah Presentase:10%</span>
                        </div>
                    </div>
                    <!-- END -->

                </div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- START DCT DPD  -->

    <h2 class="text-center uppercase text-2xl mt-10 break-words">Daftar Calon Tetap <br> Dewan Perwakilan Rakyat Republik Indonesia pemilihan Umum Tahun 2014</h2>


    <table class="table-fixed min-w-full mt-5">
        <thead class="bg-white border-b">
            <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Pas Foto
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Nama Lengkap
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Jenis Kelamin
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Tempat tinggal
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-14" src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Michaels
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    L
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Kota Depok
                </td>
            </tr>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-14" src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Michaels
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    L
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Kota Depok
                </td>
            </tr>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-14" src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Michaels
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    L
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Kota Depok
                </td>
            </tr>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-14" src="<?= base_url(); ?>assets/img/foto/foto1.jfif" alt=""></td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Michaels
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    L
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    Kota Depok
                </td>
            </tr>
        </tbody>
    </table>
    <h2 class="w-64 h-64 bg-blue-800 text-red-700">testing</h2>
</div>

</div>
<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>