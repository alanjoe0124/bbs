<?php /*%%SmartyHeaderCode:402756fdf0b62a31f8-14873472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49bd10d7f453dd97f39514576b0325666b7541b7' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0_noRank\\Smarty\\templates\\titleList.html',
      1 => 1459482082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402756fdf0b62a31f8-14873472',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fe106ce0a6f2_19405414',
  'has_nocache_code' => true,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fe106ce0a6f2_19405414')) {function content_56fe106ce0a6f2_19405414($_smarty_tpl) {?><!DOCTYPE html>
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
        <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        </script>
        <script>
            $(document).ready(function () {
                $(".onTop").click(function () {
                    $(".onTopList").slideToggle();
                });
            });
            $(document).ready(function(){
                $(".topics").click(function(){
                    $(".topicsList").slideToggle();
                });
            });
        </script>
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

                </td>
                <?php if ($_smarty_tpl->tpl_vars['cookieName']->value!="tourist") {?>
                <td align="center" width="33%">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['cookieName']->value;?>

                    </h3>
                    <h4><a href='index.php?logout=1'>logout</a>
                    </h4>
                </td>
                <?php } else { ?>
                <td align="center" width="33%" >

                </td>
                <?php }?>
            </tr>
        </table>
	
        <br>
        <table  height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <tr>
                                <td align="left">
                    <h3>
                        School life
                    </h3>
                </td>  
                                <td align="left">
                    <form action="searchList.php" method="post">
                        <input type="hidden" name="menuId" value="3"/>
                        <td align="left">   
                            <select name="searchType">
                                <option value="title">title</option>
                                <option value="name">name</option>
                            </select>
                            <input type="text" name="searchContent"/>
                            <input type="submit" value="search"/>
                    </form>
                </td>
                <td>
                                        <button><a href="post.php?menuId=3&page=1">Post</a></button>
                                    </td>
            </tr>
        </table>
        <br>


        <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--top-->
            <th class="onTop" colspan="4" style="border:2px solid #C0C0C0 "  height="10" align="left">

            <h4>
                OnTop
            </h4>

        </th>
        <tr class="onTopList" align="center">
            <td width="25%">Title</td>
            <td width="25%">name</td>
            <td width="25%">time</td>
            <td width="25%">replyCount</td>
        </tr>
                <tr class="onTopList" align="center" >
            <td>
                <a href = "detail.php?titleId=10&menuId=3">
                    aa1
                </a>
            </td>
            <td>
                aa
            </td>
            <td>
                2016-04-01 01:52:14
            </td>
            <td>
                2
            </td>
        </tr>
                <tr class="onTopList" align="center" >
            <td>
                <a href = "detail.php?titleId=11&menuId=3">
                    aa2
                </a>
            </td>
            <td>
                aa
            </td>
            <td>
                2015-08-22 13:41:57
            </td>
            <td>
                0
            </td>
        </tr>
            </table>

    <br>
    <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
        <th class="topics" colspan="4" style="border:2px solid #C0C0C0 "  height="10" align="left">

        <h4>
            Topics
        </h4>
        <a href="titleList.php?condition=time&menuId=3">New
        </a>
        &nbsp;
        <a href="titleList.php?condition=reply_count&menuId=3">Hot
        </a>

    </th>
    <tr class="topicsList" align="center">
        <td width="25%">Title</td>
        <td width="25%">name</td>
        <td width="25%">time</td>
        <td width="25%">replyCount</td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=10&menuId=3&page=1">
                aa1
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2016-04-01 01:52:14
        </td>
        <td>
            2
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=11&menuId=3&page=1">
                aa2
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2015-08-22 13:41:57
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=12&menuId=3&page=1">
                aa3
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2015-08-22 13:35:22
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=13&menuId=3&page=1">
                bb1
            </a>
        </td>
        <td>
            bb
        </td>
        <td>
            2015-08-22 13:35:45
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=14&menuId=3&page=1">
                bb2
            </a>
        </td>
        <td>
            bb
        </td>
        <td>
            2015-08-22 13:35:50
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=15&menuId=3&page=1">
                bb3
            </a>
        </td>
        <td>
            bb
        </td>
        <td>
            2015-08-22 13:35:55
        </td>
        <td>
            0
        </td>
    </tr>
    </table>
<table class="topicsList" height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">    <!--pageList-->
        <tr> 
        <td colspan="4" bgcolor="#E6E6FA">
            <div align="center">
                <div class='page'>
                    <span>1/4</span>
                     
                    首页
                    上一页
                    
                      
                    
                     
                    <span id = "page">1</span>
                     
                                          
                    
                                        <a href="titleList.php?menuId=3&page=2&condition=">2</a> 
                     
                                          
                    
                                        <a href="titleList.php?menuId=3&page=3&condition=">3</a> 
                     
                                          
                    
                                        <a href="titleList.php?menuId=3&page=4&condition=">4</a> 
                     
                                        
                     
                    <a href="titleList.php?menuId=3&page=2&condition=">下一页</a> 
                    <a href="titleList.php?menuId=3&page=4&condition=">末页</a>
                                    </div>
            </div>
        </td> 
    </tr> 
    </table>
<table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
    <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3>Welcome </h3></th>
</table>
</body>
</html>
<?php }} ?>
