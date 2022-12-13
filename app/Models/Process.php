<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NamePiece;

class Process extends Model
{
    use HasFactory;
    protected $table = "process";
    protected $fillable = ['id','main_no','nameprocess_id','piece_no','price','quantity',
    'workship','namePiece_id','category','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    public function scopeSelections($q){
        return $q->select('id','main_no','nameprocess_id','piece_no','price','quantity',
        'workship','namePiece_id','category');
    }

    public function NameProcess(){
        return  $this->belongsTO('App\Models\NameProcess','nameprocess_id','id');
    }

    public function NamePiece(){
        return  $this->belongsTO('App\Models\NamePiece','namePiece_id','id');
    }
}
