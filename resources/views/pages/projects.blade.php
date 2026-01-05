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

        <a href="{{ asset('pdf/YJM ZPACK 08112025.pdf') }}"
           target="_blank"
           class="block rounded-2xl bg-white/5 border border-white/10 px-5 py-4 text-sm text-white/75
                  hover:bg-white/10 hover:border-white/20 transition">
          <div class="font-extrabold text-white flex items-center gap-2">
            <span>📄</span>
            <span>Download (YJM ZPACK)</span>
          </div>
          <div class="mt-1">Click to open / download.</div>
        </a>
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
            ['src' => 'products/15.PNG', 'span' => 'col-span-2 row-span-2'],
            ['src' => 'products/16.PNG', 'span' => 'col-span-1 row-span-1'],
            ['src' => 'products/17.PNG', 'span' => 'col-span-1 row-span-1'],
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
          'hero' => 'products/19.PNG',
        ],

        // =========================
        // ✅ PRODUCT 7 - Inverse Sterilizer Machine
        // =========================
        [
          'cat' => 'sterilizer',
          'title' => 'Inverse Sterilizer Machine',
          'subtitle' => '倒瓶杀菌机',
          'desc' => [
            'It is mainly used for sterilizing PET bottle mouth and inner cap surface, especially for hot-filled beverages.',
            'The system usually includes conveyor chain, bottle reversing chain system, reversing guiding rod, and bottle repositioning unit.',
            'It uses internal thermal medium to disinfect bottle mouth and caps without additional heat sources, saving energy and ensuring stable sterilization.',
            'Production capacity: 5,000–36,000 bottles/hour. Sterilizing time: about 15–40 seconds.',
          ],
          'layout' => 'collage-hero-2',
          'images' => [
            // ✅ 1 gambar besar atas (span 2 kolom)
            ['src' => 'products/20.png', 'span' => 'col-span-2 row-span-2'],
            // ✅ 2 gambar kecil bawah
            ['src' => 'products/21.png', 'span' => 'col-span-1 row-span-1'],
            ['src' => 'products/22.png', 'span' => 'col-span-1 row-span-1'],
          ],
        ],

        // =========================
        // ✅ PRODUCT 8 - Spray Cooling Tunnel
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Spray Cooling Tunnel',
          'subtitle' => '喷淋冷却隧道',
          'desc' => [
            'The machine can reduce the temperature of hot filling drinks to 36–40℃.',
            'It is used in heat-resistant PET bottle tea beverage, hot filling, PET bottle carbonated drink filling production line.',
            'Productivity: 5,000–36,000 bottles/hour. Spray time: about 15–20 minutes.',
          ],
          'layout' => 'hero-top-spec-table',
          'hero' => 'products/23.png',

          // ✅ kalau tabel mau kamu tulis manual dulu (nanti bisa rapihin)
          'spec' => [
            ['label' => 'Model', 'v1' => 'PLJ-1000', 'v2' => 'PLJ-2000', 'v3' => 'PLJ-3000', 'v4' => 'PLJ-5000'],
            ['label' => 'Max. sterilizing temperature (℃)', 'v1' => '100', 'v2' => '100', 'v3' => '100', 'v4' => '100'],
            ['label' => 'Width of sterilization transferring belt (mm)', 'v1' => '1500', 'v2' => '1500', 'v3' => '1500', 'v4' => '1500'],
            ['label' => 'Transferring belt speed (m/min)', 'v1' => '110–553 (Stepless)', 'v2' => '110–553 (Stepless)', 'v3' => '110–553 (Stepless)', 'v4' => '110–553 (Stepless)'],
            ['label' => 'Heating steam pressure (MPa)', 'v1' => '0.4', 'v2' => '0.4', 'v3' => '0.4', 'v4' => '0.4'],
          ],
        ],

        // =========================
        // ✅ PRODUCT 9 - Blowing Filling Capping Combiblock Machine
        // =========================
        [
          'cat' => 'pipeline',
          'title' => 'Blowing Filling Capping Combiblock Machine',
          'subtitle' => '吹灌旋一体设备',
          'desc' => [
            'This machine integrates three processes: blowing, filling, and capping, turning PET preforms into finished bottled products in one line.',
            'With large-plate main structure, independent filling space, and clean air filtration, it provides a sanitary and safe operating environment.',
            'Stable transmission reduces transfer errors and bottle jamming. Designed and manufactured to EU CE standards, ensuring quality and safety.',
            'Suitable for PET bottles of various shapes, widely used for pure water, mineral water, tea, juice, milk drinks, energy drinks, and pulp beverages.',
          ],
          'layout' => 'hero-left-3thumbs-spec',

          // hero besar kiri (gambar mesin panjang)
          'hero' => 'products/24.png',

          // 3 gambar kecil bawah kiri
          'thumbs' => [
            'products/25.png',
            'products/26.png',
            'products/27.png',
          ],

          // tabel bawah
          'spec_cols' => ['6-24-6','8-32-8','10-40-10','12-50-12','14-60-15','16-70-16','20-80-18'],
          'spec_rows' => [
            ['label' => 'Blowing Molds (Pcs)',       'vals' => ['6','8','10','12','14','16','20']],
            ['label' => 'Filling Heads (Pcs)',      'vals' => ['24','32','40','50','60','70','80']],
            ['label' => 'Capping Heads (Pcs)',      'vals' => ['6','8','10','12','15','16','18']],
            ['label' => 'Production Capacity (BPH)','vals' => ['12000','16000','20000','24000','30000','36000','42000']],
          ],
        ],

        // =========================
        // ✅ PRODUCT 10 - Ultra Clean (Medium Temperature) Filling Production Line
        // =========================
        [
          'cat' => 'pipeline',
          'title' => 'Ultra Clean (Medium Temperature) Filling Production Line',
          'subtitle' => '超洁净（中温）灌装生产线',
          'layout' => 'hero-top-right-features-bottom-3',

          // hero besar atas
          'hero' => 'products/30.png',

          // teks features (kanan)
          'desc' => [
            'Applicable product: juice, NFC freshly squeezed juice, tea, protein drinks, etc.',
            'Applicable container: PET bottle.',
            'Filling principle: gravity filling, micro negative pressure filling, weighing filling, flow meter filling.',
            'Filling temperature: 68~72℃, 4~6℃.',
            'Production capacity: 6000~36000 BPH.',
          ],

          // 2 gambar bawah kiri
          'bottom_left' => [
            'products/31.png',
            'products/32.png',
          ],

          // 1 gambar bawah kanan (bottles/applications)
          'bottom_right' => 'products/33.png',
        ],

        // =========================
        // ✅ PRODUCT 11 - 3-18L Large Bottle Water Washing, Filling, Capping 3-in-1 Monobloc (Linear Type)
        // =========================
        [
          'cat' => 'pipeline',
          'title' => '3-18L Large Bottle Water Washing, Filling, Capping 3-in-1 Monobloc (Linear Type)',
          'subtitle' => '大瓶水（3-18L）冲洗、灌装、封口三合一机（直线式）',
          'layout' => 'hero-wide-right-stack',

          // hero besar (mesin panjang)
          'hero' => 'products/40.png',

          // 3 foto kecil kanan (stack)
          'stack' => [
            'products/41.png',
          ],

          // gambar botol kanan bawah
          'app' => 'products/44.png',

          // deskripsi bawah (ringkas sesuai PDF)
          'desc' => [
            'This production line adopts advanced conveying and automation technology to achieve fully automatic bottle washing, filling, and capping with high stability and efficiency.',
            'Most electrical parts use high-quality components, and all liquid-contact parts are made of stainless steel for hygiene, durability, and low failure rate.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 12 - QGF Series 3 / 5 Gallon Barrel Water Filling Line
        // =========================
        [
          'cat' => 'pipeline',
          'title' => 'QGF Series 3 / 5 Gallon Barrel Water Filling Line',
          'subtitle' => 'QGF 系列全自动桶装水灌装线',
          'layout' => 'collage-4-free',

          // 4 gambar sesuai komposisi PDF
          'collage' => [
            // kiri atas (kecil)
            ['src' => 'products/50.png', 'span' => 'lg:col-span-4'],

            // kanan atas (panjang)
            ['src' => 'products/51.png', 'span' => 'lg:col-span-8'],

            // kiri bawah (panjang)
            ['src' => 'products/52.png', 'span' => 'lg:col-span-8'],

            // kanan bawah (sedang)
            ['src' => 'products/53.png', 'span' => 'lg:col-span-4'],
          ],

          // optional: caption kalau mau (boleh dikosongin)
          'captions' => [
            '5 Gallon Palletizer',
            'Full Automatic Filling Machine',
            '5 Gallon Filling Machine',
            'Automatic Bagging Machine',
          ],
        ],

        // =========================
        // ✅ PRODUCT 13 - Washing, Hot Filling, Capping 3-in-1 Monobloc (PET Bottle)
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Washing, Hot Filling, Capping 3-in-1 Monobloc (PET Bottle)',
          'subtitle' => '冲洗、热灌装、封口三合一机（PET瓶）',
          'layout' => 'hero-left-3stack',

          // gambar besar kiri
          'hero' => 'products/60.png',

          // 3 gambar kanan (stack)
          'stack' => [
            'products/61.png',
            'products/63.png',
          ],

          // teks “Using Range” (ringkas versi Inggris)
          'range' => [
            'Products: fruit juice, tea drinks, energy drinks, etc.',
            'Volume: 330–4000 ml.',
            'Production capacity: 3000–36000 BPH (500 ml).',
            'Bottle neck: 28 mm / 38 mm.',
            'Filling method: pressure filling.',
            'Filling temperature: 85–90°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 14 - Pulp Filling 3-in-1 Monobloc
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Pulp Filling 3-in-1 Monobloc',
          'subtitle' => '果肉灌装三合一机',
          'layout' => 'hero-left-right-mini-range',

          // hero besar kiri
          'hero' => 'products/70.png',

          // kanan atas (2 kecil)
          'mini' => [
            'products/71.png', // contoh: botol/minuman
            'products/72.png', // contoh: closeup mesin/valve
          ],

          // Using Range (sesuai PDF)
          'range' => [
            'Products: fruit, juice, tea drinks, energy drinks, etc.',
            'Volume: 330–4000 ml.',
            'Production capacity: 3000–36000 BPH (500 ml).',
            'Dia. of bottle neck: 28 mm / 38 mm.',
            'Filling method: gravity filling.',
            'Filling temperature: 85–90°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 15 - Washing, Hot Filling, Capping 3-in-1 Monobloc (Glass Bottle)
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Washing, Hot Filling, Capping 3-in-1 Monobloc (Glass Bottle)',
          'subtitle' => '冲洗、热灌装、封口三合一机（玻璃瓶）',
          'layout' => 'hero-left-3thumbs-right-2mini-range',

          // hero besar kiri
          'hero' => 'products/80.png',

          // 3 thumbs bawah kiri + caption
          'thumb_cards' => [
            [
              'src' => 'products/81.png',
              'label' => 'Three / Four Screw Cap',
            ],
            [
              'src' => 'products/82.png',
              'label' => 'Aluminum Screw Cap',
            ],
            [
              'src' => 'products/83.png',
              'label' => 'Crown Cap',
            ],
          ],

          // kanan atas 2 gambar kecil
          'mini' => [
            'products/85.png', // botol minuman
          ],

          // Using Range (sesuai PDF)
          'range' => [
            'Products: fruit juices, coffee drinks, protein drinks, etc.',
            'Volume: 100–1000 ml.',
            'Production capacity: 5000–36000 BPH (500 ml).',
            'Filling method: pressure filling.',
            'Filling temperature: 85–90°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 16 - Washing, Carbonated & Beer Filling, Capping 3-in-1 Monobloc
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Washing, Carbonated & Beer Filling, Capping 3-in-1 Monobloc',
          'subtitle' => '冲洗、汽水/啤酒灌装、封口三合一机',
          'layout' => 'hero-left-3thumbs-right-range',

          // hero kiri
          'hero' => 'products/90.png',

          // 3 gambar kecil bawah
          'thumbs' => [
            'products/91.png',
            'products/92.png',
            'products/93.png',
          ],

          // gambar produk kanan atas
          'product_img' => 'products/94.png',

          // Using Range (diambil dari PDF)
          'range' => [
            'Product: carbonated soft drink.',
            'Volume: 330–4000 ml.',
            'Production capacity: 3000–36000 BPH (500 ml).',
            'Bottle neck: 28 mm / 38 mm.',
            'Filling method: counter-pressure filling.',
            'Filling temperature: 0–4°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 17 - Non-carbonated Cans Filling Production Line
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Non-carbonated Tea, Juice, Protein Beverage Cans Filling And Packing Production Line',
          'subtitle' => '不含气茶、果汁、蛋白饮料易拉罐灌装包装生产线',
          'layout' => 'hero-left-right-stack-range',

          // hero kiri
          'hero' => 'products/100.png',

          // gambar kanan (atas ke bawah)
          'right_images' => [
          ],

          // produk kaleng
          'product_img' => 'products/103.png',

          // Using Range (diambil dari PDF)
          'range' => [
            'Products: fruit juices, coffee drinks, protein drinks.',
            'Volume: 150–500 ml.',
            'Production capacity: 9000–30000 cans/h.',
            'Can type: 200 / 202 / 206 / 209.',
            'Filling method: gravity filling.',
            'Filling temperature: 85–90°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 18 - Carbonated Soft Drinks Cans Filling, Capping Integrated Machine
        // =========================
        [
          'cat' => 'beverage',
          'title' => 'Carbonated Soft Drinks Cans Filling, Capping Integrated Machine',
          'subtitle' => '易拉罐含气饮料灌装、封盖二合一机',
          'layout' => 'hero-left-right-stack-range',

          // hero kiri (mesin utama)
          'hero' => 'products/104.png',

          // gambar kanan (atas)
          'right_images' => [
            'products/105.png',
          ],

          // produk kaleng (kanan bawah)

          // Using Range (EN di PDF)
          'range' => [
            'Product: carbonated soft drink.',
            'Volume: 150–500 ml.',
            'Production capacity: 9000–30000 cans/h.',
            'Can type: 200 / 202 / 206 / 209.',
            'Filling method: counter-pressure filling.',
            'Filling temperature: 0–4°C.',
          ],
        ],

        // =========================
        // ✅ PRODUCT 19 - Drinks Mixer
        // =========================
        [
          'cat' => 'other',
          'title' => 'Drinks Mixer',
          'subtitle' => '饮料混合机',
          'layout' => 'triple-hero-features',

          // 3 gambar atas (sejajar)
          'top_images' => [
            'products/107.png',
            'products/108.png',
            'products/109.png',
          ],

          'desc' => [
            'Drink mixer adopts special mixed gas and liquid injector and the technique of vacuum deoxidation, drink mixer blends water, syrup and CO₂ together. The mixing precision is high and the CO₂ is fully mixed.',
            'The mixing proportion between water and syrup is seriously controlled by micro metering device. It is equipped with CO₂ accuracy pressure control, so that the liquid level is always stable.',
            'The alarm device for low pressure and low liquid level ensures the quality of its production. The machine obtains advantages of high reliability, high efficiency, high grade of automation and easy operation.',
          ],

          // technical parameters (skip dulu)
          // 'params' => [],
        ],

        // =========================
        // ✅ PRODUCT 20 - Unscramble Bottle Machine
        // =========================
        [
          'cat' => 'ancillary',
          'title' => 'Unscramble Bottle Machine',
          'subtitle' => '理瓶机',
          'desc' => [
            'Unscramble the plastic bottles, then transfer them to the conveyor in correct direction and feed them into other equipment (such as rinsing and filling).',
            'It reduces labor intensity, improves productivity, and helps avoid secondary contamination caused by hand contact with PET bottles.',
          ],
          'layout' => 'hero-left-specs',
          'hero' => 'products/20a.png', // <-- ganti sesuai file kamu
          'specs' => [
            ['Model', 'PLP-200A'],
            ['Production capacity', '8000 bottles/h (500ml)'],
            ['Bottle type', 'Round or square shaped bottle'],
            ['Bottle diameter (mm)', 'Φ50–Φ90'],
            ['Height (mm)', '150–310'],
            ['Total power (kW)', '3.6'],
            ['Air source pressure (MPa)', '5'],
            ['Overall size L×W×H (mm)', '2300×2210×2300'],
            ['Total weight (kg)', '3500'],
          ],
        ],

        // =========================
        // ✅ PRODUCT 21 - Code Printer
        // =========================
        [
          'cat' => 'ancillary',
          'title' => 'Code Printer',
          'subtitle' => '喷码机',
          'desc' => [
            'Industrial coding printer for production lines, suitable for printing batch code, date code, and traceability information on various packaging materials.',
          ],
          'layout' => 'text-2img-right',
          'images' => [
            'products/21a.png', // Laser Code Printer (ganti sesuai file)
            'products/21b.png', // Ink Code Printer (ganti sesuai file)
          ],
          'specs' => [
            ['Print lines', '1–4 lines (adjustable font size)'],
            ['Coding speed', '100 m/min (line speed: 30 m/min)'],
            ['Ink capacity', '125 ml'],
            ['Printing output', 'Up to 30 million characters (3 mm height)'],
            ['Memory', 'Stores 100 sets of settings'],
            ['Materials', 'Metal, glass, paper, and other packaging materials'],
          ],
        ],

        // =========================
        // ✅ PRODUCT 22 - Labeling Machine
        // =========================
        [
          'cat' => 'ancillary',
          'title' => 'Labeling Machine',
          'subtitle' => '标签机',
          'desc' => [
            'Labeling machines are designed for accurate and efficient labeling of bottles in beverage production lines.',
            'Available in multiple configurations including sleeve labeling, self-adhesive labeling, OPP hot glue labeling, and paste labeling to suit different bottle types and production requirements.',
          ],
          'layout' => 'grid-4',
          'images' => [
            'products/110.png',
            'products/111.png',
            'products/112.png',
            'products/113.png',
          ],
        ],

        [
          'cat' => 'other',
          'title' => '',
          'subtitle' => '',
          'layout' => 'dual-vertical-spec',

          'products' => [
            [
              'name' => 'ZP-250A Linear Shrink Wrapping Machine',
              'image' => 'products/114.png',
            ],
            [
              'name' => 'ZP-350A High Speed Shrink Wrapping Machine',
              'image' => 'products/115.png',
            ],
          ],

          'specs' => [
            ['label' => 'Overall dimensions (mm)', 'zp250a' => 'L12000×W1100×H2100', 'zp350a' => 'L12000×W1100×H2100'],
            ['label' => 'Machine weight (kg)',     'zp250a' => '2000',               'zp350a' => '2500'],
            ['label' => 'Packing speed (pcs/min)', 'zp250a' => '15–20',              'zp350a' => '25–30'],
            ['label' => 'Machine power (kW)',      'zp250a' => '30',                 'zp350a' => '45'],
          ],
        ],

        [
          'cat' => 'pipeline', // atau 'all' / sesuaikan kategori kamu
          'title' => 'Carton Packaging Machine',
          'subtitle' => '纸箱包装机',

          // kiri & kanan (deskripsi)
          'desc_cn' => [
            '本机采用落差式装箱，为瓶装类产品自动装箱设计，机器快速、稳定，简单，兼容性强适合不同规格不同排列产品使用。本机适用于矿泉水、饮料、啤酒、白酒、输液药瓶。',
          ],
          'desc_en' => [
            'This machine adopts drop type packing, and is especially designed for automatic packing of bottle products.',
            'The machine is fast, stable, simple and compatible with different specifications and different arrangement products.',
            'This machine is suitable for mineral water, beverage, beer, liquor, infusion medicine bottle.',
          ],

          // assets
          'layout' => 'carton-packaging',
          'hero' => 'products/116.png',      // gambar mesin besar kiri
          'boxes' => [                               // 4 box kecil kanan (2x2)
            'products/117.png',
          ],
          'process' => 'products/118.png' // gambar process (border biru) bawah
        ],

        [
          'cat' => 'pipeline', // atau 'all' / sesuaikan kategori
          'title' => 'Palletizer',
          'subtitle' => '码垛机',

          'layout' => 'palletizer-hero-right3',

          // gambar
          'hero' => 'products/119.png',
          'right_imgs' => [
            'products/120.png',
            'products/121.png',
          ],

          // fitur CN (sesuai PDF: bullet merah)
          'features_cn' => [
            '采用侧进箱方式，占地面积小，简化码垛机前的输送系统，整机比机器人码垛总成本节省30%以上。',
            '低位码垛式，业界先进逐层式码垛设计理念，结构更先进，动作更轻便平稳，功耗也较小。',
            '采用PLC程序控制，及变频调速，纸箱输送、排序、堆垛、卸垛板、夹紧输出等可自动化实现。',
            '整机安全性极高及强大的诊断功能，多项安全设计及故障即时显示功能，保障人身安全，维修的快捷和简单。',
            '堆垛方式的调整方便、简单，可在人机界面上进行，故障无需更换堆垛零件即可完成几种堆垛方式。',
            '可实现纸箱码垛或收缩膜包装产品的码垛。',
          ],

          // fitur EN (sesuai PDF)
          'features_en' => [
            'The side box mode is adopted, the area is small, the conveying system in front of the palletizer is simplified, and the total cost of the whole machine is more than 30% less than that of the robot palletizing.',
            'Low-position palletizing, the industry advanced layer-by-layer palletizing design concept, more advanced structure, lighter and more stable action, less power consumption.',
            'Adopting PLC program control and frequency conversion speed regulation, carton transportation, sorting, stacking, unloading pallet, solid stack output can be realized automatically.',
            'The machine has extremely high safety and powerful diagnosis function, a number of safety design and fault real-time display function, to ensure personal safety, fast and simple maintenance.',
            'The adjustment of the stacking mode is convenient and simple, and can be carried out on the man-machine interface. Several stacking methods can be completed without replacing stacking parts.',
            'It can realize the palletizing of carton palletizing or shrink film packing products.',
          ],
        ],

        [
          'cat' => 'other', // sesuaikan kategori kamu
          'title' => 'Robot Palletizer',
          'subtitle' => '机器人码垛机',

          'layout' => 'robot-palletizer-left-params',

          'hero' => 'products/122.png',

          // EN bullet (Product Features) - sesuai PDF
          'features_en' => [
            'Touch screen operation is used to realize man-machine dialogue, which can display the production speed, fault cause and location, and has a high degree of automation. PLC can be programmed to control the sorting and stacking layers of cartons, pallet supply and discharge.',
            'The adjustment of the stacking method is convenient and simple, and can be carried out on the touch screen.',
            'The carton supply system adopts brake motor control to ensure that cartons are transported in predetermined positions.',
            'The pallet warehouse has a large capacity and can accommodate 8-10 empty pallets, allowing automatic pallet supply.',
          ],

          // Technical Parameters (table) - sesuai PDF
          'params' => [
            ['label' => 'Model',              'value' => 'ZPMD-05'],
            ['label' => 'Power',              'value' => '380V, 50/60Hz, 12KW'],
            ['label' => 'Palletizing height',  'value' => 'below 2000mm, can also be customized'],
            ['label' => 'Payload',            'value' => '80-700kg (select the appropriate model of robot)'],
            ['label' => 'Applicable product', 'value' => 'products packed in cartons, plastic frames, bags, plastic films, and barrels'],
            ['label' => 'Palletizing speed',  'value' => '10-40 cartons/min; 10-40 beats/min'],
            ['label' => 'Applicable pallet',  'value' => 'customizable'],
            ['label' => 'Crawling mode',      'value' => 'single package/multiple package'],
            ['label' => 'Using air source',   'value' => '6-7kg'],
            ['label' => 'Working radius',     'value' => '800-3150mm'],
          ],
        ],

        [
          'cat' => 'other',
          'title' => 'Online Winding Machine',
          'subtitle' => '在线式缠绕机',

          'layout' => 'online-winding-left-params',

          'hero' => 'products/123.png',

          // EN (Product Features) - sesuai PDF
          'features_en' => [
            'The membrane frame is a pure cast aluminum membrane frame, which is light and stable. Adopting wear-resistant rollers for long service life. Film frame dynamic pre-stretching mechanism, pre-stretching can reach 250%. The film frame ascending and descending speed and film feeding speed can be adjusted. The number of top and bottom windings is controlled separately.',
            'Membrane system follow-up mechanism, a pull can be. Lifting column is double chain structure, stable and reliable.',
            'Just press the automatic operation button to complete the entire packaging process, and switch automatically and manually at any time. PLC is programmable control, and the number of winding layers, over-the-top height, and reinforcement layers can be set directly on the panel. Photoelectric switch automatically senses the height of goods. Select electrical control components for high reliability.',
          ],

          // TECHNICAL PARAMETERS - sesuai tabel PDF
          'params' => [
            ['label' => 'Wrapping specifications', 'value' => '(500-1200)×(500-1200)mm'],
            ['label' => 'Packaging height',       'value' => '1800mm'],
            ['label' => 'Turntable size',         'value' => '1800×625mm'],
            ['label' => 'Turntable speed',        'value' => '0~15rpm'],
            ['label' => 'Membrane frame mechanism','value' => 'pre-tensioning mechanism'],
            ['label' => 'Packaging material',     'value' => 'LLDPE'],
          ],
        ],

        [
          'cat' => 'other',
          'layout' => 'conveying-belt-air-conveyor',

          // LEFT
          'left_title' => 'Bottles Conveying Belt',
          'left_subtitle' => '实瓶输送',
          'left_images' => [
            'products/125.png', // foto besar atas kiri
            'products/126.png', // foto kecil atas kanan (yang biru)
            'products/127.png', // tengah kiri
            'products/128.png', // tengah kanan
            'products/129.png', // bawah kiri
          ],

          // RIGHT
          'right_title' => 'PET Empty Bottles Air Conveyor',
          'right_subtitle' => 'PET空瓶气流输送线',

          // EN paragraph (Product Features)
          'right_en' => 'This conveyor line, using the airflow generated by the fan on the air conveyor, is able to flexibly make a turn, climb and decline. With various air opening, wind power is more focused, and wind pressure is more stable. The guardrail controlled by cylinder is degreed into large, middle and small, it is labor-saving while changing bottle type. Power of fan is 2.2-3kw, and airflow rate is 2500m3/h. At the same time when PLC controls fan transducer, it can automatically change input air and wind pressure to reach the control of conveying speed, and reduce blocking bottles and scratching.',

          // foto besar bawah kanan
          'right_image' => 'products/124.png',
        ],

        [
          'layout' => 'closing',

          'icons' => [
            ['img' => 'products/130.png', 'cn' => '小瓶饮用水灌装生产线', 'en' => 'Small Bottle Drinking Water<br>Filling Production Line'],
            ['img' => 'products/131.png', 'cn' => '桶装纯净水灌装生产线', 'en' => 'Barreled Drinking Water<br>Filling Production Line'],
            ['img' => 'products/132.png', 'cn' => '含气饮料灌装生产线', 'en' => 'Carbonated Beverage<br>Filling Production Line'],
            ['img' => 'products/133.png', 'cn' => '果汁热灌装生产线', 'en' => 'Juice/Pulp Hot Filling<br>Production Line'],
            ['img' => 'products/134.png', 'cn' => '玻璃瓶灌装生产线', 'en' => 'Glass Bottle Filling<br>Production Line'],
            ['img' => 'products/135.png', 'cn' => '食用油灌装生产线', 'en' => 'Edible Oil Filling<br>Production Line'],
            ['img' => 'products/136.png', 'cn' => '易拉罐灌装生产线', 'en' => 'Pop-top Can Filling<br>Production Line'],
          ],

          'office_title' => 'Our Office in Indonesia:',
          'company' => 'PT Yoewono Jaya Mandiri',
          'address' => 'Jl Raya jemursari no 76, blok C no 32, Jemur Wonosari, Surabaya - 60237',
          'email' => 'yjm.marketing62@gmail.com',
          'wa' => '+62 857 0809 5529',
          'tel' => '+6231 8479999',

          // optional logo (kalau sudah ada)
          'logo' => 'logoo.png',
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

            @case('closing')
            <section class="min-h-[70vh] flex flex-col">

              {{-- ICON ROW --}}
              <div class="flex-1 flex items-center justify-center">
                <div class="w-full max-w-5xl">
                  <div class="grid grid-cols-7 gap-6 items-end justify-items-center">
                    @foreach(($it['icons'] ?? []) as $ic)
                      <div class="text-center">
                        <img src="{{ asset($ic['img']) }}" class="h-28 mx-auto" alt="">
                        <div class="mt-3 text-[11px] leading-tight text-slate-800 font-semibold">
                          {{ $ic['cn'] }}
                        </div>
                        <div class="text-[10px] leading-tight text-slate-600"
                             style="font-family: Arial, sans-serif">
                          {!! $ic['en'] !!}
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>

            </section>
            @break

            @case('conveying-belt-air-conveyor')
            <article class="space-y-6">

              <div class="grid lg:grid-cols-2 gap-8 items-start">

                {{-- LEFT COLUMN --}}
                <section>
                  <h2 class="text-2xl font-extrabold text-red-600">{{ $it['left_title'] }}</h2>
                  <div class="mt-1 text-slate-700 font-semibold">{{ $it['left_subtitle'] }}</div>

                  @php $L = $it['left_images'] ?? []; @endphp

                  <div class="mt-5 grid grid-cols-2 gap-4">
                    {{-- top row --}}
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[4/3]">
                        <img src="{{ asset($L[0] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[4/3]">
                        <img src="{{ asset($L[1] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>

                    {{-- middle row --}}
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[4/3]">
                        <img src="{{ asset($L[2] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[4/3]">
                        <img src="{{ asset($L[3] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>

                    {{-- bottom row --}}
                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[4/3]">
                        <img src="{{ asset($L[4] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>
                  </div>
                </section>

                {{-- RIGHT COLUMN --}}
                <section>
                  <h2 class="text-3xl font-extrabold text-red-600">{{ $it['right_title'] }}</h2>
                  <div class="mt-1 text-slate-700 font-semibold">{{ $it['right_subtitle'] }}</div>

                  <div class="mt-4 space-y-4">
                    <div>
                      <p class="text-sm text-slate-700 leading-relaxed">
                        {{ $it['right_cn'] ?? '' }}
                      </p>
                    </div>

                    <div>
                      <div class="text-sm font-extrabold text-slate-900 mb-2">Product Features</div>
                      <p class="text-sm text-slate-700 leading-relaxed">
                        {{ $it['right_en'] ?? '' }}
                      </p>
                    </div>

                    <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[16/9]">
                        <img src="{{ asset($it['right_image'] ?? '') }}" class="w-full h-full object-cover" loading="lazy">
                      </div>
                    </div>
                  </div>
                </section>

              </div>
            </article>
            @break

            @case('online-winding-left-params')
              @php $hero = $it['hero'] ?? ''; @endphp

              <article class="space-y-6">

                {{-- Title --}}
                <div>
                  <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                  @if(!empty($it['subtitle']))
                    <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                  @endif
                </div>

                <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-10 items-start">

                  {{-- LEFT: big image --}}
                  <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                    <div class="aspect-[4/3]">
                      <img src="{{ asset($hero) }}" class="w-full h-full object-contain p-6" loading="lazy">
                    </div>
                  </div>

                  {{-- RIGHT: bullets + params --}}
                  <div class="space-y-5">

                    {{-- CN --}}
                    <div>
                      <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['features_cn'] ?? []) as $p)
                          <li class="flex gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                            <span>{{ $p }}</span>
                          </li>
                        @endforeach
                      </ul>
                    </div>

                    {{-- EN --}}
                    <div>
                      <div class="text-sm font-extrabold text-slate-900 mb-2">Product Features</div>
                      <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['features_en'] ?? []) as $p)
                          <li class="flex gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                            <span>{{ $p }}</span>
                          </li>
                        @endforeach
                      </ul>
                    </div>

                    {{-- TECH PARAMS --}}
                    <div class="rounded-2xl border border-slate-200 overflow-hidden bg-white">
                      <div class="bg-red-600 text-white px-4 py-2 text-xs font-extrabold tracking-wide">
                        技术参数 &nbsp; TECHNICAL PARAMETERS
                      </div>

                      <table class="w-full text-sm">
                        <tbody class="divide-y divide-slate-200">
                          @foreach(($it['params'] ?? []) as $row)
                            <tr class="align-top">
                              <td class="w-[48%] px-4 py-2 text-slate-600 font-semibold">
                                {{ $row['label'] ?? '' }}
                              </td>
                              <td class="px-4 py-2 text-slate-800">
                                {{ $row['value'] ?? '' }}
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

              </article>
            @break

            @case('robot-palletizer-left-params')
              @php
                $hero = $it['hero'] ?? '';
              @endphp

              <article class="space-y-6">

                {{-- Title --}}
                <div>
                  <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                  @if(!empty($it['subtitle']))
                    <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                  @endif
                </div>

                {{-- Main: left hero, right content --}}
                <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-10 items-start">

                  {{-- LEFT: big image --}}
                  <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                    <div class="aspect-[3/4]">
                      <img src="{{ asset($hero) }}" class="w-full h-full object-cover" loading="lazy">
                    </div>
                  </div>

                  {{-- RIGHT: features + params --}}
                  <div class="space-y-5">

                    {{-- CN --}}
                    <div>
                      <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['features_cn'] ?? []) as $p)
                          <li class="flex gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                            <span>{{ $p }}</span>
                          </li>
                        @endforeach
                      </ul>
                    </div>

                    {{-- EN --}}
                    <div>
                      <div class="text-sm font-extrabold text-slate-900 mb-2">Product Features</div>
                      <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['features_en'] ?? []) as $p)
                          <li class="flex gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                            <span>{{ $p }}</span>
                          </li>
                        @endforeach
                      </ul>
                    </div>

                    {{-- TECH PARAMS --}}
                    <div class="rounded-2xl border border-slate-200 overflow-hidden bg-white">
                      <div class="bg-red-600 text-white px-4 py-2 text-xs font-extrabold tracking-wide">
                        技术参数 &nbsp; TECHNICAL PARAMETERS
                      </div>

                      <table class="w-full text-sm">
                        <tbody class="divide-y divide-slate-200">
                          @foreach(($it['params'] ?? []) as $row)
                            <tr class="align-top">
                              <td class="w-[40%] px-4 py-2 text-slate-600 font-semibold">
                                {{ $row['label'] ?? '' }}
                              </td>
                              <td class="px-4 py-2 text-slate-800">
                                {{ $row['value'] ?? '' }}
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

              </article>
            @break

            @case('palletizer-hero-right3')
              @php
                $hero = $it['hero'] ?? '';
                $rImgs = $it['right_imgs'] ?? [];
              @endphp

              <article class="space-y-8">

                {{-- TOP: hero besar + 3 gambar kanan --}}
                <div class="grid lg:grid-cols-[1fr_260px] gap-8 items-start">

                  {{-- HERO --}}
                  <div>
                    <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                    @if(!empty($it['subtitle']))
                      <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                    @endif

                    <div class="mt-4 rounded-xl overflow-hidden border border-slate-200 bg-white">
                      <div class="aspect-[16/7]">
                        <img src="{{ asset($hero) }}" class="w-full h-full object-contain" loading="lazy">
                      </div>
                    </div>
                  </div>

                  {{-- RIGHT 3 IMAGES --}}
                  <div class="space-y-3">
                    @foreach($rImgs as $img)
                      <div class="rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[4/3]">
                          <img src="{{ asset($img) }}" class="w-full h-full object-cover" loading="lazy">
                        </div>
                      </div>
                    @endforeach
                  </div>

                </div>

                {{-- BOTTOM: CN + EN --}}
                <div class="grid lg:grid-cols-2 gap-10 items-start">

                  {{-- CN block --}}
                  <div>
                    <div class="text-sm font-extrabold text-slate-900 mb-2">产品特点</div>
                    <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                      @foreach(($it['features_cn'] ?? []) as $p)
                        <li class="flex gap-2">
                          <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                          <span>{{ $p }}</span>
                        </li>
                      @endforeach
                    </ul>
                  </div>

                  {{-- EN block --}}
                  <div>
                    <div class="text-sm font-extrabold text-slate-900 mb-2">Product Features</div>
                    <ul class="space-y-2 text-sm text-slate-700 leading-relaxed">
                      @foreach(($it['features_en'] ?? []) as $p)
                        <li class="flex gap-2">
                          <span class="mt-2 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                          <span>{{ $p }}</span>
                        </li>
                      @endforeach
                    </ul>
                  </div>

                </div>

              </article>
            @break

            @case('carton-packaging')
              @php
                $hero    = $it['hero'] ?? '';
                $boxes   = $it['boxes'] ?? [];
                $process = $it['process'] ?? '';
              @endphp

              <article class="space-y-8">

                {{-- TOP: kiri mesin besar + kanan text + 4 box --}}
                <div class="grid lg:grid-cols-[1fr_520px] gap-10 items-start">

                  {{-- LEFT: HERO IMAGE --}}
                  <div class="rounded-2xl overflow-hidden border border-slate-200 bg-white">
                    <div class="aspect-[16/10]">
                      <img src="{{ asset($hero) }}" class="w-full h-full object-contain" loading="lazy">
                    </div>
                  </div>

                  {{-- RIGHT: TEXT + BOXES 2x2 --}}
                  <div>
                    <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                    @if(!empty($it['subtitle']))
                      <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                    @endif

                    {{-- CN --}}
                    @if(!empty($it['desc_cn']))
                      <div class="mt-4 space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach($it['desc_cn'] as $p)
                          <p>{{ $p }}</p>
                        @endforeach
                      </div>
                    @endif

                    {{-- EN --}}
                    <div class="mt-4">
                      <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                      <div class="mt-2 space-y-2 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['desc_en'] ?? []) as $p)
                          <p>{{ $p }}</p>
                        @endforeach
                      </div>
                    </div>

                    {{-- 4 boxes (2x2) --}}
                    @if(!empty($boxes) && is_array($boxes))
                      <div class="mt-5 grid grid-cols-2 gap-3">
                        @foreach($boxes as $b)
                          <div class="aspect-[4/3] rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset($b) }}" class="w-full h-full object-cover" loading="lazy">
                          </div>
                        @endforeach
                      </div>
                    @endif
                  </div>
                </div>

                {{-- BOTTOM: operation process image full width --}}
                @if(!empty($process))
                  <div class="rounded-2xl border border-slate-200 bg-white p-4">
                    <div class="text-xs font-semibold text-slate-500 mb-3">
                      The Operation Process Of This Carton Packaging Machine Is As Follows:
                    </div>

                    <div class="rounded-xl border-4 border-[#3B82F6]/60 bg-white p-3">
                      <img src="{{ asset($process) }}" class="w-full h-auto object-contain" loading="lazy">
                    </div>
                  </div>
                @endif

              </article>
            @break

                {{-- =========================
                    ✅ LAYOUT: dual vertical + technical table
                    PRODUCT 23
                ========================= --}}
                @case('dual-vertical-spec')
                <article class="space-y-8">

                  <h2 class="text-2xl font-extrabold text-red-600">
                    {{ $it['title'] }}
                  </h2>

                  @if(!empty($it['subtitle']))
                    <div class="text-slate-600 font-semibold">
                      {{ $it['subtitle'] }}
                    </div>
                  @endif

                  {{-- 2 MESIN VERTIKAL --}}
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($it['products'] as $p)
                      <div>
                        <div class="text-lg font-bold text-red-600 mb-3">
                          {{ $p['name'] }}
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-4">
                          <img src="{{ asset($p['image']) }}"
                               class="w-full h-auto object-contain"
                               loading="lazy">
                        </div>
                      </div>
                    @endforeach
                  </div>

                  {{-- TECHNICAL PARAMETERS --}}
                  <div>
                    <div class="text-sm font-extrabold text-slate-900 mb-3">
                      Technical Parameters
                    </div>

                    <div class="overflow-x-auto">
                      <table class="w-full text-sm border border-slate-200">
                        <thead class="bg-red-600 text-white">
                          <tr>
                            <th class="px-3 py-2 text-left">Item</th>
                            <th class="px-3 py-2">ZP-250A</th>
                            <th class="px-3 py-2">ZP-350A</th>
                          </tr>
                        </thead>
                        <tbody class="text-slate-800">
                          @foreach($it['specs'] as $i => $s)
                            <tr class="border-t {{ $i % 2 ? 'bg-slate-50' : 'bg-white' }}">
                              <td class="px-3 py-2 font-semibold text-slate-900">
                                {{ $s['label'] }}
                              </td>
                              <td class="px-3 py-2 text-center text-slate-800">
                                {{ $s['zp250a'] }}
                              </td>
                              <td class="px-3 py-2 text-center text-slate-800">
                                {{ $s['zp350a'] }}
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                </article>
                @break

                {{-- =========================
                    ✅ LAYOUT: grid-4 (2x2) sesuai PDF
                    dipakai PRODUCT 22
                ========================= --}}
                @case('grid-4')
                  <article>
                    <h2 class="text-2xl font-extrabold text-red-600">
                      {{ $it['title'] ?? '-' }}
                    </h2>

                    @if(!empty($it['subtitle']))
                      <div class="mt-1 text-slate-600 font-semibold">
                        {{ $it['subtitle'] }}
                      </div>
                    @endif

                    {{-- GRID 2x2 sesuai PDF --}}
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                      @foreach(($it['images'] ?? []) as $img)
                        <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                          <div class="aspect-[16/10] bg-slate-50 flex items-center justify-center">
                            <img
                              src="{{ asset($img) }}"
                              class="w-full h-full object-contain"
                              loading="lazy"
                            >
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </article>
                @break

              {{-- =========================
                  ✅ LAYOUT: hero kiri + text tengah + specs kanan
                  dipakai PRODUCT 20 (Unscramble)
              ========================= --}}
              @case('hero-left-specs')
                <article class="grid lg:grid-cols-[420px_1fr_420px] gap-8 items-start">
                  <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                    <div class="aspect-[4/3]">
                      <img src="{{ asset($it['hero'] ?? '') }}" class="w-full h-full object-contain" loading="lazy">
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
                  </div>

                  <div>
                    <div class="text-sm font-extrabold text-slate-900">Technical Parameters</div>
                    <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200">
                      <table class="w-full text-sm">
                        <tbody class="divide-y divide-slate-200">
                          @foreach(($it['specs'] ?? []) as $row)
                            <tr class="bg-white">
                              <td class="w-1/2 px-4 py-3 font-semibold text-slate-700">{{ $row[0] }}</td>
                              <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </article>
              @break

                {{-- =========================
                    ✅ LAYOUT: 3 gambar atas + text bawah
                    dipakai PRODUCT 19
                ========================= --}}
                @case('triple-hero-features')
                  <article class="space-y-6">

                    {{-- 3 gambar sejajar --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                      @foreach(($it['top_images'] ?? []) as $img)
                        <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[4/3]">
                            <img src="{{ asset($img) }}"
                                 class="w-full h-full object-contain p-2"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      @endforeach
                    </div>

                    {{-- judul + subtitle --}}
                    <div>
                      <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                      @if(!empty($it['subtitle']))
                        <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                      @endif
                    </div>

                    {{-- fitur --}}
                    <div>
                      <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                      <div class="mt-2 space-y-3 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['desc'] ?? []) as $p)
                          <p>{{ $p }}</p>
                        @endforeach
                      </div>
                    </div>

                    {{-- technical parameters nanti --}}
                    {{-- <div class="mt-6">...</div> --}}

                  </article>
                @break

                {{-- =========================
                    ✅ LAYOUT: hero kiri + kanan stack + using range
                    PRODUCT 17
                ========================= --}}
                @case('hero-left-right-stack-range')
                  @php
                    $hero   = $it['hero'] ?? '';
                    $rights = $it['right_images'] ?? [];
                    $prod   = $it['product_img'] ?? '';
                    $range  = $it['range'] ?? [];
                  @endphp

                  <article class="grid lg:grid-cols-[1.4fr_1fr] gap-10 items-start">

                    {{-- LEFT --}}
                    <div class="space-y-6">

                      {{-- hero --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/10]">
                          <img src="{{ asset($hero) }}"
                               class="w-full h-full object-cover"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- Using Range --}}
                      @if(!empty($range))
                        <div class="rounded-2xl border border-slate-200 bg-white p-5">
                          <div class="text-sm font-extrabold text-slate-900">Using Range</div>
                          <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            @foreach($range as $r)
                              <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                <span>{{ $r }}</span>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                      @endif

                    </div>

                    {{-- RIGHT --}}
                    <div class="space-y-5">

                      {{-- title --}}
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif
                      </div>

                      {{-- right images --}}
                      @foreach($rights as $img)
                        <div class="rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[4/3]">
                            <img src="{{ asset($img) }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      @endforeach

                      {{-- product image --}}
                      @if($prod)
                        <div class="rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[3/4]">
                            <img src="{{ asset($prod) }}"
                                 class="w-full h-full object-contain p-3"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      @endif

                    </div>

                  </article>
                @break

                {{-- =========================
                    ✅ LAYOUT: hero kiri + 3 thumbs bawah + kanan using range
                    dipakai PRODUCT 16
                ========================= --}}
                @case('hero-left-3thumbs-right-range')
                  @php
                    $hero       = $it['hero'] ?? '';
                    $thumbs     = $it['thumbs'] ?? [];
                    $productImg = $it['product_img'] ?? '';
                    $range      = $it['range'] ?? [];
                  @endphp

                  <article class="grid lg:grid-cols-[1.35fr_1fr] gap-10 items-start">

                    {{-- LEFT --}}
                    <div class="space-y-5">

                      {{-- hero --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/9]">
                          <img src="{{ asset($hero) }}"
                               class="w-full h-full object-cover"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- 3 thumbs --}}
                      @if(!empty($thumbs))
                        <div class="grid grid-cols-3 gap-4">
                          @foreach($thumbs as $t)
                            <div class="aspect-[4/3] rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                              <img src="{{ asset($t) }}"
                                   class="w-full h-full object-cover"
                                   loading="lazy"
                                   onerror="this.style.display='none'">
                            </div>
                          @endforeach
                        </div>
                      @endif

                    </div>

                    {{-- RIGHT --}}
                    <div class="space-y-6">

                      {{-- title --}}
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif
                      </div>

                      {{-- product image --}}
                      @if($productImg)
                        <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[4/3]">
                            <img src="{{ asset($productImg) }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      @endif

                      {{-- Using Range --}}
                      @if(!empty($range))
                        <div class="rounded-2xl border border-slate-200 bg-white p-5">
                          <div class="text-sm font-extrabold text-slate-900">Using Range</div>
                          <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            @foreach($range as $r)
                              <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                <span>{{ $r }}</span>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                      @endif

                    </div>

                  </article>
                @break

                {{-- ✅ LAYOUT: hero kiri + 3 thumbs bawah + kanan 2 mini + using range (Product 15) --}}
                @case('hero-left-3thumbs-right-2mini-range')
                  @php
                    $hero       = $it['hero'] ?? '';
                    $thumbCards = $it['thumb_cards'] ?? [];
                    $mini       = $it['mini'] ?? [];
                    $range      = $it['range'] ?? [];
                  @endphp

                  <article class="grid lg:grid-cols-[1.35fr_1fr] gap-8 items-start">

                    {{-- LEFT --}}
                    <div class="space-y-4">

                      {{-- hero --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/9]">
                          <img src="{{ asset($hero) }}"
                               class="w-full h-full object-cover"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- 3 thumbs + caption --}}
                      @if(!empty($thumbCards))
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                          @foreach($thumbCards as $tc)
                            <div class="space-y-2">
                              <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                                <img src="{{ asset($tc['src'] ?? '') }}"
                                     class="w-full h-full object-cover"
                                     loading="lazy"
                                     onerror="this.style.display='none'">
                              </div>
                              <div class="text-xs font-semibold text-slate-600 text-center">
                                {{ $tc['label'] ?? '' }}
                              </div>
                            </div>
                          @endforeach
                        </div>
                      @endif

                    </div>

                    {{-- RIGHT --}}
                    <div class="space-y-5">

                      {{-- title --}}
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif
                      </div>

                      {{-- 2 mini images --}}
                      @if(!empty($mini))
                        <div class="grid grid-cols-1 gap-4">
                          @foreach($mini as $m)
                            <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                              <div class="aspect-[4/3]">
                                <img src="{{ asset($m) }}"
                                     class="w-full h-full object-cover"
                                     loading="lazy"
                                     onerror="this.style.display='none'">
                              </div>
                            </div>
                          @endforeach
                        </div>
                      @endif

                      {{-- Using Range --}}
                      @if(!empty($range))
                        <div class="rounded-2xl border border-slate-200 bg-white p-5">
                          <div class="text-sm font-extrabold text-slate-900">Using Range</div>
                          <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            @foreach($range as $r)
                              <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                                <span>{{ $r }}</span>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                      @endif

                    </div>

                  </article>
                @break

                {{-- ✅ LAYOUT: hero kiri + kanan (2 mini + using range) (Product 14) --}}
                @case('hero-left-right-mini-range')
                  @php
                    $hero  = $it['hero'] ?? '';
                    $mini  = $it['mini'] ?? [];
                    $range = $it['range'] ?? [];
                  @endphp

                  <article class="space-y-6">

                    {{-- Title --}}
                    <div>
                      <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                      @if(!empty($it['subtitle']))
                        <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                      @endif
                    </div>

                    {{-- Main layout --}}
                    <div class="grid lg:grid-cols-[1.4fr_1fr] gap-8 items-start">

                      {{-- LEFT: hero big --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/8] lg:aspect-[16/7]">
                          <img src="{{ asset($hero) }}"
                               class="w-full h-full object-contain"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- RIGHT: mini images + bullets --}}
                      <div class="space-y-5">

                        {{-- mini row --}}
                        @if(!empty($mini))
                          <div class="grid grid-cols-2 gap-4">
                            @foreach($mini as $m)
                              <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                                <div class="aspect-[4/3]">
                                  <img src="{{ asset($m) }}"
                                       class="w-full h-full object-cover"
                                       loading="lazy"
                                       onerror="this.style.display='none'">
                                </div>
                              </div>
                            @endforeach
                          </div>
                        @endif

                        {{-- Using Range --}}
                        @if(!empty($range))
                          <div class="rounded-2xl border border-slate-200 bg-white p-5">
                            <div class="text-sm font-extrabold text-slate-900">Using Range</div>
                            <ul class="mt-3 space-y-2 text-sm text-slate-700">
                              @foreach($range as $r)
                                <li class="flex gap-2">
                                  <span class="mt-1 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                                  <span>{{ $r }}</span>
                                </li>
                              @endforeach
                            </ul>
                          </div>
                        @endif

                      </div>
                    </div>

                  </article>
                @break

                {{-- ✅ LAYOUT: hero kiri + 3 foto stack kanan + "Using Range" (Product 13) --}}
                @case('hero-left-3stack')
                  @php
                    $hero  = $it['hero']  ?? '';
                    $stack = $it['stack'] ?? [];
                    $range = $it['range'] ?? [];
                  @endphp

                  <article class="space-y-6">

                    {{-- Title --}}
                    <div>
                      <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                      @if(!empty($it['subtitle']))
                        <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                      @endif
                    </div>

                    {{-- Top Images --}}
                    <div class="grid lg:grid-cols-[1fr_260px] gap-5 items-start">
                      {{-- Hero left --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/7] lg:aspect-[16/6]">
                          <img src="{{ asset($hero) }}"
                               class="w-full h-full object-contain"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- Right stack 3 --}}
                      <div class="grid gap-4">
                        @foreach($stack as $s)
                          <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                            <div class="aspect-[4/3]">
                              <img src="{{ asset($s) }}"
                                   class="w-full h-full object-cover"
                                   loading="lazy"
                                   onerror="this.style.display='none'">
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>

                    {{-- Using Range --}}
                    @if(!empty($range))
                      <div class="grid md:grid-cols-2 gap-4">
                        <div class="rounded-2xl border border-slate-200 bg-white p-5">
                          <div class="text-sm font-extrabold text-slate-900">Using Range</div>
                          <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            @foreach($range as $r)
                              <li class="flex gap-2">
                                <span class="mt-1 h-1.5 w-1.5 rounded-full bg-red-600 shrink-0"></span>
                                <span>{{ $r }}</span>
                              </li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    @endif

                  </article>
                @break

                {{-- ✅ LAYOUT: collage 4 gambar bebas (Product 12) --}}
                @case('collage-4-free')
                  <article class="space-y-6">

                    <div>
                      <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                      @if(!empty($it['subtitle']))
                        <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                      @endif
                    </div>

                    {{-- grid collage --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                      @foreach(($it['collage'] ?? []) as $idx => $img)
                        <figure class="{{ $img['span'] ?? 'lg:col-span-6' }} rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[16/7] lg:aspect-[16/6]">
                            <img src="{{ asset($img['src'] ?? '') }}"
                                 class="w-full h-full object-contain"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>

                          {{-- optional caption --}}
                          @php $cap = ($it['captions'][$idx] ?? null); @endphp
                          @if($cap)
                            <figcaption class="px-3 py-2 text-xs font-semibold text-slate-600 bg-white border-t border-slate-200">
                              {{ $cap }}
                            </figcaption>
                          @endif
                        </figure>
                      @endforeach
                    </div>

                  </article>
                @break

                {{-- ✅ LAYOUT: hero super wide + kanan stack 3 foto + aplikasi botol, text di bawah (Product 11) --}}
                @case('hero-wide-right-stack')
                  <article class="space-y-8">

                    {{-- TOP: hero wide + right stack --}}
                    <div class="grid lg:grid-cols-[1fr_260px] gap-8 items-start">

                      {{-- hero wide --}}
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif

                        <div class="mt-5 rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[21/8]">
                            <img src="{{ asset($it['hero'] ?? '') }}"
                                 class="w-full h-full object-contain"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      </div>

                      {{-- right stack --}}
                      <div class="space-y-3">
                        @foreach(($it['stack'] ?? []) as $img)
                          <div class="rounded-xl overflow-hidden border border-slate-200 bg-slate-50">
                            <div class="aspect-[4/3]">
                              <img src="{{ asset($img) }}"
                                   class="w-full h-full object-cover"
                                   loading="lazy"
                                   onerror="this.style.display='none'">
                            </div>
                          </div>
                        @endforeach

                        {{-- app bottles --}}
                        @if(!empty($it['app']))
                          <div class="rounded-xl overflow-hidden border border-slate-200 bg-white">
                            <div class="aspect-[4/3]">
                              <img src="{{ asset($it['app']) }}"
                                   class="w-full h-full object-contain"
                                   loading="lazy"
                                   onerror="this.style.display='none'">
                            </div>
                          </div>
                        @endif
                      </div>

                    </div>

                    {{-- BOTTOM: product features (paragraf) --}}
                    <div class="pt-2">
                      <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                      <div class="mt-2 space-y-3 text-sm text-slate-700 leading-relaxed">
                        @foreach(($it['desc'] ?? []) as $p)
                          <p>{{ $p }}</p>
                        @endforeach
                      </div>
                    </div>

                  </article>
                @break

                {{-- ✅ LAYOUT: hero besar atas + features kanan, bawah 2 gambar kiri + 1 kanan (Product 10) --}}
                @case('hero-top-right-features-bottom-3')
                  <article class="space-y-8">

                    {{-- TOP: hero besar + features --}}
                    <div class="grid lg:grid-cols-[1fr_420px] gap-10 items-start">
                      {{-- hero besar --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/7]">
                          <img src="{{ asset($it['hero'] ?? '') }}"
                               class="w-full h-full object-cover"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                      {{-- features kanan --}}
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif

                        <div class="mt-4 rounded-2xl border border-slate-200 bg-white p-5">
                          <div class="text-sm font-extrabold text-slate-900">Product Features</div>

                          <ul class="mt-3 space-y-2 text-sm text-slate-700 leading-relaxed list-disc pl-5">
                            @foreach(($it['desc'] ?? []) as $p)
                              <li>{{ $p }}</li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>

                    {{-- BOTTOM: 2 gambar kiri + 1 kanan --}}
                    <div class="grid lg:grid-cols-[1fr_420px] gap-10 items-start">

                      {{-- kiri: 2 gambar besar --}}
                      <div class="grid grid-cols-2 gap-4">
                        @foreach(($it['bottom_left'] ?? []) as $img)
                          <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                            <div class="aspect-[4/3]">
                              <img src="{{ asset($img) }}"
                                   class="w-full h-full object-cover"
                                   loading="lazy"
                                   onerror="this.style.display='none'">
                            </div>
                          </div>
                        @endforeach
                      </div>

                      {{-- kanan: 1 gambar applications --}}
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[4/3]">
                          <img src="{{ asset($it['bottom_right'] ?? '') }}"
                               class="w-full h-full object-contain"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>

                    </div>

                  </article>
                @break
                {{-- ✅ LAYOUT: hero kiri + teks kanan, bawah 3 thumbs + tabel spec (Product 9) --}}
                @case('hero-left-3thumbs-spec')
                  <article class="space-y-8">

                    {{-- TOP: hero kiri + teks kanan --}}
                    <div class="grid lg:grid-cols-[520px_1fr] gap-10 items-start">
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/9]">
                          <img src="{{ asset($it['hero'] ?? '') }}"
                               class="w-full h-full object-contain"
                               loading="lazy"
                               onerror="this.style.display='none'">
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
                      </div>
                    </div>

                    {{-- BOTTOM: 3 thumbs + table --}}
                    <div class="grid lg:grid-cols-[520px_1fr] gap-10 items-start">

                      {{-- 3 thumbs --}}
                      <div class="grid grid-cols-3 gap-3">
                        @foreach(($it['thumbs'] ?? []) as $t)
                          <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset($t) }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        @endforeach
                      </div>

                      {{-- table --}}
                      <div class="rounded-2xl border border-slate-200 overflow-hidden bg-white">
                        <div class="px-4 py-3 bg-red-600 text-white text-sm font-extrabold tracking-wide">
                          TECHNICAL PARAMETERS
                        </div>

                        <div class="overflow-x-auto">
                          <table class="min-w-full text-xs">
                            <thead class="bg-slate-50 text-slate-700">
                              <tr>
                                <th class="text-left px-3 py-2 font-bold border-b">Item</th>
                                @foreach(($it['spec_cols'] ?? []) as $col)
                                  <th class="text-left px-3 py-2 font-bold border-b whitespace-nowrap">{{ $col }}</th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody class="text-slate-700">
                              @foreach(($it['spec_rows'] ?? []) as $row)
                                <tr class="odd:bg-white even:bg-slate-50">
                                  <td class="px-3 py-2 border-b font-semibold whitespace-nowrap">
                                    {{ $row['label'] ?? '-' }}
                                  </td>
                                  @foreach(($row['vals'] ?? []) as $v)
                                    <td class="px-3 py-2 border-b whitespace-nowrap">{{ $v }}</td>
                                  @endforeach
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>

                  </article>
                @break
                {{-- ✅ LAYOUT: hero atas + bawah kiri fitur + bawah kanan tabel spec (Product 8) --}}
                @case('hero-top-spec-table')
                  <article class="space-y-8">

                    {{-- TOP: title + hero image --}}
                    <div class="grid lg:grid-cols-[1fr] gap-6">
                      <div>
                        <h2 class="text-2xl font-extrabold text-red-600">{{ $it['title'] ?? '-' }}</h2>
                        @if(!empty($it['subtitle']))
                          <div class="mt-1 text-slate-600 font-semibold">{{ $it['subtitle'] }}</div>
                        @endif
                      </div>

                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[16/7]">
                          <img src="{{ asset($it['hero'] ?? '') }}"
                               class="w-full h-full object-contain"
                               loading="lazy"
                               onerror="this.style.display='none'">
                        </div>
                      </div>
                    </div>

                    {{-- BOTTOM: left features + right table --}}
                    <div class="grid lg:grid-cols-[1fr_1fr] gap-10 items-start">

                      {{-- LEFT: features --}}
                      <div>
                        <div class="text-sm font-extrabold text-slate-900">Product Features</div>
                        <div class="mt-2 space-y-3 text-sm text-slate-700 leading-relaxed">
                          @foreach(($it['desc'] ?? []) as $p)
                            <p>{{ $p }}</p>
                          @endforeach
                        </div>
                      </div>

                      {{-- RIGHT: technical parameters table --}}
                      <div class="rounded-2xl border border-slate-200 overflow-hidden bg-white">
                        <div class="px-4 py-3 bg-red-600 text-white text-sm font-extrabold tracking-wide">
                          TECHNICAL PARAMETERS
                        </div>

                        <div class="overflow-x-auto">
                          <table class="min-w-full text-xs">
                            <thead class="bg-slate-50 text-slate-700">
                              <tr>
                                <th class="text-left px-3 py-2 font-bold border-b">Item</th>
                                <th class="text-left px-3 py-2 font-bold border-b">PLJ-1000</th>
                                <th class="text-left px-3 py-2 font-bold border-b">PLJ-2000</th>
                                <th class="text-left px-3 py-2 font-bold border-b">PLJ-3000</th>
                                <th class="text-left px-3 py-2 font-bold border-b">PLJ-5000</th>
                              </tr>
                            </thead>
                            <tbody class="text-slate-700">
                              @foreach(($it['spec'] ?? []) as $row)
                                <tr class="odd:bg-white even:bg-slate-50">
                                  <td class="px-3 py-2 border-b font-semibold">{{ $row['label'] ?? '-' }}</td>
                                  <td class="px-3 py-2 border-b">{{ $row['v1'] ?? '-' }}</td>
                                  <td class="px-3 py-2 border-b">{{ $row['v2'] ?? '-' }}</td>
                                  <td class="px-3 py-2 border-b">{{ $row['v3'] ?? '-' }}</td>
                                  <td class="px-3 py-2 border-b">{{ $row['v4'] ?? '-' }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>

                    </div>
                  </article>
                @break

                {{-- ✅ LAYOUT: collage hero + 2 kecil (Product 7) --}}
                @case('collage-hero-2')
                  <article class="grid lg:grid-cols-[1fr_520px] gap-10 items-start">
                    {{-- LEFT: TEXT --}}
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
                    </div>

                    {{-- RIGHT: 1 besar atas + 2 kecil bawah --}}
                    <div class="grid grid-cols-2 gap-3">
                      @foreach(($it['images'] ?? []) as $img)
                        <div class="{{ $img['span'] ?? 'col-span-1 row-span-1' }} rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                          <div class="aspect-[4/3]">
                            <img src="{{ asset($img['src'] ?? '') }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                                 onerror="this.style.display='none'">
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </article>
                @break

              {{-- ✅ text kiri + 2 images kanan (Product 1 & 2) --}}
              @case('text-2img-right')
                <article class="grid lg:grid-cols-[1fr_520px] gap-10 items-start">
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
                  </div>

                  <div class="grid grid-cols-2 gap-4">
                    @foreach(($it['images'] ?? []) as $img)
                      <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <div class="aspect-[4/3]">
                          <img src="{{ asset($img) }}" class="w-full h-full object-cover" loading="lazy">
                        </div>
                      </div>
                    @endforeach
                  </div>
                </article>
              @break


              {{-- ✅ hero kiri + thumbs kanan (Product 3 & 4) --}}
              @case('hero-left-thumbs')
                @php
                  $hero = $it['hero'] ?? '';
                  $thumbs = (is_array($it['thumbs'] ?? null)) ? $it['thumbs'] : [];
                @endphp

                <article class="grid lg:grid-cols-[520px_1fr] gap-10 items-start">
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
                      <div class="mt-5 grid grid-cols-3 gap-3">
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


              {{-- ✅ collage-4 (Product 5) --}}
              @case('collage-4')
                <article class="grid lg:grid-cols-[1fr_520px] gap-10 items-start">
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
                  </div>

                  <div class="grid grid-cols-3 grid-rows-3 gap-3">
                    @foreach(($it['images'] ?? []) as $img)
                      <div class="{{ $img['span'] ?? 'col-span-1 row-span-1' }} rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                        <img src="{{ asset($img['src'] ?? '') }}" class="w-full h-full object-cover" loading="lazy" onerror="this.style.display='none'">
                      </div>
                    @endforeach
                  </div>
                </article>
              @break


              {{-- ✅ hero-left (Product 6) --}}
              @case('hero-left')
                <article class="grid lg:grid-cols-[520px_1fr] gap-10 items-start">
                  <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50">
                    <div class="aspect-[4/3]">
                      <img src="{{ asset($it['hero'] ?? '') }}" class="w-full h-full object-contain" loading="lazy" onerror="this.style.display='none'">
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
