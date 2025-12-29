@extends('layouts.app')
@section('title','Product — PT YJM')

@section('content')
<section class="relative overflow-hidden">
  {{-- background navy (tema kamu) --}}
  <div class="absolute inset-0 bg-[#070D1F]"></div>
  <div class="absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-40 -left-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-12 lg:py-14">

    {{-- header page --}}
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
      <div class="max-w-2xl">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">
          Products & Packaging Solutions
        </h1>
        <p class="mt-3 text-white/75 leading-relaxed">
          Browse our catalog like a brochure page. Choose category to filter.
        </p>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 px-5 py-4 text-sm text-white/75">
        <div class="font-extrabold text-white">Need a quotation?</div>
        <div class="mt-1">Send requirements & get recommendations.</div>
      </div>
    </div>

    <div class="mt-10 grid lg:grid-cols-[320px_1fr] gap-8 lg:gap-10">

      {{-- LEFT: categories (tetap ada) --}}
      <aside class="rounded-3xl bg-white/5 border border-white/10 overflow-hidden h-fit sticky top-6">
        <div class="px-6 py-5 border-b border-white/10">
          <div class="text-white font-extrabold">Categories</div>
          <div class="text-xs text-white/60 mt-1">Filter by type</div>
        </div>

        <div class="p-3 space-y-2">
          @foreach(($categories ?? []) as $key => $label)
            <a
              href="{{ route('projects') }}?cat={{ $key }}"
              class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold transition border
                     {{ ($active ?? '') === $key
                        ? 'bg-white/10 text-white border-white/15'
                        : 'bg-transparent text-white/80 border-transparent hover:bg-white/5 hover:border-white/10' }}"
            >
              <span>{{ $label }}</span>
              <span class="h-2 w-2 rounded-full {{ ($active ?? '') === $key ? 'bg-[#1E40FF]' : 'bg-white/20' }}"></span>
            </a>
          @endforeach
        </div>

        <div class="px-6 pb-6">
          <a href="{{ route('contact') }}"
             class="mt-3 inline-flex w-full justify-center rounded-2xl bg-[#1E40FF] text-white px-5 py-3 text-sm font-extrabold
                    hover:bg-[#264BFF] transition">
            Contact Sales
          </a>
          <div class="mt-3 text-xs text-white/55 text-center">
            WhatsApp:
            <a class="underline hover:text-white" target="_blank" href="https://wa.me/6285708095529">0857 0809 5529</a>
          </div>
        </div>
      </aside>

      {{-- RIGHT: “brochure paper” --}}
      <div>
        @php
          $active = $active ?? 'beverage';
          $isAll = $active === 'all';
          $filtered = collect($items ?? [])->filter(fn($it) => $isAll || ($it['cat'] ?? '') === $active)->values();
        @endphp

        {{-- paper card --}}
        <div class="rounded-[28px] bg-white shadow-sm border border-slate-200 overflow-hidden">

          {{-- top brochure header bar (like PDF) --}}
          <div class="px-8 pt-7">
            <div class="flex items-center justify-between gap-6">
              <div class="text-xs font-bold tracking-[0.22em] uppercase text-slate-500">
                {{ $categories[$active] ?? 'Product Catalog' }}
              </div>

              <div class="flex items-center gap-2 text-slate-500 text-xs font-semibold">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-300"></span>
                PT Yoewono Jaya Mandiri
              </div>
            </div>

            {{-- grey line + red accent --}}
            <div class="mt-4 h-[3px] bg-slate-200 relative overflow-hidden rounded-full">
              <div class="absolute left-0 top-0 h-full w-48 bg-red-600"></div>
            </div>
          </div>

          {{-- brochure body: list items --}}
          <div class="px-8 pb-10 pt-8 space-y-12">

            @forelse($filtered as $it)
              <article class="grid lg:grid-cols-[520px_1fr] gap-8 items-start">
                {{-- left hero image --}}
                <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                  <div class="aspect-[4/3]">
                    <img
                      src="{{ asset($it['hero'] ?? '') }}"
                      class="w-full h-full object-contain"
                      loading="lazy"
                      onerror="this.style.display='none'"
                    >
                  </div>
                </div>

                {{-- right: title + desc + thumbs --}}
                <div>
                  <h2 class="text-2xl font-extrabold text-red-600">
                    {{ $it['title'] ?? '-' }}
                  </h2>
                  @if(!empty($it['subtitle']))
                    <div class="mt-1 text-slate-600 font-semibold">
                      {{ $it['subtitle'] }}
                    </div>
                  @endif

                  <div class="mt-4">
                    <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                    <div class="mt-2 space-y-3 text-sm text-slate-700 leading-relaxed">
                      @foreach(($it['desc'] ?? []) as $p)
                        <p>{{ $p }}</p>
                      @endforeach
                    </div>
                  </div>


                </div>
              </article>

              {{-- divider --}}
              <div class="h-px bg-slate-200/70"></div>

            @empty
              <div class="py-10 text-center text-slate-600">
                No items found in this category.
              </div>
            @endforelse

          </div>
        </div>

        {{-- bottom CTA (tetap tema kamu) --}}
        <div class="mt-10 rounded-[28px] bg-gradient-to-r from-[#0A1B4D] to-[#1E40FF] p-7 md:p-8 border border-white/10">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
              <div class="text-xs font-bold tracking-[0.2em] uppercase text-white/80">PT Yoewono Jaya Mandiri</div>
              <div class="mt-2 text-2xl md:text-3xl font-extrabold tracking-tight text-white">
                Want a tailored solution for your production line?
              </div>
              <div class="mt-2 text-white/80 text-sm leading-relaxed max-w-2xl">
                Tell us your capacity target and product type. We’ll recommend the most suitable machine configuration.
              </div>
            </div>

            <div class="flex flex-wrap gap-3">
              <a href="{{ route('contact') }}"
                 class="inline-flex items-center rounded-full bg-white text-[#08136E] px-6 py-3 text-sm font-extrabold hover:bg-white/90 transition">
                Discuss Your Requirements
              </a>
              <a href="https://wa.me/6285708095529" target="_blank"
                 class="inline-flex items-center rounded-full bg-transparent border border-white/25 px-6 py-3 text-sm font-extrabold text-white hover:bg-white/10 transition">
                WhatsApp
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
@endsection
