<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $table= "banners"; 

	 protected $primaryKey = 'banner_id';

  protected $fillable = ['banner_uno','banner_dos' ,'banner_tres'];
}
