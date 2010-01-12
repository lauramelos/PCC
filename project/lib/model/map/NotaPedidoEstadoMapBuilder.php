<?php


/**
 * This class adds structure of 'nota_pedido_estado' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Jan 12 16:53:35 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class NotaPedidoEstadoMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.NotaPedidoEstadoMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NotaPedidoEstadoPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NotaPedidoEstadoPeer::TABLE_NAME);
		$tMap->setPhpName('NotaPedidoEstado');
		$tMap->setClassname('NotaPedidoEstado');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('NOTA_PEDIDO_ID', 'NotaPedidoId', 'INTEGER', 'nota_pedido', 'ID', false, null);

		$tMap->addForeignKey('ESTADO_ID', 'EstadoId', 'TINYINT', 'estado', 'ID', false, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null);

		$tMap->addColumn('FECHA', 'Fecha', 'TIMESTAMP', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // NotaPedidoEstadoMapBuilder
