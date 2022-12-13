<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    
    protected $table = "carModel_id";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;


    
    public function DataMaintenance(){
        return  $this->hasMany('App/Models/DataMaintenance','carModel_id','id');
    }

}
