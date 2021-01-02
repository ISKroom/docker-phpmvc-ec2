<?php

///環境変数は docker-composeで定義 or Elastic Beanstalk に登録
///

// ☆☆☆
// session_helper.php の以下も変更しました（フォーム再送信の確認の回避のため）
// session_start();
// header('Expires:-1');
// header('Cache-Control:');
// header('Pragma:');
// ☆☆☆


  // DB Params
  define('DB_HOST', $_ENV["DB_HOST"]);
  define('DB_USER', $_ENV["DB_USER"]);
  define('DB_PASS', $_ENV["DB_PASS"]);
  define('DB_NAME', $_ENV["DB_NAME"]);

  // App Root
  // __FILE__ → config.phpのファイルパス
  // dirname(__FILE__) → config.php が存在するディレクトリのファイルパス
  // dirname(dirname(__FILE__)) → app フォルダのファイルパス
  define('APPROOT',dirname(dirname(__FILE__)));

  // URL ROOT
  define('URLROOT', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);

  // Site Name
  define('SITENAME', 'Template');

  // App version
  define('APPVERSION', '1.0.0');

?>
