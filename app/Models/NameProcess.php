<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameProcess extends Model
{
    use HasFactory;

    protected $table = "nameprocess";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function Process(){
        return  $this->hasMany('App/Models/Process','nameprocess_id','id');
    }
}
