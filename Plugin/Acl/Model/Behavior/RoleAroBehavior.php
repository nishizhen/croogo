<?php

App::uses('ModelBehavior', 'Model');

/**
 * RoleAro Behavior
 *
 * PHP version 5
 *
 * @category Behavior
 * @package  Croogo.Acl
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class RoleAroBehavior extends ModelBehavior {

/**
 * parentNode
 *
 * @param Model $model
 * @return null
 */
	public function parentNode($model) {
		return null;
	}

}
