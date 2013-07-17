<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once SIM_PATH . 'SimulationScenario.php';

/**
 * A class for simulating maintenance/delivery scenarios
 *
 * @package
 * @subpackage
 * @author
 */
class MatteoScenarioOverbooked extends SimulationScenario
{
    /**
     * The constructor method.
     */
    function MatteoScenarioOverbooked()
    {
        $this->init("MatteoScenarioOverbooked");
        $this->setDateTime($GLOBALS['_MAX']['CONF']['sim']['starthour'], $GLOBALS['_MAX']['CONF']['sim']['startday']);
        $this->adSelectCallback = 'saveChannelInfo';
    }

    function run()
    {
        $this->newTables();
        $this->loadDataset('MatteoScenarioOverbooked');
        $this->printPrecis();
        for($i=1;$i<=$this->scenarioConfig['iterations'];$i++)
        {
            $this->printHeading('Started iteration: '. $i, 3);
            $this->runPriority();
            $this->makeRequests($i);
            $this->printHeading('Ended iteration: '. $i, 3);
        }
		//$this->runMaintenance();
        $this->printPostSummary();
        $this->printSummaryData();
    }

    function saveChannelInfo()
    {
        $this->aVarDump[] = $GLOBALS['_MAX']['CHANNELS'];
    }

}

?>