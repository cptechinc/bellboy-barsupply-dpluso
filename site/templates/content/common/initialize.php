<?php
	include_once($config->paths->templates."configs/dpluso-config.php");
	$appconfig = $pages->get('/config/');

	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/vendor/autoload.php");
	include_once($config->paths->vendor."cptechinc/dpluso-screen-formatters/vendor/autoload.php");
	include_once($config->paths->vendor."cptechinc/dplus-services/vendor/autoload.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/Model/SalesOrderHistory.class.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/SalesOrderHistoryPanel.class.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/CustomerSalesOrderHistoryPanel.class.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/BookingsPanel.class.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/SalesOrderHistoryPanelCustomer.class.php");
	include_once($config->paths->vendor."cptechinc/dpluso-processwire-classes/src/BookingsPanelCustomer.class.php");

	TableScreenMaker::set_filedirectory($config->jsonfilepath);
	TableScreenMaker::set_testfiledirectory($config->paths->vendor."cptechinc/dpluso-screen-formatters/src/examples/");
	TableScreenMaker::set_fieldfiledirectory($config->companyfiles."json/");

	$config->pages = new ProcessWire\Paths($config->rootURL);
	include $config->paths->templates."configs/nav-config.php";

	FormFieldsConfig::set_defaultconfigdirectory($config->paths->templates."configs/customer/");
