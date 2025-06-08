<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningProgress extends Model
{
    protected $table = 'learning_progress';

    protected $primaryKey = 'order_id';
    public $incrementing = false; // karena order_id bukan auto-increment

    protected $fillable = [
        'order_id',
        'progress',
        'nilai',
    ];
}
