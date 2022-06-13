<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $subcategory_id
 * @property string $name
 * @property string $vendor_code
 * @property string $product_mark
 * @property string $series
 * @property int $bonus
 * @property int $price
 * @property int $is_stock
 * @property string|null $description
 * @property string|null $characteristic
 * @property string|null $delivery
 * @property string $factory
 * @property string $steel
 * @property string $handle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCharacteristic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFactory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereHandle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSteel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVendorCode($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory;

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function catalog()
  {
    return $this->belongsTo(Catalog::class);
  }
  public function subcategory()
  {
    return $this->belongsTo(Subcategory::class);
  }
}
