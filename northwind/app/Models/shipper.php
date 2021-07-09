<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipper extends Model
{
    //protected $fillable = ['shipper_id','company_name','phone'];

    protected $table = 'shippers';
    protected $primaryKey = 'shipper_id';
}
