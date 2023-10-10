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

        /*
         * SI UNE TABLE EXISTE DEJA
         *
        $sqlFiles = base_path('database/migrations/SQLFiles/user.sql');
        DB::unprepared(file_get_contents($sqlFiles));
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
