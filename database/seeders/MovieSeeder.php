<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        Movie::create([
            'title' => 'Horizonte Perdido',
            'synopsis' => 'Un grupo de exploradores descubre una ciudad abandonada en medio del desierto.',
            'year' => 2020,
            'cover' => 'horizonte-perdido.jpg',
        ]);

        Movie::create([
            'title' => 'Código Nocturno',
            'synopsis' => 'Una programadora descubre un código oculto dentro de un sistema empresarial.',
            'year' => 2021,
            'cover' => 'codigo-nocturno.jpg',
        ]);

        Movie::create([
            'title' => 'Última Señal',
            'synopsis' => 'Una señal desconocida comienza a transmitirse desde una estación espacial abandonada.',
            'year' => 2019,
            'cover' => 'ultima-senal.jpg',
        ]);

        Movie::create([
            'title' => 'Ciudad de Cristal',
            'synopsis' => 'Una joven intenta descubrir los secretos de una ciudad donde toda la información es vigilada.',
            'year' => 2022,
            'cover' => 'ciudad-cristal.jpg',
        ]);

        Movie::create([
            'title' => 'La Ruta Invisible',
            'synopsis' => 'Dos viajeros encuentran un camino que no aparece en ningún mapa.',
            'year' => 2018,
            'cover' => 'ruta-invisible.jpg',
        ]);

        Movie::create([
            'title' => 'Frecuencia Cero',
            'synopsis' => 'Un técnico intercepta una transmisión que parece provenir del futuro.',
            'year' => 2023,
            'cover' => 'frecuencia-cero.jpg',
        ]);

        Movie::create([
            'title' => 'Memoria Artificial',
            'synopsis' => 'Una investigadora desarrolla un sistema capaz de almacenar recuerdos humanos digitalmente.',
            'year' => 2024,
            'cover' => 'memoria-artificial.jpg',
        ]);

        Movie::create([
            'title' => 'Después de Medianoche',
            'synopsis' => 'Una serie de acontecimientos inexplicables comienza cada noche a medianoche.',
            'year' => 2017,
            'cover' => 'despues-medianoche.jpg',
        ]);

        Movie::create([
            'title' => 'El Último Archivo',
            'synopsis' => 'Un periodista encuentra un archivo digital relacionado con una investigación desaparecida.',
            'year' => 2021,
            'cover' => 'ultimo-archivo.jpg',
        ]);

        Movie::create([
            'title' => 'Ecos del Sistema',
            'synopsis' => 'Una especialista en seguridad informática investiga accesos desconocidos dentro de una red.',
            'year' => 2025,
            'cover' => 'ecos-sistema.jpg',
        ]);
    }
}