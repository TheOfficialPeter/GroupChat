<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter:wght@100;400&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <script src="../js/group.js"></script>
    <?php
        $conn = new mysqli("localhost", "admin", "admin");
    ?>
    <script src="../js/name.js"></script>

    <div style="margin-top: 150px; margin-bottom: 150px;">
        <?php
            $db = $_COOKIE['pin'];
            $name = $_COOKIE['name'];
            $conn = new mysqli("localhost", "admin", "admin", $db);

            function postMessage($msg) {
                $conn->query("INSERT INTO messages VALUES('$msg', '$name')");
            }

            $result = $conn->query("SELECT * FROM messages");

            while($row = mysqli_fetch_assoc($result)) {
                $ownerName = $row["speaker"];
                $message = $row["text_"];

                echo "<div id='messageBox'><div id='messageName'>". $ownerName ."</div><div id='messageBody'>". $message ."</div></div>";
            }
        ?>
    </div>

    <!-- <div id="messageBox">
        <div id="messageName">
            Name here
        </div>
        <div id="messageBody">
            MessageMessageMessageMessageMessageMessage
        </div>
        <img src="" id="ticks"/>
    </div> -->

    <div id="nav">
        <h1 id="nav-code"></h1>
        <h1 id="nav-title">
            <?php
                $db = $_COOKIE['pin'];
                $conn = new mysqli("localhost", "admin", "admin", $db);

                $result = $conn->query("SELECT * FROM info");

                if ($result) {
                    $row = mysqli_fetch_row($result);
                    echo $row[0];
                    $conn->close();
                }
                else {
                    echo "Group name could not load. Please rejoin";
                }
            ?>
        </h1>
    </div>

    <?php
        if (isset($_POST['message'])) {
            $speaker = $_COOKIE['name'];
            $message = $_POST['message'];
            $db = $_COOKIE['pin'];

            $conn = new mysqli("localhost", "admin", "admin", $db);
            $conn->query("INSERT INTO messages VALUES('$message', '$speaker')");

            $conn->close();
            header("Location: ./main.php");
        }
    ?>

    <form method="post">
        <div id="typeSomething">
            <input name="message" placeholder="Type something..." id="typeSomethingText"></input>
        </div>
        <button id="sendBtn">
            <div id="sendBtnText">Send</div>
        </button>
    </form>
</body>
</html>