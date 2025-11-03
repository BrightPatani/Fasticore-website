use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('internship_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('track');
            $table->text('background')->nullable();
            $table->timestamps();
            
            // Add index for faster email lookups
            $table->index('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('internship_registrations');
    }
};
