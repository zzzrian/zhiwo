<?php	
	$tel = $_POST['phone'];
	$psw = $_POST['password'];
	 
    //准备好数据连接对象
    $con = new mysqli('localhost','root','root','zhiwo'); 
  
    //获取所有用户信息
    $sql = 'select * from register';
    $res = $con->query($sql);


    //数据库查询结果的长度 $res->num_rows
    if($res->num_rows>0){
        //fetch_assoc() 执行第一次返回 第一条数据 执行第二次的时候返回第二数据
        //$row 当前获取到的每一行数据
        while ($row = $res->fetch_assoc()) {
            //判断用户是否正确            
            if($row['phone'] == $tel && $row['password'] == $psw){
                echo $tel;
            }else{
                
            }
        }
    }

    //关闭数据库
    $con->close();
?>