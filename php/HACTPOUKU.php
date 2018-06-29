<?php
{
	
print '
<style>
ul {
		list-style: none;
        margin: 0;
        padding: 0;
        }
img {
		border: none;
}		

#vert_menu {
		font-weight: bold;
        font-family: Verdana, Helvetica, sans-serif;
        text-decoration: none;	
        font-size: 80%;
        width: 202px;
        }

#vert_menu li {
        height: 37px;
        }

#vert_menu li a:link, #vert_menu li a:visited {
        text-decoration: none;	
        color: black;
        display: block;
        background:  url(KAPTUHKU/vert_menu.png) 0 0 no-repeat;
        padding: 10px 0 10px 10px;
        }

#vert_menu li a:hover, #vert_menu li #current {
        color: #FFF;
        background: url(KAPTUHKU/vert_menu.png) 0 -37px no-repeat;
        padding: 10px 0 10px 15px;
        }






.glossymenu{
position: relative;
padding: 0 0 0 34px;
margin: 0 auto 0 auto;
background: url(KAPTUHKU/menug_bg.gif) repeat-x; /*путь к картинке заднего фона*/
height: 46px;
list-style: none;

}

.glossymenu li{
float:left;

}

.glossymenu li a{
float: left;
display: block;
color:#000;
text-decoration: none;
font-family: sans-serif;
font-size: 13px;
font-weight: bold;
padding:0 0 0 16px; /*Padding to accomodate left tab image. Do not change*/
height: 46px;
line-height: 46px;
text-align: center;
cursor: pointer; 

}

.glossymenu li a b{
float: left;
display: block;
padding: 0 24px 0 8px; /*Расстояние между элементами меню*/

}

.glossymenu li.current a, .glossymenu li a:hover{
color: #fff;
background: url(KAPTUHKU/menug_hover_left.gif) no-repeat; /*путь к левой картинке*/
background-position: left;

}

.glossymenu li.current a b, .glossymenu li a:hover b{
color: #fff;
background: url(KAPTUHKU/menug_hover_right.gif) no-repeat right top; /*путь к правой картинке*/

}
</style>
';
}
?>