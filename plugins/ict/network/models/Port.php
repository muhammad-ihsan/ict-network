<?php namespace Ict\Network\Models;

use Model;
use Ict\Core\Classes\Generator;

/**
 * Port Model
 */
class Port extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ict_network_ports';

    /**
     * @var string The database table used by the model.
     */
    public $timestamps = false;

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
