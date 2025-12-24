@extends('layouts.app')
@section('title','Home — PT YJM')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-b from-[#0A0F1F] via-[#08136E] to-[#0A0F1F]"></div>

  {{-- decorative --}}
  <div class="absolute -top-24 -right-24 h-80 w-80 rounded-full bg-[#1E40FF]/20 blur-3xl"></div>
  <div class="absolute -bottom-24 -left-24 h-80 w-80 rounded-full bg-[#0B1FA8]/20 blur-3xl"></div>

  <div class="container-yjm relative py-16 md:py-20 grid md:grid-cols-2 gap-10 items-center">
    <div class="text-white">

      <h1 class="mt-4 text-4xl md:text-5xl font-extrabold tracking-tight leading-[1.12]">
        Mesin Pengemasan<br>
        <span class="text-white/80">dengan standar kualitas & teknologi terkini</span>
      </h1>

      <p class="mt-4 text-white/80 leading-relaxed max-w-xl">
        PT Yoewono Jaya Mandiri (YJM) bergerak di bidang mesin produksi pengemasan selama lebih dari 15 tahun,
        khususnya pengemasan minuman. Dengan konsep “Berorientasi pada Teknologi dan Kualitas”, kami
        membangun kemitraan yang berkelanjutan dengan pelanggan.
      </p>

      <div class="mt-7 flex flex-wrap gap-3">
        <a href="{{ route('contact') }}"
           class="inline-flex items-center rounded-full bg-[#0B1FA8] px-6 py-3 text-sm font-bold text-white hover:bg-[#1E40FF] transition">
          Konsultasi & Penawaran
        </a>
        <a href="{{ route('services') }}"
           class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition">
          Lihat Solusi
        </a>
      </div>

      <div class="mt-8 grid grid-cols-3 gap-4 max-w-xl">
        <div class="rounded-2xl border border-white/15 bg-white/5 p-4">
          <div class="text-2xl font-extrabold">15+</div>
          <div class="text-xs text-white/70 mt-1 uppercase tracking-wide">Years</div>
        </div>
        <div class="rounded-2xl border border-white/15 bg-white/5 p-4">
          <div class="text-2xl font-extrabold">Quality</div>
          <div class="text-xs text-white/70 mt-1 uppercase tracking-wide">High Standard</div>
        </div>
        <div class="rounded-2xl border border-white/15 bg-white/5 p-4">
          <div class="text-2xl font-extrabold">Tech</div>
          <div class="text-xs text-white/70 mt-1 uppercase tracking-wide">Modern Solution</div>
        </div>
      </div>
    </div>

    {{-- right card (dark) --}}
    <div class="rounded-[28px] bg-white/95 backdrop-blur border border-white/20 shadow-xl overflow-hidden">
      <div class="p-7">
        <div class="text-xs font-extrabold tracking-[0.2em] uppercase text-[#08136E]">
          Technology & Quality Oriented
        </div>

        <p class="mt-3 text-sm text-slate-700 leading-relaxed">
          Kami menyediakan solusi yang memenuhi kebutuhan keandalan dan fleksibilitas.
          Berdasarkan tuntutan pasar dan kebutuhan pelanggan, kami terus meningkatkan kreativitas desain,
          kualitas produk, dan reputasi merek untuk menjadi penyedia solusi pengemasan.
        </p>

        <div class="mt-6 grid gap-3">
          @foreach ([
            ['t'=>'Kemitraan Berkelanjutan','d'=>'Komitmen jangka panjang bersama pelanggan.'],
            ['t'=>'Standar Kualitas','d'=>'Fokus pada kepuasan dan hasil terbaik.'],
            ['t'=>'Inovasi Berkelanjutan','d'=>'Pengembangan teknologi mengikuti kebutuhan pasar.'],
          ] as $x)
            <div class="rounded-2xl border border-slate-200/70 bg-white p-4">
              <div class="font-extrabold text-slate-900">{{ $x['t'] }}</div>
              <div class="text-sm text-slate-600 mt-1">{{ $x['d'] }}</div>
            </div>
          @endforeach
        </div>

        <div class="mt-6">
          <a href="{{ route('about') }}" class="text-sm font-extrabold text-[#08136E] hover:text-[#1E40FF]">
            Pelajari profil perusahaan →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- TRUST BAR (dark version) --}}
