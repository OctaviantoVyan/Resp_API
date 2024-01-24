<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('nisn');
            $table->integer('skhun');
            $table->integer('no_ijazah');
            $table->char('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->integer('no_telp');
            $table->char('email');
            $table->text('hobby');
            $table->char('jurusan');
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->char('nama_ayah');
            $table->integer('no_ayah');
            $table->text('alamat_ayah');
            $table->char('nama_ibu');
            $table->integer('no_ibu');
            $table->text('alamat_ibu');
            $table->char('nama_wali');
            $table->integer('no_wali');
            $table->text('alamat_wali');
            $table->timestamps();
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
