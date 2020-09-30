# Findologic Magento 2 Export Plugin

In order to use the Findologic service you need to install:
* Findologic [plugin-magento-2-di](https://github.com/findologic/plugin-magento-2-di) for search & navigation.
* Findologic [plugin-magento-2-di-export](https://github.com/findologic/plugin-oxid-magento-2-export/) for product export.

## Installation
* See [Integration with Magento plugin](https://docs.findologic.com/doku.php?id=integration_documentation:magento).

## Product export

For the functionality of the plugin it's essential to export the product data from the shop to Findologic. 
For this purpose, the Findologic export library [libflexport](https://github.com/findologic/libflexport)
is included. By default the export contains only demo product data.

The export is triggerred by the [plugin-magento-2-di](https://github.com/findologic/plugin-magento-2-di) and 
calls `Export::startExport`. Please use this example and modify it to your needs.

The xml export documentation can be found [here](https://docs.findologic.com/doku.php?id=xml_export_documentation:XML_format).
The exported XML is validated against a predefined [XSD Schema](https://github.com/findologic/xml-export/blob/master/src/main/resources/findologic.xsd).

## Run export

The export can be triggered by URL in your browser:

* https://\<SHOP_URL\>/search/Export/ExportController?shopkey=\<SHOP_KEY\>&start=\<NUMBER\>&count=\<NUMBER\>

Parameters:
* **shopkey:** API key provided by Findologic
* **start:** number that should not be lower than zero
* **count:** number that should not lower than zero and “start” number
