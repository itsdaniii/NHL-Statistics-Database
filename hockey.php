<html>

<head>
    <title>Hockey Stats Database</title>
    <style>
        .body {
            padding: 0;
            margin: 0;
        }

        .Parent {
            display: flex;
            flex-direction: row;
        }

        .child1 {
            width: 50%;
            margin-left: 20px;
            margin-right: 20px;
        }

        .child2 {
            width: 50%;
            margin-left: 20px;
            margin-right: 20px;
            padding: 20px;
            border-left: black solid 2px;
        }

        .child3 {
            width: 50%;
            margin-left: 20px;
            margin-right: 20px;
            border-right: grey solid 1px;
        }
    </style>
    <h1 style="text-align:center">Hockey Stats Database</h1>
</head>


<body>
    <div class="Parent">
        <div class="child1">
            <h2>View All Data</h2>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="viewAllDataRequest" name="viewAllDataRequest">
                <input type="submit" name="viewAllData"></p>
            </form>
            <hr style="height:2px; background-color:black" />

            <h2 style="display:inline">Player Management</h2>
            <div class="Parent">
                <div class="child3">
                    <h3>Insert Values into players</h3>
                    <form method="POST" action="hockey.php"> <!--refresh page when submitted-->
                        <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
                        Id: <input type="number" min="0" step="1" name="insId" required="true"> <br /><br />
                        Number: <input type="number" min="0" step="1" name="insNum" required="true"> <br /><br />
                        Name: <input type="text" name="insName" required="true"> <br /><br />
                        Age: <input type="number" min="0" step="1" name="insAge" required="true"> <br /><br />
                        Position: <input type="text" name="insPos" required="true"> <br /><br />
                        <input type="hidden" name="insCaptain" value="0">
                        Team: <input type="text" name="insTeam" required="true"> <br /><br />

                        <input type="submit" value="Insert" name="insertSubmit"></p>
                    </form>
                </div>
                <div class="child1">
                    <h3>Update Values for a Player</h3>
                    <form method="POST" action="hockey.php"> <!--refresh page when submitted-->
                        <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
                        Player Id to Update: <input type="number" min="0" step="1" name="playerId" required="true">
                        <br />
                        <p> Enter values for the columms you want to update</p>
                        Number: <input type="number" min="0" step="1" name="updateNum"> <br /><br />
                        Name: <input type="text" name="updateName"> <br /><br />
                        Age: <input type="number" min="0" step="1" name="updateAge"> <br /><br />
                        Position: <input type="text" name="updatePos"> <br /><br />
                        Captain? <input type="number" min="0" step="1" max="1" name="updateCaptain">
                        Team: <input type="text" name="updateTeam"> <br /><br />

                        <input type="submit" value="Update" name="updateSubmit"></p>
                    </form>
                </div>
            </div>

            <hr />

            <h3>Delete Player</h3>

            <form method="POST" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
                Id: <input type="number" min="0" step="1" name="delId" required="true"> <br /><br />

                <input type="submit" name="deleteSubmit"></p>
            </form>

            <hr style="height:2px; background-color:black" />

            <h2 style="display:ineline">Queries</h2>


            <h3>Select Division based on Attributes</h3>
            <p> Enter values for the attributes you want to match</p>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="selectDivisionRequest" name="selectDivisionRequest">
                Name: <input type="text" name="selectName"> <br /><br />
                Conference: <input type="text" name="selectConference"> <br /><br />

                <input type="submit" name="selectSubmit"></p>
            </form>

            <hr />

            <h3>Count Number of Players</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="countTupleRequest" name="countTupleRequest">
                <input type="submit" name="countTuples"></p>
            </form>

            <hr />

            <h3>Find players for a team</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="getPlayersForTeamRequest" name="getPlayersForTeamRequest">
                Team: <input type="text" name="playersForTeamName" required="true"> <br /><br />

                <input type="submit" name="getPlayersForTeam"></p>
            </form>

            <hr />

            <h3>Find stats in each game by Player ID (Join)</h3>

            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="joinQueryRequest" name="joinQueryRequest">
                Id: <input type="number" min="0" step="1" name="joinID" required="true"> <br /><br />

                <input type="submit" name="joinSubmit"></p>
            </form>

            <hr />

            <h3>Show certain attributes (Projection)</h3>

            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="projectionRequest" name="projectionRequest" width=150px, height=200px>
                Select attributes: <br><br>
                <select name="playersProject[]" id="playersProject" style="width:200px;height:120px" multiple>
                    <option value="playerID">playerID</option>
                    <option value="playerNum">playerNum</option>
                    <option value="playerName">playerName</option>
                    <option value="age">age</option>
                    <option value="position">position</option>
                    <option value="isCaptain">isCaptain</option>
                    <option value="team">team</option>
                </select> <br><br>
                <input type="submit" name="projectSubmit"></p>
            </form>

            <hr />


            <h3>See average age of players by team (Group by)</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="groupByRequest" name="groupByRequest"><br />
                <input type="hidden" id="groupByRequest" name="groupByRequest">
                <input type="submit" name="groupBySubmit"></p>
            </form>

            <hr />

            <h3>See players with hat-tricks this season (Having)</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="havingRequest" name="havingRequest"><br />
                <input type="hidden" id="havingRequest" name="havingRequest">
                <input type="submit" name="havingSubmit"></p>
            </form>

            <hr />

            <h3>See players that have not been penalized (Nested)</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="nestedRequest" name="nestedRequest"><br />
                <input type="hidden" id="nestedRequest" name="nestedRequest">
                <input type="submit" name="nestedSubmit"></p>
            </form>

            <hr />

            <h3>See players that have played in every stadium (Division)</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="divisionRequest" name="divisionRequest"><br />
                <input type="hidden" id="divisionRequest" name="divisionRequest">
                <input type="submit" name="divisionSubmit"></p>
            </form>

            <hr />

            <h3>Find goalies that have never had a shut out (Division)</h3>
            <form method="GET" action="hockey.php"> <!--refresh page when submitted-->
                <input type="hidden" id="division2Request" name="division2Request">
                <input type="submit" name="division2Submit"></p>
            </form>
        </div>

        <div class="child2">
            <h2 style="display:inline">Results</h2>
            <hr style="height:2px; background-color:black" />

            <?php
            //this tells the system that it's no longer just parsing html; it's now parsing PHP
            
            $success = True; //keep track of errors so it redirects the page only if there are no errors
            $db_conn = NULL; // edit the login credentials in connectToDB()
            $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())
            
            function debugAlertMessage($message)
            {
                global $show_debug_alert_messages;

                if ($show_debug_alert_messages) {
                    echo "<script type='text/javascript'>alert('" . $message . "');</script>";
                }
            }

            function executePlainSQL($cmdstr)
            { //takes a plain (no bound variables) SQL command and executes it
                //echo "<br>running ".$cmdstr."<br>";
                global $db_conn, $success;

                $statement = OCIParse($db_conn, $cmdstr);
                //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work
            
                if (!$statement) {
                    echo "<br>Apologies, there was an error with your input. Unable to parse request.<br>";
                    echo "<br>";
                    echo "<br>Error:<br>";
                    $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                    echo htmlentities($e['message']);
                    $success = False;
                }

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Apologies, there was an error with your request. Action incomplete.<br>";
                    echo "<br>";
                    echo "<br>Error:<br>";
                    $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                    echo htmlentities($e['message']);
                    $success = False;
                }

                return $statement;
            }

            function executeBoundSQL($cmdstr, $list)
            {
                /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
                In this case you don't need to create the statement several times. Bound variables cause a statement to only be
                parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
                See the sample code below for how this function is used */

                global $db_conn, $success;
                $statement = OCIParse($db_conn, $cmdstr);

                if (!$statement) {
                    echo "<br>Apologies, there was an error with your input. Unable to parse request.<br>";
                    echo "<br>";
                    echo "<br>Error:<br>";
                    $e = OCI_Error($db_conn);
                    echo htmlentities($e['message']);
                    $success = False;
                }

                foreach ($list as $tuple) {
                    foreach ($tuple as $bind => $val) {
                        //echo $val;
                        //echo "<br>".$bind."<br>";
                        OCIBindByName($statement, $bind, $val);
                        unset($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
                    }

                    $r = OCIExecute($statement, OCI_DEFAULT);
                    if (!$r) {
                        echo "<br>PlayerID already exists, please enter a unique PlayerID. INSERT action incomplete.<br>";
                        echo "<br>";
                        // echo "<br>Error:<br>";
                        // $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                        echo htmlentities($e['message']);
                        echo "<br>";
                        $success = False;
                    } else {
                        echo "<br>New player was successfully added.</br>";
                    }
                }
            }

            function printConferenceResult($result)
            { //prints results from a select statement
                echo "<h3>Conferences</h3>";
                echo "<table>";
                echo "<tr><th>Conference name</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printConfDivisionResult($result)
            { //prints results from a select statement
                echo "<h3>Divisions</h3>";
                echo "<table>";
                echo "<tr><th>Division Name</th><th>Conference Name</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printTeamResult($result)
            { //prints results from a select statement
                echo "<h3>Teams</h3>";
                echo "<table>";
                echo "<tr><th>Team Name</th><th>Owner</th><th>Wins</th><th>Losses</th><th>City</th><th>Division</th><th>Coach</th><th>Stadium</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td><td>" . $row[7] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printCoachResult($result)
            { //prints results from a select statement
                echo "<h3>Coaches</h3>";
                echo "<table>";
                echo "<tr><th>Name</th><th>Age</th>><th>isHeadCoach</th>><th>Team</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printPlayersResult($result)
            { //prints results from a select statement
                echo "<h3>Players</h3>";
                echo "<table>";
                echo "<tr><th>ID</th><th>NUMBER</th><th>NAME</th><th>AGE</th><th>POSITION</th><th>CAPTAIN</th><th>TEAM</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printDivision($result)
            {
                echo "<h3>Division</h3>";
                echo "<table>";
                echo "<tr><th>Name</th><th>Conference</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printSSResult($result)
            { //prints results from a select statement
                echo "<h3>Skater Stats</h3>";
                echo "<table>";
                echo "<tr><th>ID</th><th>Date</th><th>GameID</th><th>TimeOnIce</th><th>isPlaying</th><th>Goals</th><th>SOG</th><th>PIM</th><th>BlockedShots</th><th>Assists</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td><td>" . $row[7] . "</td><td>" . $row[8] . "</td><td>" . $row[9] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printGSResult($result)
            { //prints results from a select statement
                echo "<h3>Goalie Stats</h3>";
                echo "<table>";
                echo "<tr><th>ID</th><th>Date</th><th>GameID</th><th>TimeOnIce</th><th>isPlaying</th><th>isShutOut</th><th>goalsAgainst</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printStadiumResult($result)
            { //prints results from a select statement
                echo "<h3>Stadiums</h3>";
                echo "<table>";
                echo "<tr><th>Stadium name</th><th>Capacity</th><th>City</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printGameResult($result)
            { //prints results from a select statement
                echo "<h3>Games</h3>";
                echo "<table>";
                echo "<tr><th>GameID</th><th>GameDate</th><th>HomeTeam</th><th>AwayTeam</th><th>HomeTeamScore</th><th>AwayTeamScore</th><th>Stadium</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printJoinResult($result)
            { //prints results from a select statement
                echo "<h3>Game Stats for Player<h3>";
                echo "<table>";
                echo "<tr><th>PlayerID</th><th>PlayerName</th><th>GameID</th><th>Goals</th><th>Assists</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printProjectionResult($result)
            { //prints results from a select statement
                echo "<h3>Projected Players</h3>";
                echo "<table>";

                $projections = $_GET['playersProject'];
                $query = '<tr><th>';
                $format = '</th><th>';

                foreach ($projections as $selectedOption) {
                    $query .= $selectedOption;
                    $query .= $format;
                }

                $new = rtrim($query, "<th>");
                $end = '</tr>';

                $new .= $end;

                echo "$new";


                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr>";
                    for ($i = 0; $i < sizeof($projections); $i++) {
                        echo "<td>" . $row[$i] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

            function printGroupByResult($result)
            { //prints results from a select statement
                echo "<h3>Average Age per Team</h3>";
                echo "<table>";
                echo "<tr><th>Team</th><th>Average Age</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printHavingResult($result)
            { //prints results from a select statement
                echo "<h3>Players with hat-tricks:</h3>";
                echo "<table>";
                echo "<tr><th>Player Name</th><th>Number of Hat-tricks</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printNestedResult($result)
            { //prints results from a select statement
                echo "<h3>Players with 0 penalties:</h3>";
                echo "<table>";
                echo "<tr><th>Player Name</th><th>Team</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printDivisionResult($result)
            { //prints results from a select statement
                echo "<h3>Players that have played in all stadiums:</h3>";
                echo "<table>";
                echo "<tr><th>Player Name</th><th>Team</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function printDivision2Result($result)
            { //prints results from a select statement
                echo "<h3>Goalies that have never had a shutout:<h3>";
                echo "<table>";
                echo "<tr><th>Player Name</th><th>Age</th><th>Team</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>"; //or just use "echo $row[0]"
                }

                echo "</table>";
            }

            function connectToDB()
            {
                global $db_conn;

                // Your username is ora_(CWL_ID) and the password is a(student number). For example,
                // ora_platypus is the username and a12345678 is the password.
                $db_conn = OCILogon("ora_mhanray", "a38777165", "dbhost.students.cs.ubc.ca:1522/stu");

                if ($db_conn) {
                    debugAlertMessage("Database is Connected");
                    return true;
                } else {
                    debugAlertMessage("Cannot connect to Database");
                    $e = OCI_Error(); // For OCILogon errors pass no handle
                    echo htmlentities($e['message']);
                    return false;
                }
            }

            function disconnectFromDB()
            {
                global $db_conn;

                debugAlertMessage("Disconnect from Database");
                OCILogoff($db_conn);
            }

            function handleUpdateRequest()
            {
                global $db_conn;

                $player_id = $_POST['playerId'];

                $updateNum = $_POST['updateNum'];
                $updateName = $_POST['updateName'];
                $updateAge = $_POST['updateAge'];
                $updatePos = $_POST['updatePos'];
                $updateCaptain = $_POST['updateCaptain'];
                $updateTeam = $_POST['updateTeam'];

                $duplicate = executePlainSQL("SELECT * FROM players WHERE playerID='" . $player_id . "'");
                if (($row = oci_fetch_row($duplicate)) == false) {
                    echo "<br>PlayerID does not exist. Update action incomplete.<br>";
                    return;
                }

                if (!empty($player_id)) {
                    if (!empty($updateNum) && !is_null($updateNum)) {
                        executePlainSQL("UPDATE players SET playerNum='" . $updateNum . "' WHERE playerID='" . $player_id . "'");
                    }
                    if (!empty($updateName)) {
                        executePlainSQL("UPDATE players SET playerName='" . $updateName . "' WHERE playerID='" . $player_id . "'");
                    }
                    if (!empty($updateAge) && !is_null($updateAge)) {
                        executePlainSQL("UPDATE players SET age='" . $updateAge . "' WHERE playerID='" . $player_id . "'");
                    }
                    if (!empty($updatePos)) {
                        executePlainSQL("UPDATE players SET position='" . $updatePos . "' WHERE playerID='" . $player_id . "'");
                    }
                    if (!empty($updateCaptain) || $updateCaptain == "0") {
                        executePlainSQL("UPDATE players SET isCaptain='" . $updateCaptain . "' WHERE playerID='" . $player_id . "'");
                    }
                    if (!empty($updateTeam) && !is_null($updateTeam)) {
                        executePlainSQL("UPDATE players SET team='" . $updateTeam . "' WHERE playerID='" . $player_id . "'");
                    }

                    echo "<br>Player record successfully updated.<br>";
                }

                OCICommit($db_conn);
            }

            function handleDeleteRequest()
            {
                global $db_conn;

                $delete_id = $_POST['delId'];

                $duplicate = executePlainSQL("SELECT * FROM players WHERE playerID='" . $delete_id . "'");
                if (($row = oci_fetch_row($duplicate)) == false) {
                    echo "<br>PlayerID does not exist. Delete action incomplete.<br>";
                    return;
                }

                $result = executePlainSQL("DELETE FROM players WHERE playerID='" . $delete_id . "'");
                if (($row = oci_fetch_row($result)) == false) {
                    echo "<br>Player was successfully deleted.<br>";
                }

                OCICommit($db_conn);
            }

            function handleInsertRequest()
            {
                global $db_conn;

                //Getting the values from user and insert data into the table
                $tuple = array(
                    ":bind0" => $_POST['insId'],
                    ":bind1" => $_POST['insNum'],
                    ":bind2" => $_POST['insName'],
                    ":bind3" => $_POST['insAge'],
                    ":bind4" => $_POST['insPos'],
                    ":bind5" => $_POST['insCaptain'],
                    ":bind6" => $_POST['insTeam'],
                );

                $alltuples = array(
                    $tuple
                );

                executeBoundSQL("insert into players values (:bind0, :bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples);

                OCICommit($db_conn);
            }

            function handleCountRequest()
            {
                global $db_conn;

                $result = executePlainSQL("SELECT Count(*) FROM players");

                if (($row = oci_fetch_row($result)) != false) {
                    echo "<br> The number of tuples in players: " . $row[0] . "<br>";
                }
            }

            function handleViewAllRequest()
            {
                global $db_conn;

                $resultConference = executePlainSQL("SELECT * FROM conference");
                printConferenceResult($resultConference);

                echo "<hr />";

                $resultConfDivision = executePlainSQL("SELECT * FROM division");
                printConfDivisionResult($resultConfDivision);

                echo "<hr />";

                $resultTeam = executePlainSQL("SELECT * FROM team");
                printTeamResult($resultTeam);

                echo "<hr />";

                $resultCoach = executePlainSQL("SELECT * FROM coach");
                printCoachResult($resultCoach);

                echo "<hr />";

                $resultStadiums = executePlainSQL("SELECT * FROM stadiums");
                printStadiumResult($resultStadiums);

                echo "<hr />";

                $resultGames = executePlainSQL("SELECT * FROM games");
                printGameResult($resultGames);

                echo "<hr />";

                $resultPlayers = executePlainSQL("SELECT * FROM players");
                printPlayersResult($resultPlayers);

                echo "<hr />";

                $resultSS = executePlainSQL("SELECT * FROM ss");
                printSSResult($resultSS);

                echo "<hr />";

                $resultGS = executePlainSQL("SELECT * FROM gs");
                printGSResult($resultGS);
            }

            function handleGetPlayersForTeamRequest()
            {
                global $db_conn;

                $team_name = $_GET['playersForTeamName'];
                $result = executePlainSQL("SELECT * FROM players WHERE team='" . $team_name . "'");

                printPlayersResult($result);
            }


            function handleJoinRequest()
            {
                global $db_conn;

                $join_id = $_GET['joinID'];

                // you need the wrap the old name and new name values with single quotations
                $result = executePlainSQL("SELECT P.playerID, P.playerName, S.gameID, S.goals, S.assists FROM players P, ss S WHERE S.playerID = P.playerID AND S.playerID = '" . $join_id . "'");

                printJoinResult($result);
                OCICommit($db_conn);
            }

            function handleSelectRequest()
            {
                global $db_conn;

                $selectName = $_GET['selectName'];
                $selectConference = $_GET['selectConference'];

                $query = "SELECT * FROM division ";

                if (!empty($selectName) || !empty($selectConference)) {
                    $query .= "WHERE ";
                    if (!empty($selectName)) {
                        $query .= "name = '" . $selectName . "' ";
                        if (!empty($selectConference)) {
                            $query .= " AND conference = '" . $selectConference . "' ";
                        }
                    } else if (!empty($selectConference)) {
                        $query .= "conference = '" . $selectConference . "' ";
                    }
                }


                $result = executePlainSQL($query);
                printDivision($result);
            }

            function handleProjectRequest()
            {

                global $db_conn;

                $project = $_GET['playersProject'];

                $query = "SELECT ";
                $format = ", ";

                foreach ($_GET['playersProject'] as $selectedOption) {
                    $query .= $selectedOption;
                    $query .= $format;
                }
                $new = rtrim($query, ", ");
                $end = " FROM players";
                $new .= $end;

                echo $new;

                $result = executePlainSQL($new);
                printProjectionResult($result);
            }

            function handleGroupBy()
            {
                global $db_conn;

                $result = executePlainSQL("SELECT team, AVG(age) FROM players GROUP BY team");

                printGroupByResult($result);
            }

            function handleHaving()
            {
                global $db_conn;

                $result = executePlainSQL("SELECT P.playerName, Count(S.gameID) FROM players P, ss S WHERE P.playerID = S.playerID AND S.goals > 2 GROUP BY P.playerName Having Count(S.gameID) > 0");

                printHavingResult($result);
            }

            function handleNested()
            {
                global $db_conn;

                $result = executePlainSQL("SELECT P.playerName, P.team FROM players P WHERE P.playerID Not In (Select S.playerID FROM ss S Where S.penaltyMinutes > 0)");

                printNestedResult($result);
            }

            function handleDivision()
            {
                global $db_conn;

                $result = executePlainSQL("
            SELECT P.playerName, P.team 
            FROM players P 
            WHERE NOT EXISTS 
                ((SELECT Sta.name 
                FROM stadiums Sta) 
                MINUS 
                    (SELECT G.stadium 
                    FROM games G, ss S 
                    WHERE G.gameID = S.gameID AND S.playerID = P.playerID))");


                // $result = executePlainSQL("SELECT P.playerName, P.team FROM players P WHERE NOT EXISTS 
                // ((SELECT Sta.name FROM stadiums Sta) EXCEPT (SELECT G.stadium FROM games G, ss S WHERE G.gameID = S.gameID AND S.playerID = P.playerID))");
                printDivisionResult($result);
            }

            function handleDivision2Request()
            {
                global $db_conn;

                $result = executePlainSQL("
            SELECT P.playerName, P.age, P.team
            FROM players P 
            WHERE P.position = 'Goalie' AND NOT EXISTS 
                ((SELECT G.gameID 
                FROM games G, gs gs
                WHERE G.gameID = gs.gameID AND gs.playerID = P.playerID AND gs.isPlaying = 1) 
                MINUS 
                    (SELECT G2.gameID 
                    FROM games G2, gs S2 
                    WHERE G2.gameID = S2.gameID AND S2.playerID = P.playerID AND s2.isPlaying = 1 AND S2.isShutOut = 0))");

                printDivision2Result($result);
            }

            // HANDLE ALL POST ROUTES
            // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
            function handlePOSTRequest()
            {
                if (connectToDB()) {
                    if (array_key_exists('updateQueryRequest', $_POST)) {
                        handleUpdateRequest();
                    } else if (array_key_exists('insertQueryRequest', $_POST)) {
                        handleInsertRequest();
                    } else if (array_key_exists('deleteQueryRequest', $_POST)) {
                        handleDeleteRequest();
                    }

                    disconnectFromDB();
                }
            }

            // HANDLE ALL GET ROUTES
            // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
            function handleGETRequest()
            {
                if (connectToDB()) {
                    if (array_key_exists('countTuples', $_GET)) {
                        handleCountRequest();
                    } else if (array_key_exists('viewAllData', $_GET)) {
                        handleViewAllRequest();
                    } else if (array_key_exists('selectSubmit', $_GET)) {
                        handleSelectRequest();
                    } else if (array_key_exists('getPlayersForTeam', $_GET)) {
                        handleGetPlayersForTeamRequest();
                    } else if (array_key_exists('joinSubmit', $_GET)) {
                        handleJoinRequest();
                    } else if (array_key_exists('projectSubmit', $_GET)) {
                        handleProjectRequest();
                    } else if (array_key_exists('groupBySubmit', $_GET)) {
                        handleGroupBy();
                    } else if (array_key_exists('havingSubmit', $_GET)) {
                        handleHaving();
                    } else if (array_key_exists('nestedSubmit', $_GET)) {
                        handleNested();
                    } else if (array_key_exists('divisionSubmit', $_GET)) {
                        handleDivision();
                    } else if (array_key_exists('division2Submit', $_GET)) {
                        handleDivision2Request();
                    }
                    disconnectFromDB();
                }
            }

            if (isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit'])) {
                handlePOSTRequest();
            } else if (
                isset($_GET['countTupleRequest']) || isset($_GET['viewAllDataRequest']) || isset($_GET['selectDivisionRequest']) || isset($_GET['getPlayersForTeamRequest']) || isset($_GET['joinQueryRequest']) || isset($_GET['projectionRequest'])
                || isset($_GET['groupByRequest']) || isset($_GET['havingRequest']) || isset($_GET['nestedRequest']) || isset($_GET['divisionRequest']) || isset($_GET['division2Request'])
            ) {
                handleGETRequest();
            }
            ?>
        </div>
    </div>

</body>

</html>