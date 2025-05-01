<?php

namespace Database\Seeders;

use App\Models\BoxType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoxTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boxTypes = [
            ["name" => "Otro Diseño estructural por Definir", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_999/box_999_3d.svg"],
            ["name" => "Caja Normal", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_201/box_201_3d.svg"],
            ["name" => "Caja Tipo Pizza", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_414/box_414_3d.svg"],
            ["name" => "Media Caja Normal", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_200/box_200_3d.svg"],
            ["name" => "Caja Autoarmable triple cabezal tipo Delivery", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_427/box_427_3d.svg"],
            ["name" => "Caja Autoarmable con fondo traslapado y cubierta superior total", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_215/box_215_3d.svg"],
            ["name" => "Caja Autoarmable tipo maleta", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_217/box_217_3d.svg"],
            ["name" => "Caja Autoarmable triple cabezal", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_421/box_421_3d.svg"],
            ["name" => "Láminas", "img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/boxes/fefco_110/box_110_3d.svg"],
        ];

        foreach( $boxTypes as $boxType ){
            $img = $boxType['img'];
            unset( $boxType['img'] );
            $boxType['slug'] = Str::slug($boxType['name'], '_', 'es');
            $newBoxType = BoxType::create($boxType);

            $newBoxType->addMediaFromUrl($img)
            ->toMediaCollection('img');
        }

    }
}
