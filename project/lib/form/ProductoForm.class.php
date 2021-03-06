<?php

/**
 * Producto form.
 *
 * @package    pcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ProductoForm extends BaseProductoForm {
  public function configure() {

    $this->widgetSchema['producto_categoria_id'] = new sfWidgetFormMooPropelChoiceWithAdd(array(
      'model' => 'ProductoCategoria',
      'add_empty' => false,
      'url' => 'producto_categoria/addCategoriaAProducto',
      'input_name' => 'producto_categoria[nombre]'
    ));

    $this->widgetSchema['producto_udm_id'] = new sfWidgetFormMooPropelChoiceWithAdd(array(
      'model' => 'ProductoUDM',
      'add_empty' => false,
      'url' => 'producto_udm/addUDM2Producto',
      'input_name' => 'producto_udm[nombre]'
    ));
  }
}