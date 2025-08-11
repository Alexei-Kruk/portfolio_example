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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'surname')) {
                $table->string('surname')->nullable()->after('name');
            }
            if (!Schema::hasColumn('users', 'position')) {
                $table->string('position')->nullable()->after('surname');
            }
            if (!Schema::hasColumn('users', 'description')) {
                $table->longText('description')->nullable()->after('position');
            }
            if (!Schema::hasColumn('users', 'interests')) {
                $table->longText('interests')->nullable()->after('description');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['surname', 'position', 'description', 'interests']);
        });
    }
};
