<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json =file_get_contents(database_path('seeders/json/user.json'));
        $data = json_decode($json);

        foreach ($data as $obj) {
            User::create([
                'name' => $obj->name,
                'address' => $obj->address,
                'phone' => $obj->phone,
                'email' => $obj->email,
                'password' => bcrypt($obj->password),
                'age' => $obj->age,
                'role' => $obj->role,
            ]);
        }

    }
}
