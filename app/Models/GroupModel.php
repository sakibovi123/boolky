<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    use HasFactory;

    protected $table = "group";

    protected $fillable = [
        "group_id",
        "customers"
    ];

    public function customer() {
        return $this->hasMany(Customer::class);
    }
}
