<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DataMaintenance extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'dataMaintenance';
    protected $fillable = 
    ['id','main_no','car_type','date','clint_name','car_no','carModel_id','motor_no','frame_no','trailer_type',
        'trailer_no','frameTrailer_no','notes','receipt_notes','created_at','updated_at','deleted_at'];

    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;
    protected $softDelete = true;

    public function scopeSelections($q){

        return $q->select('id','main_no','car_type','carModel_id','date','clint_name','car_no','motor_no','frame_no','trailer_type',
        'trailer_no','frameTrailer_no','notes','receipt_notes');
    }
    public function CarModel(){
        return  $this->belongsTO('App\Models\CarModel','carModel_id','id');
    }


}
