<?php 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_game'])) {

    $gameId = (int) $_POST['game_id'];
    $consoleId = (int) $_POST['console_id'];
    $locationId = (int) $_POST['location_id'];

    $sql = "
        DELETE FROM game_metadata
        WHERE fk_game_id = ?
        AND fk_console_id = ?
        AND fk_location_id = ?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii", $gameId, $consoleId, $locationId);
    $stmt->execute();

    header("Location: games.php");
    exit;
}

?>

<div 
    id="deleteModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
>
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-sm w-full">
        
        <h2 class="text-xl font-bold mb-4">
            Delete Game Instance?
        </h2>

        <p class="mb-6 text-gray-700">
            This will remove this game from the list, but it will not delete the game itself.
        </p>

        <form method="POST">
            <input type="hidden" name="game_id" id="delete_game_id">
            <input type="hidden" name="console_id" id="delete_console_id">
            <input type="hidden" name="location_id" id="delete_location_id">

            <div class="flex justify-end gap-3">
                <button
                    type="button"
                    onclick="closeDeleteModal()"
                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    name="delete_game"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700"
                >
                    Delete
                </button>
            </div>
        </form>

    </div>
</div>

<script>
function openDeleteModal(gameId, consoleId, locationId) {
    document.getElementById('delete_game_id').value = gameId;
    document.getElementById('delete_console_id').value = consoleId;
    document.getElementById('delete_location_id').value = locationId;

    document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
    document.getElementById('deleteModal').classList.add('hidden');
}
</script>