<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\EventType
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|EventType newModelQuery()
 * @method static Builder|EventType newQuery()
 * @method static Builder|EventType query()
 * @method static Builder|EventType whereCreatedAt($value)
 * @method static Builder|EventType whereDescription($value)
 * @method static Builder|EventType whereId($value)
 * @method static Builder|EventType whereName($value)
 * @method static Builder|EventType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EventType extends Model
{
    public function event()
    {
        return $this->hasOne('App\Event');
    }
}
