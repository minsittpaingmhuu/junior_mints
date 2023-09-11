<?php 
session_start();
function emptyInputSignup($name, $email, $username, $password, $password_confirm){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($password_confirm)){

        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function invaildUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invaildEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function pwdMatch($password, $password_confirm){
    $result;
    if($password !== $password_confirm){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){

    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /signup?error=stmtfailed");
        exit();
    }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);


        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result =  false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    
}

function createUser($conn, $name, $email, $username, $password, $role){

    $sql = "INSERT INTO users (name, email, username, password, role, address, city, zip, token, verify) VALUES (?,?,?,?,?,NULL,NULL,NULL,NULL,NULL);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /signup?error=stmtfailed");
        exit();
    }

        $password = password_hash(md5($password),PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $password, $role);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /login?error=none");
        exit();
    
}
function emptyInputLogin($username, $password){
    $result;
    if(empty($username) || empty($password)){

        $result = true;

    }else{
        $result = false;
    }
    return $result;
}


function loginUser($conn, $username, $password){
    $uidexists = uidExists($conn, $username, $username);

    if($uidexists === false){
        header("location: /login?error=wronglogin");
        exit();
    }

    $md5password = md5($password);

    $pwdHashed = $uidexists['password']; 
    $checkPwd = password_verify($md5password, $pwdHashed);
    if($checkPwd === true){
        session_start();
        $_SESSION['userid'] = $uidexists['id']; 
        $_SESSION['username'] = $uidexists['username']; 
        $_SESSION['role'] = $uidexists['role']; 
        $_SESSION['pass'] = $password;
        if($_SESSION['userid']===1){
            header("location: /admin");
        }else{
            header("location: /profile");
        }
        
        exit();
    }else{
        header("location: /login?error=wronglogi1n");
    }
}

function emptyInput($name, $phone, $email,$match_type, $type, $payment, $ticket_number){
    $result;
    if(empty($name) || empty($phone) || empty($email) || empty($match_type) || empty($type) || empty($payment)|| empty($ticket_number)){

        $result = true;

    }else{
        $result = false;
    }
    return $result;
}


function makeOrder($conn, $name, $phone, $email,$match_type, $type, $payment, $ticket_number, $remarks){
    $sql = "INSERT INTO ticket_order (name, phone, email,match_type, type, payment, ticket_number, remarks) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /getticket?error=orderfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $phone, $email,$match_type, $type, $payment, $ticket_number, $remarks);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /getticket?error=none");
    exit();
};

function emptyContentInput($name, $phone, $email){
    if(empty($name) || empty($phone) || empty($email)){
        return true;
    }else{
        return false;
    }
}

function makeContact($conn, $name, $phone, $email, $message){
    $sql = "INSERT INTO contact (name, phone, email, message) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /contact?error=orderfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /contact?error=none");
    exit();
}

function emptyBlogInput($title, $body){
    if(empty($title) || empty($body)){
        return true;
    }else{
        return false;
    }
}
function addBlog($conn, $title, $body){
    $sql = "INSERT INTO post (title, body) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/blog?error=uploadfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $title, $body);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/blog?error=none");
    exit();

}


function emptyDeleteBlogInput($id){
    if(empty($id)){
        return true;
    }else{
        return false;
    }
}

function deleteBlog($conn, $id){
    $sql = "DELETE from post WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/blog?error=deletefailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/blog?error=deletedone");
    exit();
}


function deleteContact($conn, $id){
    $sql = "DELETE from contact WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/contact?error=deletefailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/contact?error=deletedone");
    exit();
}

function deleteTicket($conn, $id){
    $sql = "DELETE from ticket_order WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/ticket?error=deletefailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/ticket?error=deletedone");
    exit();
}



function checkUser($conn, $username){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /changepass?error=stmtfailed");
        exit();
    }
        mysqli_stmt_bind_param($stmt, "ss", $username, $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result =  false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}


function checkPass($conn,$username, $password){

    $password = md5($password);
    $checkUser = checkUser($conn, $username);

    $pwdHashed = $checkUser['password']; 
    $checkPwd = password_verify($password, $pwdHashed);
    if($checkPwd === true){
        return false;
    }else{
        return true;
    }

}

function changePass($conn, $username, $password){

    $sql = "UPDATE users SET password = ? where username = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /profile?error=stmtfailed");
        exit();
    }

        $password = password_hash(md5($password),PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $password, $username, $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /profile?error=adminok");
        exit();
    
}

function deleteUser($conn, $id){
    $sql = "DELETE from users WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/user?error=deletefailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/user?error=deletedone");
    exit();
}


function makeAdmin($conn, $id){

    $sql = "UPDATE users SET role = 'admin' where id = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/user?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /admin/user?error=adminok");
        exit();
    
}

function makeUser($conn, $id){

    $sql = "UPDATE users SET role = 'user' where id = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/user?error=stmtfailed");
        exit();
    }

        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /admin/user?error=adminok");
        exit();
    
}

function updateProfile($conn, $name, $email, $address, $city, $zip, $id){
    $sql = "UPDATE users SET name = ? , email = ? , city = ?, address = ? , zip = ?  where id = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /profile?error=stmtfailed");
        exit();
    }
    
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $city, $address, $zip, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /profile?error=adminok");
        exit();
}

function checkToken($conn,$username, $token){

    $checkUser = checkUser($conn, $username);

    $Hashedtoken = $checkUser['token']; 
    if($Hashedtoken === $token){
        return true;
    }else{
        return false;
    }

}

function shopOrder($conn, $id, $homekit, $awaykit, $scarf, $cover, $mug){
    $sql = "INSERT INTO shop_order (customer_id, homekit, awaykit, scarf, cover, mug) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /shop?error=orderfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $id, $homekit, $awaykit, $scarf, $cover, $mug);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /shop?error=none");
    exit();
}


function deleteShop($conn, $id){
    $sql = "DELETE from shop_order WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /admin/shop?error=deletefailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /admin/shop?error=deletedone");
    exit();
}