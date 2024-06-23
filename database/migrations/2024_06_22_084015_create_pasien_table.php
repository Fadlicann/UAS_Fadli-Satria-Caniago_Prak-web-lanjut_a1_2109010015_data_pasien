<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('umur')->nullable();
            $table->timestamps();
        });
        DB::table('pasien')->insert([
            [
                'nama' => 'Arman maulana',
                'alamat' => 'jl.brayan ujung',
                'nomor_telepon' => '08723623',
                'umur' => '21',
            ],
            [
                'nama' => 'Joko Susilo',
                'alamat' => 'Jl. Merdeka No. 10',
                'nomor_telepon' => '08123456789',
                'umur' => '25',
            ],
            [
                'nama' => 'Rini Sari',
                'alamat' => 'Jl. Pahlawan No. 15',
                'nomor_telepon' => '08567891234',
                'umur' => '30',
            ],
            [
                'nama' => 'Budi Cahyono',
                'alamat' => 'Jl. Raya Kembang 12',
                'nomor_telepon' => '08987654321',
                'umur' => '28',
            ],
            [
                'nama' => 'Lisa Dewi',
                'alamat' => 'Jl. Cempaka Indah 8',
                'nomor_telepon' => '08765432109',
                'umur' => '22',
            ],
            [
                'nama' => 'Arief Rahman',
                'alamat' => 'Jl. Diponegoro 25',
                'nomor_telepon' => '08234567890',
                'umur' => '27',
            ],
            [
                'nama' => 'Siti Fatimah',
                'alamat' => 'Jl. Kebon Jeruk 6',
                'nomor_telepon' => '08123450987',
                'umur' => '32',
            ],
            [
                'nama' => 'Firman Pratama',
                'alamat' => 'Jl. Jendral Sudirman 18',
                'nomor_telepon' => '08567893456',
                'umur' => '29',
            ],
            [
                'nama' => 'Nina Wahyuni',
                'alamat' => 'Jl. Merbabu No. 7',
                'nomor_telepon' => '08345678901',
                'umur' => '26',
            ],
            [
                'nama' => 'Rudi Hartono',
                'alamat' => 'Jl. Kenari 11',
                'nomor_telepon' => '08456789012',
                'umur' => '24',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
