<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require 'config/dbConfig.php';

if (!isset($_GET['game_id']) || !is_numeric($_GET['game_id'])) {
    die("Invalid game ID.");
}

$gameId = (int) $_GET['game_id'];

$sql = "
    SELECT 
        game.id,
        game.name,
        game.description,
        game.price,
        game.rating,
        game.main_character,
        game.year,
        game.image,

        genre.name AS genre_name,
        console.name AS console_name,
        location.city AS location_city

    FROM game

    INNER JOIN genre 
        ON game.fk_genre_id = genre.id

    INNER JOIN game_metadata 
        ON game.id = game_metadata.fk_game_id

    INNER JOIN location 
        ON game_metadata.fk_location_id = location.id

    INNER JOIN console 
        ON game_metadata.fk_console_id = console.id

    WHERE game.id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $gameId);
$stmt->execute();

$game = $stmt->get_result()->fetch_assoc();

if (!$game) {
    die("Game not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $rating = trim($_POST['rating']);
    $main_character = trim($_POST['main_character']);
    $price = (float) $_POST['price'];
    $year = (int) $_POST['year'];

    $imageName = $game['image'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $imageName = basename($_FILES['image']['name']);
        $targetPath = 'assets/image/' . $imageName;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            die("Image upload failed.");
        }
    }

    $updateSql = "
        UPDATE game
        SET 
            name = ?,
            description = ?,
            rating = ?,
            main_character = ?,
            price = ?,
            year = ?,
            image = ?
        WHERE id = ?
    ";

    $updateStmt = $conn->prepare($updateSql);

    $updateStmt->bind_param(
        "ssssdiss",
        $name,
        $description,
        $rating,
        $main_character,
        $price,
        $year,
        $imageName,
        $gameId
    );

    $updateStmt->execute();

    header("Location: games.php");
    exit;
}

include 'partials/header.php';
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h1 class="text-3xl font-bold mb-6 text-center">
        Edit Game
    </h1>

    <form method="POST" enctype="multipart/form-data" class="space-y-5">

        <div>
            <label class="block mb-2 font-semibold">Game Name</label>

            <input 
                type="text"
                name="name"
                value="<?= htmlspecialchars($game['name'], ENT_QUOTES, 'UTF-8') ?>"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-semibold">Description</label>

            <textarea
                name="description"
                rows="5"
                class="w-full border rounded-lg p-3"
                required
            ><?= htmlspecialchars($game['description'], ENT_QUOTES, 'UTF-8') ?></textarea>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Rating</label>

            <input
                type="text"
                name="rating"
                value="<?= htmlspecialchars($game['rating'], ENT_QUOTES, 'UTF-8') ?>"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-semibold">Genre</label>

            <p class="w-full border rounded-lg p-3 bg-gray-100">
                <?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Console</label>

            <p class="w-full border rounded-lg p-3 bg-gray-100">
                <?= htmlspecialchars($game['console_name'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Location</label>

            <p class="w-full border rounded-lg p-3 bg-gray-100">
                <?= htmlspecialchars($game['location_city'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>

        <div>
            <label class="block mb-2 font-semibold">Main Character</label>

            <input
                type="text"
                name="main_character"
                value="<?= htmlspecialchars($game['main_character'], ENT_QUOTES, 'UTF-8') ?>"
                class="w-full border rounded-lg p-3"
            >
        </div>

        <div>
            <label class="block mb-2 font-semibold">Price</label>

            <input
                type="number"
                name="price"
                step="0.01"
                value="<?= htmlspecialchars($game['price'], ENT_QUOTES, 'UTF-8') ?>"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-semibold">Year</label>

            <input
                type="number"
                name="year"
                value="<?= htmlspecialchars($game['year'], ENT_QUOTES, 'UTF-8') ?>"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-semibold">Current Image</label>

            <?php if (!empty($game['image'])): ?>
                <img 
                    src="assets/image/<?= htmlspecialchars($game['image'], ENT_QUOTES, 'UTF-8') ?>" 
                    alt="<?= htmlspecialchars($game['name'], ENT_QUOTES, 'UTF-8') ?>"
                    class="w-40 mb-3 rounded"
                >
            <?php else: ?>
                <p>No image uploaded.</p>
            <?php endif; ?>

            <label class="block mb-2 font-semibold">Upload New Image</label>

            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full border rounded-lg p-3 bg-white"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-purple-700 hover:bg-purple-800 text-white font-bold py-3 rounded-lg transition"
        >
            Update Game
        </button>

    </form>

</div>

<?php include 'partials/footer.php'; ?>