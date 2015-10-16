@echo off

rem -------------------------------------------------------------
rem  Yii command line bootstrap script for Windows.
rem
rem  @author Qiang Xue <qiang.xue@gmail.com>
rem  @link http://www.yiiframework.com/
rem  @copyright Copyright (c) 2008 Yii Software LLC
rem  @license http://www.yiiframework.com/license/
rem -------------------------------------------------------------

@setlocal

set YII_PATH=composer.phar

if "%PHP_COMMAND%" == "" set PHP_COMMAND=C:\OpenServer\modules\php\PHP-5.6\php.exe

"%PHP_COMMAND%" "%YII_PATH%" %*

@endlocal