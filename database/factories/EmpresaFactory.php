<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'rfc_empresa'=> fake()->regexify('[A-Z]{4}\d{6}[A-Z0-9]{3}'),
            'nombre_empresa'=> fake()->company,
            'cod_postal'=> fake()->postcode,
            'cod_regimen_fiscal' => fake()->randomElement(['Regimen1', 'Regimen2', 'Regimen3']),
            'timbres_usados' => fake()->numberBetween(0, 100),
            'timbres_disponibles' => fake()->numberBetween(0, 100),
            'fecha_reg' => fake()->dateTimeThisDecade,

        ];
    }
}
