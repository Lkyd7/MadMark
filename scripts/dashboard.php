<?php
$game_id = $_GET['game_id'] ?? null;
// SQL query to retrieve game data from the database
$sql = "
     SELECT
        g.id AS id,
        g.name AS game_name,
        gn.name AS genre_name,
        l.city AS game_location,
        g.added_on AS game_added,
        c.name AS console_name,

        gmd.fk_console_id,
        gmd.fk_location_id

    FROM game_metadata gmd

    INNER JOIN game g ON gmd.fk_game_id = g.id
    INNER JOIN console c ON gmd.fk_console_id = c.id
    INNER JOIN location l ON gmd.fk_location_id = l.id
    INNER JOIN genre gn ON g.fk_genre_id = gn.id

    ORDER BY g.name ASC
";

// prepare the SQL statement (protects against SQL injection)
// prepare the SQL statement (protects against SQL injection)
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();

// get the result set from the query
$result = $stmt->get_result();

// convert results into an associative array
// (so we can use column names like $game['game_name'])
$games = $result->fetch_all(MYSQLI_ASSOC);