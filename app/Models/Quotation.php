<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subcategory() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function boxType() {
        return $this->belongsTo(BoxType::class);
    }

    public function cardboardType() {
        return $this->belongsTo(CardboardType::class);
    }

    public function lidType() {
        return $this->belongsTo(LidType::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function address() {
        return $this->belongsTo(Address::class);
    }
}
