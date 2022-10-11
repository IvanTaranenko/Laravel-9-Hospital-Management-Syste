<?php

use App\Models\Medicine;
use App\Models\Patient;
use App\Models\PatientVisit;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('dosage')->nullable();
            $table->string('frequency')->nullable();
            $table->string('duration')->nullable();
            $table->string('food_relation')->nullable();
            $table->string('route')->nullable();
            $table->text('instruction')->nullable();


            $table->tinyInteger('status')->default(0);
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignIdFor(PatientVisit::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignIdFor(User::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignIdFor(Medicine::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
