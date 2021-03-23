<div class="col-md-10">
    <!-- Page-header start -->
    <div class="page-header" style="margin-left: -49px">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">User</h5>
                        <p class="m-b-0">Welcome to Jack Restaurant</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h2 style="font-weight: 450;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    overflow: hidden;
    font-family: Yantramanav;">Add </h2>
    <br>
    <?php
    if (isset($_SESSION["message"])) {
        echo "<div class='alert alert-primary col-md-11' role='alert'>" . $_SESSION["message"] . "</div>";
        unset($_SESSION["message"]);
    }
    ?>


    <form method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control col-md-11" id="username" name="username">
        </div>
        <div class="form-group">
            <label>FirstName</label>
            <input type="text" class="form-control col-md-11" id="firstName" name="firstName">
        </div>
        <div class="form-group">
            <label>LastName</label>
            <input type="text" class="form-control col-md-11" id="lastName" name="lastName">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control col-md-11" id="address" name="address">
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control col-md-11" id="city" name="city">
        </div>
        <div class="form-group">
            <label>Position</label>
            <input type="text" class="form-control col-md-11" id="position" name="position">
        </div>
        <button type="submit" class="btn btn-outline-info">Submit</button>
    </form>
</div>