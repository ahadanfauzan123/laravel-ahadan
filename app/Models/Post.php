<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //mendapatkan table dari database
    protected $table = 'posts';
    // menunjukkan field mana saja yang boleh diisi
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    //menunjukkan field mana yang tidak boleh diisi
    protected $guarded = ['id'];

    public function category() {
        return $this::belongsTo(Category::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
