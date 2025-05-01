<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentCategories = [
            ['name' => 'Industria, Comercio y Delivery', 'description' => 'Alimentos preparados, delivery, aseo y limpieza, vinos, lácteos y otros'],
            ['name' => 'Agrícola', 'description' => 'Frutas y verduras frescas, congeladas y deshidratadas'],
            ['name' => 'Proteínas', 'description' => 'Carnes, pollos, pescados, mariscos, huevos y derivados'],
        ];

        foreach($parentCategories as $category){
            $category['slug'] = Str::slug($category['name'], '_', 'es');
            Category::factory()->create($category);
        }

        $productos = [
            //Subcategorias industia comercio y delivery
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/alimentos.svg", "name" => "Alimentos", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/art-aseo.svg", "name" => "Artículos de Aseo y Limpieza", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/art-oficina.svg", "name" => "Artículos de Oficina", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/aseo-personal.svg", "name" => "Aseo e Higiene Personal", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/calzado.svg", "name" => "Calzado y Vestuario", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/ceramicas.svg", "name" => "Cerámicas y revestimientos", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/comercializador.svg", "name" => "Comercializador", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/fittings.svg", "name" => "Grifería y Artículos de Baño", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/herramientas.svg", "name" => "Herramientas y Artículos de Ferretería", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/lab-farmacia.svg", "name" => "Laboratorios y Farmacias", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/lacteos.svg", "name" => "Lácteos y derivados", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/logistica.svg", "name" => "Logística y Transporte", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/muebles.svg", "name" => "Muebles", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/papel.svg", "name" => "Papel y Derivados", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/plasticos-derivados.svg", "name" => "Plásticos y Derivados", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/quimicos.svg", "name" => "Químicos", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/restaurant.svg", "name" => "Restaurantes y Delivery", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/vidrios.svg", "name" => "Vidrios", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/vinos.svg", "name" => "Vinos y Licores", "parent_id" => 1],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/otros-industriales.svg", "name" => "Otros Segmentos Industriales", "parent_id" => 1],

            //Subcategorias Agricola
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/fruta-congelada.svg", "name" => "Frutas o Verduras Congelada", "parent_id" => 2],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/fruta-deshidratada.svg", "name" => "Frutas o Verduras Deshidratadas", "parent_id" => 2],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/fruta-fresca.svg", "name" => "Frutas o Verduras Frescas", "parent_id" => 2],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/otros-agricolas.svg", "name" => "Otros Agrícolas", "parent_id" => 2],

            //Proteinas
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/carnes-derivados.svg", "name" => "Carnes y Derivados", "parent_id" => 3],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/huevos.svg", "name" => "Huevos", "parent_id" => 3],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/pescado.svg", "name" => "Pescados y Mariscos", "parent_id" => 3],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/pollos-derivados.svg", "name" => "Pollos y Derivados", "parent_id" => 3],
            ["img" => "https://cdn-boxia-web.cmpc-innovation.com/assests/segments/otras-proteinas.svg", "name" => "Otras Proteínas", "parent_id" => 3],
        ];

        foreach($productos as $subcategoria){
            $img = $subcategoria['img'];
            unset( $subcategoria['img'] );
            $subcategoria['slug'] = Str::slug($subcategoria['name'], '_', 'es');
            $subcategoria['description'] = '';
            $category = Category::factory()->create($subcategoria);

            $category->addMediaFromUrl($img)
            ->toMediaCollection('img');
        }

    }
}
