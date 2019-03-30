<?php

use Illuminate\Database\Seeder;
use App\InputComponent;
class InputComponentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        InputComponent::create([
            'name'=>'Date',
            'value'=>'12/10/2019',
            'component_id'=>1
        ]);
        InputComponent::create([
            'name'=>'Wo No.',
            'value'=>'W001',
            'component_id'=>1
        ]);
        InputComponent::create([
            'name'=>'Refisi SR',
            'value'=>'Refisi001',
            'component_id'=>1
        ]);
    }
}
