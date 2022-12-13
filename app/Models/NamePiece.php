<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mpdels\Process;

class NamePiece extends Model
{
    use HasFactory;


    
    protected $table = "namepiece";
    protected $fillable = ['id','name','price','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function Process(){
        return  $this->hasMany('App/Models/Process','namepiece_id','id');
    }
    
}
