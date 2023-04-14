<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SheetConfiguration extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'spreadsheet_google_id',
        'sheet',
        'table'
    ];

    public function columnMatchings(): HasMany
    {
        return $this->hasMany(SheetColumnMatching::class, 'sheet_configuration_id');
    }
}
