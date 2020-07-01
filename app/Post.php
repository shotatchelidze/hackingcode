<?php

namespace App;
// "cviebrock/eloquent-sluggable": "3.1"
use Cviebrock\EloquentSluggable\SluggableInterface;
// // use Cviebrock\EloquentSluggable\SluggableTraits;
// use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements SluggableInterface
{
    //
    use SluggableTrait;
    

    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
        'on_update' => true,
        // 'onUpdate' => true
    ];
    
    
    public function sluggable()
    {
    return [
        'title-slug' => [
            'source' => 'title'
        ]
    ];
    }

    // protected $fillable = ['title'];

    protected $fillable = ['category_id', 'photo_id', 'title', 'body']; 

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
