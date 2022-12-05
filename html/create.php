<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <script src="../js/create.js"></script>
    <div id="nav">
        <h1 id="nav-title">
            Pieter's group chat app
        </h1>
    </div>
    <h1 id="page-title">
        Group chat name:
    </h1>
    <form method="post" action="">
        <div id="name-box">
            <div id="name-input">
                <input name="nameInput" value="" id="name-input-text2"></input>
            </div>
        </div>
        <button name="create" value="" id="joinBtn" type="submit">
            <span id="joinBtnText">CREATE</span>
        </button>
    </form>
    <h1 id="createBtn"><u><a href="./index.php">join group</a></u></h1>
    <h1 id="code-bottom">
        <?php
            if (isset($_POST['create']) and isset($_POST['nameInput'])) {
                $conn = new mysqli('localhost', 'admin', 'admin');

                try {
                    $conn->query("SELECT * FROM " . $_POST['create'] . ";");
                }
                catch (Exception $e) {
                    try {
                        $conn->query("CREATE DATABASE " . $_POST['create'] . ";");
                        mysqli_select_db($conn, $_POST['create']);
                        $conn->query("CREATE TABLE info(groupName varchar(255));");
                        $conn->query("CREATE TABLE messages(text_ varchar(255), speaker varchar(255));");

                        $result = $conn->query("INSERT INTO info values('".$_POST['nameInput']."');");

                        //echo "Group created!";
                    }
                    catch (Exception $e) {
                        //echo $e;
                        //echo "Could not create group!";
                    }
                }
            }
        ?>
        <?php
            // generate room code
            function genCode() {
                $alpha = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j' ,'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                $code = "";
                for ($i = 0; $i < 5; $i++) {
                    $code = $code . $alpha[rand(0, sizeof($alpha)-1)];    
                }

                $conn = new mysqli('localhost', 'admin', 'admin');

                try {
                    $result = $conn->query("SELECT TOP 1 FROM ".$code);
                    genCode();
                }
                catch (Exception $e) {
                    $conn->close();
                    echo "code: " . $code;
                }
            }

            genCode();
        ?>
    </h1>
</body>
</html>