<?php


/**
 * This class adds structure of 'compra_estado' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Jan 12 14:28:40 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CompraEstadoMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CompraEstadoMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CompraEstadoPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CompraEstadoPeer::TABLE_NAME);
		$tMap->setPhpName('CompraEstado');
		$tMap->setClassname('CompraEstado');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('COMPRA_ID', 'CompraId', 'INTEGER', 'compra', 'ID', false, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addForeignKey('ESTADO_ID', 'EstadoId', 'TINYINT', 'estado', 'ID', false, null);

		$tMap->addColumn('CANTIDAD', 'Cantidad', 'INTEGER', false, null);

		$tMap->addColumn('FECHA', 'Fecha', 'TIMESTAMP', false, null);

		$tMap->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null);

		$tMap->addForeignKey('NOTA_RECEPCION_ID', 'NotaRecepcionId', 'INTEGER', 'recepcion_pedido', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // CompraEstadoMapBuilder