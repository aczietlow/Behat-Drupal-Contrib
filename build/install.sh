#!/bin/bash
set -e
path=$(dirname "$0")
source $path/common.sh

echo "Installing Drupal minimal profile.";
$drush si minimal --site-name=amuzen-cab --account-name=admin --account-pass=admin
source $path/update.sh
