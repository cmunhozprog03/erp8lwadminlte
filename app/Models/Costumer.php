<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // One -> One reverse
    public function costumerRegistration(){
        return $this->belongsTo(CostumerRegistration::class);
    }
    public function costumerLegalNature(){
        return $this->belongsTo(CostumerLegalNature::class);
    }

    public function costumerPrimaryActivy(){
        return $this->belongsTo(CostumerPrimaryActivy::class);
    }



    // One -> Many
    public function costumerAddresses(){
        return $this->hasMany(CostumerAddress::class);
    }

    public function costumersContacts(){
        return $this->hasMany(CostumerContact::class);
    }

    public function costumerSecondaryAtivies(){
        return $this->hasMany(CostumerSecondaryActivy::class);
    }

    public function costumerMemberships(){
        return $this->hasMany(CostumerMembership::class);
    }
}
