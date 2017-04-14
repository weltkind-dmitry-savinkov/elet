<?php

namespace App\Modules\Slider\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Modules\Slider\Models\Slider as Model;

class Slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::create(
            [
                [
                    'lang'          => 'ru',
                    'title'         => 'First slide',
                    'title_size'    => '24px',
                    'title_color'   => '#00ff00',
                    'text'          => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает 
                                        сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более 
                                        или менее стандартное заполнение шаблона, а также реальное распределение букв 
                                        и пробелов в абзацах, которое не получается при простой дубликации 
                                        "Здесь ваш текст..',
                    'text_size'     => '13px',
                    'text_color'    => '#00ff00',
                    'button'        => 'Читать далее',
                    'button_size'   => 'small',
                    'button_color'  => '#00ff00',
                    'href'          => 'http://ru.lipsum.com',
                    'href_type'     => 'in',
                    'image'         => 'slide1.jpg',
                    'views'         => 0,
                    'priority'      => 0,
                    'published'        => 1,
                ]
            ]
        );
    }
}
