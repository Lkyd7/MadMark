<?php

include 'partials/header.php';
include 'scripts/insert.php';
?>

<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h1 class="text-3xl font-bold mb-6 text-center">
        Add Game
    </h1>

    <form method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- Game Name -->
        <div>
            <label class="block mb-2 font-semibold">
                Game Name
            </label>

            <input 
                type="text"
                name="name"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Description -->
        <div>
            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea
                name="description"
                rows="5"
                class="w-full border rounded-lg p-3"
                required
            ></textarea>
        </div>

        <!-- Rating -->
        <div>
            <label class="block mb-2 font-semibold">
                Rating
            </label>

            <input
                type="text"
                name="rating"
                placeholder="12 / 16 / 18"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Genre -->
        <div>
            <label class="block mb-2 font-semibold">
                Genre
            </label>

            <select 
                name="fk_genre_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Genre
                </option>
            <!-- bascically saying only give me one genre -->
                <?php foreach ($genres as $genre): ?>

                    <option value="<?= $genre['id'] ?>">
                        <?= htmlspecialchars($genre['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Console -->
        <div>
            <label class="block mb-2 font-semibold">
                Console
            </label>

            <select 
                name="fk_console_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Console
                </option>

                <?php foreach ($consoles as $console): ?>

                    <option value="<?= $console['id'] ?>">
                        <?= htmlspecialchars($console['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Location -->
        <div>
            <label class="block mb-2 font-semibold">
                Location
            </label>

            <select 
                name="fk_location_id"
                class="w-full border rounded-lg p-3"
                required
            >
                <option value="">
                    Select Location
                </option>

                <?php foreach ($locations as $location): ?>

                    <option value="<?= $location['id'] ?>">
                        <?= htmlspecialchars($location['city'], ENT_QUOTES, 'UTF-8') ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <!-- Main Character -->
        <div>
            <label class="block mb-2 font-semibold">
                Main Character
            </label>

            <input
                type="text"
                name="main_character"
                class="w-full border rounded-lg p-3"
            >
        </div>

        <!-- Price -->
        <div>
            <label class="block mb-2 font-semibold">
                Price
            </label>

            <input
                type="number"
                name="price"
                step="0.01"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Year -->
        <div>
            <label class="block mb-2 font-semibold">
                Year
            </label>

            <input
                type="number"
                name="year"
                class="w-full border rounded-lg p-3"
                required
            >
        </div>

        <!-- Image -->
        <div>
            <label class="block mb-2 font-semibold">
                Game Image
            </label>

            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full border rounded-lg p-3 bg-white"
                required
            >
        </div>

        <!-- Submit -->
        <button
            type="submit"
            class="w-full bg-purple-700 hover:bg-purple-800 text-white font-bold py-3 rounded-lg transition"
        >
            Add Game
        </button>

    </form>

</div>

<?php include 'partials/footer.php'; ?>