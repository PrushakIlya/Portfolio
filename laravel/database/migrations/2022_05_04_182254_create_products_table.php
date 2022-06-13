<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name')->unique();
      $table->string('vendor_code')->unique();
      $table->string('product_mark');
      $table->text('series');
      $table->bigInteger('bonus');
      $table->bigInteger('price');
      $table->tinyInteger('is_stock');
      $table->text('description')->nullable();
      $table->text('characteristic')->nullable();
      $table->text('delivery')->nullable();
      $table->integer('count');
      $table->string('icon');
      $table->enum('factory', get_factory())->default(get_factory()[1]);
      $table->enum('steel', get_steel())->default(get_steel()[1]);
      $table->enum('handle', get_handle())->default(get_handle()[1]);
      $table->foreignId('catalog_id')->nullable()->constrained()->nullOnDelete();
      $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
      $table->foreignId('subcategory_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
    Schema::dropIfExists('products');
  }
};
