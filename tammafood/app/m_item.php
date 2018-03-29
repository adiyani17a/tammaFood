<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_item extends Model
{
	protected $table = 'm_item';
    protected $primaryKey = 'i_id';
    protected $fillable = ['i_id', 'i_code', 'i_type', 'i_group', 'i_name', 'i_unit','i_price'];

    public $incrementing = false;
    public $remember_token = false;
    //public $timestamps = false;
    const CREATED_AT = 'i_insert';
    const UPDATED_AT = 'i_update';
    
}
	