<?php include_once 'header.php'; ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <center>
                <h3>Form</h3>
            </center>
            <div class="col-md-6 offset-3">
                <form action="Function.php" method="POST">
                    <label for="" class="w-100">
                        Enter Your Name
                        <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                    </label>
                    <label for="" class="w-100">
                        Enter Your Email
                        <input type="text" class="form-control" name="useremail" placeholder="Enter Your Name">
                    </label>
                    <label for="" class="w-100">
                        Enter Your Password
                        <input type="text" class="form-control" name="userpass" placeholder="Enter Your Name">
                    </label>
                    <input type="submit" name="formsubmit" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>