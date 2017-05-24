<div class="page-sidebar nav-collapse collapse">
    <ul class="page-sidebar-menu">
        <li>
            <div class="sidebar-toggler hidden-phone"></div>
        </li>
        <li>
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </form>
        </li>
<!--                商家所需-->
        <li class="start active " <?php if($_SESSION['isUser']=="admin")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="index.php?name=missedOrders">
                <i class="icon-home"></i>
                <span class="title">首页</span>
                <span class="selected"></span>
            </a>
        </li>


        <li class="" <?php if($_SESSION['isUser']=="admin")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="javascript:;">
                <i class="icon-th"></i>
                <span class="title">商店小吃</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="index.php?name=onLine">
                        上线小吃
                    </a>
                </li>
                <li>
                    <a href="index.php?name=downLine">
                        下线小吃
                    </a>
                </li>
            </ul>
        </li>
        <li class="" <?php if($_SESSION['isUser']=="admin")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">订单</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="index.php?name=receivedOrders">
                        已接订单
                    </a>
                </li>
                <li>
                    <a href="index.php?name=missedOrders">
                        未接订单
                    </a>
                </li>
            </ul>
        </li>
        <li class="" <?php if($_SESSION['isUser']=="admin")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="index.php?name=personalInformation">
                <i class="icon-user"></i>
                <span class="title">个人中心</span>
                <span class="selected"></span>
            </a>
        </li>
        <!--        用户所需：商家信息，订单（已订订单，取消订单），个人信息-->
        <li class="start active " <?php if($_SESSION['isUser']=="user")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="index.php?name=home">
                <i class="icon-home"></i>
                <span class="title">商家信息</span>
                <span class="selected"></span>
            </a>
        </li>


        <li class="" <?php if($_SESSION['isUser']=="user")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="javascript:;">
                <i class="icon-th"></i>
                <span class="title">订单</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="index.php?name=buyOrders">
                        已订订单
                    </a>
                </li>
                <li>
                    <a href="index.php?name=delOrders">
                        取消订单
                    </a>
                </li>
            </ul>
        </li>
        <li class="" <?php if($_SESSION['isUser']=="user")echo "style='display: block;'";
        else echo "style='display: none;'";?>>
            <a href="index.php?name=personalInformation">
                <i class="icon-user"></i>
                <span class="title">个人中心</span>
                <span class="selected"></span>
            </a>
        </li>
    </ul>
</div>