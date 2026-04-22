<?php

namespace Database\Seeders;

use App\Models\Departmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departmen::create(['name'=>'Sistem Informasi']);
        Departmen::create(['name'=>'Teknik Informatika']);
        Departmen::create(['name'=>'Bisnis Digital']);
        Departmen::create(['name'=>'Pendidikan Teknologi Informasi']);
        Departmen::create(['name'=>'Teknologi Informasi']);
        Departmen::create(['name'=>'Magister komputer']);
    }
}
