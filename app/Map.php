<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Map
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property int $width
 * @property int $height
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Map whereWidth($value)
 * @mixin \Eloquent
 */
class Map extends Model
{
    protected $table ="maps";
    protected $fillable= ['name','path','width','height'];
    protected  $hidden =['created_at','updated_at'];

    public function devices()
    {
        return $this->hasMany('App\Device','map_id','id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
