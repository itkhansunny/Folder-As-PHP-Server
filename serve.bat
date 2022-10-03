cd "%1"
@echo off
setlocal enableextensions
for /f "delims=" %%a in (
	'php -f C:/server/index.php'
) do set "retVar=%%a"
cd %1
php -S localhost:%retVar%