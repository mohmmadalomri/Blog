<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\AssignOp\Pow;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    use HasFactory;
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['id','image','parent'];

    public function allParant(){
        return $this->belongsTo(Category::class,'parent');
    }
    public function children(){
        return $this->hasMany(Category::class,'parent');
    }
    public function post(){
        return $this->hasMany(Post::class);
    }

}
