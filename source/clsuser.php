<?php
    class classuser
    {
        function ketnoi()
        {
            $conn=mysqli_connect('localhost','root','');
            if(!$con)
            {
                echo 'Khong the ket noi csdl';
                exit();
            }
            else
            {
                mysqli_select_db('loginform');
                mysqli_query('SET NAME UTF8');
                return $conn;
            }
        }
    }


?>