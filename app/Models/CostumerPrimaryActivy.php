<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerPrimaryActivy extends Model
{
    use HasFactory;

    protected $table = 'costumer_primary_activy';
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function customer(){
        return $this->hasOne(Costumer::class);
    }
}
