<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>
<section class="dark:bg-gray-800 py-6 px-4 md:px-8 min-h-[76dvh]">

    <a href="<?= base_url() . 'user/form' ?>"
        class="inline-flex items-center justify-center px-5 py-2.5 text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-sm font-medium focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 mb-6">
        Register New User
    </a>

    <div class="overflow-x-auto bg-white dark:bg-gray-900 rounded-lg shadow-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">User Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-300">
                <?php foreach ($users as $user): ?>
                    <tr class="border-t border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 text-sm font-medium"><?php echo $user['id'] ?></td>
                        <td class="px-6 py-4 text-sm font-medium"><?php echo $user['username'] ?></td>
                        <td class="px-6 py-4 text-sm font-medium"><?php echo $user['email'] ?></td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="<?= base_url() . 'user/edit/' . $user['id'] ?>"
                                class="inline-flex items-center justify-center px-3 py-2 text-white bg-yellow-600 hover:bg-yellow-700 rounded-lg text-sm focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-800 mr-2">
                                Edit
                            </a>
                            <form action="<?= base_url('user/delete/' . $user['id']) ?>" method="post"
                            class="inline-flex items-center justify-center px-3 py-2 text-white bg-red-600 hover:bg-red-700 rounded-lg text-sm focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800"
                            >
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>


<?= $this->endSection('content') ?>