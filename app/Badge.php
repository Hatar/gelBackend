<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Badge
 *
 * @property int $id
 * @property string $code
 * @property int $status
 * @property int|null $employee_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Badge newModelQuery()
 * @method static Builder|Badge newQuery()
 * @method static Builder|Badge query()
 * @method static Builder|Badge whereCode($value)
 * @method static Builder|Badge whereCreatedAt($value)
 * @method static Builder|Badge whereEmployeeId($value)
 * @method static Builder|Badge whereId($value)
 * @method static Builder|Badge whereStatus($value)
 * @method static Builder|Badge whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Badge extends Model
{
    protected $table = 'badge';
    protected $fillable = [''];

    function employee(){
        return $this->belongsTo('App\Employee');
    }
}
