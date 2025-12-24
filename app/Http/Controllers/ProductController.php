<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // kategori
        $categories = [
            'all' => 'ALL',
            'water-treatment' => 'Water Treatment',
            'water-filling' => 'Water Filling Machine',
            'juice-filling' => 'Juice Filling Machine',
            'soft-drinks' => 'Soft Drinks Filling Machine',
            'can-filling' => 'Can Filling Machine',
            'gallon' => '5L/10L/5 Gallon Filling Machine',
            'glass-bottle' => 'Glass Bottle Filling Machine',
            'edible-oil' => 'Edible Oil Filling Machine',
            'blowing' => 'Blowing Moulding Machine',
            'combiblock' => 'Combiblock',
            'pretreatment' => 'Pretreatment',
            'labelling' => 'Labelling Machine',
            'packaging' => 'Packaging Machine',
        ];

        // contoh data produk (nanti bisa pindah ke DB)
        $products = [
            [
                'title' => '60-80CPM Automatic Carbonated Beverage Fill Sealing Soda Beer Can',
                'category' => 'can-filling',
                'image' => 'products/sample-1.jpg',
            ],
            [
                'title' => '130-150CPM Automatic Can Beer Carbonated Cola Can Filling',
                'category' => 'can-filling',
                'image' => 'products/sample-2.jpg',
            ],
            [
                'title' => '300CPM Automatic Carbonated Soft Drinks Aluminum Isobaric Can',
                'category' => 'soft-drinks',
                'image' => 'products/sample-3.jpg',
            ],
            [
                'title' => 'Water Treatment System RO + UV',
                'category' => 'water-treatment',
                'image' => 'products/sample-4.jpg',
            ],
            [
                'title' => 'Juice Filling Line (Hot Fill)',
                'category' => 'juice-filling',
                'image' => 'products/sample-5.jpg',
            ],
            [
                'title' => 'Labeling Machine (OPP)',
                'category' => 'labelling',
                'image' => 'products/sample-6.jpg',
            ],
        ];

        $active = $request->query('cat', 'all');
        if (!array_key_exists($active, $categories)) $active = 'all';

        $filtered = ($active === 'all')
            ? $products
            : array_values(array_filter($products, fn($p) => $p['category'] === $active));

        return view('products.index', [
            'categories' => $categories,
            'active' => $active,
            'products' => $filtered,
        ]);
    }
}
