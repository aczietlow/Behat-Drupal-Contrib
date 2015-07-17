<?php
$enable = array(
  'theme_default' => 'bartik',
  'admin_theme' => 'seven',
);
theme_enable($enable);
foreach ($enable as $var => $theme) {
  if (!is_numeric($var)) {
    variable_set($var, $theme);
    if ($theme == $enable['theme_default']) {
      $settings = variable_get('theme' . $theme . 'settings');
      // Configure settings for conceptual theme.
      variable_set('theme' . $theme . 'settings', $settings);
    }
  }
}
// Use the administration theme when editing or creating content.
variable_set('node_admin_theme', 1);
