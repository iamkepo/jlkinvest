<?php

namespace Database\Seeders;

use App\Models\Activite;
use App\Models\Prospect;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Administrateur'],
            ['name' => 'Commerciale']
        ]);

        DB::table('categories_produits')->insert([
            ['name' => 'OPVCM'],
            ['name' => 'TITRES']
        ]);

        DB::table('type_produits')->insert([
            [
                'name' => 'SICAV',
                'categories_produits_id' => 1
            ],
            [
                'name' => 'FONDS OBLIGATAIRE',
                'categories_produits_id' => 1
            ],
            [
                'name' => 'FONDS ACTIONS',
                'categories_produits_id' => 1
            ],
            [
                'name' => 'FONDS DIVESIFIES',
                'categories_produits_id' => 1
            ],
            [
                'name' => 'FONDS MONETAIRE',
                'categories_produits_id' => 1
            ],
            [
                'name' => 'OBLIGATIONS SOUVERAINES ETAT',
                'categories_produits_id' => 2
            ],
            [
                'name' => 'OBLIGATION ASSIMILABLE DU TRESOR',
                'categories_produits_id' => 2
            ],
            [
                'name' => 'OBLIGATION ENTREPRISE',
                'categories_produits_id' => 2
            ]
        ]);
        $user = User::factory(20)->create()->each( function ($user){
            Prospect::factory(rand(1,100))->create([
                    'user_id' => $user->id,
                ])->each(function($prospect) {
                    Activite::factory(rand(1,10))->create([
                        'reference' => 'ref_'.$prospect->user->id.'_'.$prospect->id.'_'.$this->faker->unique(),
                        'prospect_id' => $prospect->id,
                        'user_id' => $prospect->user->id,
                    ]);
                });
        });
    }
}
