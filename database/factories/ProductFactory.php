<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_code' => fake()->unique()->regexify('[0-9]{10}'),
            'name_product' => fake('th_TH')->word(),
            'detail_product' => fake('th_TH')->sentence(3), // สร้างประโยคภาษาไทย 3 ประโยค
            'price' => fake()->randomFloat(2, 100, 1000), // ราคาสุ่มระหว่าง 100-1000, ทศนิยม 2 ตำแหน่ง
            'quantity' => fake()->numberBetween(1, 100), // จำนวนคงเหลือสุ่มระหว่าง 1-100
        ];
    }
}
