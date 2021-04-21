<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avisclient extends Model
{
    protected $fillable = ['nomClient', 'commentaire','imageProduit'];
}
