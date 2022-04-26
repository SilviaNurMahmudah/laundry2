<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Jenis extends Model
{
    protected $table = "jenis";
    protected $fillable = ['kode','nama','biaya'];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
