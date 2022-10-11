<?php

use App\Models\Patient;
use App\Models\PatientVisit;
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
        Schema::create('presenting_complains', function (Blueprint $table) {
            $table->id();
            $table->json('presenting_complain_type')->nullable();
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignIdFor(PatientVisit::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
            $table->foreignIdFor(User::class)->nullable()->constrained()->comment(' the  user_id is a Doctor id in this table');
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
        Schema::dropIfExists('presenting_complains');
    }
};
