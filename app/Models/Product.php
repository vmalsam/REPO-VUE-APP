<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['']; //fillable ->acepto todo. Si pongo unos de los campos aqui, este no se va a tener en cuenta
}
