<?php
$enable = array(
  'site_frontpage' => 'node',
  'site_slogan' => "Behat sandbox"
);
foreach ($enable as $var => $setting) {
  if (!is_numeric($var)) {
    // set the site variables.
    variable_set($var, $setting);
  }
}
