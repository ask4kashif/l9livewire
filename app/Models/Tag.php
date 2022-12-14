<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    const Table="tags";

    protected $table= self::Table;

    protected $fillable=[
        'name','slug'
    ];


    public static function search($search)
    {
        return
            empty($search)
            ? static::query()
            : static::query()->where('id','like','%'. $search. '%')
            ->orWhere('name','like','%'.$search.'%');
    }

}
