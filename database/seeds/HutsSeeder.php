<?php

use Illuminate\Database\Seeder;

use App\Huts;

class HutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Huts::truncate();

        Huts::create(['id' => '1', 'name' => 'Lyrebird', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '2', 'name' => 'Lyrebird', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '3', 'name' => 'Lyrebird', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '4', 'name' => 'Lyrebird', 'number' => '4', 'beds' => '6']);
        Huts::create(['id' => '5', 'name' => 'Lyrebird', 'number' => '5', 'beds' => '6']);
        Huts::create(['id' => '6', 'name' => 'Kookaburra', 'number' => '1', 'beds' => '2']);
        Huts::create(['id' => '7', 'name' => 'Kookaburra', 'number' => '2', 'beds' => '2']);
        Huts::create(['id' => '8', 'name' => 'Kookaburra', 'number' => '3', 'beds' => '2']);
        Huts::create(['id' => '9', 'name' => 'Kookaburra', 'number' => '4', 'beds' => '2']);
        Huts::create(['id' => '10', 'name' => 'Kingfisher', 'number' => '1', 'beds' => '3']);
        Huts::create(['id' => '11', 'name' => 'Kingfisher', 'number' => '2', 'beds' => '3']);
        Huts::create(['id' => '12', 'name' => 'Kingfisher', 'number' => '3', 'beds' => '3']);
        Huts::create(['id' => '13', 'name' => 'Cockatoo', 'number' => '1', 'beds' => '4']);
        Huts::create(['id' => '14', 'name' => 'Cockatoo', 'number' => '2', 'beds' => '4']);
        Huts::create(['id' => '15', 'name' => 'Magpie', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '16', 'name' => 'Magpie', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '17', 'name' => 'Magpie', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '18', 'name' => 'Magpie', 'number' => '4', 'beds' => '6']);
        Huts::create(['id' => '19', 'name' => 'Lorikeet', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '20', 'name' => 'Lorikeet', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '21', 'name' => 'Lorikeet', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '22', 'name' => 'Lorikeet', 'number' => '4', 'beds' => '6']);
        Huts::create(['id' => '23', 'name' => 'Goanna', 'number' => '1', 'beds' => '4']);
        Huts::create(['id' => '24', 'name' => 'Goanna', 'number' => '2', 'beds' => '4']);
        Huts::create(['id' => '25', 'name' => 'Blue Tounge', 'number' => '1', 'beds' => '3']);
        Huts::create(['id' => '26', 'name' => 'Blue Tounge', 'number' => '2', 'beds' => '3']);
        Huts::create(['id' => '27', 'name' => 'Blue Tounge', 'number' => '3', 'beds' => '3']);
        Huts::create(['id' => '28', 'name' => 'Bandicoot', 'number' => '1', 'beds' => '2']);
        Huts::create(['id' => '29', 'name' => 'Bandicoot', 'number' => '2', 'beds' => '2']);
        Huts::create(['id' => '30', 'name' => 'Wombat', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '31', 'name' => 'Wombat', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '32', 'name' => 'Wombat', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '33', 'name' => 'Wombat', 'number' => '4', 'beds' => '6']);
        Huts::create(['id' => '34', 'name' => 'Wallaby', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '35', 'name' => 'Wallaby', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '36', 'name' => 'Wallaby', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '37', 'name' => 'Wallaby', 'number' => '4', 'beds' => '6']);
        Huts::create(['id' => '38', 'name' => 'Echidna', 'number' => '1', 'beds' => '6']);
        Huts::create(['id' => '39', 'name' => 'Echinda', 'number' => '2', 'beds' => '6']);
        Huts::create(['id' => '40', 'name' => 'Echinda', 'number' => '3', 'beds' => '6']);
        Huts::create(['id' => '41', 'name' => 'Echindan', 'number' => '4', 'beds' => '6']);







    }
}
