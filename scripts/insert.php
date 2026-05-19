

<!-- line 6 tells you errors with lots of information -->
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require 'config/dbConfig.php';
// select the genres, consoles and locations for the dropdowns
$genres = $conn->query("
    SELECT id, name 
    FROM genre 
    ORDER BY name ASC
")->fetch_all(MYSQLI_ASSOC);

$consoles = $conn->query("
    SELECT id, name 
    FROM console 
    ORDER BY name ASC
")->fetch_all(MYSQLI_ASSOC);

$locations = $conn->query("
    SELECT id, city 
    FROM location 
    ORDER BY city ASC
")->fetch_all(MYSQLI_ASSOC);

// trimming the input and validating it before inserting into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $rating = trim($_POST['rating']);

    $genre_id = (int) $_POST['fk_genre_id'];
    $console_id = (int) $_POST['fk_console_id'];
    $location_id = (int) $_POST['fk_location_id'];

    $main_character = trim($_POST['main_character']);
    $price = (float) $_POST['price'];
    $year = (int) $_POST['year'];

    $imageName = '';

    // image upload and resize
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $imageName = basename($_FILES['image']['name']);

        $targetPath = 'assets/image/' . $imageName;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            die("Image upload failed.");
        }
    }

    // insert game
    $gameSql = "
        INSERT INTO game (
            rating,
            fk_genre_id,
            name,
            description,
            image,
            main_character,
            price,
            year
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ";

    $stmt = $conn->prepare($gameSql);

    $stmt->bind_param(
        "sissssdi",
        $rating,
        $genre_id,
        $name,
        $description,
        $imageName,
        $main_character,
        $price,
        $year
    );

    $stmt->execute();

    // get newly created game ID
    $newGameId = $conn->insert_id;

    // insert metadata
    $metaSql = "
        INSERT INTO game_metadata (
            fk_game_id,
            fk_console_id,
            fk_location_id
        )
        VALUES (?, ?, ?)
    ";

    $metaStmt = $conn->prepare($metaSql);

    $metaStmt->bind_param(
        "iii",
        $newGameId,
        $console_id,
        $location_id
    );

    $metaStmt->execute();

    header("Location: games.php");
    exit;
    
}
