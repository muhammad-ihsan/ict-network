<?php namespace Ict\Location\Models;

use Model;
use Ict\Core\Classes\Generator;

/**
 * Location Model
 */
class Location extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ict_location_locations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne        = [];
    public $hasMany       = [];
    public $belongsTo     = [];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [];
    public $attachMany    = [];

    public function beforeSave()
    {
        $generator       = new Generator();
        $this->parameter = $generator->make();
    }
}
