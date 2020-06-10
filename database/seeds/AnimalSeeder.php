<?php

use Illuminate\Database\Seeder;
use App\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        DB::table('animals')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
        Animal::create([
            'name'=>'Piccolo',
            'especie'=>'perro',
            'edad'=>'5',
            'observaciones'=>'Vacunas puestas',
            
        ]);
        Animal::create([
            'name'=>'Rodolfo',
            'especie'=>'pato',
            'foto'=>'images/catalogo/pato.jpg',

            'edad'=>'1',
            'observaciones'=>'ala rota',
            
        ]);
        Animal::create([
            'name'=>'Perry',
            'especie'=>'ornitorrinco',
            'edad'=>'3',
            'observaciones'=>'Detective en sus ratos libres',
            
        ]);
        Animal::create([
            'name'=>'Paco',
            'especie'=>'reptil',
            'foto'=>'images/catalogo/iguana.jpg',
            'edad'=>'0',
            'observaciones'=>'Paco es una iguana recien nacida de unos 3 meses',
            
        ]);
        Animal::create([
            'name'=>'Lucia y Eustaquio',
            'especie'=>'Ave',
            'foto'=>'images/catalogo/agapornis.jpg',

            'edad'=>'0',
            'observaciones'=>'Lucia y Eustaquio es una pareja de agapornis inseparables',
            
        ]);
        Animal::create([
            'name'=>'Luffy',
            'especie'=>'perro',
            'edad'=>'2',
            'observaciones'=>'Luffy es un Mastin de 2 añitos de edad muy noble y leal',
            
        ]);
        Animal::create([
            'name'=>'Nami',
            'especie'=>'gato',
            'edad'=>'32',
            'observaciones'=>'Nami es una gatita anaranjada un poco traviesa pero muy cariñosa',
            
        ]);
        Animal::create([
            'name'=>'Bob',
            'especie'=>'simio',
            'edad'=>'1',
            'observaciones'=>'Bob es un mono huérfano que daría todo por su amo, noble como el solo aunque con las hormonas un poco revolucionadas',
            
        ]);
        Animal::create([
            'name'=>'Maria',
            'especie'=>'perro',
            'edad'=>'3',
            'observaciones'=>'Vacunas puestas y chip',
            
        ]);
        Animal::create([
            'name'=>'Pepe',
            'especie'=>'pato',
            'edad'=>'12',
            'observaciones'=>'alas rotar',
            
        ]);
        Animal::create([
            'name'=>'Bobobó',
            'especie'=>'ornitorrinco',
            'edad'=>'23',
            'observaciones'=>'Detective en sus ratos libres y actor',
            
        ]);
        Animal::create([
            'name'=>'Heineken',
            'especie'=>'reptil',
            'edad'=>'10',
            'observaciones'=>'Heineken es una iguana recien nacida de unos 3 meses',
            
        ]);
        Animal::create([
            'name'=>'Cristina y Aurelio',
            'especie'=>'Ave',
            'edad'=>'6',
            'observaciones'=>'Cristina y Aurelio es una pareja de agapornis inseparables',
            
        ]);
        Animal::create([
            'name'=>'Luffy',
            'especie'=>'perro',
            'edad'=>'12',
            'observaciones'=>'Luffy es un Mastin de 2 añitos de edad muy noble y leal',
            
        ]);
        Animal::create([
            'name'=>'Nami',
            'especie'=>'gato',
            'edad'=>'8',
            'observaciones'=>'Nami es una gatita anaranjada un poco traviesa pero muy cariñosa',
            
        ]);
        Animal::create([
            'name'=>'Bob',
            'especie'=>'simio',
            'foto'=>'images/catalogo/mono.jpg',

            'edad'=>'21',
            'observaciones'=>'Bob es un mono huérfano que daría todo por su amo, noble como el solo aunque con las hormonas un poco revolucionadas',
            
        ]);
        Animal::create([
            'name'=>'Piccolo',
            'especie'=>'perro',
            'edad'=>'5',
            'observaciones'=>'Vacunas puestas',
            
        ]);
        Animal::create([
            'name'=>'Rodolfo',
            'especie'=>'pato',
            'edad'=>'11',
            'observaciones'=>'ala rota',
            
        ]);
        Animal::create([
            'name'=>'Perry',
            'especie'=>'ornitorrinco',
            'edad'=>'3',
            'observaciones'=>'Detective en sus ratos libres',
            
        ]);
        Animal::create([
            'name'=>'Paco',
            'especie'=>'reptil',
            'edad'=>'6',
            'observaciones'=>'Paco es una iguana recien nacida de unos 3 meses',
            
        ]);
        Animal::create([
            'name'=>'Lucia y Eustaquio',
            'especie'=>'Ave',
            'edad'=>'2',
            'observaciones'=>'Lucia y Eustaquio es una pareja de agapornis inseparables',
            
        ]);
        Animal::create([
            'name'=>'Luffy',
            'especie'=>'perro',
            'edad'=>'2',
            'observaciones'=>'Luffy es un Mastin de 2 añitos de edad muy noble y leal',
            
        ]);
        Animal::create([
            'name'=>'Nami',
            'especie'=>'gato',
            'edad'=>'2',
            'observaciones'=>'Nami es una gatita anaranjada un poco traviesa pero muy cariñosa',
            
        ]);
        Animal::create([
            'name'=>'Bob',
            'especie'=>'simio',
            
            'edad'=>'1',
            'observaciones'=>'Bob es un mono huérfano que daría todo por su amo, noble como el solo aunque con las hormonas un poco revolucionadas',
            
        ]);
    }
}
