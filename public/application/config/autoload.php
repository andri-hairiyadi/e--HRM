<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('session','database','form_validation');


$autoload['helper'] = array('url','html','form','file');



$autoload['config'] = array();

$autoload['language'] = array();


$autoload['model'] = array(
						   
						   'model_data_user',
						   'model_data_pelamar',
						   'model_data_lowongan_kerja',
						   'model_data_area_kerja',
						   'model_data_kontrak_kerja',
						   'model_data_man_power',
						   'model_kpi',
						   'model_register'
						   
						   );


