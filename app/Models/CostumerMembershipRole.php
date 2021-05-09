<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerMembershipRole extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    

    // One -> Many reverse
    public function costumerMembership(){
        return $this->belongsTo(CostumerMembership::class);
    }
    
}
