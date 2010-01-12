<?php


/**
 * This class adds structure of 'proveedor_formas_de_pago' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Jan 12 16:53:36 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ProveedorFDPMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ProveedorFDPMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ProveedorFDPPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ProveedorFDPPeer::TABLE_NAME);
		$tMap->setPhpName('ProveedorFDP');
		$tMap->setClassname('ProveedorFDP');

		$tMap->setUseIdGenerator(true);

		$tMap->addForeignKey('PROVEEDOR_ID', 'ProveedorId', 'INTEGER', 'proveedor', 'ID', false, null);

		$tMap->addForeignKey('FDP_ID', 'FdpId', 'INTEGER', 'proveedor_formas_de_pago', 'ID', false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

	} // doBuild()

} // ProveedorFDPMapBuilder
