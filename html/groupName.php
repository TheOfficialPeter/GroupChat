<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <script src="../js/main.js"></script>
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

        }

        // search for pin as database name
    ?>

    <form method="get" action="">
        <button name="join" value="join" id="joinBtn" type="submit">
            <span id="joinBtnText">Join</span>
        </button>
    </form>
    <h1 id="createBtn"><u>create group</u></h1>
</body>
</html>