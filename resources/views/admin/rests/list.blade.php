<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员管理-有点</title>
    <link rel="stylesheet" type="text/css" href="/admin/css/css.css" />
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="/admin/js/page.js" ></script> -->
</head>

<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="/admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;-</span>&nbsp;管理员管理
        </div>
    </div>

    <div class="page">
        <!-- user页面样式 -->
        <div class="connoisseur">

            <!-- user 表格 显示 -->
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="435px" class="tdColor">导航名称</td>
                        <td width="400px" class="tdColor">是否维修中</td>
                        <td width="630px" class="tdColor">上次修改时间</td>
                        <td width="130px" class="tdColor">操作</td>
                    </tr>
                    @foreach($data as $k=>$v)

                    <tr height="40px">
                        <td>{{$v->n_id}}</td>
                        <td>{{$v->n_name}}</td>
                        <td>{{$v->is_show}}</td>
                        <td>{{$v->update_time}}</td>
                        <td><a href="connoisseuradd.html"><img class="operation"
                                                               src="/admin/img/update.png"></a> <img class="operation delban"
                                                                                              src="/admin/img/delete.png"></td>
                    </tr>
                        @endforeach

                </table>
                <div class="paging">此处是分页</div>
            </div>
            <!-- user 表格 显示 end-->
        </div>
        <!-- user页面样式end -->
    </div>

</div>


<!-- 删除弹出框 -->
<div class="banDel">
    <div class="delete">
        <div class="close">
            <a><img src="/admin/img/shanchu.png" /></a>
        </div>
        <p class="delP1">你确定要删除此条记录吗？</p>
        <p class="delP2">
            <a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
        </p>
    </div>
</div>
<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
    // 广告弹出框
    $(".delban").click(function(){
        $(".banDel").show();
    });
    $(".close").click(function(){
        $(".banDel").hide();
    });
    $(".no").click(function(){
        $(".banDel").hide();
    });
    // 广告弹出框 end
</script>
</html>