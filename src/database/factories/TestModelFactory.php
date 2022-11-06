<?php
namespace Nokanoki\HelloWorldLaravelPackage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nokanoki\HelloWorldLaravelPackage\Models\TestModel;

class TestModelFactory extends Factory
{
    protected $model = TestModel::class;
    public function definition()
    {
        return [];
    }
}