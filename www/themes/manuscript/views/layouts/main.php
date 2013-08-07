<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>
<body>
<div class="content">
  <div id="header">
    <div class="title">
      <h1><?php echo Yii::app()->name;?></h1>
      <h3><?php echo Yii::app()->params['title'];?></h3>
    </div>
  </div>
  <div id="main">
    <div class="center">
        <?php echo $content; ?>
    </div>
    <div class="leftmenu">
      <div class="nav">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/post/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
        array('label'=>'Create New Post ', 'url'=>array('/post/create'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Manage Posts', 'url'=>array('/post/admin'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Approve Comments ('.Comment::model()->pendingCommentCount .')', 'url'=>array('/comment/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
      </div>
    </div>
  </div>
  <div id="prefooter">
    <div class="particles">
      <h2>Top Articles</h2>
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Integer euismod ante non diam adipiscing</a> <br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">consectetuer adipiscing elit dolor sit amet</a> <br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Lorem ipsum dolor sit amet ipsum dolor</a><br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Integer euismod ante non adipiscing elit </a><br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Lorem ipsum dolor sit amet euismod ante</a><br />
    </div>
    <div class="comments">
      <h2>Last Comments</h2>
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Integer euismod ante non diam adipiscing</a> <br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">consectetuer adipiscing elit dolor sit amet</a> <br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Lorem ipsum dolor sit amet ipsum dolor</a><br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Integer euismod ante non adipiscing elit </a><br />
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="http://www.free-css.com/">Lorem ipsum dolor sit amet euismod ante</a><br />
    </div>
  </div>
  <div id="footer">
    <div class="padding" style="align:center"> Copyright &copy; <a href="http://www.etcshell.com">爱客网</a><?php echo date( 'Y', time() ); ?>    
    | 沪ICP备11025598号 | <a href="http://www.etcshell.com">etcshell.com</a>  </div>
  </div>
</div>
</body>
</html>
