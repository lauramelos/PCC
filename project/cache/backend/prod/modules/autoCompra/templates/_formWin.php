<?php echo form_tag_for($form, '@compra', array ('id' => '')) ?>

    <?php echo $form->renderHiddenFields() ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

      <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
        <?php include_partial('compra/form_fieldset', array('compra' => $compra, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
      <?php endforeach; ?>

    <?php include_partial('compra/form_actionsWin', array('compra' => $compra, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
</form>

<form class="hiddenForm" method="post">
  <input value="delete" name="sf_method" type="hidden">
</form>
