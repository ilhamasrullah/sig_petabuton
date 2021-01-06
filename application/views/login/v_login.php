<div class="page-header">


    <h1 class="container">Login</h1>
</div>
<div class="container">
    <div class="col-md-4">
        <form class="form-signin" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" autofocus />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" />
            </div>
            <button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
        </form>
    </div>
</div>