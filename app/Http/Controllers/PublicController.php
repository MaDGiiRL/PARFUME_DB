<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $parfums = [
        [
            "id" => 1,
            "name" => "Meadow",
            "scent" => "BREEZY & JOYFUL",
            "price" => "40",
            "image" => "/images/meadow.png",
            "on_sale" => true,
            "details" => "Evokes the feeling of a gentle breeze sweeping through wildflower fields, bringing joy and freshness with every spritz.",
        ],
        [
            "id" => 2,
            "name" => "Jardinea",
            "scent" => "STRONGLY FLORAL",
            "price" => "40",
            "image" => "/images/jardinea.png",
            "on_sale" => false,
            "details" => "An intense floral bouquet that envelops the senses, perfect for those who love bold and sophisticated fragrances.",
        ],
        [
            "id" => 3,
            "name" => "Lavanda",
            "scent" => "CALMING",
            "price" => "40",
            "image" => "/images/lavanda.png",
            "on_sale" => true,
            "details" => " A relaxing and harmonious essence, ideal for those seeking a scent that brings calm and serenity",
        ],
        [
            "id" => 4,
            "name" => "Neroli",
            "scent" => "DEEP & SWEET",
            "price" => "40",
            "image" => "/images/neroli.png",
            "on_sale" => false,
            "details" => "  A sweet and deep fragrance with citrusy and sensual notes that leave a memorable impression.",
        ],
        [
            "id" => 5,
            "name" => "Spritz",
            "scent" => "FRUITY & LIGHT",
            "price" => "40",
            "image" => "/images/spritz.png",
            "on_sale" => true,
            "details" => " Fresh and fruity, this perfume is a lively blend that recalls sunny days and carefree summer moments.",
        ],
        [
            "id" => 6,
            "name" => "Powder",
            "scent" => "ULTRA CLEAN",
            "price" => "40",
            "image" => "/images/powder.png",
            "on_sale" => false,
            "details" => "  A clean and delicate olfactory experience that provides a feeling of purity and lightness all day long.",
        ],
        [
            "id" => 7,
            "name" => "Citrus",
            "scent" => "TANGY",
            "price" => "40",
            "image" => "/images/citrus.png",
            "on_sale" => true,
            "details" => " An explosion of energy and vitality with sparkling citrus notes, perfect for starting the day with a boost.",
        ],
    ];


    public function homepage()
    {

        return view('homepage');
    }


    public function shop()
    {
        return view('shop', ['parfums' => $this->parfums]);
    }


    public function show($id)
{
    // Cerca il profumo con l'ID corrispondente
    $parfum = collect($this->parfums)->firstWhere('id', $id);

    // Se non esiste, mostra errore 404
    if (!$parfum) {
        abort(404);
    }

    return view('show', ['parfum' => $parfum]);
}



    public function about()
    {
        return view('about');
    }



    public function feedback()
    {
        $parfums = Parfum::latest()->take(3)->get();
        return view('parfum.create', compact('parfums'));
    }



    public function contact()
    {
        return view('contact');
    }


    public function work(){
        
        return view('work');
    }


}
