<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>
<section class="bg-white dark:bg-gray-900 py-16 px-4 flex items-center justify-center h-[80dvh]">
    <div class="max-w-screen-md w-full bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">Create User</h2>
        <form action="<?= site_url('user/createUser') ?>" method="POST" class="space-y-6">

        <div>
                <label for="username" class="block text-lg font-medium text-gray-900 dark:text-gray-300">Userame</label>
                <input type="text" name="username" id="username" required
                    class="mt-2 px-4 py-3 w-full text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500">
            </div>

            <div>
                <label for="email" class="block text-lg font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-2 px-4 py-3 w-full text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500">
            </div>

            <div>
                <label for="password" class="block text-lg font-medium text-gray-900 dark:text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-2 px-4 py-3 w-full text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="w-full sm:w-auto py-3 px-6 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 rounded-lg text-lg font-semibold dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Create User
                </button>
            </div>
        </form>
    </div>
</section>

<?= $this->endSection('content') ?>