@extends('layouts.app')
@section('title','About — PT YJM')

@section('content')

<section class="relative overflow-hidden bg-hero">
  {{-- background --}}
  <div class="absolute inset-0 bg-[#0A0F1F]"></div>

  {{-- glow decoration --}}
<div class="absolute -top-32 right-10 h-96 w-96 rounded-full bg-[rgba(30,64,255,.25)] blur-3xl"></div>
<div class="absolute -bottom-32 -left-20 h-96 w-96 rounded-full bg-[rgba(30,64,255,.15)] blur-3xl"></div>


  <div class="container-yjm relative py-16">
    {{-- HEADER --}}
    <div class="max-w-3xl">
      <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">
        Tentang PT Yoewono Jaya Mandiri
      </h1>
      <p class="mt-3 text-white/75 leading-relaxed">
        Penyedia solusi mesin pengemasan minuman dengan fokus pada kualitas,
        teknologi, dan kemitraan jangka panjang.
      </p>
    </div>

    {{-- COMPANY PROFILE --}}
    <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur">
      <p class="text-white/80 leading-relaxed">
        PT Yoewono Jaya Mandiri (YJM) adalah Perusahaan yang bergerak di bidang mesin
        produksi pengemasan selama lebih dari 15 tahun, khususnya pengemasan minuman.
        Sejak didirikan pada tahun 2009, YJM berkomitmen untuk memenuhi kebutuhan
        pelanggan dan membangun kemitraan yang berkelanjutan. Dengan konsep
        <span class="font-semibold text-white">“Berorientasi pada Teknologi dan Kualitas”</span>,
        YJM menghadirkan mesin yang berkualitas tinggi dengan teknologi terkini.
        Kami percaya bahwa kualitas dan teknologi adalah kunci untuk menghasilkan
        produk terbaik.
      </p>

      <p class="mt-4 text-white/80 leading-relaxed">
        Kami memiliki berbagai solusi yang dapat secara bersamaan memenuhi kebutuhan
        keandalan dan fleksibilitas Anda. Berdasarkan tuntutan pasar dan kebutuhan
        pelanggan, kami akan terus meningkatkan kreativitas desain, kualitas produk,
        dan reputasi merek untuk menjadi penyedia solusi pengemasan.
      </p>
    </div>

    {{-- VISION & MISSION --}}
    <div class="mt-10 grid md:grid-cols-2 gap-6">
      {{-- VISION --}}
      <div class="rounded-3xl border border-white/10 bg-white/5 p-7 hover:bg-white/10 transition">
        <div class="mt-4 font-extrabold text-lg text-white">
          Visi Perusahaan
        </div>
        <p class="mt-2 text-sm text-white/75 leading-relaxed">
          Visi PT Yoewono Jaya Mandiri adalah menjadi Perusahaan penyedia mesin pengemas
          dengan kualitas terbaik. Fokus kami pada kesuksesan bersama, dengan
          mengutamakan kualitas dan kepuasan pelanggan. PT Yoewono Jaya Mandiri juga
          berkomitmen untuk menjalin kemitraan jangka panjang dengan pelanggan.
        </p>
      </div>

      {{-- MISSION --}}
      <div class="rounded-3xl border border-white/10 bg-white/5 p-7 hover:bg-white/10 transition">
        <div class="mt-4 font-extrabold text-lg text-white">
          Misi Perusahaan
        </div>
        <p class="mt-2 text-sm text-white/75 leading-relaxed">
          PT Yoewono Jaya Mandiri memiliki misi untuk memberi solusi terbaik dan
          terpercaya dengan mengutamakan kualitas dan kepuasan pelanggan. Perusahaan
          selalu mengutamakan layanan yang berkualitas terhadap pelanggan dan inovatif.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection
