#!/usr/bin/php
<?php
/*
Simple PHP version 8.4 script that runs the built-in server (PHP -S) in the background.

Notes:
- The built-in server is suitable for development, not for production.
- The script assumes PHP is available in PATH as php.
*/
  
  const CONFIG_FILE = __DIR__ . DIRECTORY_SEPARATOR . 'config.json';
  
  const MESSAGES = array(
        "OK"   => "Working!" . PHP_EOL,      
        "nOK"  => "We are having issues! Check logs." . PHP_EOL,
        "ON"   => "Server is running!" . PHP_EOL,      
        "OFF"  => "Server is not running!" . PHP_EOL,      
        "SET"  => "Change made successfully" . PHP_EOL,
        "nSET" => "Correct syntax:  php server.php set [attribute] [new value]"  . PHP_EOL, 
        "file_not_exists" => "File does not exist!" . PHP_EOL,      
        "restart" => "Server restarted!" . PHP_EOL,      
        "stop"    => "Server has been terminated!" . PHP_EOL,
        "PAUSE"   => "Please wait!" . PHP_EOL,
        "ABOUT"   => "Usage: php server.php [on|off|status|set|restart|config]".PHP_EOL
  );

  function show_message(string $msg="OK"){
     echo MESSAGES[$msg];
  };

  function show_config($cfg){
    show_message("ABOUT");
    echo "*\n* Attribute:value \n*". PHP_EOL;
    foreach ($cfg as $k => $v) {
      echo trim( $k ).":".trim( (string) $v ). PHP_EOL;
    }
  }

  // Simple autoload registration without Composer

  spl_autoload_register(function ($class) {

      $path = 'src/' . str_replace('\\', '/', $class) . '.php';
      if (file_exists($path)) {
          require $path;
      }
  });

  // Command to run all tests
  // php /vendor/bin/phpunit
  // Autoload registration with Composer 
  // - composer install
  // - composer dump-autoload
  // require 'vendor/autoload.php';

  // server instance
  $serve= new Serve();

  // Simple argument validation
  $arg   = $argv[1] ?? '';
  $attrb = $argv[2] ?? '';
  $value = $argv[3] ?? '';

  switch (strtolower($arg)) {
      case 'test':
          /*
          var_dump( $serve->cfg );    
          $serve->set_config("PID",0);
          $serve->set_config("DOCROOT",".");
          $serve->set_config("NPORT",8090);
          $serve->save_config();
          */
          break;
      case 'set':
          show_message($serve->set($attrb,$value) ? "SET" : "nSET");
          break;
      case 'on':
          show_message($serve->on() ? "ON" : "nOK");
          break;
      case 'off':
          show_message($serve->off() ? "OFF" : "nOK");
          break;
      case 'restart':
          show_message($serve->off() ? "stop" : "nOK");
          echo "..".PHP_EOL;
          show_message("PAUSE");
          sleep(3);
          echo "..".PHP_EOL;
          show_message($serve->on() ? "ON" : "nOK");
          break;          
      case 'status':
          show_message($serve->status() ? "ON" : "OFF");
          break;
      case 'config':
          show_config($serve->cfg);    
          break;    
      default:
          show_message("ABOUT");
          break;

  }
