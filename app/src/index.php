<?php
//ob_start();

/*ini_set('max_execution_time', '600');*/
//define( "GZIP_ENABLE", function_exists ( 'ob_gzhandler') );
//ob_start( GZIP_ENABLE ? 'ob_gzhandler': null );
//header('Access-Control-Allow-Origin:*');
/*include_once('E:/web/test/FirePHPCore/fb.php');
if ((mt_rand(1, 1) == 1) && isset($_GET['debug'])) {
	xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
	$xhprof_on = true;
	register_shutdown_function("shutdown_function");
}

function shutdown_function(){
	$xhprof_data = xhprof_disable();
	$XHPROF_ROOT = 'E:/web/test/xhprof';
	include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
	include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";
	$xhprof_runs = new XHProfRuns_Default();
	$run_id = $xhprof_runs->save_run($xhprof_data, "crm");
	echo '<div style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;">
		<a href="http://i.cn/test/xhprof/xhprof_html/index.php?run='.$run_id.'&source=crm" target="_blank">性能分析</a>
	</div>';
}*/
define("ONLINE",file_exists('online.txt'));
$debug = 1;
//if($_GET['debug'] == 1 || $debug){
	define('APP_DEBUG',true);
//}

define('ROOT',__DIR__);
//var_dump(APP_DEBUG);
define('APP_PATH',ROOT.'/Application/');
define('RUNTIME_PATH',ROOT.'/Runtime/');

require ROOT.'/framework/ThinkPHP/ThinkPHP.php';
