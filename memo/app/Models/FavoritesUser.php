<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class FavoritesUser extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'other_user_id', 'created_at',
    ];


    /**
     * リレーション
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * リレーション
     */
    public function other_user()
    {
        return $this->belongsTo(User::class);
    }
}
