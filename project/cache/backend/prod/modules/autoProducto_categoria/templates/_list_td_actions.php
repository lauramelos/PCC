<td class="sf_admin_td_actions">
  <div class="btn-action"><div class="icn icn-action-edit"></div></div>
  <ul class="sf_admin_ul_actions">
    <?php echo $helper->mooLinkToEdit($producto_categoria, array(  'inWinPopUp' => true,  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
        <?php echo $helper->moolinkToDelete($producto_categoria, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>