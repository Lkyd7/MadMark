<?php
include 'partials/header.php';
include 'scripts/dashboard.php';
include 'delete.php';


?>

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Genre</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Console</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Added on</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
    <?php foreach ($games as $game): ?>
        <tr>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($game['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($game['game_name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($game['genre_name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($game['console_name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($game['game_location'], ENT_QUOTES, 'UTF-8') ?></td>
            <td class="px-6 py-4 whitespace-nowrap"><?= date('d M Y', strtotime($game['game_added'])) ?></td>
        
            <td class="px-6 py-4 whitespace-nowrap">
                <button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out" onclick="window.location.href='edit_game.php?game_id=<?= $game['id'] ?>'">Update</button>
                <button
    type="button"
    onclick="openDeleteModal(
        <?= $game['id'] ?>,
        <?= $game['fk_console_id'] ?>,
        <?= $game['fk_location_id'] ?>
    )"
    class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500"
>
    Delete
</button>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>



<?php
include 'partials/footer.php';