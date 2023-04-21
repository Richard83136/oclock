<DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<head>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    

<div id = "container1">
    <h1>Horloge</h1>
        <div id = "clock"></div>
    <h2>Reveil</h2>
        <div class="jour"><input id ="alarm" name = "alarmTime" type ="datetime-local" ></div><br>
        <div class="jour"><input  id ="message" type ="text" placeholder ="Message..." ></div><br>
        <button id ="aSet">Set</button>
        <button id ="aClear">Clear</button>
        <button><a href="index.php" style="color:white;text-decoration:none;">Reset</a></button>
</div>
    <div id ="alarmC">
        <div id ="alarming"></div>
    </div>

<div id = "container2">
    <h1 style="color:rgb(218, 218, 231);">Chrono</h1>
        <div style="color:blue;" id ="chrono">00:00</div>
        <button id ="start">Start</button><br>
        <button id ="stop">Stop</button>
        <button id ="reset"><a href="index.php" style="color:white;text-decoration:none;">Reset</a> </button>
        <button id ="lap">Lap</button>
        <div id="total"></div>
</div>

<div id = "container3">
    <h1 style="color:rgb(51, 51, 82);">Minuteur</h1>
        <div id="timerContainer">
            <!-- <input id="bHours" type="number" max="99" min="00" value="00" class="time"> : -->
            <input id="bMinutes" type="number" max="60" min="00" value="00" class="time"> :
            <input id="bSeconds" type="number" max="60" min="00" value="00" class="time">
        </div>
        <button id ="bStart">Start</button>
        <button id ="bReset">Reset</button>
</div>


</body>
</html>