<?php
/*
Plugin Name: Student Manager
Description: Plugin quản lý sinh viên
Version: 1.0
Author: Student
*/
if (!defined('ABSPATH')) exit;

define('SM_PATH', plugin_dir_path(__FILE__));

require_once SM_PATH.'includes/student-cpt.php';
require_once SM_PATH.'includes/student-meta-box.php';
require_once SM_PATH.'includes/student-shortcode.php';
