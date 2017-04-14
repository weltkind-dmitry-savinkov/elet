<?php
namespace App\Modules\Slider\Models;

use App\Models\Model;
use App\Models\Image as Img;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;


class Slider extends Model
{
    use Notifiable, Sortable, Img;

    protected $table = 'slider';

    protected $guarded = array('id', 'created_at', 'updated_at');

    protected $fillable = [
        'title',
        'description',
        'link',
        'link_type',
        'priority',
        'active'
    ];

    public function scopeOrder($query){
        return $query->orderBy('priority', 'desc')->orderBy('created_at', 'desc');
    }

}
