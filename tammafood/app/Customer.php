<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customer';
    protected $primaryKey = 'id_cus_ut';
    protected $fillable = ['id_cus', 'nama_cus', 'tgl_lahir', 'email', 'no_hp', 'alamat'];
}
