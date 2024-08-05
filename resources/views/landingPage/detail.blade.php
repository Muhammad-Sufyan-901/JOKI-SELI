<!DOCTYPE html>
<html
  lang="en"
  data-theme="light"
>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />

    <title>Web Konstruksi | Detail Proyek</title>

    <link
     href="{{ asset('css/output.css') }}"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
     @vite('resources/css/app.css')
      <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">

  </head>
  <body class="overflow-x-hidden">
    <!-- ===== Navbar ===== -->
    <header class="navbar px-12 py-4">
      <div class="navbar-start">
        <!-- ===== Navbar Mobile Sidebar ===== -->
        <div class="dropdown">
          <!-- ===== Dropdown Button ===== -->
          <div
            tabindex="0"
            role="button"
            class="btn btn-ghost lg:hidden"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </div>

          <!-- ===== Dropdown Content ===== -->
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
          >
            <li>
              <a href="#">Beranda</a>
            </li>
            <li>
              <a href="#">Proyek</a>
            </li>
            <li>
              <a href="#">Layanan</a>
            </li>
            <li>
              <a href="#">Testimoni</a>
            </li>
            <li>
              <a href="#">Cabang Kami</a>
            </li>
            <li>
              <a href="#">Testimoni</a>
            </li>
          </ul>
        </div>

        <!-- ===== Navbar Logo ===== -->
        <a
          href="#"
          class="w-[140px]"
        >
          <img
            src="{{ asset('images/logo-transparent.png') }}"
            alt="Company Logo"
            class="w-[140px]"
          />
        </a>
      </div>

      <!-- ===== Navbar Desktop Links ===== -->
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal space-x-10 px-1">
          <li class="text-base font-semibold">
            
          </li>
          <li class="text-base font-semibold">
          
          </li>
          <li class="text-base font-semibold">

          </li>
          <li class="text-base font-semibold">
    
          </li>
        </ul>
      </div>

      <!-- ===== Navbar CTA Buttons ===== -->
      <div class="navbar-end space-x-4">
        <a class="btn btn-info text-white rounded-xl px-12 py-4">Hubungi Kami</a>

        <button class="btn btn-square btn-outline btn-info hover:text-white">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </header>
    <!-- ===== End Navbar ===== -->

    <!-- ===== Detail Project Section ===== -->
    <section class="container mx-auto py-2">
      <div class="grid grid-cols-[40%_55%] gap-[5%]">
        <div class="flex flex-col gap-y-10 justify-start items-start">
          <a
            href="/"
            class="font-semibold"
          >
            <i class="fa-solid fa-chevron-left mr-2"></i>
            Semua proyek
          </a>

          <h2 class="text-sky-400 text-5xl font-bold max-w-md">{{ $proyek->nama_proyek }}</h2>

          <div class="flex flex-col w-full text-lg">
            <div class="border-b py-11">
              <span class="font-bold w-[21%] inline-flex justify-between items-center">Location <span>:</span></span>
             {{$proyek->lokasi_proyek}}
            </div>
            <div class="border-b py-2">
              <span class="font-bold w-[21%] inline-flex justify-between items-center">Date <span>:</span></span>
              {{ $proyek->tahun_proyek     }}
            </div>
            <div class="border-b py-2">
              <span class="font-bold w-[21%] inline-flex justify-between items-center">Size <span>:</span></span>
              {{ $proyek->size_proyek }}
            </div>
            <div class="py-2">
              <span class="font-bold w-[21%] inline-flex justify-between items-center">Budget <span>:</span></span>
              IDR {{ number_format($proyek->budget_proyek, 0, ',', '.') }}
            </div>
          </div>
        </div>

        <div>
          <img
            src="{{ asset('images') }}/{{ $proyek->foto_utama_proyek }}"
            alt="Project Image"
            class="w-full h-full object-cover rounded-lg"
          />
        </div>
      </div>

      <div class="grid grid-cols-[30%_55%] gap-[15%] mt-24">
        <div class="space-y-14">
          <div class="flex items-center gap-x-4">
            <div class="bg-sky-200 w-16 h-16 rounded-full flex items-center justify-center overflow-hidden p-3">
              <img
                src="{{ asset('images/logo-transparent.png') }}"
                alt="Logo"
                class="w-full h-full object-contain"
              />
            </div>

            <div class="space-y-3">
              <h4 class="font-bold text-lg">PT Keanu Abimanyu Konstruksi</h4>
              <span class="font-semibold">Bali Best Construction</span>
            </div>
          </div>

          <form
            action=""
            class=""
          >
            <label class="form-control w-full">
              <div class="label">
                <span class="label-text font-bold text-xl">Subscribe to newsletter</span>
              </div>
              <input
                type="text"
                placeholder="Type here"
                class="input input-bordered w-full"
              />
            </label>

            <button class="btn btn-info text-white btn-block mt-3">Subscribe</button>

            <span class="text-gray-400 text-xs inline-block mt-3">By subscribing you agree to with our Privacy Policy.</span>
          </form>

          <div class="space-y-6">
            <h4 class="font-bold text-xl">Share</h4>

            <div class="flex items-center gap-x-3">
              <a
                href="#"
                class="bg-neutral-200 flex items-center justify-center w-12 h-12 rounded-full"
              >
                <i class="fa-brands fa-whatsapp text-sky-400 text-xl"></i>
              </a>
              <a
                href="#"
                class="bg-neutral-200 flex items-center justify-center w-12 h-12 rounded-full"
              >
                <i class="fa-brands fa-facebook text-sky-400 text-xl"></i>
              </a>
              <a
                href="#"
                class="bg-neutral-200 flex items-center justify-center w-12 h-12 rounded-full"
              >
                <i class="fa-brands fa-linkedin text-sky-400 text-xl"></i>
              </a>
              <a
                href="#"
                class="bg-neutral-200 flex items-center justify-center w-12 h-12 rounded-full"
              >
                <i class="fa-brands fa-x-twitter text-sky-400 text-xl"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="space-y-8">
          <div class="space-y-6 border-b border-black">
            <h3 class="text-sky-400 font-bold text-2xl">Project Description</h3>
            <p class="text-lg pb-6">
              {{$proyek->deskripsi_proyek}}
            </p>
          </div>

          <div class="space-y-6 border-b border-black">
            <h3 class="text-sky-400 font-bold text-2xl">Gallery</h3>

            <div
            class="grid grid-cols-3 gap-6 pb-6 pswp-gallery pswp-gallery"
            id="project-gallery"
            >
            @foreach ($proyek->gambarProyek as $item)
              <a
                href="./assets/images/project-1.jpg"
                class="w-full h-[200px] bg-neutral-200 rounded-lg overflow-hidden relative group"
              >
                <img
                  src="{{ asset('images')}}/{{ $item->gambar_proyek }}"
                  alt="Project Image"
                  class="w-full h-full object-cover"
                />
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== End Detail Project ===== -->

    <!-- ===== Other Project Section ===== -->
    <section class="container mx-auto pt-12 pb-36">
      <div class="flex justify-between items-end">
        <div class="flex flex-col space-y-6">
          <h2 class="text-sky-400 text-5xl font-bold">Proyek Lainnya</h2>

          <p class="text-lg max-w-4xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dignissimos officia laudantium quod eius nisi?</p>
        </div>

        <a
          href="#"
          class="btn btn-outline btn-info"
        >
          View all
        </a>
      </div>

      <div class="grid grid-cols-3 gap-8 mt-24">
        @foreach ($tigaProyek as $proyek )
            

        <div class="card">
          <figure>
            <img
            src="{{ asset('images')}}/{{ $proyek->foto_utama_proyek }}"
              alt="Project Preview"
            />
          </figure>
          <div class="card-body py-8 px-0">
            <span class="font-bold mb-1"
              ><span class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">{{ $proyek->size_proyek }} <sup>2</sup></span> {{ $proyek->lokasi_proyek }}</span
            >
            <a href="#">
              <h2 class="card-title font-bold">{{ $proyek->nama_proyek }}</h2>
            </a>
            <div class="card-actions mt-6">
              <a
                href="/detail/{{ $proyek->id_proyek }}"
                class="font-semibold space-x-4"
              >
                View details
                <i class="fa-solid fa-chevron-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
               @endforeach
      </div>
    </section>
    <!-- ===== End Other Project ===== -->

    <!-- ===== Footer ===== -->
    <footer class="footer container mx-auto text-base-content">
      <nav class="min-w-[500px] w-full">
        <a
          href="#"
          class="w-[140px] mb-6"
        >
          <img
            src="{{ asset('images/logo-transparent.png') }}"
            alt="Company Logo"
            class="w-[140px]"
          />
        </a>

        <form class="w-full">
          <fieldset class="form-control">
            <label class="label">
              <span class="label-text mb-4">Masukan alamat email anda untuk berlangganan berita dari kami.</span>
            </label>
            <div class="join">
              <input
                type="text"
                placeholder="username@site.com"
                class="input input-bordered join-item w-80"
              />
              <button class="btn btn-info text-white join-item">Subscribe</button>
            </div>
            <label class="label mt-4">
              <span class="label-text mb-4 max-w-lg">By subscribing you agree to with our Privacy Policy and provide consent to receive updates from our company. </span>
            </label>
          </fieldset>
        </form>
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Follow Us</h6>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-instagram"></i><span>Instagram</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-facebook"></i><span>Facebook</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-x-twitter"></i><span>X</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-youtube"></i><span>Youtube</span>
        </a>
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Site Map</h6>
        <a
          href="#"
          class="link link-hover"
          >Homepage</a
        >
        <a
          href="#"
          class="link link-hover"
          >Projects</a
        >
        <a
          href="#"
          class="link link-hover"
          >Solutions</a
        >
        <a
          href="#"
          class="link link-hover"
          >Associates Program</a
        >
        <a
          href="#"
          class="link link-hover"
          >Our Office</a
        >
        <a
          href="#"
          class="link link-hover"
          >Blogs</a
        >
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Quick Links</h6>
        <a class="link link-hover">Email : knaconstruction@gmail.com</a>
        <a class="link link-hover">PDF Company Profile</a>
      </nav>
    </footer>

    <footer class="footer container mx-auto py-6 text-base-content border-base-300 border-t">
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
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
              ></path>
            </svg>
          </a>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
              ></path>
            </svg>
          </a>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
            </svg>
          </a>
        </div>
      </nav>
    </footer>
    <!-- ===== End Footer ===== -->

    <!-- ===== Custom JavaScript ===== -->
    <script src="./js/index.js"></script>

    <!-- ===== CDN JavaScript ===== -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
      integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>
