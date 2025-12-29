<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        $categories = [
            'all'        => 'All Products',
            'beverage'   => 'Beverage Pre-Treatment Equipment',
            'sterilizer' => 'Sterilization Equipment',
            'cip'        => 'CIP System',
            'pipeline'   => 'Pipeline & Preparation',
        ];

        $active = $request->get('cat', 'beverage');
        if (!array_key_exists($active, $categories)) $active = 'beverage';

        $items = [
            [
              'cat' => 'beverage',
              'title' => 'Extraction System',
              'subtitle' => '萃取系统',
              'desc' => [
                'Tea extraction refers to soak in hot water tea extract effective components, extraction operation efficiently is the purpose of the active components of extraction plant, not only to keep the tea concentrate as much as possible special color, aroma, taste, but also effectively prevent to cloudy precipitation caused by excessive dissolution of active ingredients of the concentrate.',
                'Adopt the method of fractional extraction, extracted one to protect concentrate aroma components extracted with the use of low temperature and small molecule heat-sensitive ingredients dissolution; Secondary extraction using high temperature extraction to extract the macromolecular effectively the flavour components in the tea, but at the same time, the polyphenols macromolecular compounds dissolution, it may cause cloudiness and precipitation. By controlling the extraction parameters can balance the pair of contradictions.',
              ],
              // 2 gambar kanan (sesuai PDF)
              'layout' => 'text-2img-right',
              'images' => [
                '/public/products/11.PNG',
                '/public/products/12.PNG',
              ],
            ],

            [
                'cat' => 'sterilizer',
                'title' => 'Pipe Sterilizer',
                'subtitle' => '管式灭菌器',
                'desc' => [
                    'The whole set of tube-style sterilization machine is especially used for one-off sterilization of liquid substances...',
                ],
                'hero' => 'catalog/sterilizer/pipe-hero.png',
                'thumbs' => [
                    'catalog/sterilizer/pipe-1.jpg',
                    'catalog/sterilizer/pipe-2.jpg',
                    'catalog/sterilizer/pipe-3.jpg',
                    'catalog/sterilizer/pipe-4.jpg',
                ],
            ],
            // ✅ tinggal tambah item baru sebanyak apapun
        ];

        return view('pages.projects', compact('items','categories','active'));
    }

}
