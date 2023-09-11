<?php $row = mysqli_fetch_assoc($resultData)?>


<html>
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script><style>body{
margin-top:20px;
background:#F0F8FF;
}
.card {
margin-bottom: 1.5rem;
box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}
.card {
position: relative;
display: -ms-flexbox;
display: flex;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 1px solid #e5e9f2;
border-radius: .2rem;
}
.card-header:first-child {
border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
}
.card-header {
border-bottom-width: 1px;
}
.card-header {
padding: .75rem 1.25rem;
margin-bottom: 0;
color: inherit;
background-color: #fff;
border-bottom: 1px solid #e5e9f2;
}</style>
<title>Profile</title>
<link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
</head><body>
    
<div class="container p-0">
<?php if($_GET['error']==='adminok'){?>
            <div class="alert alert-primary"><h3>Updated Successfully</h3></div>
        <?php }?>
<h1 class="h3 mb-3"><a href="/"><img src="src/img/logo.png" height="60px" alt="logo"></a>Welcome back <?php echo $row['username'];?>!</h1>
<div class="row">
<div class="col-md-5 col-xl-4">
<div class="card">
<div class="card-header">
<h5 class="card-title mb-0">Profile Settings</h5>
</div>
<div class="list-group list-group-flush" role="tablist">
<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
Account
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
Password
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#safety" role="tab">
Email Verification
</a>
<a class="list-group-item list-group-item-action" href="/logout" >
Logout
</a>
</div>
</div>
</div>
<div class="col-md-7 col-xl-8">
<div class="tab-content">

<div class="tab-pane fade show active" id="account" role="tabpanel">
    <div class="card">
        <div class="card-header">
        <div class="card-actions float-right">
        <div class="dropdown show">
        <a href="#" data-toggle="dropdown" data-display="static">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
        <circle cx="12" cy="12" r="1"></circle>
        <circle cx="19" cy="12" r="1"></circle>
        <circle cx="5" cy="12" r="1"></circle>
        </svg>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="/">Home</a>
        <a class="dropdown-item" href="/getticket">Get Ticket</a>
        <a class="dropdown-item" href="/logout">Log Out</a>
        </div>
        </div>
        </div>
        <h5 class="card-title mb-0">Public info</h5>
        </div>
        <div class="card-body">
        <form>
        <div class="row">
        <div class="col-md-8">
        <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" id="inputUsername" value="<?= $row['username'];?>" placeholder="Username">
        </div>
        <div class="form-group">
        <label for="inputUsername">Biography</label>
        <textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself"></textarea>
        </div>
        </div>
        <div class="col-md-4">
        <div class="text-center">
        
        <div class="mt-2">
        </div>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
        </div>
        
        <div class="card">
            
        <div class="card-header">
        <div class="card-actions float-right">
        <div class="dropdown show">
        </div>
        </div>
        
        <h5 class="card-title mb-0">Private info</h5>
        </div>
        <div class="card-body">
        <form action="config/update.profile.php" method="POST">
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputFirstName">Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="name" placeholder="Name" value="<?= $row['name'];?>" required>
                    </div>
                    
                </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?= $row['email'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" value="<?= $row['address'];?>"required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" placeholder="Yangon" value="<?= $row['city'];?>" name="city" id="inputCity" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" placeholder="00000" name="zip" id="inputZip" value="<?= $row['zip'];?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $row['id']?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="ok">Save changes</button>
                </form>
               
            </div>
        </div>
        
</div>

<div class="tab-pane fade" id="password" role="tabpanel">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">Password</h5>
    <form action="config/changepass.php" method="POST">
        <div class="form-group">
            <label for="inputPasswordCurrent">Current password</label>
            <input type="password" class="form-control" name="oldpass" id="inputPasswordCurrent" required>
            <small><a href="/forgotpass">Forgot your password?</a></small>
        </div>
            <div class="form-group">
            <label for="inputPasswordNew">New password</label>
            <input type="password" class="form-control" name="newpass" id="inputPasswordNew" required>
        </div>
            <div class="form-group">
            <label for="inputPasswordNew2">Verify password</label>
            <input type="password" class="form-control" name="passconfirm" id="inputPasswordNew2" required>
        </div>
        <input type="hidden" name="username" value="<?= $row['username']?>">
        <button type="submit" class="btn btn-primary" name="submit" value="ok">Save changes</button>
    </form>
        
    </div>
    </div>
</div>


<div class="tab-pane fade" id="safety" role="tabpanel">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Verify Email - <?php if($row['verify']!== NULL){echo "(Verified)";}else{echo "(Not Verified Yet)";}?></h5>
                <?php if($row['verify']===NULL){?>
                <form action="config/verify.php" method="POST">
                    <div class="form-group">
                        <label for="inputPasswordCurrent">Enter Token</label>
                        <input type="password" class="form-control" name="token" id="inputPasswordCurrent">
                        <input type="hidden" name="username" value=<?= $row['email'];?>>
                        <input type="hidden" name="id" value=<?= $row['id'];?>>
                        <small><a href="/config/generateToken.php?id=<?php echo $row['id'];?>&email=<?php echo $row['email'];?>">Request Verify Token</a></small>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit" value="ok">Submit</button>
                </form>
                <?php }else echo "Verified";?>
            </div>
        </div>
    </div>


</div>
</div>
</div>
</div> <script type="text/javascript"></script></body></html>