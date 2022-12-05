<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <div id="nav">
        <h1 id="nav-title">
            Pieter's group chat app
        </h1>
    </div>
    <h1 id="page-title">
        Group chat code:
    </h1>
    <div id="pin-box">
        <div id="pin-input">
            <span class="pin-input-text">0</span>
        </div>
        <div id="pin-input">
            <span class="pin-input-text">0</span>
        </div>
        <div id="pin-input">
            <span class="pin-input-text">0</span>
        </div>
        <div id="pin-input">
            <span class="pin-input-text">0</span>
        </div>
        <div id="pin-input">
            <span class="pin-input-text">0</span>
        </div>
    </div>
    
    <?php
        if (isset($_GET['join'])) {
            $conn = new mysqli('localhost', 'admin', 'admin');

            try {
                $result = mysqli_select_db($conn, $_GET['join']);
                //echo "joined";
                header("Location: ./name.php");
            }
            catch (exception $e) {
                //echo "failed";
                echo "<div style='transition: all 1s; background-color: rgba(0,0,0,.25); position: absolute; bottom: 0; left: 0; right: 0; font-size: 30px; color: rgba(255,255,255,.2); padding-top: 10px; padding-bottom: 10px; text-align: center; font-family: Roboto; font-weight: 100;'>Group not found!</div>";
            }
        }
    ?>

    <script src="../js/main.js"></script>
    <form method="get" action="">
        <button onclick="savePin()" name="join" value="" id="joinBtn" type="submit">
            <span id="joinbtntext">JOIN</span>
        </button>
    </form>
    <h1 id="createbtn"><u><a href="./create.php">create group</a></u></h1>
</body>
</html>