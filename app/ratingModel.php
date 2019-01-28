<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ratingModel extends Model
{
    //
    protected $table = 'rating';

    protected $primaryKey = 'r_id';

    protected $fillable = [
        'r_name',
        'r_rating'
      ];
}
