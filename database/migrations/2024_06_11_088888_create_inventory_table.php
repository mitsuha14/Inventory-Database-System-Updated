<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Add this line

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('inventory');

        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accountable_personnel_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('operating_unit_id');
            $table->unsignedBigInteger('make_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('status_id');
            $table->string('brand', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('serial_number', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('property_number')->nullable();
            $table->decimal('unit_value', 10, 2)->nullable();
            $table->date('acquisition_date')->nullable();
            $table->year('year_acquired')->nullable();
            $table->integer('balance_per_card')->nullable();
            $table->integer('on_hand_per_count')->nullable();
            $table->string('source', 100)->nullable();
            $table->string('remarks', 255)->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('accountable_personnel_id')->references('id')->on('accountable_personnels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('division_id')->references('id')->on('divisions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('operating_unit_id')->references('id')->on('operating_units')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('make_id')->references('id')->on('makes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
