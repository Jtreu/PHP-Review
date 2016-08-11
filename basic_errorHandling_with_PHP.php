<?php
/* Report simple running errors */
error_reporting(E_ALL);

/* Make sure they're on screen */
ini_set('display_errors', 1);

/* HTML formatted errors */
ini_set('html_errors', 1);

/* *****2 DIFFERENT TYPE OF ERRORS***** 
*  System Errors: Logic errors in your code
*  External Errors: Related to interactions with the world outside your code (failing to open a database, dropping a connection, unable to load a php module, etc)
*/

/* DEALING WITH ERRORS */
// 1. Log or Report the Error
// 2. Display the Error
// 3. Act on the Error
// 4. Ignore the Error

/* TYPES OF ERRORS */
// 1. Notice => Example: Notice: Undefined variable: VARIABLE_NAME in PATH_TO_FILE
// 2. Warning => Example: Warning: Include(PATH_TO_FILE): failed to open stream: No such file or directory
// 3. Fatal Error (caused by logical or syntax errors)=> Example: Fatal Error: Call to undefined function MY_FUNCTION()

/* DISPLAY ERORS ON SCREEN */
// 1. In the php.ini file
// 2. In the ht.access file on your web server
// 3. From your own PHP code
// IMPORTANT: Never display system errors to the user, it can disclose important information about your site's setup

/* This function is useful for displaying info, such as where you php.ini file is */
phpinfo();

/* Refer to the php.ini video for configuring a development server */

/* COMMON ERRORS */
// E_NOTICE
// E_WARNING
// E_ERROR

// Report just 3 simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>