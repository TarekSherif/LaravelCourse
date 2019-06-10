<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Branch
 *
 * @package App
 * @property string $branch
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $fb
 * @property string $wb
*/
class Branch extends Model
{
    use SoftDeletes;

    protected $fillable = ['branch', 'address', 'phone', 'email', 'fb', 'wb'];
    protected $hidden = [];
    
    
    
}
