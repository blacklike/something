<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 14:56
 *
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$userName=$_SESSION['adminName'];
$userSql="select * from tb_mamger where user='$userName'";
$useRes=$pdo->query($userSql);
$userInfo=$useRes->fetch();
?>
<div class="page-container">
    <h3>个人中心</h3>
    <form action="updatePersonInfo.php" class="form-actions" method="post" enctype="multipart/form-data">
        <table class="table table_center">
                <tr>
                    <th width="10%"></th>
                    <th>商铺名称</th>
                    <td><input type="text" name="shopName" value="<?php echo $userInfo['user']; ?>" ></td>
                    <th>商铺负责人</th>
                    <td><input type="text" name="fuze" value="<?php echo $userInfo['fuze']; ?>"></td>
                </tr>

                <tr>
                    <th></th>
                    <th>联系方式</th>
                    <td><input type="text" name="tel" value="<?php echo $userInfo['telephone']; ?>"></td>
                    <th>密码</th>
                    <td><input type="password" name="pwd" value="<?php echo $userInfo['pwd']; ?>"></td>

                </tr>
                <tr>
                    <th></th>
                    <th>邮箱</th>
                    <td><input type="text" name="email" value="<?php echo $userInfo['email']; ?>"></td>
                    <th>头像上传</th>
                    <td><input type="file" name="photo" value="<?php echo $userInfo['img']; ?>"></td>

                </tr>
                <tr>
                    <th colspan="3"></th>
                    <td colspan="2" style="text-align: center;"><input type="submit" name="updateSub" value="提交"></td>
                </tr>
                <tr>
                    <th colspan="3"></th>
                    <td colspan="2"></td>
                </tr>
        </table>
    </form>

</div>
