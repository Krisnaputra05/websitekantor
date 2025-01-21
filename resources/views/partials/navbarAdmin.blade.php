<nav class="bg-gray-800 w-64 min-h-screen">
    <div class="px-4 py-5">
        <h2 class="text-white text-lg font-semibold">Admin Panel</h2>
    </div>
    <div class="mt-5 px-4">
        <div class="space-y-4">
            <a href="{{ route('admin.dashboard') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                Dashboard
            </a>
            <a href="{{ route('admin.articles.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                Articles
            </a>
            <a href=""
                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                Create Category
            </a>
            <!-- Add more menu items as needed -->
        </div>
    </div>
</nav>