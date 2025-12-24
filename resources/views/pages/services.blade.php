@extends('layouts.app')
@section('title','Services — PT YJM')

@section('content')

<section class="relative">
  {{-- bg --}}
  <div class="absolute inset-0 bg-[#070D1F]"></div>

  {{-- soft glow --}}
  <div class="absolute -top-24 right-10 h-72 w-72 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-48 -left-24 h-72 w-72 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-16">
    {{-- header --}}
    <div class="max-w-3xl">

      <h1 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-white">
        Layanan & Solusi YJM
      </h1>

      <p class="mt-3 text-white/75 leading-relaxed">
        Kami menyediakan layanan pendukung operasional dan solusi pengemasan untuk meningkatkan keandalan,
        efisiensi, dan kualitas proses produksi pelanggan.
      </p>
    </div>

    {{-- cards --}}
    <div class="mt-10 grid md:grid-cols-2 gap-6">
      @foreach ([
          ['no'=>'01','title'=>'Engineering Support','points'=>['Troubleshooting','Preventive Maintenance','Optimization']],
          ['no'=>'02','title'=>'Industrial Supply','points'=>['Parts & components','Consumables','Vendor management']],
          ['no'=>'03','title'=>'Installation & Commissioning','points'=>['Planning','Installation','Testing & handover']],
          ['no'=>'04','title'=>'Project Management','points'=>['Timeline','Budget','Documentation']],
      ] as $srv)
        <div class="rounded-3xl bg-white/5 border border-white/10 p-7 hover:bg-white/10 transition">
          <div class="flex items-start justify-between gap-4">
            <div>
              <div class="inline-flex items-center rounded-full bg-[#1E40FF]/20 text-white px-3 py-1 text-xs font-bold border border-white/10">
                {{ $srv['no'] }}
              </div>
              <div class="mt-3 font-extrabold text-xl text-white">
                {{ $srv['title'] }}
              </div>
            </div>

            <div class="h-11 w-11 rounded-full bg-[#1E40FF] ring-4 ring-black/40 grid place-items-center text-white">
              ✓
            </div>
          </div>

          <ul class="mt-5 space-y-2 text-sm text-white/75">
            @foreach($srv['points'] as $p)
              <li class="flex items-start gap-2">
                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-[#1E40FF]"></span>
                <span>{{ $p }}</span>
              </li>
            @endforeach
          </ul>

          <div class="mt-6">
            <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-extrabold text-white hover:text-white/80 transition">
              Request detail & penawaran →
            </a>
          </div>
        </div>
      @endforeach
    </div>

    {{-- CTA --}}
    <div class="mt-12 rounded-[28px] bg-gradient-to-r from-[#0A1B4D] to-[#1E40FF]
                p-8 md:p-10 border border-white/10">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <div>
          <div class="text-xs font-bold tracking-[0.2em] uppercase text-white/80">PT Yoewono Jaya Mandiri</div>
          <div class="mt-2 text-2xl md:text-3xl font-extrabold tracking-tight text-white">
            Butuh konsultasi untuk kebutuhan pengemasan Anda?
          </div>
          <div class="mt-2 text-white/80 text-sm leading-relaxed max-w-2xl">
            Hubungi tim kami untuk diskusi kebutuhan, rekomendasi solusi, serta penawaran terbaik.
          </div>
        </div>
        <div class="flex flex-wrap gap-3">
          <a href="{{ route('contact') }}"
             class="inline-flex items-center rounded-full bg-white text-[#08136E] px-6 py-3 text-sm font-bold hover:bg-white/90 transition">
            Hubungi Marketing
          </a>
          <a href="{{ route('projects') }}"
             class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition">
            Lihat Produk
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
