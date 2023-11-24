<nav class="w-full py-4 bg-gray-700 mb-8">
    <section class="w-[80%] mx-auto flex justify-between items-center gap-14">
        <h3 class="font-bold text-xl text-white">Librarr Demo</h3>
        <ul class="flex-1 flex items-center gap-4">
            <li class="p-4 rounded-md hover:translate-y-[4px] hover:scale-105 transition-all ease-in">
                <a href="/" class="text-md font-raleway {{ ($title === "Home") ? "text-green-400" : "text-white"}}">Home</a>
            </li>
            <li class="p-4 rounded-md hover:translate-y-[4px] hover:scale-105 transition-all ease-in">
                <a href="/about" class="text-md {{ ($title === "About") ? "text-green-400" : "text-white"}}">About</a>
            </li>
        </ul>
        <a href="/login" class="px-4 py-2 bg-green-400 hover:bg-green-500 rounded-md text-white">Log In</a>
    </section>
</nav>