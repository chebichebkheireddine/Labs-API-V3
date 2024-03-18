<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;
    // protected $fillable=["name","parms","value","result"];
    public $timestamps = false;
    // protected $with=["labs"];
    public function labs(){
        return $this->belongsTo(Lab::class,"lab_id");
    } 
}
