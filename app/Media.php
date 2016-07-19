<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Media extends Eloquent {

	protected $filleable = ['id','type','tags','caption','likes','link','user','images'];
    protected $collection = 'medias';    

}