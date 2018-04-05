<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 * @version April 5, 2018, 10:54 am UTC
 *
 * @property string name
 * @property string body
 * @property string single_photo
 * @property integer photos_id
 * @property string component
 * @property string Net_weight
 * @property string Note
 * @property string Packing_content
 * @property integer cat_id
 * @property string lang
 * @property string slug
 */
class Products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'body',
        'single_photo',
        'photos_id',
        'component',
        'Net_weight',
        'Note',
        'Packing_content',
        'cat_id',
        'lang',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'body' => 'string',
        'single_photo' => 'string',
        'photos_id' => 'integer',
        'component' => 'string',
        'Net_weight' => 'string',
        'Note' => 'string',
        'Packing_content' => 'string',
        'cat_id' => 'integer',
        'lang' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'body' => 'required',
        'single_photo' => 'required',
        'photos_id' => 'numeric',
        'component' => 'required',
        'Net_weight' => 'required',
        'Note' => 'required',
        'Packing_content' => 'required',
        'cat_id' => 'required',
        'lang' => 'required',
        'slug' => 'required'
    ];

    
}
