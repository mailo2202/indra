<?php
namespace indra\home\controller;

class homeController {
  public function show() {
    $element = array(
      '#markup' => t("bienvenido al home"),
    );
    return $element
  }
}
