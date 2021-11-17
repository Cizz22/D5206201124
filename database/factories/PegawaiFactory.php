<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();
$factory->define(Pegawai::class, function (Faker $faker) use ($autoIncrement){
    $autoIncrement->next();
    return [
        'pegawai_id' => $autoIncrement->current(),
        'pegawai_nama' => $faker->name,
        'pegawai_jabatan' => $faker->jobTitle,
        'pegawai_umur' => $faker->numberBetween(20, 50) ,
        'pegawai_alamat' => $faker->address
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