<section class="bg-[#0A0F1F] border-t border-b border-white/10">
  <div class="container-yjm py-10">
    <div class="grid md:grid-cols-4 gap-4">
      @foreach ([
        ['t'=>'Packaging Focus','d'=>'Khusus pengemasan minuman'],
        ['t'=>'Competitive Price','d'=>'Solusi hemat biaya'],
        ['t'=>'Best Service','d'=>'Respons & support pelanggan'],
        ['t'=>'On-Time Delivery','d'=>'Jaringan logistik luas'],
      ] as $i)
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 hover:bg-white/10 transition">
          <div class="font-extrabold text-white">{{ $i['t'] }}</div>
          <div class="text-sm text-white/70 mt-1">{{ $i['d'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="container-yjm py-14">
  <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-white">Mengapa Memilih YJM?</h2>
  <p class="mt-2 text-white/75 max-w-3xl leading-relaxed">
    Kami percaya kualitas dan teknologi adalah kunci untuk menghasilkan produk terbaik. Karena itu,
    kami berfokus pada inovasi, efisiensi, dan kepuasan pelanggan.
  </p>

  <div class="mt-8 grid md:grid-cols-2 gap-6">
    @foreach ([
      ['no'=>'01','t'=>'Inovasi & Teknologi','d'=>'Inovasi dan pengembangan teknologi dilakukan secara berkelanjutan agar solusi selalu relevan dengan kebutuhan pelanggan.'],
      ['no'=>'02','t'=>'Harga Kompetitif','d'=>'Produk dan layanan dengan nilai terbaik untuk membantu efisiensi biaya dan meningkatkan daya saing bisnis Anda.'],
      ['no'=>'03','t'=>'Pelayanan Terbaik','d'=>'Kami memahami kebutuhan melalui komunikasi rutin dan melakukan peningkatan produk/layanan berdasarkan umpan balik.'],
      ['no'=>'04','t'=>'Pengiriman Tepat Waktu','d'=>'Jaringan logistik yang luas membantu memastikan pengiriman sesuai jadwal operasional pelanggan.'],
    ] as $w)
      <div class="rounded-3xl border border-white/10 bg-white/5 p-7 hover:bg-white/10 transition">
        <div class="inline-flex items-center rounded-full bg-[#0B1FA8]/25 text-white px-3 py-1 text-xs font-bold border border-white/10">
          {{ $w['no'] }}
        </div>
        <div class="mt-3 font-extrabold text-lg text-white">{{ $w['t'] }}</div>
        <p class="mt-2 text-sm text-white/75 leading-relaxed">{{ $w['d'] }}</p>
      </div>
    @endforeach
  </div>
</section>

{{-- CTA --}}
<section class="container-yjm pb-16">
  <div class="rounded-[32px] bg-gradient-to-r from-[#08136E] to-[#0B1FA8]
              text-white p-8 md:p-10 border border-white/10">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <div>
        <div class="text-xs font-bold tracking-[0.2em] uppercase text-white/80">PT Yoewono Jaya Mandiri</div>
        <div class="mt-2 text-2xl md:text-3xl font-extrabold tracking-tight">
          Butuh solusi mesin pengemasan untuk kebutuhan produksi Anda?
        </div>
        <div class="mt-2 text-white/80 text-sm leading-relaxed max-w-2xl">
          Hubungi tim kami untuk konsultasi dan penawaran. Kami siap membantu memilih solusi yang tepat sesuai kebutuhan.
        </div>
      </div>

      <div class="flex flex-wrap gap-3">
        <a href="{{ route('contact') }}"
           class="inline-flex items-center rounded-full bg-white text-[#08136E] px-6 py-3 text-sm font-bold hover:bg-white/90 transition">
          Hubungi Marketing
        </a>
        <a href="{{ route('services') }}"
           class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition">
          Lihat layanan
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
