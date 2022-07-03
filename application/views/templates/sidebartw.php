 <body>
     <nav class="
  fixed-top
  relative
  w-full
  flex flex-wrap
  items-center
  justify-between
  py-4
  bg-yellow-900
  text-gray-500
  hover:text-gray-700
  focus:text-gray-700
  shadow-lg
  navbar navbar-expand-lg navbar-light
  ">
         <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
             <button id="hamburger" name="hamburger" type="button" class="block md:hidden m-5">
                 <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                 <span class="hamburger-line transition duration-300 ease-in-out"></span>
                 <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
             </button>
             <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
                 <h1 class="font-semibold text-xl md:text-lg text-white flex">KPU Kota Bogor</h1>
             </div>
             <!-- Collapsible wrapper -->
         </div>
     </nav>

     <div class="flex md:flex-row flex-col lg:h-screen">
         <div id="navbar-fixed" class="flex sm:flex-col md:w-64 bg-yellow-900 h-fit lg:min-h-screen">
             <header class="flex h-full w-full ">

                 <nav id="nav-menu" class="hidden md:block m-5 w-screen">
                     <a href="<?= base_url(''); ?>legislatif/index">
                         <h6 class="menu py-2 mb-3 text-sm pl-5">Pemilihan Legislatif 2014</h6>
                     </a>
                     <ul class="relative ">
                         <li class="relative" id="sidenavEx1">
                             <a href="#" class="menu py-2 mb-3 text-sm" data-mdb-ripple="true" data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#collapseSidenavEx1" aria-expanded="true" aria-controls="collapseSidenavEx1">
                                 <span class="pl-5"> Daerah Pemilihan</span>
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mx-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                     <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                 </svg>
                             </a>
                             <ul class="relative accordion-collapse collapse" id="collapseSidenavEx1" aria-labelledby="sidenavEx1" data-bs-parent="#sidenavExample">
                                 <li class="relative">
                                     <a href="<?= base_url(''); ?>./daerahpemilihan/index" class="uppercase flex items-center text-xs py-4 pl-10 pr-5 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                         dapil dpr ri</a>
                                 </li>
                                 <li class="relative">
                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-5 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                         dapil dpd ri</a>
                                 </li>
                                 <li class="relative">
                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-5 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                         dapil dprd prov jawa barat</a>
                                 </li>
                                 <li class="relative">
                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-5 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                         dapil dprd kota bogor</a>
                                 </li>
                             </ul>

                             <!-- Start Peserta Pemilu -->
                             <ul class="relative">
                                 <li class="relative" id="sidenavEx2">
                                     <a class="menu py-2 mb-3 text-sm" data-mdb-ripple="true" data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#collapseSidenavEx2" aria-expanded="true" aria-controls="collapseSidenavEx2">
                                         <span class="pl-5"> Peserta Pemilu</span>
                                         <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mx-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                             <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                         </svg>
                                     </a>
                                     <ul class="relative accordion-collapse collapse" id="collapseSidenavEx2" aria-labelledby="sidenavEx2" data-bs-parent="#sidenavExample">
                                         <li class="relative">
                                             <a href="<?php base_url(''); ?>../pesertapemilu/index" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                 parpol</a>
                                         </li>
                                         <li class="relative">
                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                 dct dpr ri dapil jawa barat</a>
                                         </li>
                                         <li class="relative">
                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                 dct dpd dapil jabar</a>
                                         </li>
                                         <li class="relative">
                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                 dct dprd p dapil jabar 3</a>
                                         </li>
                                         <li class="relative">
                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                 dct dprd kota bogor</a>
                                         </li>
                                     </ul>
                                     <!-- End Menu Peserta Pemilu -->

                                     <!-- Start Hasil Pemilu -->
                                     <ul class="relative">
                                         <li class="relative" id="sidenavEx3">
                                             <a class="menu py-2 mb-3 text-sm" data-mdb-ripple="true" data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#collapseSidenavEx3" aria-expanded="true" aria-controls="collapseSidenavEx3">
                                                 <span class="pl-5">Hasil Pemilu </span>
                                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mx-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                     <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                 </svg>
                                             </a>
                                             <ul class="relative accordion-collapse collapse" id="collapseSidenavEx3" aria-labelledby="sidenavEx3" data-bs-parent="#sidenavExample">
                                                 <li class="relative">
                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                         dpr ri</a>
                                                 </li>
                                                 <li class="relative">
                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                         dpd ri</a>
                                                 </li>
                                                 <li class="relative">
                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                         dprd provinsi</a>
                                                 </li>
                                                 <li class="relative">
                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                         dprd kota</a>
                                                 </li>
                                             </ul>
                                             <!-- End Menu Hasil Pemilu -->

                                             <!-- Start Hasil Pemilu -->
                                             <ul class="relative">
                                                 <li class="relative" id="sidenavEx4">
                                                     <a class="menu py-2 mb-3 text-sm" data-mdb-ripple="true" data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#collapseSidenavEx4" aria-expanded="true" aria-controls="collapseSidenavEx4">
                                                         <span class="pl-5">Calon Terpilih </span>
                                                         <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mx-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                             <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                         </svg>
                                                     </a>
                                                     <ul class="relative accordion-collapse collapse" id="collapseSidenavEx4" aria-labelledby="sidenavEx4" data-bs-parent="#sidenavExample">
                                                         <li class="relative">
                                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                 dpr ri jabar iii</a>
                                                         </li>
                                                         <li class="relative">
                                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                 dpd ri dapil jawa barat</a>
                                                         </li>
                                                         <li class="relative">
                                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                 dprd provinsi dapil jabar 3</a>
                                                         </li>
                                                         <li class="relative">
                                                             <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                 dprd kota bogor</a>
                                                         </li>
                                                     </ul>
                                                     <!-- End Menu Hasil Pemilu -->

                                                     <!-- Start Hasil Pemilu -->
                                                     <ul class="relative">
                                                         <li class="relative" id="sidenavEx5">
                                                             <a class="menu py-2 mb-3 text-sm" data-mdb-ripple="true" data-mdb-ripple-color="dark" data-bs-toggle="collapse" data-bs-target="#collapseSidenavEx5" aria-expanded="true" aria-controls="collapseSidenavEx5">
                                                                 <span class="pl-5 font-sans">Partisipasi </span>
                                                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 mx-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                     <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                                 </svg>
                                                             </a>

                                                             <ul class="relative accordion-collapse collapse" id="collapseSidenavEx5" aria-labelledby="sidenavEx5" data-bs-parent="#sidenavExample">
                                                                 <li class="relative">
                                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                         dpt</a>
                                                                 </li>
                                                                 <li class="relative">
                                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                         data Pemilihan</a>
                                                                 </li>
                                                                 <li class="relative">
                                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                         Partisipasi</a>
                                                                 </li>
                                                                 <li class="relative">
                                                                     <a href="#!" class="uppercase flex items-center text-xs py-4 pl-10 pr-6 h-6 overflow-hidden hover:bg-yellow-300 text-white" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                                                                         suara sah</a>
                                                                 </li>
                                                             </ul>
                                                             <!-- End Menu Hasil Pemilu -->
                                                             <a href="#">
                                                                 <h6 class="menu py-2 mb-3 text-sm pl-5 ">Peta Politik</h6>
                                                             </a>
                 </nav>
             </header>
         </div>