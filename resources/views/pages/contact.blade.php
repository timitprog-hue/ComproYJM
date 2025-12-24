@extends('layouts.app')
@section('title','Contact — PT YJM')

@section('content')

<section class="relative">
  {{-- bg --}}
  <div class="absolute inset-0 bg-[#070D1F]"></div>

  {{-- glow --}}
  <div class="absolute -top-24 right-10 h-72 w-72 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-64 -left-24 h-72 w-72 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-16">
    {{-- header --}}
    <div class="max-w-3xl">

      <h1 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-white">
        Hubungi Kami
      </h1>

      <p class="mt-3 text-white/75 max-w-2xl leading-relaxed">
        Kirim pesan untuk konsultasi / penawaran. Tim kami akan merespons secepat mungkin.
      </p>
    </div>

    <div class="mt-10 grid md:grid-cols-2 gap-8">
      {{-- FORM --}}
      <div class="rounded-3xl bg-white/5 border border-white/10 p-7 hover:bg-white/10 transition">
        <div class="flex items-center justify-between gap-4">
          <div>
            <div class="text-white font-extrabold text-lg">Send a Message</div>
            <div class="text-sm text-white/70 mt-1">Konsultasi kebutuhan dan minta penawaran.</div>
          </div>
          <div class="h-11 w-11 rounded-full bg-[#1E40FF] ring-4 ring-black/40 grid place-items-center text-white">
            ✉
          </div>
        </div>

        <form class="mt-6 space-y-4">
          <input
            class="w-full rounded-2xl bg-white/5 border border-white/10 px-4 py-3 text-sm text-white placeholder:text-white/40 outline-none focus:border-white/25"
            placeholder="Name"
          >
          <input
            class="w-full rounded-2xl bg-white/5 border border-white/10 px-4 py-3 text-sm text-white placeholder:text-white/40 outline-none focus:border-white/25"
            placeholder="Email"
          >
          <textarea
            class="w-full rounded-2xl bg-white/5 border border-white/10 px-4 py-3 text-sm text-white placeholder:text-white/40 outline-none focus:border-white/25"
            rows="5"
            placeholder="Message"
          ></textarea>

          <div class="flex flex-wrap gap-3 pt-1">
            <button
              type="button"
              class="inline-flex items-center rounded-full bg-[#1E40FF] px-6 py-3 text-sm font-bold text-white hover:bg-[#2B52FF] transition"
            >
              Submit
            </button>

            <a
              href="https://wa.me/6285708095529"
              target="_blank"
              class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition"
            >
              WhatsApp
            </a>
          </div>

          <p class="text-xs text-white/50">
            *Nanti bisa kita sambungkan ke database/email beneran.
          </p>
        </form>
      </div>

      {{-- OFFICE --}}
      <div class="rounded-3xl bg-white/5 border border-white/10 p-7 hover:bg-white/10 transition">
        <div class="flex items-center justify-between gap-4">
          <div>
            <div class="text-white font-extrabold text-lg">Office</div>
            <div class="text-sm text-white/70 mt-1">Informasi kontak & lokasi.</div>
          </div>
          <div class="h-11 w-11 rounded-full bg-[#0B1FA8] ring-4 ring-black/40 grid place-items-center text-white">
            📍
          </div>
        </div>

        <div class="mt-6 text-sm text-white/75 grid gap-2">
          <div><span class="font-semibold text-white">Email:</span> yjm.marketing62@gmail.com</div>
          <div><span class="font-semibold text-white">Telepon:</span> (031) 8479999</div>
          <div><span class="font-semibold text-white">WhatsApp:</span> 0857 0809 5529</div>
          <div class="pt-2">
            <span class="font-semibold text-white">Alamat:</span><br>
            Jl. Raya Jemursari 76 Blok C No 32, Jemur Wonosari, Kec. Wonocolo, Surabaya
          </div>
        </div>

        <div class="mt-6 rounded-2xl overflow-hidden border border-white/10 h-56">
          <iframe
            class="w-full h-full"
            src="https://www.google.com/maps?q=Jl.%20Raya%20Jemursari%2076%20Blok%20C%20No%2032%20Surabaya&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <div class="mt-5 flex flex-wrap gap-3">
          <a
            href="https://maps.google.com/?q=Jl.%20Raya%20Jemursari%2076%20Blok%20C%20No%2032%20Surabaya"
            target="_blank"
            class="inline-flex items-center rounded-full bg-white text-[#08136E] px-6 py-3 text-sm font-bold hover:bg-white/90 transition"
          >
            Open in Maps
          </a>
          <a
            href="mailto:yjm.marketing62@gmail.com"
            class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-bold text-white hover:bg-white/10 transition"
          >
            Email Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
