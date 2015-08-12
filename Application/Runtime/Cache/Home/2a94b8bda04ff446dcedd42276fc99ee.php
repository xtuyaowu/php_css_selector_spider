<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<form role="form">
    <div class="form-group">
        <label for="url">抓取地址</label>
        <input type="text" class="form-control" id="url" name ="url"
               placeholder="请输入地址">
    </div>
    <div class="form-group">
        <label for="reg">选取规则</label>
        <select  class="form-control" id = 'reg'>
            <option style="width:200px">58餐饮类</option>
            <option style="width:200px">赶集招聘类</option>
            <option style="width:200px">赶集餐饮类</option>
            <option style="width:200px">58搬家类</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>