<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <?php
        $conn = new mysqli("localhost", "admin", "admin");
    ?>
    <script src="../js/main.js"></script>
    <script src="../js/name.js"></script>
    <div id="nav">
        <h1 id="nav-title">

        </h1>
    </div>
    <h1 id="page-title">
        Your name:
    </h1>
    <form method="post" action="">
        <div id="name-box">
            <div id="name-input">
                <input name="nameInput" id="name-input-text2"></input>
            </div>
        </div>
        <button onclick="saveName()" name="create" value="" id="joinBtn" type="submit">
            <span id="joinBtnText">JOIN</span>
        </button>
    </form>

    <h1 id="createBtn"><u>create group</u></h1>
</body>
</html>