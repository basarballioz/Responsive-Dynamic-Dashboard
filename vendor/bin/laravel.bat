@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../laravel/installer/bin/laravel
php "%BIN_TARGET%" %*
