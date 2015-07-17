<?php
$enable = array(
  'site_frontpage' => 'node',
  'site_slogan' => "Behat sandbox",
);

foreach ($enable as $var => $setting) {
  if (!is_numeric($var)) {
    // Set the site variables.
    variable_set($var, $setting);
  }
}

// Disable all unnecessary modules.
if (module_exists('block')) {
  module_disable(array('block'));
  drupal_uninstall_modules(array('block'));
}
