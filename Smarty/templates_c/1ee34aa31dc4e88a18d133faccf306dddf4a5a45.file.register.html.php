<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-01 05:58:49
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0_noRank\Smarty\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2075856fe0e1947ce64-88498729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee34aa31dc4e88a18d133faccf306dddf4a5a45' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\templates\\register.html',
      1 => 1456458631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075856fe0e1947ce64-88498729',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fe0e19539fd9_48175463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fe0e19539fd9_48175463')) {function content_56fe0e19539fd9_48175463($_smarty_tpl) {?><!DOCTYPE html>
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
        <form action="register.php" method="post">
            <table  height="350" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">  
                <tr>
                    <td align="left">
                        <button>
                            
                            <a href="index.php"> back</a>
                           <!--
                            <a href="javascript:history.go(-1);">back</a>
                         --></button>
                    </td>
                </tr>
                <!--
                                <tr>
                                    <td align="right">
                
                                        userName:
                                    </td>
                                    <td align="center">
                                        <input type="text" name="userName"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        password:
                                    </td>
                                    <td align="center">
                                        <input type="password" name="pwd"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td align="left">
                                        <input type="submit" value="register">
                                    </td>
                                </tr>
                -->
                <tr>
                    <td>
                    </td>
                    <td>
                        <table  height="350" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">
                            <tr>
                                <td align="center">
                                       userName:
                                </td>
                                <td align="left">
                                     <input type="text" name="userName"/>
                                </td>
                            </tr>
                              <tr>
                                <td align="center">
                                       password:
                                </td>
                                <td align="left">
                                     <input type="password" name="pwd"/>   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  
                                    </td>
                                    <td align="left">
                                         <input type="submit" value="register">
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        </td>
                                        <td>
                                           PS:Password shorter than 
                                     15 characters
                                            </td>
                                        </tr>
                        </table>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>     
        </form> 
    </body>
</html><?php }} ?>
