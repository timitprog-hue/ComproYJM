<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'PT Yoewono Jaya Mandiri')</title>
  <link rel="icon" type="image/png" href="{{ asset('logoo.png') }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200"
            x-data="{ open:false }">
      <div class="container-yjm py-3 flex items-center justify-between gap-3">

        {{-- Brand --}}
        <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
          <img
            src="{{ asset('logo-jym-full.png') }}"
            alt="PT Yoewono Jaya Mandiri"
            class="h-10 md:h-11 object-contain"
          />
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden md:flex items-center gap-6">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
          <a class="nav-link" href="{{ route('about') }}">About</a>
          <a class="nav-link" href="{{ route('services') }}">Services</a>
          <a class="nav-link" href="{{ route('projects') }}">Product</a>
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </nav>

        {{-- Desktop CTA --}}
        <a href="{{ route('contact') }}" class="btn-primary hidden sm:inline-flex md:inline-flex">
          Discuss Your Requirements
        </a>

        {{-- Mobile hamburger --}}
        <button type="button"
                class="md:hidden inline-flex items-center justify-center rounded-xl border border-slate-200
                       bg-white/80 px-3 py-2 text-slate-900 hover:bg-white transition"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-label="Open menu">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 6l12 12M18 6l-12 12"/>
          </svg>
        </button>
      </div>

      {{-- Mobile dropdown --}}
      <div x-show="open" x-cloak
           x-transition.opacity.duration.150ms
           class="md:hidden border-t border-slate-200 bg-white/95 backdrop-blur">
        <div class="container-yjm py-3 grid gap-2">
          <a class="px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-100 font-semibold"
             href="{{ route('home') }}" @click="open=false">Home</a>
          <a class="px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-100 font-semibold"
             href="{{ route('about') }}" @click="open=false">About</a>
          <a class="px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-100 font-semibold"
             href="{{ route('services') }}" @click="open=false">Services</a>
          <a class="px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-100 font-semibold"
             href="{{ route('projects') }}" @click="open=false">Product</a>
          <a class="px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-100 font-semibold"
             href="{{ route('contact') }}" @click="open=false">Contact</a>

          <a href="{{ route('contact') }}"
             class="mt-2 inline-flex items-center justify-center rounded-xl bg-[#08136E] px-4 py-3
                    text-white font-extrabold hover:bg-[#1E40FF] transition"
             @click="open=false">
            Discuss Your Requirements
          </a>
        </div>
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
