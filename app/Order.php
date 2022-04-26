<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jenis;
use App\Pelanggan;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = 
        ['nota',
        'id_jenis',
        'id_pelanggan',
        'berat',
        'total',
        'catatan',
        'status',
        'tgl_deadline',
        'wkt_deadline'];
        
    public function jenis() {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }
    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
