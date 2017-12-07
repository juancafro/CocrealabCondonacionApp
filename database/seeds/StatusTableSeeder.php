<?php

use Illuminate\Database\Seeder;
use \App\Status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status1 = new Status();
        $status1->name ='pendiente';
        $status1->description='pendiente por revision';
        $status1->save();

        $status2 = new Status();
        $status2->name ='aprobadoCC';
        $status2->description='Aprobado por CocreaLab';
        $status2->save();

        $status3 = new Status();
        $status3->name ='AprobadoMT';
        $status3->description='Aprobado por Min Tic';
        $status3->save();

        $status4 = new Status();
        $status4->name ='rechazado';
        $status4->description='peticion rechazada';
        $status4->save();

    }
}
