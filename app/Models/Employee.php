<?php

namespace ProjetoWeb3\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','lastName','role'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
}
