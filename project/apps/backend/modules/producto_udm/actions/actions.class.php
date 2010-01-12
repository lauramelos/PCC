<?php

require_once dirname(__FILE__).'/../lib/producto_udmGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/producto_udmGeneratorHelper.class.php';

/**
 * producto_udm actions.
 *
 * @package    pcc
 * @subpackage producto_udm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class producto_udmActions extends autoProducto_udmActions
{
	public function executeListNew (sfWebRequest $request) {
		$this->forward('producto_udm', 'newWin');
	}
	
	public function executeListEdit (sfWebRequest $request) {
		$this->forward('producto_udm', 'editWin');
	}

	 public function executeEditWin (sfWebRequest $request) {
		$this->producto_udm = ProductoUDMPeer::retrieveByPK($request->getParameter('id'));
    	$this->form = $this->configuration->getForm($this->producto_udm);
	}
}