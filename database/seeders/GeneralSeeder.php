<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Region;
use App\Models\Shop;
use App\Models\SuperMarket;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $region1 = Region::create([

        // ]);

        //Start Products
        //
        //
        //
        $product1 = Product::create([
            'name' => 'Γάλα',
            'slug' => 'gala',
            'quantity' => 10
        ]);
        $product2 = Product::create([
            'name' => 'Νερό',
            'slug' => 'nero',
            'quantity' => 25
        ]);
        $product3 = Product::create([
            'name' => 'Χυμοί',
            'slug' => 'xymoi',
            'quantity' => 40
        ]);
        $product4 = Product::create([
            'name' => 'Μωρομάντηλα',
            'slug' => 'mwromantila',
            'quantity' => 50
        ]);
        $product5 = Product::create([
            'name' => 'Χαρτί υγείας',
            'slug' => 'xarti-ygeias',
            'quantity' => 39
        ]);
        $product6 = Product::create([
            'name' => 'Σαπούνια',
            'slug' => 'sapoynia',
            'quantity' => 19
        ]);
        $product7 = Product::create([
            'name' => 'Βαμβάκι',
            'slug' => 'bambaki',
            'quantity' => 23
        ]);
        $product8 = Product::create([
            'name' => 'Επίδεσμοι',
            'slug' => 'epidesmoi',
            'quantity' => 43
        ]);
        $product9 = Product::create([
            'name' => 'Αντισηπτικά',
            'slug' => 'antishptika',
            'quantity' => 47
        ]);
        $product10 = Product::create([
            'name' => 'Φρυγανιές',
            'slug' => 'friganies',
            'quantity' => 35
        ]);
        //
        //
        //
        //End Products

        //Start Regions
        //
        //
        //


        $region1 = Region::create([
            'name' => 'Καλαμαριά',
            'slug' => 'kalamaria',
        ]);

        $region2 = Region::create([
            'name' => 'Εύοσμος',
            'slug' => 'euosmos',
        ]);

        $region3 = Region::create([
            'name' => 'Χαριλάου',
            'slug' => 'xaliralou',
        ]);

        $region4 = Region::create([
            'name' => 'Πυλαία',
            'slug' => 'pylaia',
        ]);

        $region5 = Region::create([
            'name' => 'Ασβεστοχώρι',
            'slug' => 'asvestoxwri',
        ]);


        //
        //
        //
        //End Regions

        //Start Supermarkets
        //
        //
        //


        //Region 1
        //
        $supermarket1 = Shop::create([
            'name' => 'Μασούτης',
            'address' => 'Παστερ 2 & ΜΕΓ. Αλεξανδρου, Καλαμαριά 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOwYWAMZzFqK2xRti_HUhWvgz-cR9RPqXB10mnZ=w101-h101-n-k-no',
            'visitors' => 25,
            'phone' => '2310455962',
            'region_id' => $region1->id,
        ]);

        $supermarket1->products()->attach([$product1->id, $product2->id, $product10->id, $product4->id, $product6->id]);

        $supermarket2 = Shop::create([
            'name' => 'Σούπερ Μάρκετ ΑΦΡΟΔΙΤΗ',
            'address' => 'Παρασκευοπούλου 5, Καλαμαριά 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMiLqEDn7qiXze69KZxT5qmcAerLcCLmlVlYD5w=w101-h101-n-k-no',
            'visitors' => 32,
            'phone' => '2310457522',
            'region_id' => $region1->id,
        ]);

        $supermarket2->products()->attach([$product3->id, $product2->id, $product9->id, $product8->id, $product4->id]);

        $supermarket3 = Shop::create([
            'name' => 'ΑΒ Βασιλόπουλος',
            'address' => 'Εθ. Αντίστασης 18, Καλαμαριά 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOxuM8327QA6CuQpZaJeZsskKMp1Ea2Ac2qbBDy=w101-h101-n-k-no',
            'visitors' => 19,
            'phone' => '2310458444',
            'region_id' => $region1->id,
        ]);

        $supermarket3->products()->attach([$product3->id, $product2->id, $product5->id, $product1->id, $product6->id]);

        $supermarket4 = Shop::create([
            'name' => 'ΣΚΛΑΒΕΝΙΤΗΣ',
            'address' => 'Λεωφ. Εθ. Αντιστάσεως 33, Καλαμαριά 551 34',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMp4x9TUkwgDn_6sgsE4o5oFS4Y51h1O2PezsNb=w101-h101-n-k-no',
            'visitors' => 19,
            'phone' => '2310458444',
            'region_id' => $region1->id,
        ]);

        $supermarket4->products()->attach([$product1->id, $product10->id, $product7->id, $product9->id, $product2->id]);


        //Region 2
        //
        $supermarket5 = Shop::create([
            'name' => 'MARKET IN',
            'address' => 'Κομνηνών 57, Εύοσμος 551 32',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMp4x9TUkwgDn_6sgsE4o5oFS4Y51h1O2PezsNb=w101-h101-n-k-no',
            'visitors' => 49,
            'phone' => '2310447465',
            'region_id' => $region2->id,
        ]);

        $supermarket5->products()->attach([$product8->id, $product6->id, $product5->id, $product4->id, $product2->id]);

        $supermarket6 = Shop::create([
            'name' => 'Discount Markt',
            'address' => 'Αιγαίου 26, Εύοσμος 546 55',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMYIoVCbC0VCXGss7I8Kgd9VKWXdMZA3wGZ_M1M=w101-h101-n-k-no',
            'visitors' => 67,
            'phone' => '2310356444',
            'region_id' => $region2->id,
        ]);

        $supermarket6->products()->attach([$product2->id, $product6->id, $product9->id, $product3->id, $product1->id]);

        $supermarket7 = Shop::create([
            'name' => 'Express Market',
            'address' => 'Λεβαντή 28, Εύοσμος 551 32',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMExbAMhDlTxxveVX-NBwjWFTUN8dmQZK1a09Gz=w101-h101-n-k-no',
            'visitors' => 22,
            'phone' => '2310778444',
            'region_id' => $region2->id,
        ]);

        $supermarket7->products()->attach([$product2->id, $product10->id, $product8->id, $product6->id, $product5->id]);

        $supermarket8 = Shop::create([
            'name' => 'Μασούτης',
            'address' => 'Παστερ 2 & ΜΕΓ. Αλεξανδρου, Εύοσμος 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOwYWAMZzFqK2xRti_HUhWvgz-cR9RPqXB10mnZ=w101-h101-n-k-no',
            'visitors' => 25,
            'phone' => '2310455962',
            'region_id' => $region2->id,
        ]);

        $supermarket8->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        //Region 3
        //
        $supermarket9 = Shop::create([
            'name' => 'Μασούτης',
            'address' => 'Παστερ 2 & ΜΕΓ. Αλεξανδρου, Χαριλάου 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOwYWAMZzFqK2xRti_HUhWvgz-cR9RPqXB10mnZ=w101-h101-n-k-no',
            'visitors' => 15,
            'phone' => '2310455962',
            'region_id' => $region3->id,
        ]);

        $supermarket9->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket10 = Shop::create([
            'name' => 'Σούπερ Μάρκετ ΑΦΡΟΔΙΤΗ',
            'address' => 'Παρασκευοπούλου 5, Χαριλάου 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMiLqEDn7qiXze69KZxT5qmcAerLcCLmlVlYD5w=w101-h101-n-k-no',
            'visitors' => 52,
            'phone' => ' 2310457522',
            'region_id' => $region3->id,
        ]);

        $supermarket10->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        $supermarket11 = Shop::create([
            'name' => 'ΑΒ Βασιλόπουλος',
            'address' => 'Εθ. Αντίστασης 18, Χαριλάου 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOxuM8327QA6CuQpZaJeZsskKMp1Ea2Ac2qbBDy=w101-h101-n-k-no',
            'visitors' => 39,
            'phone' => ' 2310458444',
            'region_id' => $region3->id,
        ]);

        $supermarket11->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket12 = Shop::create([
            'name' => 'ΣΚΛΑΒΕΝΙΤΗΣ',
            'address' => 'Λεωφ. Εθ. Αντιστάσεως 33, Χαριλάου 551 34',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMp4x9TUkwgDn_6sgsE4o5oFS4Y51h1O2PezsNb=w101-h101-n-k-no',
            'visitors' => 69,
            'phone' => ' 2310458444',
            'region_id' => $region3->id,
        ]);

        $supermarket12->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        //Region 4
        //
        $supermarket13 = Shop::create([
            'name' => 'MARKET IN',
            'address' => 'Κομνηνών 57, Πυλαία 551 32',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMp4x9TUkwgDn_6sgsE4o5oFS4Y51h1O2PezsNb=w101-h101-n-k-no',
            'visitors' => 89,
            'phone' => '2310447465',
            'region_id' => $region4->id,
        ]);

        $supermarket13->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket14 = Shop::create([
            'name' => 'Discount Markt',
            'address' => 'Αιγαίου 26, Πυλαία 546 55',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMYIoVCbC0VCXGss7I8Kgd9VKWXdMZA3wGZ_M1M=w101-h101-n-k-no',
            'visitors' => 77,
            'phone' => '2310356444',
            'region_id' => $region4->id,
        ]);

        $supermarket14->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        $supermarket15 = Shop::create([
            'name' => 'Express Market',
            'address' => 'Λεβαντή 28, Πυλαία 551 32',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMExbAMhDlTxxveVX-NBwjWFTUN8dmQZK1a09Gz=w101-h101-n-k-no',
            'visitors' => 12,
            'phone' => '2310778444',
            'region_id' => $region4->id,
        ]);

        $supermarket15->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket16 = Shop::create([
            'name' => 'Μασούτης',
            'address' => 'Παστερ 2 & ΜΕΓ. Αλεξανδρου, Πυλαία 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOwYWAMZzFqK2xRti_HUhWvgz-cR9RPqXB10mnZ=w101-h101-n-k-no',
            'visitors' => 55,
            'phone' => '2310455962',
            'region_id' => $region4->id,
        ]);

        $supermarket16->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        //Region 5
        //
        $supermarket17 = Shop::create([
            'name' => 'Μασούτης',
            'address' => 'Παστερ 2 & ΜΕΓ. Αλεξανδρου, Θεσσαλονίκη 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOwYWAMZzFqK2xRti_HUhWvgz-cR9RPqXB10mnZ=w101-h101-n-k-no',
            'visitors' => 75,
            'phone' => '2310455962',
            'region_id' => $region5->id,
        ]);

        $supermarket17->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket18 = Shop::create([
            'name' => 'Σούπερ Μάρκετ ΑΦΡΟΔΙΤΗ',
            'address' => 'Παρασκευοπούλου 5, Ασβεστοχώρι 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMiLqEDn7qiXze69KZxT5qmcAerLcCLmlVlYD5w=w101-h101-n-k-no',
            'visitors' => 82,
            'phone' => ' 2310457522',
            'region_id' => $region5->id,
        ]);

        $supermarket18->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);

        $supermarket19 = Shop::create([
            'name' => 'ΑΒ Βασιλόπουλος',
            'address' => 'Εθ. Αντίστασης 18, Ασβεστοχώρι 551 33',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipOxuM8327QA6CuQpZaJeZsskKMp1Ea2Ac2qbBDy=w101-h101-n-k-no',
            'visitors' => 29,
            'phone' => ' 2310458444',
            'region_id' => $region5->id,
        ]);

        $supermarket19->products()->attach([$product1->id, $product3->id, $product5->id, $product7->id, $product9->id]);

        $supermarket20 = Shop::create([
            'name' => 'ΣΚΛΑΒΕΝΙΤΗΣ',
            'address' => 'Λεωφ. Εθ. Αντιστάσεως 33, Ασβεστοχώρι 551 34',
            'image' => 'https://lh5.googleusercontent.com/p/AF1QipMp4x9TUkwgDn_6sgsE4o5oFS4Y51h1O2PezsNb=w101-h101-n-k-no',
            'visitors' => 49,
            'phone' => ' 2310458444',
            'region_id' => $region5->id,
        ]);

        $supermarket20->products()->attach([$product2->id, $product4->id, $product6->id, $product8->id, $product10->id]);


        //
        //
        //
        //End Products


    }
}
