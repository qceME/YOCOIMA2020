<?php

use Illuminate\Database\Seeder;
use App\Actividad;


class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        DB::table('actividads')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
        Actividad::create([
            'titulo'=>'Plantacion bosque',
            'leida'=>'0',
            'fecha'=>'2020-06-13',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Alimentacion animales callejeros',
            'leida'=>'0',
            'fecha'=>'2020-05-21',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Alimentacion personas sin hogar',
            'leida'=>'0',
            'fecha'=>'2020-04-15',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Bosque recogida residuos',
            'leida'=>'0',
            'fecha'=>'2020-08-01',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Playa recogida residuos',
            'leida'=>'0',
            'fecha'=>'2020-06-21',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Playa recogida residuos',
            'leida'=>'0',
            'fecha'=>'2009-06-11',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Bosque recogida residuos',
            'leida'=>'0',
            'fecha'=>'2020-08-21',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Alimentacion personas sin hogar',
            'leida'=>'0',
            'fecha'=>'2020-10-21',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Playa recogida residuos',
            'leida'=>'0',
            'fecha'=>'2020-12-31',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
        Actividad::create([
            'titulo'=>'Alimentacion animales callejeros',
            'leida'=>'0',
            'fecha'=>'2019-05-21',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum at odio eget tristique. Aenean sed lectus eu ligula elementum fringilla. Sed vestibulum arcu arcu, ut rutrum lectus convallis non. Nunc eu condimentum risus. Fusce sit amet velit augue. Curabitur aliquam tempor mauris et vulputate. Proin rhoncus dolor eu purus lobortis, at faucibus turpis elementum. '
        ]);
    }
}
