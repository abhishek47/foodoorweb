<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

use App\User;

class Restaurant extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

   


    protected $table = 'restaurants';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [ 'name', 'slug', 'area', 'pincode', 'location', 'logo','contact_name', 'contact_phone', 'contact_email', 'website', 'city_id'];

    protected $casts = [
        'photos' => 'array'
    ];

     public function account()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function getCityNameAttribute()
    {
        return $this->city->name;
    }

    public function cuisines()
    {
        return $this->belongsToMany(Cuisine::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($this->attributes['name']);
    }

    public function setLogoAttribute($value)
    {
        $attribute_name = "logo";
        $disk = "public";
        $destination_path = "restaurants";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
