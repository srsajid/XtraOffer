<!DOCTYPE html>
<html>
<head>
    <title>Free Extra offer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/validation/validationEngine.jquery.css" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/alertify/alertify.core.css" rel="stylesheet" media="screen">
    <link href="css/alertify/alertify.default.css" rel="stylesheet" media="screen">
    <link href="css/app/base-style.css" rel="stylesheet">

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/app/App.js"></script>
    <script src="js/app/utility/form.jquery.js"></script>
    <script src="js/app/utility/alertify.min.js"></script>
    <script src="js/app/utility/util.js"></script>
    <script src="js/app/utility/prototype.js"></script>
    <script src="js/validation/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/validation/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/app/utility/form.js"></script>
    <script src="js/app/utility/srui-tabs.js"></script>
    <script src="js/app/utility/ui.js"></script>

    <script src="js/app/utility/TableTab.js"></script>
    <script src="js/app/tabs/offer-tab.js"></script>
    <script src="js/app/tabs/user-tab.js"></script>
    <script src="js/app/tabs/category-tab.js"></script>

</head>

<body>
    <div id="admin-panel-container">
        <div class="container-fluid">
            <div class="row top-header">
                <div class="navbar-right">
                    <span>Hi <?php echo $user->name; ?></span>
                    <a href="<?php echo(SR::$baseUrl);?>logout">
                        <button class="btn btn-xs" title="Logout">
                            <span class="glyphicon glyphicon-off"></span>
                        </button>
                    </a>
                    <button class="btn btn-xs" title="Change Password" id="change-password-btn">
                        <span class="glyphicon glyphicon-edit"></span>
                    </button>
                </div>
            </div>
            <div class="row body" style="margin-top: 20px">
                <div id="tabs">
                    <div class="main-tab-header-container">
                        <ul class="header-list">
                            <li tab-id="offer"><a href="<?php echo SR::$baseUrl ?>offerAdmin/table-view">Offer</a></li>
                            <li tab-id="category"><a href="<?php echo SR::$baseUrl ?>categoryAdmin/table-view">Category</a></li>
                            <li tab-id="user"><a href="<?php echo SR::$baseUrl ?>user/table-view">User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>

</body>
</html>