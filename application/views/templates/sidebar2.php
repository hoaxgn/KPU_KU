<!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<!-- page -->
<main class="min-h-screen w-full bg-black text-white" x-data="layout">
    <!-- header page -->
    <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-orange-500 p-2">
        <!-- logo -->
        <div class="flex items-center space-x-2">
            <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
            <img class="w-10" src="<?= base_url(); ?>assets/img/logo-kpu.png" alt="Logo Kpu">
            <div class="flex lg:mx-5 md:mx-5 justify-self-start items-center">
                <h1 class="text-xs p-2">komisi Pemilihan Umum <br> Kota Bogor</h1>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- aside -->
        <aside class="h-screen sticky top-0 flex w-72 flex-col space-y-2 bg-orange-500 text-white p-2" x-show="asideOpen">
            <button href="#" class="flex items-center  space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                <a class="active:bg-violet-700" href="<?php base_url(); ?>../legislatif/index">Pemilu legislatif 2014</a>
            </button>

            <!-- Main Menu -->

            <button class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <a href="<?php base_url(); ?>../daerahpemilihan/index">Daerah Pemilihan</a>
            </button>

            <!-- SUB MENU -->

            <ul class="ml-6 mt-2 w-full border-l-2 border-zinc-800 pl-6 text-sm md:text-xs">
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600 ">
                    <a href="#">Dapil DPR RI</a>
                </li>
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil Dpd RI</a>
                </li>
                <li class="transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#" class="break-words">
                        DAPIL DPRD <br> Prov Jawa barat
                    </a>
                </li>
            </ul>

            <!-- Main Menu -->

            <button href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <a href="<?php base_url(''); ?>../pesertapemilu/index">Peserta Pemilu</a>
            </button>

            <!-- SUB MENU -->

            <ul class="ml-6 mt-2 w-full border-l-2 border-zinc-800 pl-6 text-sm">
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil DPR RI</a>
                </li>
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil Dpd RI</a>
                </li>
                <li class="transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#" class="break-words">
                        DAPIL DPRD <br> Prov Jawa barat
                    </a>
                </li>
            </ul>

            <!-- Main Menu -->

            <button href="#" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <a href="<?php base_url(''); ?>../hasilpemilu/index">Hasil Pemilu</a>
            </button>

            <!-- SUB MENU -->

            <ul class="ml-6 mt-2 w-full border-l-2 border-zinc-800 pl-6 text-sm">
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil DPR RI</a>
                </li>
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil Dpd RI</a>
                </li>
                <li class="transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#" class="break-words">
                        DAPIL DPRD <br> Prov Jawa barat
                    </a>
                </li>
            </ul>

            <!-- Main Menu -->

            <a href="<?php base_url(''); ?>../calonterpilih/index" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <span>Calon Terpilih</span>
            </a>

            <!-- SUB MENU -->

            <ul class="ml-6 mt-2 w-full border-l-2 border-zinc-800 pl-6 text-sm">
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil DPR RI</a>
                </li>
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil Dpd RI</a>
                </li>
                <li class="transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#" class="break-words">
                        DAPIL DPRD <br> Prov Jawa barat
                    </a>
                </li>
            </ul>

            <!-- Main Menu -->

            <a href="<?php base_url(''); ?>../partisipasi/index" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <span>Partisipasi</span>
            </a>

            <!-- SUB MENU -->

            <ul class="ml-6 mt-2 w-full border-l-2 border-zinc-800 pl-6 text-sm">
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil DPR RI</a>
                </li>
                <li class="mb-4 transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#">Dapil Dpd RI</a>
                </li>
                <li class="transition duration-300 ease-in-out hover:text-red-600">
                    <a href="#" class="break-words">
                        DAPIL DPRD <br> Prov Jawa barat
                    </a>
                </li>
            </ul>

            <a href="<?php base_url(''); ?>../petapolitik/index" class="flex items-center space-x-1 rounded-md px-2 hover:bg-gray-100 hover:text-blue-600">
                <span>Peta Politik</span>
            </a>
        </aside>