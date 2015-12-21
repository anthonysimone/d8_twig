<?php

namespace Drupal\e3_twig\TwigExtension;

class MyTwigExtension extends \Twig_Extension {

  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return array(
      'leet' => new \Twig_Filter_Function(array($this, 'makeLeet')),
      'dasherize' => new \Twig_Filter_function(array($this, 'dasherize')),
    );
  }

  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'e3_twig.my_twig_extension';
  }

  /**
   * Makes passed string 1337
   */
  public static function makeLeet($string) {
    $leet_string = str_replace(array('e', 'E', 'a', 'A', 'o', 'O', 'l', 'L', 't', 'T'), array('3', '3', '4', '4', '0', '0', '1', '1', '7', '7'), $string);
    return $leet_string;
  }
  /**
   * Dasherizes passed string
   */
  public static function dasherize($string) {
    $string = str_replace(' ', '-', $string);
    $string = strtolower($string);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
  }

}
