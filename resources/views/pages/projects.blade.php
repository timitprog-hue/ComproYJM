@extends('layouts.app')
@section('title','Product — PT YJM')

@section('content')

<section class="relative overflow-hidden">
  {{-- background --}}
  <div class="absolute inset-0 bg-[#070D1F]"></div>

  {{-- glow --}}
  <div class="absolute -top-24 -right-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.18)] blur-3xl"></div>
  <div class="absolute top-40 -left-24 h-96 w-96 rounded-full bg-[rgba(30,64,255,.10)] blur-3xl"></div>

  <div class="container-yjm relative py-14 lg:py-16">

    {{-- page header --}}
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
      <div class="max-w-2xl">

        <h1 class="mt-4 text-3xl md:text-4xl font-extrabold tracking-tight text-white">
          Products & Packaging Solutions
        </h1>

        <p class="mt-3 text-white/75 leading-relaxed">
          Explore our packaging machine solutions by category. Select a category to filter the list.
          You can replace all images and titles with your own catalog items.
        </p>
      </div>

      {{-- small info --}}
      <div class="rounded-2xl bg-white/5 border border-white/10 px-5 py-4 text-sm text-white/75">
        <div class="font-extrabold text-white">Need a quotation?</div>
        <div class="mt-1">Send requirements & get recommendations.</div>
      </div>
    </div>

    @php
      $active = request('cat', 'all');

      $categories = [
        'all'    => 'All Products',
        'a'      => 'Water Treatment',
        'b'      => 'Water Filling Machine',
        'c'      => 'Juice Filling Machine',
        'd'      => 'Soft Drinks Filling Machine',
        'e'      => 'Can Filling Machine',
        'f'      => '5L/10L/5 Gallon Filling Machine',
        'g'      => 'Glass Bottle Filling Machine',
        'h'      => 'Edible Oil Filling Machine',
        'i'      => 'Blowing Moulding Machine',
        'j'      => 'Combiblock',
        'k'      => 'Pretreatment',
        'l'      => 'Labelling Machine',
        'm'      => 'Packaging Machine',
        'n'      => 'Palletizer',
      ];

      if (!array_key_exists($active, $categories)) $active = 'all';

      $products = [

        [
          'title'    => '250–300CPM Automatic Liquid Filling (Canned Water / Energy Drinks)',
          'category' => 'pretreatment',
          'image'    => 'products/250-300CPM Automatic Liquid Filling Drinks Canned Water Energy Drinks Can Filling Machine.png',
          'tag'      => 'Pre-treatment',
        ],

// Water Filling Machine
        [
          'title'    => '2000L/H Mineral Water Factory Plant Water Treatment Complete Reverse Osmosis System',
          'category' => 'a',
          'image'    => 'products/2000L H Mineral Water Factory Plant Water Treatment Complete Reverse Osmosis System.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => '5000l/H Reverse Osmosis Water Filter Ro Industrial Water Treatment Pure Water Machine',
          'category' => 'a',
          'image'    => 'products/5000l H Reverse Osmosis Water Filter Ro Industrial Water Treatment Pure Water Machine.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => '10000L/H Industrial Reverse Osmosis Water Filter System',
          'category' => 'a',
          'image'    => 'products/10000L H Industrial Reverse Osmosis Water Filter System.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => '15000L/H Commercial Drinkable Water Water Filter System Reverse Osmosis System Water Treatment Plant',
          'category' => 'a',
          'image'    => 'products/15000L H Commercial Drinkable Water Water Filter System Reverse Osmosis System Water Treatment Plant.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => '2000L/H Hollow Fiber Machine Ultrafiltration Water Purifiers',
          'category' => 'a',
          'image'    => 'products/2000L H Hollow Fiber Machine Ultrafiltration Water Purifiers.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => '5000L/H Water Treatment Ultrafiltration Fiter Plant Equipment Ultrafiltration (uf) System',
          'category' => 'a',
          'image'    => 'products/5000L H Water Treatment Ultrafiltration Fiter Plant Equipment Ultrafiltration (uf) System.png',
          'tag'      => 'Water Treatment',
        ],
        [
          'title'    => 'Water Treatment',
          'category' => 'a',
          'image'    => 'products/Water treatment.png',
          'tag'      => 'Water Treatment',
        ],

// Water Filling Machine
        [
          'title'    => '15000BPH Automatic Mineral Pure Water Filling Machinery Water Bottle Filling Machine',
          'category' => 'b',
          'image'    => 'products/15000BPH Automatic Mineral Pure Water Filling Machinery Water Bottle Filling Machine.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => '12000BPH Pure Mineral Water Automatic Water Bottle Filling and Capping Machine',
          'category' => 'b',
          'image'    => 'products/12000BPH Pure Mineral Water Automatic Water Bottle Filling and Capping Machine.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => '8000 BPH Pure Mineral Packaging Bottle Filling Machine Automatic',
          'category' => 'b',
          'image'    => 'products/8000 BPH Pure Mineral Packaging Bottle Filling Machine Automatic.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => '6000BPH Pure Mineral Automatic Packaging Water Bottle Filling Capping and Labeling Machine',
          'category' => 'b',
          'image'    => 'products/6000BPH Pure Mineral Automatic Packaging Water Bottle Filling Capping and Labeling Machine.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => '4000BPH Pure Mineral Pet Automatic Plastic Bottle Filling Machine',
          'category' => 'b',
          'image'    => 'products/4000BPH Pure Mineral Pet Automatic Plastic Bottle Filling Machine.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => '2000-3000 BPH Liquid Pure Mineral Pet Bottle Water Rinsing Filling Capping Machine',
          'category' => 'b',
          'image'    => 'products/2000-3000 BPH Liquid Pure Mineral Pet Bottle Water Rinsing Filling Capping Machine.png',
          'tag'      => 'Water Filling Machine',
        ],
        [
          'title'    => 'Water Filling Machine',
          'category' => 'b',
          'image'    => 'products/Water Filling Machine.png',
          'tag'      => 'Water Filling Machine',
        ],

// Juice Filling Machine
        [
          'title'    => '2000BPH Automatic Bottled Juice Small Juice Filling Capping Bottle Closing Machine',
          'category' => 'c',
          'image'    => 'products/2000BPH Automatic Bottled Juice Small Juice Filling Capping Bottle Closing Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '4000BPH Automatic Hot Fill Plastic Bottles Juice Filling and Capping Machine Filling Machines Juice',
          'category' => 'c',
          'image'    => 'products/4000BPH Automatic Hot Fill Plastic Bottles Juice Filling and Capping Machine Filling Machines Juice.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '6000BPH Automatic Bottled Fruit Juice Machine Packaging Machine',
          'category' => 'c',
          'image'    => 'products/4000BPH Automatic Hot Fill Plastic Bottles Juice Filling and Capping Machine Filling Machines Juice.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '8000BPH Automatic Juice Hot Fill mango Juice Packaging Machine Fruit Juice Filling Machine',
          'category' => 'c',
          'image'    => 'products/8000BPH Automatic Juice Hot Fill mango Juice Packaging Machine Fruit Juice Filling Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '12000BPH Automatic Full Bottled Juice Making Machine Sealing Machine Production Line Juice Production Machine',
          'category' => 'c',
          'image'    => 'products/12000BPH Automatic Full Bottled Juice Making Machine Sealing Machine Production Line Juice Production Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '15000BPH Automatic Fresh Fruit Juice Filling Sealing Line Machines Bottle Juice Filling Juice Machine',
          'category' => 'c',
          'image'    => 'products/15000BPH Automatic Fresh Fruit Juice Filling Sealing Line Machines Bottle Juice Filling Juice Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '20000BPH Automatic Bottled Juice Filling Machine Production Juice Filling and Sealing Machine',
          'category' => 'c',
          'image'    => 'products/20000BPH Automatic Bottled Juice Filling Machine Production Juice Filling and Sealing Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => '24000 BPH Automatic Fresh Juice Filling Bottle Closing Machine Juice Filling Machine',
          'category' => 'c',
          'image'    => 'products/4000BPH Automatic Hot Fill Plastic Bottles Juice Filling and Capping Machine Filling Machines Juice.png',
          'tag'      => 'Juice Filling Machine',
        ],
        [
          'title'    => 'Juice Filling Machine',
          'category' => 'c',
          'image'    => 'products/Juice Filling Machine.png',
          'tag'      => 'Juice Filling Machine',
        ],

// Soft Drinks Filling Machine
        [
          'title'    => '20000BPH Automatic Sparking Soft Drink Water Making Bottled Filling Sealing Soda Machine',
          'category' => 'd',
          'image'    => 'products/20000BPH Automatic Sparking Soft Drink Water Making Bottled Filling Sealing Soda Machine.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],
        [
          'title'    => 'a',
          'category' => 'd',
          'image'    => 'products/a.png',
          'tag'      => 'Soft Drinks Filling Machine',
        ],

// Can Filling Machine

// 5L/10L/5 Gallon Filling Machine

// Glass Bottle Filling Machine

// Edible Oil Filling Machine

// Blowing Moulding Machine

// Combiblock

// Pretreatment

// Labelling Machine
        [
          'title'    => '10000BPH Flat Square Bottle Labelling Machine',
          'category' => 'l',
          'image'    => 'products/10000BPH Flat square Bottle Labelling Machine.png',
          'tag'      => 'Labelling Machine',
        ],

// Packaging Filling Machine

// Palletizer

      ];

      $filtered = $active === 'all'
        ? $products
        : array_values(array_filter($products, fn($p) => $p['category'] === $active));
    @endphp

    {{-- content layout --}}
    <div class="mt-10 grid lg:grid-cols-[320px_1fr] gap-8 lg:gap-10">

      {{-- LEFT: category --}}
      <aside class="rounded-3xl bg-white/5 border border-white/10 overflow-hidden">
        <div class="px-6 py-5 border-b border-white/10">
          <div class="text-white font-extrabold">Categories</div>
          <div class="text-xs text-white/60 mt-1">Filter products by type</div>
        </div>

        <div class="p-3">
          @foreach($categories as $key => $label)
            <a
              href="{{ route('projects') }}?cat={{ $key }}"
              class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold
                     transition border
                     {{ $active === $key
                        ? 'bg-white/10 text-white border-white/15'
                        : 'bg-transparent text-white/80 border-transparent hover:bg-white/5 hover:border-white/10' }}"
            >
              <span>{{ $label }}</span>

              <span class="inline-flex items-center gap-2">
                <span class="h-2 w-2 rounded-full {{ $active === $key ? 'bg-[#1E40FF]' : 'bg-white/20' }}"></span>
              </span>
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
            Or WhatsApp: <a class="underline hover:text-white" target="_blank" href="https://wa.me/6285708095529">0857 0809 5529</a>
          </div>
        </div>
      </aside>

      {{-- RIGHT: product grid --}}
      <div>
        {{-- header strip --}}
        <div class="flex items-center justify-between gap-4">
          <div>
            <div class="text-xs font-extrabold tracking-[0.25em] uppercase text-white/70">Product List</div>
            <div class="mt-2 text-xl font-extrabold text-white">
              {{ $categories[$active] ?? 'Products' }}
            </div>
          </div>

          <div class="hidden sm:flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-4 py-2 text-xs text-white/70">
            <span class="font-bold text-white">{{ count($filtered) }}</span> items shown
          </div>
        </div>

        <div class="mt-6 h-px bg-white/10"></div>

        <div class="mt-8 grid sm:grid-cols-2 xl:grid-cols-3 gap-6">
          @forelse($filtered as $p)
            <a href="{{ route('contact') }}"
               class="group block rounded-3xl bg-white/5 border border-white/10 overflow-hidden
                      hover:bg-white/10 hover:border-white/15 transition">
              {{-- image --}}
              <div class="bg-[#0B122A] p-4">
                <div class="aspect-[4/3] rounded-2xl bg-black/10 border border-white/10 flex items-center justify-center overflow-hidden">
                  <img
                    src="{{ asset($p['image']) }}"
                    alt="{{ $p['title'] }}"
                    class="w-full h-full object-contain p-4 group-hover:scale-[1.02] transition"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='{{ asset('products/placeholder.jpg') }}';"
                  >
                </div>
              </div>

              {{-- content --}}
              <div class="px-5 pb-5">
                <div class="mt-4 inline-flex items-center rounded-full bg-[#1E40FF]/20 text-white px-3 py-1 text-xs font-bold border border-white/10">
                  {{ $p['tag'] ?? 'Product' }}
                </div>

                <div class="mt-3 text-white font-extrabold leading-snug">
                  {{ $p['title'] }}
                </div>

                <div class="mt-2 text-sm text-white/70 leading-relaxed">
                  Click to request details, specification, and quotation.
                </div>

                <div class="mt-4 inline-flex items-center gap-2 text-sm font-extrabold text-white">
                  Request Quote <span class="opacity-70 group-hover:translate-x-0.5 transition">→</span>
                </div>
              </div>
            </a>
          @empty
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 text-white/70">
              No products found in this category.
            </div>
          @endforelse
        </div>

        {{-- bottom cta --}}
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
