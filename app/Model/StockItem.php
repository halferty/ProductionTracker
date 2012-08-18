<?php
App::uses('AppModel', 'Model');
/**
 * StockItem Model
 *
 * @property MfgPart $MfgPart
 */
class StockItem extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MfgPart' => array(
			'className' => 'MfgPart',
			'foreignKey' => 'mfg_part_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
