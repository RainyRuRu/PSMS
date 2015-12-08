<?php /* Smarty version 2.6.26, created on 2015-12-07 16:46:57
         compiled from index.tpl.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'index.tpl.htm', 8, false),array('modifier', 'time', 'index.tpl.htm', 47, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GoEz Framework!!!</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/css/style.css" media="all" />
<script type="text/javascript">
var $frontendVars = <?php echo json_encode($this->_tpl_vars['frontendVars']); ?>
;
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/lib/jquery/latest.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/lib/jquery/form.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/js/default.js"></script>
</head>

<body>
<div id="wrapper">
<div id="header">
<h1>GoEz Framework!!!</h1>
</div>
<div id="content">
<h2>怎麼修改這一頁？</h2>
<h3>程式</h3>
<ol>
<li>打開 &quot;<?php echo @APP_ROOT_PATH; ?>
<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/lib/My/IndexController.php&quot; ，</li>
<li>修改 indexAction() 的內容。</li>
</ol>
<h3>樣版</h3>
<ol>
<li>打開 &quot;<?php echo @APP_ROOT_PATH; ?>
<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/tpl/template.tpl.htm&quot; ，</li>
<li>修改 &lt;body&gt;...&lt;/body&gt; 之間的內容。</li>
</ol>
<h3>JavaScript</h3>
<ol>
<li>打開 &quot;<?php echo @APP_ROOT_PATH; ?>
<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/js/default.js&quot; ，</li>
<li>修改內容。</li>
</ol>
<h3>CSS</h3>
<ol>
<li>打開 &quot;<?php echo @APP_ROOT_PATH; ?>
<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/css/style.js&quot; ，</li>
<li>修改內容。</li>
</ol>
</div>
<div id="footer">
<p>Powered by <a href="http://code.google.com/p/goezframework/" target="_blank">GoEz Framework</a></p>
</div>
</div>
<!--[if lte IE 6]><script src="<?php echo $this->_tpl_vars['frontendVars']['baseUrl']; ?>
/pub/lib/ie6/warning.js?v=<?php echo time(''); ?>
"></script><script>window.onload=function(){e($frontendVars.baseUrl + '/pub/lib/ie6/')}</script><![endif]-->
</body>
</html>