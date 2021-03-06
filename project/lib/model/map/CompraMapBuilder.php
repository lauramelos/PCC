<?php


/**
 * This class adds structure of 'compra' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Jan 14 12:22:00 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CompraMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CompraMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CompraPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CompraPeer::TABLE_NAME);
		$tMap->setPhpName('Compra');
		$tMap->setClassname('Compra');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('PRODUCTO_ID', 'ProductoId', 'INTEGER', 'producto', 'ID', false, null);

		$tMap->addColumn('CANTIDAD', 'Cantidad', 'INTEGER', false, null);

		$tMap->addForeignKey('PROVEEDOR_ID', 'ProveedorId', 'INTEGER', 'proveedor', 'ID', false, null);

		$tMap->addForeignKey('NOTA_PEDIDO_ID', 'NotaPedidoId', 'INTEGER', 'nota_pedido', 'ID', false, null);

		$tMap->addColumn('PRECIO', 'Precio', 'FLOAT', false, null);

		$tMap->addColumn('MONEDA', 'Moneda', 'VARCHAR', false, 10);

		$tMap->addColumn('FECHA', 'Fecha', 'TIMESTAMP', false, null);

		$tMap->addColumn('FECHA_ENTREGA', 'FechaEntrega', 'TIMESTAMP', false, null);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // CompraMapBuilder
