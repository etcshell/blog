<h2><?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h2>
<div class="nav">
		<b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
	</div>
     <?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
      <p class="date">作者<?php echo $data->author->username;?><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/more.gif" alt="" />
       <?php echo CHtml::link(CHtml::encode('更多'), $data->url); ?><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/comment.gif" alt="" /> 
       <?php echo CHtml::link("评论数 ({$data->commentCount})",$data->url.'#comments'); ?> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/timeicon.gif" alt="" /><?php echo date('Y-m-d',$data->create_time); ?></p>
      <br />
