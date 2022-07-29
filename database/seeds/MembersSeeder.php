<?php

use Illuminate\Database\Seeder;

use App\Member;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Member::truncate();

        Member::create(['id' => '1', 'membership' => 'N23587', 'first_name' => 'Alexander', 'last_name' => 'Finnegan', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '2', 'membership' => 'W13243', 'first_name' => 'Michaela', 'last_name' => 'Finnegan', 'gender' => 'F', 'rank' => '1st Off', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '3', 'membership' => 'N23602', 'first_name' => 'Harrison', 'last_name' => 'Piskorz', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '4', 'membership' => 'N23803', 'first_name' => 'Stephen', 'last_name' => 'Sawyer', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '5', 'membership' => 'N22235', 'first_name' => 'Tristan', 'last_name' => 'Sauer', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '6', 'membership' => 'W13096', 'first_name' => 'Mahnoor', 'last_name' => 'Syed', 'gender' => 'F', 'rank' => 'Snr Cdt', 'unit_id' => '18', 'paid' => 'N', 'camp_id' => '1']);
        Member::create(['id' => '7', 'membership' => 'N23582', 'first_name' => 'Stian', 'last_name' => 'Varding', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '8', 'membership' => 'N21669', 'first_name' => 'Lachlan', 'last_name' => 'Abernethy', 'gender' => 'M', 'rank' => '2nd Off', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '9', 'membership' => 'N21612', 'first_name' => 'Thomas', 'last_name' => 'Sterrett', 'gender' => 'M', 'rank' => '2nd Off', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '10', 'membership' => 'N23658', 'first_name' => 'Luka', 'last_name' => 'Grange', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '11', 'membership' => 'N23577', 'first_name' => 'Rory', 'last_name' => 'Fenton', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '12', 'membership' => 'N23451', 'first_name' => 'Hugh', 'last_name' => 'Rudd', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '13', 'membership' => 'N23452', 'first_name' => 'Gabriel', 'last_name' => 'Vogel', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '14', 'membership' => 'N23022', 'first_name' => 'Leo', 'last_name' => 'Schwarze', 'gender' => 'M', 'rank' => 'Cpl', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '15', 'membership' => 'N23558', 'first_name' => 'Zachary', 'last_name' => 'Constantiuou', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '16', 'membership' => 'W13038', 'first_name' => 'Catilan', 'last_name' => 'Lindsay', 'gender' => 'F', 'rank' => 'Sqn Lt', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '17', 'membership' => 'N23348', 'first_name' => 'Rhys', 'last_name' => 'Gilkes', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '20', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '18', 'membership' => 'W11506', 'first_name' => 'Pam', 'last_name' => 'Price', 'gender' => 'F', 'rank' => 'Sqn Cpt', 'unit_id' => '12', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '19', 'membership' => 'W13089', 'first_name' => 'Lara', 'last_name' => 'Wilbow', 'gender' => 'F', 'rank' => 'Sqn Sgt', 'unit_id' => '12', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '20', 'membership' => 'W13214', 'first_name' => 'Brya', 'last_name' => 'Davis', 'gender' => 'F', 'rank' => 'Cpl', 'unit_id' => '12', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '21', 'membership' => 'W13214', 'first_name' => 'Davis', 'last_name' => 'Ruby', 'gender' => 'F', 'rank' => 'Jnr Cdt', 'unit_id' => '12', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '22', 'membership' => 'N23482', 'first_name' => 'Tom', 'last_name' => 'Withers', 'gender' => 'M', 'rank' => '1st Off', 'unit_id' => '8', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '23', 'membership' => 'N21627', 'first_name' => 'NicK', 'last_name' => 'NcNamee', 'gender' => 'M', 'rank' => '1st Off', 'unit_id' => '8', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '24', 'membership' => 'N22333', 'first_name' => 'Ji', 'last_name' => 'Thorley', 'gender' => 'M', 'rank' => 'Cpl', 'unit_id' => '8', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '25', 'membership' => 'N23604', 'first_name' => 'Jesse', 'last_name' => 'Worley', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '25', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '26', 'membership' => 'N23576', 'first_name' => 'Nathan', 'last_name' => 'Webb', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '25', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '27', 'membership' => 'N22891', 'first_name' => 'Elliot', 'last_name' => 'Powell', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '15', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '28', 'membership' => 'N23092', 'first_name' => 'Nabeel', 'last_name' => 'Hussein', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '29', 'membership' => 'N11549', 'first_name' => 'Greg', 'last_name' => 'Baker-Moss', 'gender' => 'M', 'rank' => '1st Off', 'unit_id' => '28', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '30', 'membership' => 'W13209', 'first_name' => 'Zoe', 'last_name' => 'Baker-Moss', 'gender' => 'F', 'rank' => 'Sgt', 'unit_id' => '28', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '31', 'membership' => 'N23554', 'first_name' => 'Robert', 'last_name' => 'Allam', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '4', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '32', 'membership' => 'N23359', 'first_name' => 'Jack', 'last_name' => 'Anderson', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '33', 'membership' => 'W13204', 'first_name' => 'Isabella', 'last_name' => 'Lee', 'gender' => 'F', 'rank' => 'Jnr Cdt', 'unit_id' => '21', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '34', 'membership' => 'N22117', 'first_name' => 'Simon', 'last_name' => 'Nunes', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '28', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '35', 'membership' => 'N18094', 'first_name' => 'Brendan', 'last_name' => 'Fox', 'gender' => 'M', 'rank' => 'Gp Comr', 'unit_id' => '32', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '36', 'membership' => 'W13282', 'first_name' => 'Isa', 'last_name' => 'Xiao', 'gender' => 'F', 'rank' => 'Jnr Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '37', 'membership' => 'N20111', 'first_name' => 'Joshua', 'last_name' => 'De Vries', 'gender' => 'M', 'rank' => 'Spn Cpt', 'unit_id' => '21', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '38', 'membership' => 'N23850', 'first_name' => 'Hubert', 'last_name' => 'Ding', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '39', 'membership' => 'N23869', 'first_name' => 'Kyle', 'last_name' => 'Chen', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '18', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '40', 'membership' => 'W13138', 'first_name' => 'Angeline', 'last_name' => 'OHare', 'gender' => 'F', 'rank' => 'Snr Cdt', 'unit_id' => '24', 'paid' => 'N', 'camp_id' => '1']);

        Member::create(['id' => '41', 'membership' => 'N23795', 'first_name' => 'Cadel', 'last_name' => 'Abi-Hana', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '42', 'membership' => 'N23794', 'first_name' => 'Christian', 'last_name' => 'Abi-Hana', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '43', 'membership' => 'N23264', 'first_name' => 'Yash', 'last_name' => 'Alghare', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '44', 'membership' => 'N23801', 'first_name' => 'Nicholas', 'last_name' => 'Abi-Hana', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '45', 'membership' => '18185', 'first_name' => 'Raymond', 'last_name' => 'Bell', 'gender' => 'M', 'rank' => 'Comr', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '46', 'membership' => 'N23522', 'first_name' => 'Brendon', 'last_name' => 'DeMarchi', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '47', 'membership' => 'N23576', 'first_name' => 'Oliver', 'last_name' => 'Dorrah', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '48', 'membership' => 'N22718', 'first_name' => 'James', 'last_name' => 'Fan', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '49', 'membership' => 'N21432', 'first_name' => 'Lachlan', 'last_name' => 'Hyde', 'gender' => 'M', 'rank' => '2nd Off', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '50', 'membership' => 'N23018', 'first_name' => 'Zaccary', 'last_name' => 'Landcaster', 'gender' => 'M', 'rank' => 'Cpl', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '51', 'membership' => 'N23646', 'first_name' => 'Andrew', 'last_name' => 'Mayorga', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '52', 'membership' => 'N22459', 'first_name' => 'Brendan', 'last_name' => 'Mayorga', 'gender' => 'M', 'rank' => 'Cpl', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '53', 'membership' => 'N23266', 'first_name' => 'Emilio', 'last_name' => 'Munoz', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '54', 'membership' => 'N23245', 'first_name' => 'Kushal', 'last_name' => 'Parag', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '55', 'membership' => 'N21800', 'first_name' => 'Andrew', 'last_name' => 'Passmore', 'gender' => 'M', 'rank' => 'W/O', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '56', 'membership' => 'N23699', 'first_name' => 'Brandyn', 'last_name' => 'Sauer', 'gender' => 'M', 'rank' => 'Jnr Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '57', 'membership' => 'N22340', 'first_name' => 'Martin', 'last_name' => 'Sauer', 'gender' => 'M', 'rank' => 'Sqn Lt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '58', 'membership' => 'N21680', 'first_name' => 'Harrison', 'last_name' => 'Tarranec', 'gender' => 'M', 'rank' => '2nd Off', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '59', 'membership' => 'N23574', 'first_name' => 'Oliver', 'last_name' => 'Van Kempen', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '60', 'membership' => 'New', 'first_name' => 'Ryan', 'last_name' => 'Van Kempen', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '31', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '61', 'membership' => 'New', 'first_name' => 'Jad', 'last_name' => 'Abuquba', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '30', 'paid' => 'Y', 'camp_id' => '1']);

        Member::create(['id' => '62', 'membership' => 'N23496', 'first_name' => 'Kael', 'last_name' => 'Austin', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '30', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '63', 'membership' => 'N23529', 'first_name' => 'Joshua', 'last_name' => 'Mansour', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '30', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '64', 'membership' => 'N23838', 'first_name' => 'Jaylan', 'last_name' => 'Tran', 'gender' => 'M', 'rank' => 'Cdt', 'unit_id' => '30', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '65', 'membership' => 'N23554', 'first_name' => 'Robert', 'last_name' => 'Allam', 'gender' => 'M', 'rank' => 'L/Cdt', 'unit_id' => '4', 'paid' => 'Y', 'camp_id' => '1']);
        Member::create(['id' => '66', 'membership' => 'N23427', 'first_name' => 'Johnathan', 'last_name' => 'Nolan', 'gender' => 'M', 'rank' => 'Sgt', 'unit_id' => '28', 'paid' => 'Y', 'camp_id' => '1']);
        


    }

}

