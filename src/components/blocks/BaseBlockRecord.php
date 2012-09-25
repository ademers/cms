<?php
namespace Blocks;

/**
 * Block record base class
 *
 * @abstract
 */
abstract class BaseBlockRecord extends BaseRecord
{
	public $oldHandle;

	/**
	 * @return array
	 */
	public function defineAttributes()
	{
		return array(
			'name'         => array(AttributeType::Name, 'required' => true),
			'handle'       => array(AttributeType::Handle, 'maxLength' => 64, 'required' => true),
			'instructions' => array(AttributeType::String, 'column' => ColumnType::Text),
			/* BLOCKSPRO ONLY */
			'required'     => AttributeType::Bool,
			'translatable' => AttributeType::Bool,
			/* end BLOCKSPRO ONLY */
			'type'         => array(AttributeType::ClassName, 'required' => true),
			'settings'     => AttributeType::Mixed,
			'sortOrder'    => AttributeType::SortOrder,
		);
	}

	/**
	 * @return array
	 */
	public function defineIndexes()
	{
		return array(
			array('columns' => 'handle', 'unique' => true)
		);
	}
}
