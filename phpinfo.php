<?php

/*
 * PHP INFORMATION REFERENCE
 * USE THESE CONSTANTS AS ARGUMENTS IN PHPINFO() TO TOGGLE SPECIFIC DATA.
 */

/*
| CONSTANT           | VALUE | DESCRIPTION                                     |
|--------------------|-------|-------------------------------------------------|
| INFO_GENERAL       | 1     | SYSTEM INFO, BUILD DATE, SERVER, ETC.           |
| INFO_CREDITS       | 2     | PHP CREDITS (THE "WHO'S WHO" OF PHP)            |
| INFO_CONFIGURATION | 4     | LOCAL AND MASTER PHP.INI DIRECTIVES             |
| INFO_MODULES       | 8     | LOADED EXTENSIONS AND THEIR SPECIFIC SETTINGS   |
| INFO_ENVIRONMENT   | 16    | $_ENV VARIABLE INFORMATION                      |
| INFO_VARIABLES     | 32    | ALL PREDEFINED VARIABLES (EGPCS)                |
| INFO_LICENSE       | 64    | PHP LICENSE INFORMATION                         |
| INFO_ALL           | -1    | SHOWS EVERYTHING (DEFAULT)                      |
*/

// --- ACTIVE COMMANDS ---

// SHOW EVERYTHING
phpinfo();

// SHOW ONLY MODULE/EXTENSION INFORMATION
phpinfo(INFO_MODULES); 

?>
