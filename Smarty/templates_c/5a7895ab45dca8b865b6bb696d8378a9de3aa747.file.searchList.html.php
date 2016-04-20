<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-01 05:58:16
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0_noRank\Smarty\templates\searchList.html" */ ?>
<?php /*%%SmartyHeaderCode:2206556fe0df86ddaf5-05039531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7895ab45dca8b865b6bb696d8378a9de3aa747' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\templates\\searchList.html',
      1 => 1456455204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2206556fe0df86ddaf5-05039531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getMenuId' => 0,
    'titleRows' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fe0df8858af2_15816242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fe0df8858af2_15816242')) {function content_56fe0df8858af2_15816242($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bbs_smarty.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <tr>
                <td align="left">
                    <button><a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">Back</a></button>
                </td>

                <td>
                </td>

                <td>
                </td>

                <td>
                </td>
            </tr>
            <tr align="center">
                <td width="25%">Title</td>
                <td width="25%">name</td>
                <td width="25%">time</td>
                <td width="25%">replyCount</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titleRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <tr align="center" >
                <td>
                    <a href = "detail.php?titleId=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

                    </a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['value']->value['reply_count'];?>

                </td>
            </tr>
            <?php } ?>
        </table>


    </body>
</html>
<?php }} ?>
