@extends('layouts.app')
@section('title','Product — PT YJM')

@section('content')

<section class="relative">
  <div class="absolute inset-0 bg-[#070D1F]"></div>

  {{-- glow --}}
  <div class="absolute -top-24 right-10 h-72 w-72 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-56 -left-24 h-72 w-72 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-16">
    {{-- header --}}
    <div class="max-w-3xl">
      <h1 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-white">
        Produk & Solusi Mesin Pengemasan
      </h1>
      <p class="mt-3 text-white/75 leading-relaxed">
        Berikut halaman katalog produk. Klik gambar untuk membuka ukuran penuh.
      </p>
    </div>

    @php
      // Nama file kamu (sesuaikan kalau beda)
      $base = 'YJM ZPACK 08112025-dikompresi-images-';
      $max  = 37; // dari 0..37
    @endphp

    {{-- catalog list --}}
    <div class="mt-10 space-y-8">
      @for($i=0; $i<=$max; $i++)
        @php
          $file = "products/{$base}{$i}.jpg";
        @endphp

        <a href="{{ asset($file) }}" target="_blank"
           class="block rounded-3xl bg-white/5 border border-white/10 overflow-hidden hover:bg-white/10 transition">
          <div class="flex items-center justify-between px-6 py-4 border-b border-white/10">
            <div class="flex items-center gap-3">
              <span class="inline-flex items-center rounded-full bg-[#1E40FF]/20 text-white px-3 py-1 text-xs font-bold border border-white/10">
                Page {{ $i+1 }}
              </span>
              <div>
                <div class="text-white font-extrabold">YJM Product Catalog</div>
              </div>
            </div>
            <div class="text-xs font-bold text-white/60">Open full size →</div>
          </div>

          <div class="bg-[#0B122A]">
            <img
              src="{{ asset($file) }}"
              alt="YJM Catalog Page {{ $i+1 }}"
              class="w-full h-auto object-contain"
              loading="lazy"
            >
          </div>
        </a>
      @endfor
    </div>

    {{-- CTA --}}
    <div class="mt-12 rounded-[28px] bg-gradient-to-r from-[#0A1B4D] to-[#1E40FF]
                p-8 md:p-10 border border-white/10">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <div>
          <div class="text-xs font-bold tracking-[0.2em] uppercase text-white/80">PT Yoewono Jaya Mandiri</div>
          <div class="mt-2 text-2xl md:text-3xl font-extrabold tracking-tight text-white">
            Mau minta penawaran dari katalog?
          </div>
          <div class="mt-2 text-white/80 text-sm leading-relaxed max-w-2xl">
            Hubungi tim kami untuk konsultasi kebutuhan, rekomendasi mesin, dan penawaran terbaik.
          </div>
        </div>
        <div class="flex flex-wrap gap-3">
          <a href="{{ route('contact') }}"
             class="inline-flex items-center rounded-full bg-white text-[#08136E] px-6 py-3 text-sm font-bold hover:bg-white/90 transition">
            Discuss Your Requirements
          </a>
          <a href="https://wa.me/6285708095529" target="_blank"
             class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition">
            WhatsApp
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
