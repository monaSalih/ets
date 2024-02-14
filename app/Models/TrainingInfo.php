<?php

// app/Models/TrainingInfo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingInfo extends Model
{
    use HasFactory;

    protected $fillable = ['cohort_id', 'academy_id', 'fund_id'];

    // Example relationship if defined in the schema
    public function cohort()
    {
        return $this->belongsTo(Cohort::class, 'cohort_id');
    }

    public function academy()
    {
        return $this->belongsTo(Academy::class, 'academy_id');
    }

    public function fund()
    {
        return $this->belongsTo(Fund::class, 'fund_id');
    }
}

