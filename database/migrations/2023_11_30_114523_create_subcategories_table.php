<?php

use App\Models\Subcategory;
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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $subcategories = [
            'Horror',
            'Drama',
            'Comedy',
            'Thriller',
            'Erotic',
            'Fantasy',
            'Science',
            'Romance',
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create([
                'name' => $subcategory
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
