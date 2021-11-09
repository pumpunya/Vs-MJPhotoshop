<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class editdeposit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'editdeposit';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'editdepositID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['editdepositID', 'imagedeposit2','bookingID'];
    public $timestamps = false;
    
}
