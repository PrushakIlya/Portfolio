<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bin
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bin whereUserId($value)
 * @mixin \Eloquent
 */
class Bin extends Model
{
    use HasFactory;
}
