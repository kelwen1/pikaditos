<?php

namespace App\Services;

class MenuData
{
    public static function secciones(): array
    {
        return [
            'picadas' => [
                'titulo' => 'Picadas',
                'slug' => 'picadas',
                'items' => [
                    ['nombre' => 'PK1 (3 personas)', 'desc' => 'Chicharrón Ranchera, Tocineta, Chorizo, Ensalada, Papa, Maduritos, Queso, Salsas', 'precio' => '$38.000'],
                    ['nombre' => 'PK2 (4 personas)', 'desc' => 'Pollo Desmechada, Chorizo, Costilla, Papa, Maduritos, Queso, Ensalada, Salsas', 'precio' => '$48.000'],
                    ['nombre' => 'PK3 (6 personas)', 'desc' => 'Pollo, Costilla, Chorizo, Butifarra, Salchicha, Tocineta, Desmechada, Papas, Maduritos, Queso, Ensalada, Salsas', 'precio' => '$72.000'],
                    ['nombre' => 'Picada Tradicional', 'desc' => 'Pollo, Desmechada, Costilla, Chorizo, Ensalada, Salsas', 'precio' => '$48.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=400&q=80',
            ],
            'paquetazo' => [
                'titulo' => 'Paquetazo',
                'slug' => 'paquetazo',
                'items' => [
                    ['nombre' => 'Paquetazo Doritos', 'desc' => 'Desmechada, Butifarra, Salchicha, Pollo chicharrón, Maduritos, Queso, Tocineta, Salsas', 'precio' => '$22.000'],
                    ['nombre' => 'Paquetazo Papas de Limón', 'desc' => 'Armalo a tu gusto', 'precio' => '$20.000'],
                    ['nombre' => 'Paquetazo Papas Naturales y BBQ', 'desc' => 'Armalo a tu gusto', 'precio' => '$20.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&q=80',
            ],
            'comidas-rapidas' => [
                'titulo' => 'Comidas rápidas',
                'slug' => 'comidas-rapidas',
                'items' => [
                    ['nombre' => 'Fusión PK', 'desc' => 'Desmechada, Butifarra, Salchicha, Pollo o chicharrón, Maduritos, Queso, Tocineta, Papas, Salsas', 'precio' => '$25.000'],
                    ['nombre' => 'Hamburguesa PK', 'desc' => 'Carne de la casa, Lechuga, Tomate, Brevas, Caramelizada, Pan, Papas', 'precio' => '$22.000'],
                    ['nombre' => 'Hamburguesa Doble Carne', 'desc' => 'Carne de la casa, Lechuga, Tomate, Brevas caramelizada, Pan, Papas', 'precio' => '$28.000'],
                    ['nombre' => 'Perro PK', 'desc' => 'Pan, Tocineta, Carne desmechada, Salchicha, Queso, Papas', 'precio' => '$15.000'],
                    ['nombre' => 'Perro Común', 'desc' => 'Pan, Salchicha, Tocineta, Queso', 'precio' => '$11.000'],
                    ['nombre' => 'Salchipapa PK', 'desc' => 'Papas, Salchicha, Maduritos, Huevos codorniz, Queso', 'precio' => '$17.000'],
                    ['nombre' => 'Salchipapa Surtida', 'desc' => 'Papas, Salchicha, Tocineta, Huevos, Queso', 'precio' => '$20.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&q=80',
            ],
            'carnes' => [
                'titulo' => 'Carnes',
                'slug' => 'carnes',
                'items' => [
                    ['nombre' => 'Churrasco', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$30.000'],
                    ['nombre' => 'Punta de Anca', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$30.000'],
                    ['nombre' => 'Solomito', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$30.000'],
                    ['nombre' => 'Cañón de Cerdo', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$27.000'],
                    ['nombre' => 'Pechuga Filete', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$26.000'],
                    ['nombre' => 'Costilla Ahumada BBQ', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$30.000'],
                    ['nombre' => 'Chuzo de Pollo', 'desc' => 'Papa o patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$24.000'],
                    ['nombre' => 'Chorizo PK', 'desc' => 'Papa o Patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$15.000'],
                    ['nombre' => 'Chicharrón al Barril', 'desc' => 'Papas o Patacón, Maduritos, Queso, Ensalada, Salsa de la casa', 'precio' => '$27.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=400&q=80',
            ],
            'coctel-cremosos' => [
                'titulo' => 'Cóctel cremosos',
                'slug' => 'coctel-cremosos',
                'items' => [
                    ['nombre' => 'Piña Colada', 'desc' => 'Ron blanco, Piña, Crema de coco', 'precio' => '$16.000'],
                    ['nombre' => 'Cremoso de Maracuyá', 'desc' => 'Ron blanco, Leche condensada, Maracuyá, Hielo', 'precio' => '$16.000'],
                    ['nombre' => 'Cremoso de Fresa', 'desc' => 'Ron blanco, Leche condensada, Fresas', 'precio' => '$16.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1551538827-9c037cb4f32a?w=400&q=80',
            ],
            'coctel' => [
                'titulo' => 'Cóctel',
                'slug' => 'coctel',
                'items' => [
                    ['nombre' => 'Frutos Rojos', 'desc' => 'Vodka, Agua mineral, Frutos rojos fresco, Sirope, Decoración', 'precio' => '$12.000'],
                    ['nombre' => 'Frutos Amarillos', 'desc' => 'Vodka, Frutas frescas (Naranja, Piña, Mango)', 'precio' => '$12.000'],
                    ['nombre' => 'Mango Biche', 'desc' => 'Vodka, mango verde', 'precio' => '$12.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=400&q=80',
            ],
            'coctel-refrescante' => [
                'titulo' => 'Cóctel refrescante',
                'slug' => 'coctel-refrescante',
                'items' => [
                    ['nombre' => 'Orgasm', 'desc' => 'Cóctel refrescante', 'precio' => '$18.000'],
                    ['nombre' => 'Margarita Tradicional', 'desc' => 'Clásica margarita', 'precio' => '$18.000'],
                    ['nombre' => 'Margarita de Coronita', 'desc' => 'Margarita con cerveza', 'precio' => '$18.000'],
                    ['nombre' => 'Sangría', 'desc' => 'Vino y frutas', 'precio' => '$15.000'],
                    ['nombre' => 'Jarra de Sangría', 'desc' => 'Para compartir', 'precio' => '$40.000'],
                    ['nombre' => 'Mojito Tradicional', 'desc' => 'Ron, menta, limón', 'precio' => '$18.000'],
                    ['nombre' => 'Mojito Fresa', 'desc' => 'Ron, menta, fresa', 'precio' => '$18.000'],
                    ['nombre' => 'Mojito Maracuyá', 'desc' => 'Ron, menta, maracuyá', 'precio' => '$18.000'],
                    ['nombre' => 'Tinto de Verano', 'desc' => 'Refrescante', 'precio' => '$16.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&q=80',
            ],
            'bebidas' => [
                'titulo' => 'Bebidas',
                'slug' => 'bebidas',
                'items' => [
                    ['nombre' => 'Cerveza Corona', 'desc' => '', 'precio' => '$5.000'],
                    ['nombre' => 'Cerveza Pilsen', 'desc' => '', 'precio' => '$4.500'],
                    ['nombre' => 'Cerveza Águila', 'desc' => '', 'precio' => '$4.500'],
                    ['nombre' => 'Cerveza Light', 'desc' => '', 'precio' => '$4.500'],
                    ['nombre' => 'Canada Dry', 'desc' => '', 'precio' => '$4.000'],
                    ['nombre' => 'Bretaña P.', 'desc' => '', 'precio' => '$4.000'],
                    ['nombre' => 'Coca Cola', 'desc' => '', 'precio' => '$7.000'],
                    ['nombre' => 'Gaseosas Personal', 'desc' => '', 'precio' => '$4.000'],
                    ['nombre' => 'Gaseosas Surtidas 1.5L', 'desc' => '', 'precio' => '$7.000'],
                    ['nombre' => 'Agua en Botella', 'desc' => '', 'precio' => '$3.000'],
                    ['nombre' => 'Copa de Vino', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Trago de Ron', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Trago de Tequila', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Trago de Vodka', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Trago Baileys', 'desc' => '', 'precio' => '$10.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&q=80',
            ],
            'sodas-saborizadas' => [
                'titulo' => 'Sodas saborizadas',
                'slug' => 'sodas-saborizadas',
                'items' => [
                    ['nombre' => 'Fresas', 'desc' => '', 'precio' => '$14.000'],
                    ['nombre' => 'Maracuyá', 'desc' => '', 'precio' => '$13.000'],
                    ['nombre' => 'Mango Verde', 'desc' => '', 'precio' => '$13.000'],
                    ['nombre' => 'Frutos Rojos', 'desc' => '', 'precio' => '$15.000'],
                    ['nombre' => 'Manzana Verde', 'desc' => '', 'precio' => '$15.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&q=80',
            ],
            'granizados' => [
                'titulo' => 'Granizados',
                'slug' => 'granizados',
                'items' => [
                    ['nombre' => 'Limonada Cereza', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Tamarindo', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Maracuyá', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Escarchado Limón', 'desc' => '', 'precio' => '$8.000'],
                    ['nombre' => 'Fresa', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Níspero', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Piña', 'desc' => '', 'precio' => '$8.000'],
                    ['nombre' => 'Lulo', 'desc' => '', 'precio' => '$8.000'],
                    ['nombre' => 'Lichi', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Corozo', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Mango', 'desc' => '', 'precio' => '$9.000'],
                    ['nombre' => 'Mandarina', 'desc' => '', 'precio' => '$8.000'],
                    ['nombre' => 'Naranja', 'desc' => '', 'precio' => '$8.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1621263764928-df1444c5e859?w=400&q=80',
            ],
            'micheladas' => [
                'titulo' => 'Micheladas',
                'slug' => 'micheladas',
                'items' => [
                    ['nombre' => 'Cervezas', 'desc' => '', 'precio' => '$12.000'],
                    ['nombre' => 'Canada Dry', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Maracuyá', 'desc' => '', 'precio' => '$13.000'],
                    ['nombre' => 'Mango Verde', 'desc' => '', 'precio' => '$15.000'],
                    ['nombre' => 'Cereza', 'desc' => '', 'precio' => '$15.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1536935338788-846bb9981813?w=400&q=80',
            ],
            'jugos-leche' => [
                'titulo' => 'Jugos en leche',
                'slug' => 'jugos-leche',
                'items' => [
                    ['nombre' => 'Fresa', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Níspero', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Mango', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Avena Cremosa', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Piña', 'desc' => '', 'precio' => '$10.000'],
                    ['nombre' => 'Maracuyá', 'desc' => '', 'precio' => '$10.000'],
                ],
                'img' => 'https://images.unsplash.com/photo-1623065422902-30a2d299bbe4?w=400&q=80',
            ],
        ];
    }

    public static function getSeccion(string $slug): ?array
    {
        return self::secciones()[$slug] ?? null;
    }
}
