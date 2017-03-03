<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午9:49
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as Capsule;

class BaseModel extends Model
{
	public function __construct() {
		parent::__construct();
		$capsule = new Capsule;
		$capsule->addConnection(config('database'));
		$capsule->setAsGlobal();
		// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
		$capsule->bootEloquent();
	}
}