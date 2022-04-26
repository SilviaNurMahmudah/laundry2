<?php

namespace App;
use App\Pelanggan;
use App\Order;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pelanggan extends Authenticatable
{
    protected $table = "pelanggans";
    protected $primarykey = "id";
    protected $fillable = ['kode','nama','nohp'];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
