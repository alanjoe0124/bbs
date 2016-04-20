<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-01 06:08:31
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0_noRank\Smarty\templates\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:3097256fe105f917e39-92098273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2096bca4780ae3b2eecc22cd27e677d56146bd28' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\templates\\reply.html',
      1 => 1455190669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3097256fe105f917e39-92098273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuId' => 0,
    'titleId' => 0,
    'detailPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fe105f9bc689_86890251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fe105f9bc689_86890251')) {function content_56fe105f9bc689_86890251($_smarty_tpl) {?><!DOCTYPE html>
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
      
          <table id='tac'  height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#E6E6FA "> 
          <th align='left' height='5%'>
         <button>
        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
&detailPage=<?php echo $_smarty_tpl->tpl_vars['detailPage']->value;?>
">Back</a>
        </button> 
          </th >
              <tr><td height='95%'>
                      <form action="reply.php" method="post">
              <input type='hidden' name='titleId' value='<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
'>
              <input type='hidden' name='menuId' value='<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
' >
              <input type='hidden' name='detailPage' value='<?php echo $_smarty_tpl->tpl_vars['detailPage']->value;?>
'>
                      <textarea name="replyPost" ></textarea>
                      <br>
                      <input type='submit' value='submit'>
                      </form>
                  </td></tr>
          </table>
    </body>
</html>
    <?php }} ?>
