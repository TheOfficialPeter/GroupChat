<html>
<head>
</head>
<link href="../css/main.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Inter&family=Montserrat&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
<body>
    <script src="../js/loading.js"></script>
    <script src="../js/group.js"></script>
    <?php
        $conn = new mysqli("localhost", "admin", "admin");
    ?>
    <script src="../js/name.js"></script>

    <?php
        $db = $_COOKIE['pin'];
        $conn = new mysqli("localhost", "admin", "admin", $db);

        $result = $conn->query("SELECT * FROM messages");

        while($row = mysqli_fetch_assoc($result)) {
            $ownerName = $row["speaker"];
            $message = $row["text_"];

            // create message elements
        }
    ?>

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
    <div id="typeSomething">
        <input placeholder="Type something..." id="typeSomethingText"></input>
    </div>
    <div id="sendBtn">
        <h1 id="sendBtnText">Send</h1>
    </div>
</body>
</html>