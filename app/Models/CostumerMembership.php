<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerMembership extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


    // One -> Many reserse
    public function costumer(){
        return $this->belongsTo(Costumer::class);
    }

    public function costumerMembershipRoles(){
        return $this->hasMany(CostumerMembershipRole::class);
    }
    
}
