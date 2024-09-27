{{-- @dd($latestProyek) --}}
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Web Konstruksi</title>

    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('node_modules/photoswipe/dist/photoswipe.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
    <!-- ===== Navbar ===== -->
    <header class="navbar px-4 lg:px-12 py-4">
        <div class="navbar-start">
            <!-- ===== Navbar Mobile Sidebar ===== -->
            <div class="dropdown">
                <!-- ===== Dropdown Button ===== -->
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>

                <!-- ===== Dropdown Content ===== -->
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content !bg-white rounded-box z-[100] mt-3 w-52 p-2 shadow">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li>
                        <a href="#proyekKami">Proyek</a>
                    </li>
                    <li>
                        <a href="#proyekKami">Layanan</a>
                    </li>
                    <li>
                        <a href="#testimoni">Testimoni</a>
                    </li>
                    <li>
                        <a href="#cabangKami">Kantor Kami</a>
                    </li>
                </ul>
            </div>

            <!-- ===== Navbar Logo ===== -->
            <a href="#" class="w-[140px]">
                <img src="{{ asset('images/logo-transparent.png') }}" alt="Company Logo" class="w-[140px]" />
            </a>
        </div>

        <!-- ===== Navbar Desktop Links ===== -->
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal space-x-10 px-1">
                <li class="text-base font-semibold">
                    <a href="#">Beranda</a>
                </li>
                <li class="text-base font-semibold">
                    <a href="#proyekKami">Proyek</a>
                </li>
                <li class="text-base font-semibold">
                    <a href="#proyekKami">Layanan</a>
                </li>
                <li class="text-base font-semibold">
                    <a href="#cabangKami">Kantor Kami</a>
                </li>
                <li class="text-base font-semibold">
                    <a href="#testimoni">Testimoni</a>
                </li>
            </ul>
        </div>

        <!-- ===== Navbar CTA Buttons ===== -->
        <div class="navbar-end space-x-4 hidden lg:flex">
            <a class="btn btn-info text-white rounded-xl px-12 py-4" href="#kontak">Hubungi Kami</a>

            {{-- <button class="btn btn-square btn-outline btn-info hover:text-white">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button> --}}
        </div>
    </header>
    <!-- ===== End Navbar ===== -->

    <!-- ===== Hero Section ===== -->
    <section class="hero min-h-[calc(100vh-64px)] relative">
        <div class="hero-overlay bg-black bg-opacity-40 z-[2] absolute top-0 left-0 w-full h-full"></div>
        {{-- <video
        loop

        class="absolute top-0 left-0 w-full h-full object-cover"
      >
        <source
          src="{{ asset('videos/hero-video.mp4') }}"
          type="video/mp4"
        />
      </video> --}}

        {{-- <div class="hero-content text-white z-10 text-center">
        <div class="max-w-xl">
          <h1 class="mb-5 text-5xl font-bold">Capai Properti Impianmu Berasama Kami</h1>
          <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          <button class="btn btn-info px-8 py-2 text-white">Tentang Kami</button>
        </div>
      </div> --}}

        <div class="bg-info py-4 px-8 z-10 rounded-full absolute lg:bottom-12 lg:right-12">
            <h3 class="font-semibold text-xl text-white">PT. Keanu Abimanyu Konstruksi</h3>
        </div>
    </section>
    <!-- ===== End Hero ===== -->

    <!-- ===== About Section ===== -->
    <section class="container mx-auto py-24 px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-32">
        <div class="flex flex-col space-y-8">
            <h1 class="text-sky-400 text-4xl lg:text-6xl font-bold">Ahli Dalam Membangun Visi Anda</h1>

            {{-- <div class="flex items-center space-x-4">
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Residental</div>
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Commercial</div>
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Interior</div>
        </div> --}}
        </div>

        <div class="flex flex-col space-y-8">
            <div class="flex flex-col lg:flex-row space-y-4 space-x-0 lg:space-x-4 lg:space-y-0">
                <a href="#kontak" class="btn btn-info btn-outline px-12 py-4"> HUBUNGI KAMI</a>
                <a href="#proyekKami" class="btn btn-info btn-outline px-12 py-4"> LIHAT PROYEK</a>
                {{-- <button class="btn btn-info text-white px-12 py-4">HUBUNGI KAMI</button> --}}
                {{-- <button class="btn btn-info btn-outline px-12 py-4">LIHAT PROYEK</button> --}}
            </div>

            <p class="text-lg text-justify">
                <span class="font-bold">Tentang Kami : </span>
                PT Keanu Abimanyu Konstruksi atau biasa disebut KNA Construction ini didirikan pada tahun 2018 oleh
                Bapak Jhundanuars S.T.Sejak pendiriannya, perusahaan ini telah sukses menyelesaikan berbagai proyek
                konstruksi, renovasi dan interior di Bali dan sekitarnya.
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12">
                <div class="flex flex-col space-y-4">
                    <h6 class="text-2xl font-bold">Visi</h6>
                    <ul>
                        <li>Menjadi kontraktor terkemuka yang memberikan solusi konstruksi inovatif dan berkualitas
                            tinggi.</li>
                        {{-- <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li> --}}
                    </ul>
                </div>
                <div class="flex flex-col space-y-4">
                    <h6 class="text-2xl font-bold">Misi</h6>
                    <ul class=" ml-5 list-decimal space-y-2">
                        <li>Memberikan pelayanan konstruksi yang profesional dan tepat waktu</li>
                        <li>Mengutamakan kepuasan pelanggan secara keberlanjutan </li>
                        <li>Mengembangkan sumber daya manusia yang kompeten dan berintegritas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== End About ===== -->

    <!-- ===== Project Section ===== -->
    <section class="container mx-auto pt-12 pb-24 px-6 lg:px-0">
        <div class="flex justify-between items-end">
            <div class="flex flex-col space-y-3 lg:space-y-6">
                <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold" id="proyekKami">Proyek Kami</h2>

                <p class="text-base lg:text-lg max-w-4xl">Kami telah bekerja keras untuk mencapai ini. Ini adalah proyek
                    kami!</p>
            </div>

            <a href="#" class="btn btn-outline btn-info hidden lg:flex">
                Semua Proyek
            </a>
        </div>

        <div class="card lg:card-side mt-10 rounded-lg border border-slate-400 bg-base-100 h-full lg:h-[450px] w-full">
            <figure class="w-full lg:w-[60%] h-[12.5rem] lg:h-auto">
                <img src="{{ asset('images') }}/{{ $latestProyek->foto_utama_proyek }}" alt="Foto Utama" class="h-full w-full object-fill" />
            </figure>

            <div class="card-body w-full lg:w-[40%] p-6 lg:p-12 flex flex-col justify-between">
                <div class="flex flex-col space-y-2 lg:space-y-4">
                    <span class="font-bold line-clamp-1">
                    <span class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">{{ $latestProyek->size_proyek }}
                            <sup>2</sup></span>
                        {{ $latestProyek->lokasi_proyek }}
                    </span>
                    <h2 class="card-title text-2xl lg:text-4xl font-bold text-sky-400">{{ $latestProyek->nama_proyek }}</h2>
                    <span class="text-lg lg:text-xl font-bold">{{ $latestProyek->tahun_proyek }}</span>
                    <span class="text-base lg:text-lg line-clamp-2 overflow-hidden">
                      {{ $latestProyek->deskripsi_proyek }}
                    </span>
                </div>
                <div class="card-actions mt-4">
                    <a href="/detail/{{ $latestProyek->id_proyek }}" class="font-semibold space-x-4">
                        View details
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 lg:mt-24">
            @foreach ($proyek as $row)
                <div class="card border border-slate-400">
                    <figure>
                        <img src="{{ asset('images') }}/{{ $row->foto_utama_proyek }}" alt="Project Preview" />
                    </figure>
                    <div class="card-body py-8 px-8">
                        <span class="font-bold mb-1"><span
                                class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">{{ $row->size_proyek }}<sup>2</sup></span>
                            {{ $row->lokasi_proyek }}</span>
                        <a href="#">
                            <h2 class="card-title font-bold">{{ $row->nama_proyek }}</h2>
                        </a>
                        <div class="card-actions mt-6">
                            <a href="/detail/{{ $row->id_proyek }}" class="font-semibold space-x-4">
                                View details
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="card border-slate-400 border">
                    <figure>
                        <img src="{{ asset('images') }}/project-1.jpg" alt="Project Preview" />
                    </figure>
                    <div class="card-body py-8 px-8 lg:px-0">
                        <span class="font-bold mb-1"><span
                                class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">1000 M<sup>2</sup></span>
                            Denpasar</span>
                        <a href="#">
                            <h2 class="card-title font-bold">Project 1</h2>
                        </a>
                        <div class="card-actions mt-6">
                            <a href="#" class="font-semibold space-x-4">
                                View details
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            @endforeach
        </div>

        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 lg:mt-24">

            <div class="card border-slate-400 border">
                <figure>
                    <img src="{{ asset('images') }}/project-1.jpg" alt="Project Preview" />
                </figure>
                <div class="card-body py-8 px-8 lg:px-0">
                    <span class="font-bold mb-1"><span
                            class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">1000 M<sup>2</sup></span>
                        Denpasar</span>
                    <a href="#">
                        <h2 class="card-title font-bold">Project 1</h2>
                    </a>
                    <div class="card-actions mt-6">
                        <a href="#" class="font-semibold space-x-4">
                            View details
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card border-slate-400 border">
                <figure>
                    <img src="{{ asset('images') }}/project-1.jpg" alt="Project Preview" />
                </figure>
                <div class="card-body py-8 px-8 lg:px-0">
                    <span class="font-bold mb-1"><span
                            class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">1000 M<sup>2</sup></span>
                        Denpasar</span>
                    <a href="#">
                        <h2 class="card-title font-bold">Project 1</h2>
                    </a>
                    <div class="card-actions mt-6">
                        <a href="#" class="font-semibold space-x-4">
                            View details
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card border-slate-400 border">
                <figure>
                    <img src="{{ asset('images') }}/project-1.jpg" alt="Project Preview" />
                </figure>
                <div class="card-body py-8 px-8 lg:px-0">
                    <span class="font-bold mb-1"><span
                            class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">1000 M<sup>2</sup></span>
                        Denpasar</span>
                    <a href="#">
                        <h2 class="card-title font-bold">Project 1</h2>
                    </a>
                    <div class="card-actions mt-6">
                        <a href="#" class="font-semibold space-x-4">
                            View details
                            <i class="fa-solid fa-chevron-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="flex justify-center items-center lg:hidden">
            <a href="#" class="btn btn-outline btn-info mt-6">
                Semua Proyek
            </a>
        </div>
    </section>
    <!-- ===== End Project ===== -->

    <!-- ===== Services Section ===== -->
    <section style="width: 90%"
        class="container mx-auto bg-gradient-to-br from-sky-700 to-sky-400 !w-[90%] rounded-lg px-12 py-16 text-center flex flex-col items-center justify-center gap-y-6 text-white mt-6 lg:mt-12 mb-12 lg:mb-24">
        <h1 class="text-2xl lg:text-5xl font-bold">Layanan Kami</h1>
        <p class="text-base lg:text-lg max-w-3xl">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, consequuntur iusto quis rerum suscipit
            alias aliquam earum doloremque quos tenetur exercitationem odit quisquam adipisci, cum reprehenderit vel
            provident sed
            voluptatum quasi consequatur ab recusandae possimus! Earum quam et error officia iure, eligendi suscipit,
            corporis eveniet distinctio est repudiandae voluptatum repellat.
        </p>
    </section>
    <!-- ===== End Services ===== -->

    <!-- ===== Testimonials Section ===== -->
    <section class="container mx-auto pt-12 pb-24 px-6 lg:px-0">
        <div class="flex justify-between items-end">
            <div class="flex flex-col space-y-3 lg:space-y-6 ">
                <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold" id="testimoni">Testimoni</h2>

                <p class="text-base lg:text-lg max-w-4xl">
                    Setelah meninjau beberapa kontraktor, klien menyimpulkan bahwa PT Keanu Abimanyu Konstruksi sangat
                    responsif, memiliki portofolio lapangan yang kaya dengan referensi positif, serta menawarkan harga
                    yang kompetitif. Selain itu,
                    perusahaan ini juga dikenal dengan tim yang profesional dan berdedikasi dalam setiap proyeknya.
                    Berikut adalah dokumentasi meeting yang merupakan bukti dari kerjasama antara klien dan kami.
                </p>
            </div>

            <a href="#" class="btn btn-outline btn-info hidden lg:flex">
                Semua Testimoni
            </a>
        </div>
        {{-- <div class="grid grid-cols-4 gap-8 mt-10">
            @foreach ($testimoni as $item)
                <div class="card">
                    <figure>
                        <img src="{{ asset('images') }}/{{ $item->gambar_testimoni }}" alt="Testimonial Preview"
                            class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center p-2">
                        <p>{{ $item->proyek->nama_proyek }}</p>
                        <p>{{ $item->deskripsi_testimoni }}</p>
                    </div>
                </div>
            @endforeach
        </div> --}}
        <div class="grid grid-cols-1 md:!grid-cols-2 lg:!grid-cols-4 gap-8 mt-10">
            @foreach ($testimoni as $item)
            <div class="card border border-slate-400">
                <figure>
                    <img src="{{ asset('images') }}/{{ $item->gambar_testimoni }}" alt="Testimonial Preview" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center p-6">
                    <h4 class="font-bold text-xl">{{ $item->proyek->nama_proyek }}</h4>
                    <p>{{ $item->deskripsi_testimoni }}</p>
                </div>
            </div>
             @endforeach
        </div>

        <div class="flex justify-center items-center lg:hidden">
            <a href="#" class="btn btn-outline btn-info mt-6">
                Semua Testimoni
            </a>
        </div>
    </section>
    <!-- ===== End Testimonials ===== -->

    <!-- ===== Our Offices Section ===== -->
    <section class="container mx-auto pt-12 pb-24 px-6 lg:px-0">
        <div class="flex flex-col space-y-3 lg:space-y-6">
            <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold" id="cabangKami">Kantor Kami</h2>

            <p class="text-base lg:text-lg max-w-4xl">Untuk kunjungan langsung atau kebutuhan lainnya, Anda dapat
                menemukan kami di
                kantor kami</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] gap-8 lg:gap-16 mt-12">
            <div class="flex flex-col gap-y-6">
                <div>
                    <h4 class="text-lg lg:text-xl font-bold mb-4">Lokasi :</h4>
                    <ul class="list-disc font-semibold text-base lg:text-lg ml-4 space-y-4">
                        <li class="list-item">
                            <div>Lokasi 1</div>
                            <span class="font-normal">Gg. Kesambi Indah No.2, Kerobokan, Kec. Kuta Utara, Kabupaten
                                Badung, Bali 80361</span>
                    </ul>
                </div>
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3827095697443!2d115.17062767321185!3d-8.65510338805079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24758e4f3bad7%3A0x775e1cf931253d2b!2sGg.%20Kesambi%20Indah%20No.2%2C%20Kerobokan%2C%20Kec.%20Kuta%20Utara%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sen!2sid!4v1721285705874!5m2!1sen!2sid"
                height="350" width="350" style="border: 0;" class="w-full lg:w-3/4" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- ===== End Our Offices ===== -->

    <!-- ===== Contact Section ===== -->
    <section class="container mx-auto px-6 lg:px-0 pt-12 pb-36">
        <div class="flex flex-col space-y-3 lg:space-y-6">
            <h2 class="text-sky-400 text-4xl lg:text-5xl font-bold" id="kontak">Kontak Kami</h2>

            <p class="text-base lg:text-lg max-w-4xl">Untuk informasi lebih lanjut, jangan ragu untuk menghubungi kami
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <h4 class="text-xl font-bold">WhatsApp</h4>
                    <span class="text-xl font-semibold text-sky-500">081341530762</span>
                </div>

                <div class="bg-sky-500 w-full lg:w-[70%] mx-auto py-4 px-8 rounded-full text-center">
                    <a href="https://wa.me/+6285792459822">
                        <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
                    </a>
                </div>
            </div>
            <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <h4 class="text-xl font-bold">Instagram</h4>
                    <span class="text-xl font-semibold text-sky-500">kna.construction</span>
                </div>

                <div class="bg-sky-500 w-full lg:w-[70%] mx-auto py-4 px-8 rounded-full text-center">
                    <a href="https://www.instagram.com/kna.construction?igsh=MWc5bHhtbmg3NGlmdQ==">
                        <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
                    </a>
                </div>
            </div>
            <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
                <div class="flex flex-col lg:flex-row justify-between items-center">

                    <h4 class="text-xl font-bold">Email</h4>
                    <span class="text-xl font-semibold text-sky-500">keanu.konstruksi@gmail.com</span>
                </div>

                <div class="bg-sky-500 w-full lg:w-[70%] mx-auto py-4 px-8 rounded-full text-center">
                    <a href="mailto:keanu.konstruksi@gmail.com">
                        <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
                    </a>
                </div>
            </div>
        </div>

        <p class="text-lg my-16 text-center">Atau bisa hubungi kami dibawah ini</p>

        <form action="{{ route('response.store') }}" class="w-full" method="POST">
            @csrf
            <label class="form-control w-full mb-6">
                <div class="label">
                    <span class="label-text">Nama Lengkap</span>
                </div>
                <input type="text" name="nama_lengkap" placeholder="Type here"
                    class="input input-bordered border-gray-400 rounded-md w-full" />
            </label>
            <label class="form-control w-full mb-6">
                <div class="label">
                    <span class="label-text">Alamat Email</span>
                </div>
                <input type="text" name="email" placeholder="Type here"
                    class="input input-bordered border-gray-400 rounded-md w-full" />
            </label>
            <label class="form-control w-full mb-6">
                <div class="label">
                    <span class="label-text">No Whatsapp</span>
                </div>
                <input type="text" name="no_hp" placeholder="Type here"
                    class="input input-bordered border-gray-400 rounded-md w-full" />
            </label>
            <label class="form-control w-full mb-6">
                <div class="label">
                    <span class="label-text">Pesan</span>
                </div>
                <textarea name="pesan" class="textarea textarea-bordered h-36" placeholder="Message"></textarea>
            </label>

            <button class="btn btn-info text-white btn-block text-lg">Submit <i
                    class="fa-solid fa-paper-plane ml-4"></i></button>
        </form>
    </section>
    <!-- ===== End Contact ===== -->

    <!-- ===== Footer ===== -->
    <footer class="footer container mx-auto text-base-content px-6 lg:px-0 my-6 lg:my-0">
        <nav class="lg:min-w-[500px] lg:w-full lg:block hidden">
            <a href="#" class="w-[140px] mb-6">
            </a>
        </nav>

        <nav>
            <h6 class="text-black font-bold text-lg mb-4">Follow Us</h6>
            <a href="#" class="link link-hover space-x-3 inline-flex items-center">
                <i class="fa-brands fa-instagram"></i><span>Instagram</span>
            </a>
            <a href="https://www.instagram.com/kna.construction?igsh=MWc5bHhtbmg3NGlmdQ=="
                class="link link-hover space-x-3 inline-flex items-center">
                <i class="fa-brands fa-facebook"></i><span>Facebook</span>
            </a>
            <a href="#" class="link link-hover space-x-3 inline-flex items-center">
                <i class="fa-brands fa-youtube"></i><span>Youtube</span>
            </a>
        </nav>

        <nav>
            <h6 class="text-black font-bold text-lg mb-4">Site Map</h6>
            <a href="#" class="link link-hover">Beranda</a>
            <a href="#proyekKami" class="link link-hover">Proyek Kami</a>
            <a href="#layanan" class="link link-hover">Layanan</a>
            <a href="#kontak" class="link link-hover">Kontak Kami</a>
            <a href="#cabangKami" class="link link-hover">Cabang Kami</a>
        </nav>

        <nav>
            <h6 class="text-black font-bold text-lg mb-4">Quick Links</h6>
            <a href="mailto:keanu.konstruksi@gmail.com" class="link link-hover">Email : knaconstruction@gmail.com</a>
            {{-- <a class="link link-hover">PDF Company Profile</a> --}}
        </nav>
    </footer>
    <footer class="footer container mx-auto py-6 text-base-content border-base-300 border-t px-6 lg:px-0">
        <aside class="grid-flow-col items-center">
            <p>
                PT Keanu Abimanyu Konstruksi
                <br />
                Penyedia Jasa Konstruksi sejak 2015
            </p>
        </aside>
        <nav class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-8">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>
    <!-- ===== End Footer ===== -->

    <button id="openModal"
        class="fixed z-[100000] bottom-12 right-4 bg-sky-400 w-16 h-16 rounded-full flex justify-center items-center shadow-md">
        <i class="fa-regular fa-comment text-white text-2xl"></i>
    </button>

    <!-- Modal -->
    <div id="commentModal" class="fixed z-[100000] inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white w-96 md:w-2/4 p-6 rounded-lg shadow-lg">
            <h2 class="text-xl lg:text-2xl font-bold mb-2">Tambah Respon</h2>
            <p class="text-base lg:text-lg font-medium mb-6">
                Silahkan isi form dibawah ini untuk menambahkan respon anda terhadap kami
            </p>

            <form action="/response" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input name="nama_lengkap" type="text" id="name"
                        class="input input-bordered w-full rounded-md border-gray-400"
                        placeholder="Masukkan nama Anda..." />
                </div>

                {{-- email field --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input name="email" type="email" id="email"
                        class="input input-bordered w-full rounded-md border-gray-400"
                        placeholder="Masukkan email Anda..." />
                </div>

                {{-- no hp field --}}
                <div class="mb-4">
                    <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-2">No Hp</label>
                    <input name="no_hp" type="text" id="no_hp"
                        class="input input-bordered w-full rounded-md border-gray-400"
                        placeholder="Masukkan no hp Anda..." />
                </div>

                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                    <textarea name="pesan" id="comment" rows="4" class="textarea textarea-bordered w-full border-gray-400"
                        placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModal"
                        class="btn btn-outline border-sky-400 text-sky-400 mr-2">Batal</button>
                    <button type="submit" class="btn btn-primary bg-sky-400 text-white">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <!-- ===== Custom JavaScript ===== -->
    <script src="./js/index.js"></script>

    <!-- ===== CDN JavaScript ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
