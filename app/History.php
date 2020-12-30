<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'customers_id',
        'bus_id',
        'tanggal_sewa',
        'tanggal_selesai',
        'total',
    ];

    public function bus(){
        return $this->belongsTo(Bus::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
