<?php
/*
 * Plugin Name: {{cookiecutter.project_name}}
 * Description: {{cookiecutter.project_description}}
 * Author: {{cookiecutter.project_author}}
 * Version: {{cookiecutter.project_version}}
 */

use {{cookiecutter.project_namespace}}\Factory;
use {{cookiecutter.project_namespace}}\Hooks;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/constants.php';

( new Hooks() )->register_hooks();
