<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categories_Products
 * @package App\Models
 * @version April 5, 2018, 11:45 am UTC
 *
 * @property string title
 * @property string slug
 * @property string lang
 * @property string single_photo
 * @property string body
 */
class Categories_Products extends Model
{
    use SoftDeletes;

    public $table = 'categories__products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'lang',
        'single_photo',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'lang' => 'string',
        'single_photo' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'lang' => 'required',
        'single_photo' => 'required',
        'body' => 'required'
    ];

    
}
