<?php
    require "../installation/functions.php";
    require "../installation/includes/header.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        create_config_file($_POST);
    }
?>  
    <h1 style="text-align: center;">Config File Variables</h1>
    <div class="container">
        <form  method="POST">
            <h2>App Informations</h2>
            <div class="form-group">
                <label for="root_directory">Root Directory</label>
                <input type="text" name= "root_directory" class="form-control" placeholder="http://localhost" required>
            </div>
            <div class="form-group">
                <label for="app_name">Application Name</label>
                <input type="text" name= "app_name" class="form-control" placeholder="Application Name" required>
            </div>
            <div class="form-group">
                <label for="app_desc">Application Description</label>
                <input type="text" name= "app_desc" class="form-control" placeholder="Application Description" required>
            </div>
            <h2>Database config credentials</h2>
            <div class="form-group">
                <label for="db_host">Database Hostname</label>
                <input type="text" name= "db_host" class="form-control" placeholder="localhost" required>
            </div>
            <div class="form-group">
                <label for="db_user">Database User</label>
                <input type="text" name= "db_user" class="form-control" placeholder="root" required>
            </div>
            <div class="form-group">
                <label for="db_pass">Database Password</label>
                <input type="text" name= "db_pass" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="db_name">Database Name</label>
                <input type="text" name= "db_name" class="form-control" placeholder="Database Name" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Next Step</button>
        </form>
    </div>
<?php require "../installation/includes/footer.php"; ?>