<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
        <div class="px-6 w-full flex flex-auto items-center justify-between lg:justify-between md:justify-between">

            <!-- Logo -->
            <div class="flex lg:mx-5 md:mx-5 justify-self-start items-center">
                <img class="w-10" src="assets/img/logo-kpu.png" alt="Logo Kpu">
                <h1 class="text-xs p-2">komisi Pemilihan Umum <br> Kota Bogor</h1>
            </div>
            <button class="text-sm p-2 w-24 bg-blue-400 rounded-lg hover:bg-blue-900 block pr-2 lg:px-2 py-2 text-white hover:text-white focus:text-gray-700 transition duration-150 ease-in-out">
                <a href="<?php base_url(''); ?>auth/index">Login</a>
            </button>
        </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url(./assets/img/beranda-1.jpg);
    height: 350px;
  ">
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
            <div class="flex justify-center items-center h-full">
                <div class="text-center text-white px-6 md:px-12">
                    <h1 class="text-5xl font-bold mt-0 mb-6">Selamat datang</h1>
                    <h3 class="text-3xl font-bold mb-8">di arsip Komisi Pemilihan Umum</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <div class="flex justify-center mt-10">
        <div class="mb-3 xl:w-96">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                <button class="btn inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="button" id="button-addon3">Search</button>
            </div>
        </div>
    </div>
</header>

<div class="grid grid-cols-4 gap-4">


    <!-- card -->
    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="<?php base_url(); ?>legislatif/index" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Pemilu Legislatif 2011</h5>
                <p class="text-gray-700 text-base mb-4">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Pemilu Legislatif 2014</h5>
                <p class="text-gray-700 text-base mb-4">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Pemilu Legislatif 2013</h5>
                <p class="text-gray-700 text-base mb-4">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
            </div>
        </div>
    </div>


    <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
            </a>
            <div class="p-6">
                <h5 class="text-gray-900 text-xl text-center font-medium">Pemilu Legislatif 2012</h5>
            </div>
        </div>
    </div>
    <!-- End Card -->



</div>