<?php
App::uses('AppModel', 'Model');
/**
 * Plato Model
 *
 * @property CategoriaPlato $CategoriaPlato
 * @property Cocinero $Cocinero
 */
class Plato extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

	public $actsAs = array(
		'Upload.Upload' => array(
			'foto'=>array(
				'fields'=> array(
					'dir'=>'foto_dir'
				),
				'thumbnailMethod'=>'php',
				'thumbnailSizes' => array(
					'vga' =>'640x480',
					'thumb' => '50x50'
				),
				'deleteFolderOnDelete' => true
			)
		)
	); 
	// 'thumbnailMethod'=>'php' para que use la librería GD y no la de Magik
	// 'deleteOnUpdate' => true que borre la imagen anterior cada vez que se actualice
	//'deleteFolderOnDelete' => true  que se borre la carpeta asignada a esa imagen

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoria_plato_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descripcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'precio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'No se ha podido subir el archivo'
			),
			'isUnderPhpSizeLimit' => array(
				'rule' => 'isUnderPhpSizeLimit',
				'message' => 'El tamaño del archivo es demasiado grande'
			),
			'isValidMimeType' => array(
				'rule' => array('isValidMimeType', array('application/jpeg','image/jpeg','jpeg','application/jpg','image/jpg','jpg','application/png','image/png','png')),
				'message' => 'El tipo de archivo debe ser un jpg o png'
			),
			'isBelowMaxSize' => array(
				'rule' => array('isBelowMaxSize', 512000),
				'message' => 'El archivo supera los 512000 bytes (500k) y no puede superarlos'
				//https://cakephp-upload.readthedocs.io/en/2.x/validation.html
			)	
		),

	); 

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CategoriaPlato' => array(
			'className' => 'CategoriaPlato',
			'foreignKey' => 'categoria_plato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cocinero' => array(
			'className' => 'Cocinero',
			'joinTable' => 'cocineros_platos',
			'foreignKey' => 'plato_id',
			'associationForeignKey' => 'cocinero_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
