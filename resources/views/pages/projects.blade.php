@extends('layouts.app')
@section('title','Product — PT YJM')

@section('content')
<section class="relative overflow-hidden">
  {{-- background navy --}}
  <div class="absolute inset-0 bg-[#070D1F]"></div>
  <div class="absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-40 -left-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-12 lg:py-14">

    {{-- page header --}}
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
      <div class="max-w-2xl">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-white">
          Products & Packaging Solutions
        </h1>
        <p class="mt-3 text-white/75 leading-relaxed">
          Browse our catalog like a brochure page.
        </p>
      </div>

      <div class="rounded-2xl bg-white/5 border border-white/10 px-5 py-4 text-sm text-white/75">
        <div class="font-extrabold text-white">Need a quotation?</div>
        <div class="mt-1">Send requirements & get recommendations.</div>
      </div>
    </div>

    @php
      /**
       * ✅ DATA DI BLADE (tinggal tambah produk di bawah)
       * Cat yang disarankan: beverage, sterilizer, cip, pipeline, all
       */
      $categories = [
        'all'        => 'All Products',
        'beverage'   => 'Beverage Pre-Treatment Equipment',
        'sterilizer' => 'Sterilization Equipment',
        'cip'        => 'CIP System',
        'pipeline'   => 'Pipeline & Preparation',
      ];

      $active = request('cat', 'all');
      if (!array_key_exists($active, $categories)) $active = 'all';

      $items = [
        // =========================
        // ✅ PRODUCT 1 - Extraction System
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Extraction System',
          'subtitle' => '萃取系统',
          'desc' => [
            'Tea extraction is designed to efficiently obtain active components from tea while preserving color, aroma, and taste, and preventing cloudiness caused by excessive dissolution.',
            'The system applies fractional extraction: low-temperature extraction protects aroma and heat-sensitive components, while high-temperature extraction enhances flavor extraction. By precisely controlling extraction parameters, optimal quality and stability of the tea concentrate are achieved.',
          ],
          'layout' => 'text-2img-right',
          'images' => [
            'products/11.png',
            'products/12.png',
          ],
        ],

        // =========================
        // ✅ PRODUCT 2 - Soluble Sugar System
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Soluble Sugar System',
          'subtitle' => '溶糖系统',
          'desc' => [
            'Sugar is one of the major components of fruit juice, sugar dissolves in water single syrup process called soluble sugar.',
            'Soluble sugar system usually includes: sugar dissolve powder conveying, powdered sugar, syrup sterilization, syrup, filtering and cooling, such as syrup storage unit. Special circumstances, the need for degassing treatment syrup.',
          ],
          'layout' => 'text-2img-right',
          'images' => [
            'products/13.png',
            'products/14.png',
          ],
        ],

        // =========================
        // ✅ PRODUCT 3 - Plate Sterilizer
        // =========================
        [
          'cat' => 'sterilizer',
          'title' => 'Plate Sterilizer',
          'subtitle' => '板式灭菌器',
          'desc' => [
            'This whole set of machines is mainly used for pasteurism, ultra-pasteurism and ultra-high temperature sterilization of liquid substances such as milk, juice, tea drinks, beers and healthy drinks.',
            'After the sterilization and cooling, those substances can be kept for a longer time. To meet different requirements of sterilization, warm and cooling technique, a mix of single, double or multi-segment system can be designed.',
            'With compact structure, it takes relatively small space. With flexible working flow, it is easy to operate and maintain. CIP system can also be added to it at the request of customer.',
          ],
          'layout' => 'hero-left-thumbs',
          'hero' => 'products/5.png',
          'thumbs' => [
            'products/7.png',
            'products/8.png',
            'products/9.png',
          ],
        ],

        // =========================
        // ✅ PRODUCT 4 - Pipe Sterilizer
        // =========================
        [
          'cat' => 'sterilizer',
          'title' => 'Pipe Sterilizer',
          'subtitle' => '管式灭菌器',
          'desc' => [
            'The whole set of tube-style sterilization machine is especially used for one-off sterilization of liquid substances such as milk, juice and drinks to make them last for a longer period through sterilization and cooling.',
            'In accordance with different requirements for heating, sterilization, heat preservation and cooling, the flow can be designed in combination, with various safety measures and high degree of automation for precise and stable control.',
          ],
          'layout' => 'hero-left-thumbs',
          'hero' => 'products/6.png',
          'thumbs' => [
            'products/a.png',
            'products/b.png',
            'products/c.png',
          ],
        ],

        // =========================
        // ✅ PRODUCT 5 - Pipeline & Preparation System
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Pipeline & Preparation System',
          'subtitle' => '管道及调配系统',
          'desc' => [
            'The pipeline and preparation system is designed for efficient liquid transfer, mixing, and formulation in beverage production lines.',
            'It integrates storage tanks, pipelines, pumps, and control units to ensure stable operation, accurate preparation, and hygienic processing.',
          ],
          'layout' => 'collage-4',
          'images' => [
            // 1 besar kiri + 3 kanan (kayak di PDF)
            ['src' => 'products/11.PNG', 'span' => 'col-span-2 row-span-2'],
            ['src' => 'products/12.PNG', 'span' => 'col-span-1 row-span-1'],
            ['src' => 'products/13.PNG', 'span' => 'col-span-1 row-span-1'],
            ['src' => 'products/14.PNG', 'span' => 'col-span-2 row-span-1'],
          ],
        ],

        // =========================
        // ✅ PRODUCT 6 - CIP Cleaning System
        // =========================
        [
          'cat' => 'cip',
          'title' => 'CIP Cleaning System',
          'subtitle' => 'CIP 清洗系统',
          'desc' => [
            'CIP cleaning system provides automatic cleaning for tanks, pipelines, and processing equipment without disassembly.',
            'It improves hygiene, reduces downtime, and supports food-grade sanitation requirements by controlling temperature, flow, and cleaning chemicals.',
          ],
          'layout' => 'hero-left',
          'hero' => 'products/15.PNG',
        ],

      ];

      $isAll = $active === 'all';
      $filtered = collect($items)->filter(fn($it) => $isAll || ($it['cat'] ?? '') === $active)->values();
    @endphp

    {{-- FULL WIDTH: brochure paper --}}
    <div class="mt-10">

      <div class="rounded-[28px] bg-white shadow-sm border border-slate-200 overflow-hidden">

        {{-- top brochure header bar --}}
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

        {{-- brochure body --}}
        <div class="px-8 pb-10 pt-8 space-y-12">

          @forelse($filtered as $it)

            @switch($it['layout'])

              {{-- ✅ Layout: text kiri + 2 images kanan --}}
              @case('text-2img-right')
                <article class="grid lg:grid-cols-[1fr_520px] gap-10 items-start">

                  {{-- LEFT: TEXT --}}
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

                  {{-- RIGHT: 2 IMAGES (RAPI & CENTER) --}}
                  <div class="grid grid-cols-2 gap-4">
                    @foreach(($it['images'] ?? []) as $img)
                      <div class="aspect-[4/3] rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                        <img
                          src="{{ asset($img) }}"
                          class="w-full h-full object-cover"
                          loading="lazy"
                        >
                      </div>
                    @endforeach
                  </div>

                </article>
              @break

              {{-- ✅ Layout: hero kiri + thumbnails kanan (opsional buat produk lain) --}}
              @case('hero-left-thumbs')
                @php
                  $hero = $it['hero'] ?? '';
                  $thumbs = $it['thumbs'] ?? [];
                @endphp
                <article class="grid lg:grid-cols-[520px_1fr] gap-8 items-start">
                  <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                    <div class="aspect-[4/3]">
                      <img src="{{ asset($hero) }}" class="w-full h-full object-contain" loading="lazy" onerror="this.style.display='none'">
                    </div>
                  </div>

                  <div>
                    <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                    @if(!empty($it['subtitle']))
                      <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                    @endif

                    <div class="mt-4">
                      <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                      <div class="mt-2 space-y-3 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['desc'] ?? []) as $p)
                          <p>{{ $p }}</p>
                        @endforeach
                      </div>
                    </div>

                    @if(!empty($thumbs))
                      <div class="mt-5 grid grid-cols-4 gap-3">
                        @foreach($thumbs as $t)
                          <div class="aspect-[4/3] rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset($t) }}" class="w-full h-full object-cover" loading="lazy" onerror="this.style.display='none'">
                          </div>
                        @endforeach
                      </div>
                    @endif
                  </div>
                </article>
              @break

              @default
                <div class="text-slate-600">Layout not defined.</div>
            @endswitch

            <div class="h-px bg-slate-200/70"></div>

          @empty
            <div class="py-10 text-center text-slate-600">
              No items found.
            </div>
          @endforelse

        </div>
      </div>

      {{-- bottom CTA --}}
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
</section>
@endsection
