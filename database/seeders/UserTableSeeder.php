<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Apaga toda a tabela de usuários
        DB::table('users')->truncate();

        //Cria usuários admins (dados controlados)
        $this->createAdmins();

        //Cria usuários demo (dados faker)
        $this->createUsers();
    }

    private function createAdmins()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@lance.com.br',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        //Exibi uma informação no console durante o processo de seed
        $this->command->info('User admin@lance.com.br created');

        User::create([
            'name' => 'Ralny Andrade',
            'email' => 'ralnyandrade@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        //Exibi uma informação no console durante o processo de seed
        $this->command->info('User ralnyandrade@gmail.com created');

    }

    private function createUsers()
    {
        User::factory(30)->create();

        //Exibi uma informação no console durante o processo de seed
        $this->command->info('Users "fakes" created');
    }

}
