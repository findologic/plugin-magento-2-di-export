<?php

namespace Findologic\MagentoExport;

use Findologic\MagentoExport\Example\XmlExample;

require_once __DIR__ . '/Example/XmlExample.php';
require_once __DIR__ . '/Example/ExampleBaseItem.php';
require_once __DIR__ . '/Example/ExampleContentItem.php';
require_once __DIR__ . '/Example/ExampleProductItem.php';

class Export
{
    /**
     * @return string The generated XML.
     */
    public function startExport($shopkey, $start, $count)
    {
        // INSERT YOUR EXPORT HERE AND REPLACE THE EXAMPLE CODE

        $xmlExample = new XmlExample();
        return $xmlExample->createExport();
    }
}
