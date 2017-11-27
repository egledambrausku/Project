<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 *
 * @package App
 * @property string $name
 * @property string $address
 * @property string $logo
*/
class Company extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'address', 'logo'];
    
    
    
}
