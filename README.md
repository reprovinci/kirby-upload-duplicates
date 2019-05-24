# kirby-upload-duplicates
Plugin to handle the upload of files with the same name. On file upload the file name is prefixed with the template name and suffixed with an iteration number.

## Installation

### Composer
Run `composer require reprovinci/kirby-upload-duplicates`.

### Manual Installation
Copy the files from this reporsitory to site/plugins/upload-duplicates in your project

## Usage
All should work out of the box. To test upload a file named test.jpg. Check that it is renamed to *templatename*-test-*1*.jpg. Then upload the file again and check that is renamed to  *templatename*-test-*2*.jpg.

![Demo](https://github.com/reprovinci/kirby-upload-duplicates/blob/master/assets/kirby-upload-duplicates.gif?raw=true)

## Issues
There is still one major issue: The file.create hook is used to rename uploaded files. This seems to be run after kirby checks if the file already exists and bails out if it does. So this plugin works in a clean setup without existing files but can't handle existing files in a project.

![Demo](https://github.com/reprovinci/kirby-upload-duplicates/blob/master/assets/kirby-upload-duplicates-2.gif?raw=true)

## Disclaimer
This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/reprovinci/kirby-upload-duplicates/issues/new).

## License
[MIT](https://github.com/reprovinci/kirby-upload-duplicates/blob/master/LICENSE.md)