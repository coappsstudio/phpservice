<?php
/**
 * Created by PhpStorm.
 * User: mrkien
 * Date: 9/30/15
 * Time: 11:15 PM
 */
$server_username = "root"; // điền username đăng nhập mysql
$server_password = ""; // điền password đăng nhập mysql
$server_host = "localhost";// điền tện host
$database = 'TestService'; // tên database

// tạo biến kết nối tới database
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");