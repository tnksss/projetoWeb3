<?php

namespace ProjetoWeb3\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'description'];
    protected $guarded = ['id', 'created_at', 'update_at'];	
    
}
