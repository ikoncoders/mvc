<?php 

namespace Ikonc\Database\Concerns;

use Ikonc\Database\Managers\Contracts\DatabaseManager;

trait ConnectsTo
	{
		public static function connect(DatabaseManager $manager)
		{
			return $manager->connect();
		}
	}