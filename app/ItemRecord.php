<?php

namespace App;
use App\Area;
use App\ItemList;
use App\Flow;
use App\Received;
use App\Transferred;

use Illuminate\Database\Eloquent\Model;

class ItemRecord extends Model
{
    public function area()
	{
	    return $this->belongsTo('App\Area', 'area');
    }
    public function itemlist()
	{
	    return $this->belongsTo('App\ItemList', 'item_id');
    }
    public function flow()
	{
	    return $this->belongsTo('App\Flow', 'flow');
    }
    public function receive()
	{
	    return $this->belongsTo('App\Received', 'receive');
    }
    public function transfer()
	{
	    return $this->belongsTo('App\Transferred', 'transfer');
    }
}
