<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Device
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $serial
 * @property string $ip
 * @property int $x
 * @property int $y
 * @property int $level
 * @property int $map_id
 * @property int $status_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Device newModelQuery()
 * @method static Builder|Device newQuery()
 * @method static Builder|Device query()
 * @method static Builder|Device whereCreatedAt($value)
 * @method static Builder|Device whereDescription($value)
 * @method static Builder|Device whereId($value)
 * @method static Builder|Device whereIp($value)
 * @method static Builder|Device whereLevel($value)
 * @method static Builder|Device whereMapId($value)
 * @method static Builder|Device whereName($value)
 * @method static Builder|Device whereSerial($value)
 * @method static Builder|Device whereStatusId($value)
 * @method static Builder|Device whereUpdatedAt($value)
 * @method static Builder|Device whereX($value)
 * @method static Builder|Device whereY($value)
 * @mixin \Eloquent
 */
class Device extends Model
{

    protected $table ="devices";
    protected $fillable = ['name','description','serial','ip','level','x','y','map_id'];
    protected $hidden=['crrated_at','updated_at'];

    function map(){
        return $this->belongsTo('App\Map','map_id','id');
    }

    public function statu()
    {
        return $this->hasOne(Status::class,"id",'status_id');
    }

    public function event()
    {
        return $this->belognsTo('App\Event');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
