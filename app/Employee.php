<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Employee
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $id_number
 * @property string|null $img_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereIdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    function badges(){
        return $this->hasMany('App\Badge');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
