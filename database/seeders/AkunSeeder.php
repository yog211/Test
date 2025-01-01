<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
  /**
  * Run the database seeds.
  */
  public function run() {
    $user = User::create([
      'username' => 'uas',
      'password' => Hash::make('1234')
    ]);
  }
}