<<<<<<< HEAD
<?php
/**
 * This file contains foundation class for all data sources. 
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\core;

class DataSource extends Node
{
	protected $params;
	protected $report;
	public function __construct($params=null,$report=null)
	{
		parent::__construct();
		$this->params = $params;
		$this->report = $report;
		$this->onInit();
	}
	protected function onInit()
	{
		//Set up connection
	}	
	public function start()
	{
		//Start pushing data
	}

	public function getReport()
	{
		return $this->report;
	}

	protected function requestDataSending()
	{
		$this->start();
	} 
}
=======
<?php
/**
 * This file contains foundation class for all data sources. 
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\core;

class DataSource extends Node
{
	protected $params;
	protected $report;
	public function __construct($params=null,$report=null)
	{
		parent::__construct();
		$this->params = $params;
		$this->report = $report;
		$this->onInit();
	}
	protected function onInit()
	{
		//Set up connection
	}	
	public function start()
	{
		//Start pushing data
	}

	public function getReport()
	{
		return $this->report;
	}

	protected function requestDataSending()
	{
		$this->start();
	} 
}
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
