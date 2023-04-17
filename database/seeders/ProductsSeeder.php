<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('Products')->insert([
        [
            'name' => 'Collar De Oro Solido De 14k',
            'description' => 'Collar De Oro Solido De 14k Certificado 42cm Longitud- Oro amarillo 14k',
            'price' => 1500,
            'stock' => 25,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQfBjyLpNMhct8OHLJkLouu9PX0tLRIJNQw6G-RexTa71bgFArmWgpAyG80G0luqBQ-Woj13aTFd86S1E4ZMnXxFBJsEKcCMQ&usqp=CAY',
            'category_id' => 1    
        ],
        [
            'name' => 'Pendiente aro zafiro diamantes oro blanco',
            'description' => 'Pendiente aro con zafiro en talla brillante de 3,5 mm. y 11 diamantes en talla brillante de 0,9 mm. Colección Great Three.Diámetro externo aproximado 1,07 cm. Cierre invisible.A la venta en unidades individuales.',
            'price' => 8200,
            'stock' => 15,
            'product_image' => 'https://cdn.shopify.com/s/files/1/0632/6776/6501/products/J04075-01-BS-H.jpg?v=1657343070&width=1024',
            'category_id' => 2    
        ],
        [
            'name' => 'Pulsera de oro de 18 quilates para hombre',
            'description' => 'Material coreano. Chapado en 18 K, tecnología de aleación: galvanoplastia, categoría de pintura: Estilo de pulsera: Regalo para hombres ocasiones: boda, beneficios para empleados. Paquete: 1 pulsera para hombre.',
            'price' => 1000,
            'stock' => 42,
            'product_image' => 'https://m.media-amazon.com/images/I/61Xpju2KTQL._AC_SL1200_.jpg',
            'category_id' => 3    
        ],
        [
            'name' => 'ANILLO DE COMPROMISO HALO Y PAVÉ',
            'description' => 'Anillo de Compromiso "Nova" Estilo Halo y Pavé de Diamantes con ancho de 1.7mm. Incluye 0.20qt de Diamantes en la Montura más el Diamante Central Cultivado de laboratorio de 0.30qt Color F Claridad VVS2.  El precio ya incluye el Diamante Central, la montura y la caja para entrega. Disponible en oro rosa, blanco, amarillo y platino o con diamantes de mayores dimensiones con certificado GIA o IGI en la sección de arma tu anillo.',
            'price' => 23990,
            'stock' => 11,
            'product_image' => 'https://cdn.shopify.com/s/files/1/0036/6401/9556/products/anillo-de-compromiso-halo-pave-exclusivo-1-7mm-oro-blanco-14k-5-jpg_ff885117-ea7b-485c-bf55-757f3711c319_800x.jpg?v=1647471422',
            'category_id' => 4    
        ],
        [
            'name' => 'Gemelos redondos de diamantes y piedras',
            'description' => 'Un clásico este modelo de gemelos, donde el centro va engastado de diamantes y se ha orlado de piedras talla baguette. El mecanismo tipo submarino le dá empaque a la joya.',
            'price' => 35500.90,
            'stock' => 3,
            'product_image' => 'https://www.marfiljoyeros.com/media/catalog/product/cache/6e1bee5a479619afe26250d72275ba98/7/5/75ge23_1.jpg',
            'category_id' => 5    
        ],
        [
            'name' => 'Brazalete de diamantes dispersos',
            'description' => 'Este sensacional brazalete reclama atención y envidia con sus 7 quilates totales de diamantes dispersos, para lucir la belleza y el brillo de los diamantes en cada movimiento.',
            'price' => 122550.90,
            'stock' => 1,
            'product_image' => 'https://bnsec.bluenile.com/bluenile/is/image/bluenile/-jewelry/bracelets/diamond-scattered-bracelet-in-14k-white-gold-/70896_main?$phab_detailmain$',
            'category_id' => 6    
        ],
        [
            'name' => 'Bronce Oro Colibrí',
            'description' => 'Broche de colibri compuesto de oro 24k y diamantes incrustados',
            'price' => 15600,
            'stock' => 5,
            'product_image' => 'https://m.media-amazon.com/images/I/61N2I4hymbL._AC_UY575_.jpg',
            'category_id' => 7    
        ],
        
    ]);
    }
}
