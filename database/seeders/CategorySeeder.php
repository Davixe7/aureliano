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
        //Subcategorias industia comercio y delivery
        $category = Category::where('slug', 'industria-comercio-y-delivery')->first()?->id;

        Category::create([
            'parent_id' => $category,
            'name' => 'Alimentos',
            'slug' => Str::slug('alimentos'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Artículos de Aseo y Limpieza',
            'slug' => Str::slug('articulos-de-aseo-y-limpieza'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Artículos de Oficina',
            'slug' => Str::slug('articulos-de-oficina'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Aseo e Higiene Personal',
            'slug' => Str::slug('aseo-e-higiene-personal'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Calzado y Vestuario',
            'slug' => Str::slug('calzado-y-vestuario'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Ceramicas y revestimientos',
            'slug' => Str::slug('ceramicas-y-revestimientos'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Comercializador',
            'slug' => Str::slug('comercializador'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Grifería y Artículos de Baño',
            'slug' => Str::slug('griferia'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Herramientas y Artículos de Ferretería',
            'slug' => Str::slug('herramientas-y-articulos-de-ferreteria'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Laboratorios y Farmacias',
            'slug' => Str::slug('laboratorios-y-farmacias'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Lácteos y derivados',
            'slug' => Str::slug('lacteos-y-derivados'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Logística y Transporte',
            'slug' => Str::slug('logistica-y-transporte'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Muebles',
            'slug' => Str::slug('muebles'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Papel y Derivados',
            'slug' => Str::slug('papel-y-derivados'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Plásticos y Derivados',
            'slug' => Str::slug('plasticos-y-derivados'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Químicos',
            'slug' => Str::slug('quimicos'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Restaurantes y Delivery',
            'slug' => Str::slug('restaurantes-y-delivery'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Vidrios',
            'slug' => Str::slug('vidrios'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Vinos y Licores',
            'slug' => Str::slug('vinos-y-licores'),
            'enabled' => true
        ]);


        Category::create([
            'parent_id' => $category,
            'name' => 'Otros Segmentos Industriales',
            'slug' => Str::slug('otros-segmentos-industriales'),
            'enabled' => true
        ]);

        //Subcategorias Agricola
        $category = Category::where('slug', 'agricola')->first()?->id;

        Category::create([
            'parent_id' => $category,
            'name' => 'Frutas o Verduras Congelada',
            'slug' => Str::slug('frutas-o-verduras-congelada'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Frutas o Verduras Deshidratadas',
            'slug' => Str::slug('frutas-o-verduras-deshidratadas'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Frutas o Verduras Frescas',
            'slug' => Str::slug('frutas-o-verduras-frescas'),
            'enabled' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Otros Agrícolas',
            'slug' => Str::slug('otros-agricolas'),
            'enabled' => true
        ]);

        //Subcategorias Proteina
        $category = Category::where('slug', 'proteina')->first()?->id;

        Category::create([
            'parent_id' => $category,
            'name' => 'Carnes y Derivados',
            'slug' => 'carnes-y-derivados',
            'enable' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Huevos',
            'slug' => 'huevos',
            'enable' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Pescados y Mariscos',
            'slug' => 'pescados-y-mariscos',
            'enable' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Pollos y Derivados',
            'slug' => 'pollos-y-derivados',
            'enable' => true
        ]);

        Category::create([
            'parent_id' => $category,
            'name' => 'Otras Proteínas',
            'slug' => 'otras-proteinas',
            'enable' => true
        ]);

        //Categorias
        Category::create([
            'name' => 'Industria, Comercio y Delivery',
            'slug' => Str::slug('industria-comercio-y-delivery'),
            'description' => 'Alimentos preparados, delivery, aseo y limpieza, vinos, lácteos y otros',
            'enabled' => true
        ]);

        Category::create([
            'name' => 'Agrícola',
            'slug' => Str::slug('agricola'),
            'description' => 'Frutas y verduras frescas, congeladas y deshidratadas',
            'enabled' => true
        ]);

        Category::create([
            'name' => 'Proteínas',
            'slug' => Str::slug('proteinas'),
            'description' => 'Carnes, pollos, pescados, mariscos, huevos y derivados',
            'enabled' => true
        ]);
    }
}
