<?php namespace Ict\Network\Models;

use Model;
use Ict\Core\Classes\Generator;

/**
 * Block Model
 */
class Block extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ict_network_blocks';

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
    public $belongsTo     = [
        'location' => [
            'Ict\Location\Models\Location',
            'key'      => 'location_id',
            'otherKey' => 'id'
        ]
    ];
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
