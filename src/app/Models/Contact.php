<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function management()
    {
        return $this->beLongsTo(Management::class);
    }

    protected $fillable=[
        'fullname','gender','email','postcode','address','building_name','opinion','created_at',
    ];
}
