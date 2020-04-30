<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','created_by');
    }

    public function publisher()
    {
        return $this->belongsTo('App\User','published_by');
    }

    public function sector()
    {
        return $this->belongsTo('App\Sector','sector_id');
    }
}
