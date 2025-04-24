<div class="hs-dropdown">
    <button
        id="hs-dropdown-dark-mode" type="button" class="hs-dropdown-toggle hs-dark-mode group flex items-center text-gray-600 hover:text-blue-600 focus:outline-none focus:text-blue-600 font-medium"
        aria-haspopup="menu"
        aria-expanded="false"
        aria-label="Dropdown"
    >
        <x-moon></x-moon>
        <x-sun></x-sun>
    </button>
    <div id="selectThemeDropdown"
        class="hs-dropdown-menu hs-dropdown-open:opacity-100 mt-2 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 origin-bottom-left dark:bg-white bg-black shadow-md rounded-lg p-1 space-y-0.5"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="hs-dropdown-dark-mode"
    >
        <button
            type="button"
            class="w-full flex items-center gap-x-3.5 py-2 px-5 rounded-lg text-sm text-gray-200 dark:text-gray-800 hover:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100"
            data-hs-theme-click-value="default"
        >
            Light
        </button>
        <button
            type="button"
            class="w-full flex items-center gap-x-3.5 py-2 px-5 rounded-lg text-sm text-gray-200 dark:text-gray-800 hover:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100"
            data-hs-theme-click-value="dark"
        >
            Dark
        </button>
        <button
            type="button"
            class="w-full flex items-center gap-x-3.5 py-2 px-5 rounded-lg text-sm text-gray-200 dark:text-gray-800 hover:text-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-100"
            data-hs-theme-click-value="auto"
        >
            Auto
        </button>
    </div>
</div>
