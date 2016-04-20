<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-01 03:41:34
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0_noRank\Smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:220756fdec9d6b5558-27340862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b51c525ee2914b9250d0a26d270eaf0f5cd3d5b' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\templates\\index.html',
      1 => 1459482093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220756fdec9d6b5558-27340862',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fdec9dd08c17_28450072',
  'variables' => 
  array (
    'cookieName' => 1,
    'categoryRows' => 0,
    'cateValue' => 0,
    'subCateValue' => 0,
    'arrRank' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fdec9dd08c17_28450072')) {function content_56fdec9dd08c17_28450072($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\plugins\\modifier.capitalize.php';
?><html>
    <head>
        <link href="css/bbs_smarty.css" rel="stylesheet" type="text/css" /> <!--index.php relatively-->
        <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                $(".category").click(function () {
                    $(".subCategory").slideToggle();
                });
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
	
        <table  height="100" border="0" cellspacing="0" cellpadding="1" bgcolor="#D8BFD8">     <!--head-->
            <tr>
                <td align="left" >
                    <h1>
                        <a href="index.php">
                            BBS
                        </a>
                    </h1>
                </td>
                <td  width="33%">
                    <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php if ($_smarty_tpl->tpl_vars[\'cookieName\']->value==null) {?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>
  
                    <table cellspacing="1" cellpadding="1">
                        <form action="login.php" method="post" name="register_login">
                            <tr>
                                <td align="right">
                                    UserName:
                                </td>
                                <td align="left">
                                    <input type="text" name="userName"  />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Password:
                                </td>
                                <td align="left">
                                    <input type="password" name="pwd"  />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td align="left">
                                    <input type="submit" value="login" />
                                    <button><a href="register.php">register</a></button>
                                </td>

                            </tr>
                        </form>
                    </table>
                    <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php } else { ?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>


                    <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php }?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

                </td>
                <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php if ($_smarty_tpl->tpl_vars[\'cookieName\']->value!=null) {?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

                <td align="center" width="33%">
                    <h3>
                        <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php echo $_smarty_tpl->tpl_vars[\'cookieName\']->value;?>
/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

                    </h3>
                    <h4><a href='index.php?logout=1'>logout</a>
                    </h4>
					<h4>
						<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_get_current_time',array(), $_smarty_tpl, 'null');?>

					<h4>
					<!--
					<h4>
						<?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php echo time();?>
/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

					<h4>
					-->
                </td>
                <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php } else { ?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

                <td align="center" width="33%" >

                </td>
                <?php echo '/*%%SmartyNocache:220756fdec9d6b5558-27340862%%*/<?php }?>/*/%%SmartyNocache:220756fdec9d6b5558-27340862%%*/';?>

            </tr>
        </table>
	
        <br>

        <?php  $_smarty_tpl->tpl_vars['cateValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateValue']->key => $_smarty_tpl->tpl_vars['cateValue']->value) {
$_smarty_tpl->tpl_vars['cateValue']->_loop = true;
?>
        <table   border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <th height="50" class="category" colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="left"><h2><?php echo $_smarty_tpl->tpl_vars['cateValue']->value['name'];?>
</h2></th>

        <tr height="100" class="subCategory">
            <?php  $_smarty_tpl->tpl_vars['subCateValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subCateValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateValue']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subCateValue']->key => $_smarty_tpl->tpl_vars['subCateValue']->value) {
$_smarty_tpl->tpl_vars['subCateValue']->_loop = true;
?>
            <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['subCateValue']->value['id'];?>
">
                                    <?php echo mb_strtoupper(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['subCateValue']->value['name']), 'UTF-8');?>
 </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(<?php echo $_smarty_tpl->tpl_vars['subCateValue']->value['postnum'];?>
)</h4>
                        </td>
                    </tr>
                </table>
            </td>

            <?php } ?> 
        </tr>
    </table>
    <?php } ?>

    <table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">  
        <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3>Welcome</h3></th>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrRank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>


    </tr>  
    <?php } ?>
</table>

</body>
</html><?php }} ?>
