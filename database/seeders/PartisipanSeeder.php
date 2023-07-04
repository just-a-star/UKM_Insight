<!--!  
    namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartisipanSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{

$faker = Faker::create('id_ID');
for ($i = 0; $i < 100; $i++) { $role=$faker->word;
    $id = $faker->unique()->randomNumber($nbDigits = 3, $strict = true);
    $kegiatan_id = DB::table('kegiatan')->inRandomOrder()->first()->id;
    DB::table('partisipan_kegiatan')->insert([
    'id' => $id,
    'anggota_id' => DB::table('anggota')->inRandomOrder()->first()->id,
    'kegiatan_id' =>$kegiatan_id,
    'role' => $role,
    'created_at' => now(),
    'updated_at' => now(),
    ]);
    }
    }
    } -->