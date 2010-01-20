<?php


/**
 * This class adds structure of 'producto_proveedor' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Jan 14 12:22:01 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ProductoProveedorMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ProductoProveedorMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(ProductoProveedorPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ProductoProveedorPeer::TABLE_NAME);
		$tMap->setPhpName('ProductoProveedor');
		$tMap->setClassname('ProductoProveedor');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignPrimaryKey('PRODUCTO_ID', 'ProductoId', 'INTEGER' , 'producto', 'ID', true, null);

		$tMap->addForeignPrimaryKey('PROVEEDOR_ID', 'ProveedorId', 'INTEGER' , 'proveedor', 'ID', true, null);

	} // doBuild()

} // ProductoProveedorMapBuilder
