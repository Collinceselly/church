<<<<<<< HEAD
<?php
/**
 * This file when used in KoolReport will add jQuery to the view
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\clients;
use \koolreport\core\Utility;

trait jQuery
{
    public function __constructjQuery()
    {
        $this->registerEvent('OnResourceInit',function(){
            $publicAssetUrl = $this->publishAssetFolder(dirname(__FILE__)."/jquery");
            $this->getResourceManager()->addScriptFileOnBegin($publicAssetUrl."/jquery.min.js");
        });
    }
=======
<?php
/**
 * This file when used in KoolReport will add jQuery to the view
 *
 * @author KoolPHP Inc (support@koolphp.net)
 * @link https://www.koolphp.net
 * @copyright KoolPHP Inc
 * @license https://www.koolreport.com/license#mit-license
 */

namespace koolreport\clients;
use \koolreport\core\Utility;

trait jQuery
{
    public function __constructjQuery()
    {
        $this->registerEvent('OnResourceInit',function(){
            $publicAssetUrl = $this->publishAssetFolder(dirname(__FILE__)."/jquery");
            $this->getResourceManager()->addScriptFileOnBegin($publicAssetUrl."/jquery.min.js");
        });
    }
>>>>>>> c7824645cfadb3808d92a57445373d5d5a6bcc96
}