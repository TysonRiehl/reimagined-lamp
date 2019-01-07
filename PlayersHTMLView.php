<!DOCTYPE html>
<html>
<head>
    <style>
        li {
            list-style-type: none;
            margin-bottom: 1em;
        }
        span {
            display: block;
        }
    </style>
</head>
<body>
<div>
    <span class="title">Current Players</span>
    <ul>
        <?php foreach($this->properties->players as $player) { ?>
            <li>
                <div>
                    <span class="player-name">Name: <?= htmlspecialchars($player->name); ?></span>
                    <span class="player-age">Age: <?= htmlspecialchars($player->age) ?></span>
                    <span class="player-salary">Salary: <?= htmlspecialchars($player->salary) ?></span>
                    <span class="player-job">Job: <?= htmlspecialchars($player->job) ?></span>
                </div>
            </li>
        <?php } ?>
    </ul>
</body>
</html>