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
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('duration')->nullable()->after('title');
            $table->text('result')->nullable()->after('description');
            $table->json('tech_stack')->nullable()->after('result');
            $table->string('client_name')->nullable()->after('category');
            $table->date('completed_at')->nullable()->after('client_name');
        });
    }

    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn([
                'duration',
                'result',
                'tech_stack',
                'client_name',
                'completed_at',
            ]);
        });
    }
};
