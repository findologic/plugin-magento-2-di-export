<?php

namespace Findologic\Export\Helper;

use Findologic\MagentoExport\Export;

require_once __DIR__ . '/../Export.php';

class ExportHelper
{
    /**
     * @return Export
     */
    public function buildExportInstance()
    {
        return new Export();
    }
}
