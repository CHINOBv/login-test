<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->create_user([
            'name' => 'Mario',
            'email' => 'c@c.com',
            'address' => 'Leon #2213, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Pepe',
            'email' => 'c2@c.com',
            'address' => 'Leon #2213, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Paquito',
            'email' => 'c3@c.com',
            'address' => 'Leon #23111, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Orlando',
            'email' => 'c4@c.com',
            'address' => 'Gijon, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Katia',
            'email' => 'c5@c.com',
            'address' => 'Oportp #982, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Itzel',
            'email' => 'c6@c.com',
            'address' => 'Oport #92, CP: 3323',
        ]);

        $this->create_user([
            'name' => 'Paco',
            'email' => 'c7@c.com',
            'address' => 'Laks #982, CP: 3323',
        ]);
    }

    private function create_user($user)
    {
        User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'phone' => $this->generate_number_phone(),
            'address' => $user['address'],
            'password' => Hash::make('asdfasdf'),
        ]);
    }

    private function generate_number_phone()
    {
        $number = '';
        $count = 0;
        while ($count <= 10) {
            $random_digit = mt_rand(0, 8);
            $number .= $random_digit;
            $count++;
        }
        return $number;
    }
}
