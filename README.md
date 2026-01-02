# ServerPHP

PHP script managing a PHP built-in server.

# README

## Commands to run

- php Servidor.php
- -> Usage: php servidor.php [on|off|status|set|restart|config]

## COMPOSER

- after git clone, run **composer update**

## GIT

- **git add [file]**, Adds file to local repository.

- **git commit -m "description of message"**, Commits; the file can go to the remote repository.

- **git push origin main**, Pushes commits from your local main branch to the main branch of the remote repository named origin.

## Overview

Simple PHP 8.4 script that runs the built-in server (PHP -S) in the background.
The script receives commands via the command line: "on" to start the server and "off" to stop it.

It uses a JSON file to manage the server process.

Notes:
- The built-in server is suitable for development, not for production.
- The script assumes PHP is available in the PATH as php.
- Replace localhost and 8090 as needed.
- The script uses a PID file to allow start, stop, and kill of the process.

It includes a manual autoload in PHP with two classes: `Base` and `Serve`. The autoload registers an anonymous function to include class files based on the namespace/class name. The code demonstrates creating objects and reading their attributes.

## Technical observations

**Basic autoload**:
 - The autoload uses `spl_autoload_register` to include files based on the class name.
 - The convention used is that the class name matches the filename (e.g.: `Base` -> `Base.php`).

QUICK NOTES

- The script runs only on Linux; check php.ini
- The built-in server is for development; do not use in production.
- The script relies on Composer and autoload (vendor/autoload.php).
- Ensure that the `Serve` class and its methods (on, off, status, set, etc.) are available.
