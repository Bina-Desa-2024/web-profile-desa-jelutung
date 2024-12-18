<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgGroup extends Model
{
    public $fillable = [
        'id',
        'title'
    ];

    public function structures()
    {
        return $this->hasMany(OrgStructure::class, 'group_id');
    }
}
