<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:06 AM
 */
 function drawChild($page){
     global $config;
     ?>
     <?foreach ($page as $key => $pages){ ?>
         <li>
         <a id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
         </li>
     <?}

 }

function checkDrop($id){?>
    <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
        <?return true?>
    <?}else{?>
        <?return false?>
    <?}
}

function checkSession(){?>
    <?if (isset($_SESSION['msg'])){?>
        <? unset($_SESSION['msg']);
        return true
        ?>
    <?}else{?>
        <?return false
        ?>
    <?}
}
function checkErrorSession(){?>
    <?if (isset($_SESSION['error'])){?>
        <? unset($_SESSION['error']); return true?>
    <?}else{?>
        <?return false?>
    <?}
}
function drawParent($page,$page_cont){?>
    <? $cnt=0;?>
    <? foreach ($page as $key=>$pages){
        if ($pages->id==$page_cont->parent_id){
            $cnt++;
            return $pages->title;
        }
    } ?>

    <?if ($cnt==0){
        return $page_cont->title;
    }?>
<?}?>

<?function getChild($page,$depth){?>
    <? foreach ($page as $key=>$pages){
        if (!empty($pages->child)){?>
          <!--  <?/*for($i=0; $i<$depth; $i++){*/?>
                <option><?/*='&nbsp&nbsp&nbsp&nbsp'*/?>
            --><?/*}*/?>
            <option><?='&nbsp&nbsp&nbsp&nbsp'?><?=$pages->title?></option>
           <?getChild($pages->child,$depth+1)?>;
        <?}else{?>
            <?/*for($i=0; $i<$depth; $i++){*/?><!--
                <option><?/*='&nbsp&nbsp&nbsp&nbsp'*/?>
            --><?/*}*/?>
            <option><?='&nbsp&nbsp&nbsp&nbsp'?><?=$pages->title?></option>
        <?}?>
    <?}?>
    <?return;?>
<?}?>