## Usage

This is a script helps you to include a great `one-click demo` option to your theme.

Note: A test dummy content from [Theme_Unit_Test](http://codex.wordpress.org/Theme_Unit_Test) added in `data` folder

* To add your dummy content, simply export your data to `.xml` format and compress it to `.gz` format by [7z software](http://www.7-zip.org/7z.html).
* Rename the compressed file to `sample-data.gz` and replace the default one in `data` folder.
* As for widgets, export your widgets by [widget-settings-importexport](https://wordpress.org/plugins/widget-settings-importexport/) plugin. 
* Rename your `.json` file to `widget_data.json` and replace the default one.


## Advanced usage:

You can edit the default values in `importer.php` file

* Chagne the import `file name` @ line 25
* To import the data without images set `$importer->fetch_attachments` to `false` @ line 26
* Change the `menu names` @ line 35
* Chagne the `widget file name` @ line 49
* Set `reading` options @ line 55
