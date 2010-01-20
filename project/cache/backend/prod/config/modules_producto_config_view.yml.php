<?php
// auto-generated by sfViewConfigHandler
// date: 2010/01/20 13:13:24
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!is_null($layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout')))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (is_null($this->getDecoratorTemplate()) && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'PCC. Aplicación Administrativa.', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu.css', '', array ());
  $response->addStylesheet('/sfFormMooDooPlugin/css/moodoo.choice_with_add.css', '', array ());
  $response->addStylesheet('/sfFormMooDooPlugin/css/moodoo.global.css', '', array ());
  $response->addJavascript('mootools-1.2.4-core.js', '', array ());
  $response->addJavascript('mootools-1.2.4.2-more.js', '', array ());
  $response->addJavascript('mainMenu.js', '', array ());
  $response->addJavascript('/sfFormMooDooPlugin/js/moodoo.choice_with_add.js', '', array ());


