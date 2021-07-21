<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Seeder;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = new menu();

        $menu->nombreProducto = "Taco Arabe";
        $menu->precio = "21";

        $menu->save();

        $menu1 = new menu();
        $menu1->nombreProducto = "Taco Arabe con queso";
        $menu1->precio = "28";

        $menu1->save();

        $menu2 = new menu();
        $menu2->nombreProducto = "Taco Oriental";
        $menu2->precio = "10";

        $menu2->save();

        $menu3 = new menu();
        $menu3->nombreProducto = "Gringa";
        $menu3->precio = "40";

        $menu3->save();

        $menu4 = new menu();
        $menu4->nombreProducto = "Torta";
        $menu4->precio = "21";

        $menu4->save();

        $menu5 = new menu();
        $menu5->nombreProducto = "Torta con queso";
        $menu5->precio = "28";

        $menu5->save();

        $menu6 = new menu();
        $menu6->nombreProducto = "Refresco";
        $menu6->precio = "14";

        $menu6->save();

        $menu7 = new menu();
        $menu7->nombreProducto = "Flan";
        $menu7->precio = "9";

        $menu7->save();
    }
}
