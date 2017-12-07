<?php

use Illuminate\Database\Seeder;
use \App\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type1 = new Type();
        $type1->name ='Solicitud de aval de condonacion';
        $type1->description='Solicitud de aval para proyecto o practicas para condonacion de fondo';
        $type1->requiredDocs=1;
        $type1->save();

        $type2= new Type();
        $type2->name ='Solicitud de condonacion';
        $type2->description='Solicitud de condonacion de credito-beca y muestra de evidencias de proyecto o practica';
        $type2->requiredDocs=5;
        $type2->save();
    }
}
