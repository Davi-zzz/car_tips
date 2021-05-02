<?php

use App\Person;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = Person::create([
            'name' => 'Super Admin',
            'email' => 'admin@project.com',
            'nickname' => 'Super Admin',
            'nif' => '000.000.000-01',
            'phone' => null,
            'address' => 'quadra 604 sul, alameda 06, lote x',
            'zip_code' => '77022-000',
        ]);

        $user = User::create([
            'person_id' => $person->id,
            'email' => 'admin@project.com',
            'password' => bcrypt('1234567o')
        ]);

        $user->assignRole('super_administrador');

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('User '.$user->name.' created');
    }
}