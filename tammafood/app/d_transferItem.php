<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_transferItem extends Model
{

    protected $table = 'd_transferitem';
    protected $primaryKey = 'ti_id';
    protected $fillable = ['ti_id', 'ti_time', 'ti_code', 'ti_order', 'ti_orderstaff', 'ti_note','ti_isapproved','ti_issent','ti_isreceived'];

    public $incrementing = false;
    public $remember_token = false;
    //public $timestamps = false;
    const CREATED_AT = 'ti_insert';
    const UPDATED_AT = 'ti_update';
    
}
