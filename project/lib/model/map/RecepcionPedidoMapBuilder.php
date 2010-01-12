<?php


/**
 * This class adds structure of 'recepcion_pedido' table to 'propel' DatabaseMap object.
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
class RecepcionPedidoMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RecepcionPedidoMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(RecepcionPedidoPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(RecepcionPedidoPeer::TABLE_NAME);
		$tMap->setPhpName('RecepcionPedido');
		$tMap->setClassname('RecepcionPedido');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('NOTA_PEDIDO_ID', 'NotaPedidoId', 'INTEGER', 'nota_pedido', 'ID', false, null);

		$tMap->addColumn('FECHA', 'Fecha', 'DATE', false, null);

		$tMap->addForeignKey('RECIBE_ID', 'RecibeId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addForeignKey('CONTROLA_ID', 'ControlaId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addForeignKey('ADMINISTRA_ID', 'AdministraId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addColumn('PROVEEDOR_FACTURA', 'ProveedorFactura', 'VARCHAR', false, 30);

		$tMap->addColumn('PROVEEDOR_REMITO', 'ProveedorRemito', 'VARCHAR', false, 30);

		$tMap->addForeignKey('TRANSPORTISTA_ID', 'TransportistaId', 'INTEGER', 'proveedor', 'ID', false, null);

		$tMap->addColumn('TRANSPORTISTA_NUMERO_GUIA', 'TransportistaNumeroGuia', 'VARCHAR', false, 30);

		$tMap->addColumn('TRANSPORTISTA_BULTOS', 'TransportistaBultos', 'TINYINT', false, null);

		$tMap->addColumn('REMITO_PROVEEDOR', 'RemitoProveedor', 'BOOLEAN', false, null);

		$tMap->addColumn('CERTIFICADO_CALIDAD', 'CertificadoCalidad', 'BOOLEAN', false, null);

		$tMap->addColumn('FACTURA', 'Factura', 'BOOLEAN', false, null);

		$tMap->addColumn('MANUALES', 'Manuales', 'BOOLEAN', false, null);

		$tMap->addColumn('ENSAYOS', 'Ensayos', 'BOOLEAN', false, null);

		$tMap->addColumn('CERT_CONFORMIDAD', 'CertConformidad', 'BOOLEAN', false, null);

		$tMap->addColumn('MSDS', 'Msds', 'BOOLEAN', false, null);

		$tMap->addColumn('OTROS', 'Otros', 'BOOLEAN', false, null);

		$tMap->addColumn('OTROS_DESCRIPCION', 'OtrosDescripcion', 'VARCHAR', false, 50);

		$tMap->addColumn('ERROR_ENVIO', 'ErrorEnvio', 'BOOLEAN', false, null);

		$tMap->addColumn('ERROR_ENVIO_DESC', 'ErrorEnvioDesc', 'VARCHAR', false, 100);

		$tMap->addColumn('RECHAZADO', 'Rechazado', 'BOOLEAN', false, null);

		$tMap->addColumn('RECHAZADO_DESC', 'RechazadoDesc', 'VARCHAR', false, 100);

		$tMap->addColumn('CONTROL_ITEMS', 'ControlItems', 'BOOLEAN', false, null);

		$tMap->addColumn('CONTROL_PRECIOS', 'ControlPrecios', 'BOOLEAN', false, null);

		$tMap->addColumn('CONTROL_CALIDAD', 'ControlCalidad', 'BOOLEAN', false, null);

		$tMap->addColumn('CONTROL_CANTIDAD', 'ControlCantidad', 'BOOLEAN', false, null);

		$tMap->addColumn('CERRADA', 'Cerrada', 'BOOLEAN', false, null);

	} // doBuild()

} // RecepcionPedidoMapBuilder
