<?php
$pageTitle = 'edit user';
include 'init.php';
?>

    <div class="container">

        <div class="col-sm-offset-2">
            <h1> Edit Member</h1>
        </div>
        <form class="form-horizontal" action="?do=Update" method="Post">

            <!-- start userName field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="username" class="form-control" value="old usernmae"  autocomplete="off" required="required"/>
                </div>
            </div>
            <!-- start Password field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10 col-md-4">
                    <input type="password" name="newPassword" class="form-control" autocomplete="new-password" placeholder="leave it blank if you do not change it"/>
                </div>
            </div>
            <!-- start Email field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10 col-md-4">
                    <input type="email" name="email" value="old email"  class="form-control" required="required"/>
                </div>
            </div>
            <!-- start Fullname field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Full name</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="Fullname" value="old ful name"  class="form-control" required="required"/>
                </div>
            </div>
            <!-- start Adress field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">Adress</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="Fullname" value="old adress"  class="form-control" required="required"/>
                </div>
            </div>
            <!-- start Fullname field -->
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label">telephone</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" name="Fullname" value="old telephone"  class="form-control" required="required"/>
                </div>
            </div>
            <!-- start Submit button field -->
            <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="save" class="btn btn-primary btn-lg" />
                </div>
            </div>

        </form>

    </div>

