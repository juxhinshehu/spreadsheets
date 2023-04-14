<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetColumnMatching extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'sheet_configuration_id',
        'sheet_column',
        'table_column'
    ];
}
