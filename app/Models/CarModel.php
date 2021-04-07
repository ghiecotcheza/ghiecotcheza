<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'cars_models';

    protected $primaryKey = 'id';

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
