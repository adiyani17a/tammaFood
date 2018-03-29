<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_transferItemDt extends Model
{
    
	protected $table = 'd_transferitem_dt';
    protected $primaryKey = ['tidt_id','tidt_detail'];
    protected $fillable = ['tidt_id','tidt_detail','tidt_item', 'tidt_qty', 'tidt_qty_appr', 'tidt_apprtime', 'tidt_apprstaff', 'tidt_qty_send','tidt_sendtime','tidt_sendstaff','tidt_qty_received','tidt_receivedtime','tidt_receivedstaff'];

    public $incrementing = false;
    public $remember_token = false;
    public $timestamps = false;
    
}
