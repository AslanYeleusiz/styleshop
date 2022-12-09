<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odezhda extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;
    protected $table = 'odezhda';
    const IMAGE_PATH = 'images/odezhdalar/';

    public $casts = [
        'size_info' => 'json'
    ];

    public function type() {
        return $this->belongsTo(OdezhdaType::class, 'type_id');
    }
    public function facturer() {
        return $this->belongsTo(OdezhdaFacturer::class, 'facturer_id');
    }
    public function form() {
        return $this->belongsTo(OdezhdaForm::class, 'form_type_id');
    }
    public function color() {
        return $this->belongsTo(OdezhdaColor::class, 'color_id');
    }




}
