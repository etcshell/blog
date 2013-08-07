<div class="particles">
      <h2>最热文章</h2>
      <?php foreach($model as $v):?>
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/arrow.gif" alt="" /> <a href="<?php echo Yii::app()->createUrl('post/view',array('id'=>$v->id));?>"><?php echo mb_strcut($v->title,0,60,'utf-8');?></a> <br />
  		<?php endforeach;?>
     </div>