<?php if (!defined('THINK_PATH')) exit();?><div class="panel-body">                
    <table class='table table-hover table-striped table-bordered'> 
        <tr>
            <td><b>ID</b></td>
            <td><b>内容</b></td>
            <td><b>姓名</b></td>
            <td><b>操作</b></td>
        </tr>
        <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr  class='tr_<?php echo ($vo["id"]); ?>'>
                <td><?php echo ($vo["id"]); ?></td>
                <td class='title'><?php echo ($vo["content"]); ?></td>                       
                <td class='name'><?php echo ($vo["uname"]); ?></td>
                <td>
                    删除
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>            

</div>