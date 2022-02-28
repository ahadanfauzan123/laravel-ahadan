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

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters["search"]) ? $filters["search"] : false) {
        //      return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('excerpt', 'like', '%' .$filters['search'] . '%');
        // }


            //when terjadi apabila kodisi sebelumnya true ini dilakukan untuk menghidari isset dan pernyataan request tetap ada di controller
            //$filters[search] merupakan parameter dari apa yang dikirim dari controller dan "search" merupakan atribut name dari tag input
            //tanda ?? berarti akan memilih apapun setelah tanda tersebut dimana tanda tersebut adalah false
            //lalu buat function dan bei parameter $query dan parameter kedua $search yang berasal dari "search" yang dikirim dari controller
            //$query masuk ke parameter $query dan $filters[] masuk ke parameter $search
            //lalu lakukan query pencarian dengan query builder
        $query->when($filters["search"] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%')
                        ->orWhere('excerpt', 'like', '%' .$search . '%');
        });
            //whereHas merupakan fitur di laravel 8 yang berfugnsi menghubungkan query pada table lain yang berelasi
        $query->when($filters["category"] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($filters["author"] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('user_name', $author);
            });
        });
    }

    public function category() {
        return $this::belongsTo(Category::class);
    }
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
