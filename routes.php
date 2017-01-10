  <?php
  echo 'routes.phpを通りました';
  echo '<br />';

  // 1.GETパラメータを取得
  // explode関数；第二引数の文字列を、第一引数の文字列で分解し、配列で返す関数。
  // echo $_GET['url'];
  $paramas = explode('/', $_GET['url']);

  var_dump($paramas);
  // 2,パラメータの分解（リソース名、アクション名、オプションを取得)
  $resouce = $paramas[0];
  $action = $paramas[1];
  $id = 0;
  if (isset($paramas[2])) {
    $id = $paramas[2];
  }

  //3,コントローラの呼び出し
  require('controllers/'. $resouce .'_controller.php'); 

  ?>