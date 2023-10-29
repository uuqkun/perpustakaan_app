<nav class="w-full py-4 bg-gray-50">
    <section class="w-[80%] mx-auto flex justify-between items-center gap-14">
        <h3 class="font-bold text-xl">Librarr</h3>
        <ul class="flex-1 flex items-center gap-4">
            <li class="p-4 rounded-md hover:translate-y-[4px] hover:scale-105 transition-all ease-in">
                <a href="/" class="text-md text-gray-400 {{ ($title === "Home") ? "text-green-400" : ""}}">Home</a>
            </li>
            <li class="p-4 rounded-md hover:translate-y-[4px] hover:scale-105 transition-all ease-in">
                <a href="/about" class="text-md text-gray-400 {{ ($title === "About") ? "text-green-400" : ""}}">About</a>
            </li>
        </ul>
        <a href="#" class="px-4 py-2 bg-green-300 hover:bg-green-400 rounded-md text-white">Login</a>
    </section>
</nav>