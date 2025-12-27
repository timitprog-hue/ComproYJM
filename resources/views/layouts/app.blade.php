<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'PT Yoewono Jaya Mandiri')</title>
  <link rel="icon" type="image/png" href="{{ asset('logoo.png') }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="bg-[#0A0F1F] text-slate-100">
  {{-- TOP BAR --}}
  <div class="bg-[#08136E] text-white">
    <div class="container-yjm py-2 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 text-xs">
      <div class="opacity-90">
        Mesin Produksi • Sejak 2009 • 15+ Tahun Pengalaman
      </div>
      <div class="opacity-90">
        (031) 8479999 • WA: 0857 0809 5529
      </div>
    </div>
  </div>

  {{-- NAVBAR --}}
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="container-yjm py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center">
            <img
                src="{{ asset('logo-jym-full.png') }}"
                alt="PT Yoewono Jaya Mandiri"
                class="h-10 md:h-11 object-contain"
            />
        </a>

      <nav class="hidden md:flex items-center gap-6">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
        <a class="nav-link" href="{{ route('about') }}">About</a>
        <a class="nav-link" href="{{ route('services') }}">Services</a>
        <a class="nav-link" href="{{ route('projects') }}">Product</a>
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </nav>

      <a href="{{ route('contact') }}" class="btn-primary hidden sm:inline-flex">
        Discuss Your Requirements
      </a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  {{-- FOOTER --}}
  <footer class="mt-16 border-t border-slate-200 bg-white">
    <div class="container-yjm py-12 grid md:grid-cols-3 gap-10">
      <div>
        <a href="{{ route('home') }}" class="flex items-center">
            <img
                src="{{ asset('logo-jym-full.png') }}"
                alt="PT Yoewono Jaya Mandiri"
                class="h-10 md:h-11 object-contain"
            />
        </a>
        <p class="mt-4 text-sm text-slate-600 leading-relaxed">
          Penyedia solusi mesin pengemasan dengan komitmen kualitas, teknologi,
          dan kemitraan berkelanjutan sejak 2009.
        </p>
      </div>

      <div>
        <div class="font-extrabold text-slate-900 mb-3">Menu</div>
        <div class="grid gap-2 text-sm text-slate-600">
          <a class="hover:text-blue-950" href="{{ route('about') }}">About</a>
          <a class="hover:text-blue-950" href="{{ route('services') }}">Services</a>
          <a class="hover:text-blue-950" href="{{ route('projects') }}">Product</a>
          <a class="hover:text-blue-950" href="{{ route('contact') }}">Contact</a>
        </div>
      </div>

      <div>
        <div class="font-extrabold text-slate-900 mb-3">Contact</div>
        <div class="text-sm text-slate-600 grid gap-2">
          <div><span class="font-semibold text-slate-800">Email:</span> yjm.marketing62@gmail.com</div>
          <div><span class="font-semibold text-slate-800">Telepon:</span> (031) 8479999</div>
          <div><span class="font-semibold text-slate-800">WhatsApp:</span> 0857 0809 5529</div>
          <div class="pt-1">
            <span class="font-semibold text-slate-800">Alamat:</span><br>
            Jl. Raya Jemursari 76 Blok C No 32, Jemur Wonosari, Kec. Wonocolo, Surabaya
          </div>
        </div>
      </div>
    </div>

    <div class="text-center text-xs text-slate-500 pb-8">
      © {{ date('Y') }} PT Yoewono Jaya Mandiri. All rights reserved.
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  @stack('scripts')

</body>
</html>
