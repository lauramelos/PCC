    <div class="bloque">
      <div>número: <strong><?php echo $nota_pedido->getNumero() ?></strong> | revisión <strong><?php echo $nota_pedido->getRevision() ?></strong></div>
    </div>

    <div class="bloque">
      <div>Proveedor: <strong><?php echo $nota_pedido->getProveedor() ?></strong></div>
      <div>Domicilio: <strong><?php echo $nota_pedido->getProveedor()->getDomicilio() ?></strong></div>
    </div>

    <div class="bloque">
      <h3>Compras</h3>
      <form method="post" id="sf_admin_list_td_actions_form-compra">
        <input type="hidden" name="sf_method" value="delete"/>
        <input type="hidden" name="moo_post_execute" value="win_refresh"/>
      </form>

      <div class="sf_admin_list">
      <table>
        <tbody>
          <?php $total = 0; ?>
          <?php foreach ($nota_pedido->getCompras() as $i => $compra): $odd = fmod(++$i, 2) ? 'odd' : 'even' ; $total = $total + $compra->getTotalxCompra() ?>
          <tr class="sf_admin_row <?php echo $odd ?>">
            <td><?php echo $i ?></td>
            <td><?php echo $compra->getCantidad() ?></td>
            <td><?php echo $compra->getProducto() ?></td>
            <td><?php echo $compra->getPrecio() ?></td>
            <td><?php echo $compra->getTotalxCompraString() ?></td>
            <td class="sf_admin_td_actions">
              <div class="pepe">
                <div class="btn-action"><div class="icn icn-action-edit"></div></div>

                <ul class="sf_admin_ul_actions">
                  <li options="{'update':'vtn-nota_pedido-index'}" ajax_link="nota_pedido/ListEdit?id=1" class="sf_admin_td_actions_edit btn_object_action ajax_btn_to"><div class="icn icn-edit"></div>Editar</li>
                    <?php echo $helper->mooLinkToDelete($compra, array('params' => array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete'), 'compra') ?>

                    <?php /*
                                    <li options="{'update':'vtn-nota_pedido-index'}" ajax_link="nota_pedido/ListEdit?id=1" class="sf_admin_td_actions_edit btn_object_action ajax_btn_to"><div class="icn icn-edit"></div>Editar</li>
                                    <li options="{'update':'vtn-nota_pedido-index'}" ajax_link="nota_pedido/ListAdminCompras?id=1" class="sf_admin_td_actions_admin_compras btn_object_action ajax_btn_to"><div class="icn icn-admin_compras"></div>Administrar Compras</li>
                                    <li class="sf_admin_action_delete btn_object_action" msg="Are you sure?" link_delete="/pcc-1.2/trunk/project/web/index.php/nota_pedido/1"><div class="icn icn-delete"></div>Borrar</li>
                                     *
                                     */
                    ?>
                </ul>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <thead>
          <tr>
            <th class="col0">Item</th>
            <th class="col1">C.</th>
            <th class="col2">Producto</th>
            <th class="col3">PxUnidad</th>
            <th class="col4">Total</th>
            <th class="col5">A</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th colspan="4">Total:</th>
            <th colspan="2">$ <?php echo $total ?></th>
          </tr>
        </tfoot>
      </table>
      </div>
    </div>


    <div class="flashes_nota_pedido win_flashes">
      <?php include_partial('nota_pedido/flashes') ?>
    </div>

    <div id="add_compra-<?php echo $nota_pedido->getId() ?>"></div>

    <div class="win_footer sf_admin_actions">
      <ul class="sf_admin_actions">
        <li class="btn_admin_actions"><div class="icn icn-Cancel"></div>Cancelar</li>
        <li class="btn_admin_actions"><div class="icn icn-new"></div>Comprar</li>
      </ul>
    </div>