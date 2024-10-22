<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bingo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <div class="fixed flex flex-col left-0 w-14 hover:w-64 md:w-64 bg-gradient-to-b from-teal-800 to-sky-600 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="flex items-center justify-start md:justify-center w-14 md:w-64 h-14 border-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="220" height="75" viewBox="0 0 400 100" class="hidden md:block">
                    <path id="Selection" fill="none" stroke="white" stroke-width="2" d="
                        M 277.00,24.00 C 261.10,17.02 239.28,14.21 225.02,26.33 209.33,39.65 210.03,72.69 232.00,83.09 245.05,89.26 266.52,87.78 276.77,76.82 277.89,75.62 278.67,74.53 279.26,73.00 280.32,70.26 280.80,58.92 278.40,57.02 276.81,55.77 272.99,56.00 271.00,56.00 264.03,55.99 251.20,55.24 245.00,57.00 245.00,57.00 256.00,60.00 256.00,60.00 256.00,60.00 256.00,85.00 256.00,85.00 253.55,83.96 251.27,83.15 249.17,81.43 240.44,74.30 238.14,57.66 237.74,47.00 237.51,40.60 238.45,26.91 243.39,22.44 249.78,16.67 256.99,27.12 259.69,32.00 259.69,32.00 269.00,50.00 269.00,50.00 269.00,50.00 271.00,50.00 271.00,50.00 271.00,50.00 277.00,24.00 277.00,24.00 Z
                        M 314.00,18.29 C 306.41,19.55 299.81,21.73 294.09,27.18 282.04,38.67 280.80,63.21 291.68,75.83 298.92,84.24 312.19,88.04 323.00,86.71 332.29,85.57 339.43,83.30 345.79,75.99 356.19,64.03 355.57,38.85 344.53,27.44 336.82,19.47 324.65,17.28 314.00,18.29 Z
                        M 77.00,50.00 C 84.20,49.98 92.04,48.98 97.81,44.21 105.10,38.20 103.78,27.88 95.98,23.00 91.41,20.14 87.03,20.34 82.00,19.72 82.00,19.72 55.00,19.00 55.00,19.00 49.08,19.00 42.71,18.38 37.00,20.00 37.00,20.00 42.00,22.00 42.00,22.00 42.00,22.00 42.00,83.00 42.00,83.00 42.00,83.00 37.00,85.00 37.00,85.00 37.00,85.00 71.00,85.00 71.00,85.00 78.89,85.00 86.47,85.71 94.00,82.91 107.06,78.05 107.98,63.03 99.90,56.64 92.30,50.62 84.51,52.13 77.00,50.00 Z
                        M 141.00,19.00 C 141.00,19.00 108.00,20.00 108.00,20.00 108.00,20.00 113.00,22.00 113.00,22.00 113.00,22.00 113.00,83.00 113.00,83.00 113.00,83.00 108.00,85.00 108.00,85.00 114.56,85.00 136.24,85.89 141.00,84.00 141.00,84.00 136.00,83.00 136.00,83.00 136.00,83.00 136.00,22.00 136.00,22.00 136.00,22.00 141.00,19.00 141.00,19.00 Z
                        M 202.00,60.00 C 195.92,55.22 184.06,37.24 178.63,30.00 173.89,23.68 172.45,19.16 164.00,19.00 164.00,19.00 142.00,19.00 142.00,19.00 145.51,26.49 147.94,24.62 148.00,34.00 148.00,34.00 148.00,83.00 148.00,83.00 148.00,83.00 142.00,85.00 142.00,85.00 142.00,85.00 175.00,85.00 175.00,85.00 175.00,85.00 161.76,71.00 161.76,71.00 153.15,59.42 151.00,47.04 151.00,33.00 178.37,69.00 190.46,84.01 190.46,84.01 190.46,84.01 204.00,85.00 204.00,85.00 204.00,85.00 204.00,22.00 204.00,22.00 204.00,22.00 212.00,20.00 212.00,20.00 212.00,20.00 189.00,19.00 189.00,19.00 189.00,19.00 181.00,21.00 181.00,21.00 190.16,27.19 195.92,34.25 199.09,45.00 199.09,45.00 202.00,60.00 202.00,60.00 Z
                        M 316.09,20.74 C 324.73,18.80 326.79,24.75 328.24,32.00 329.40,39.49 329.59,63.50 328.24,71.00 327.66,75.77 326.78,81.40 321.96,83.81 313.99,87.79 310.14,76.78 309.15,71.00 307.51,58.71 307.93,49.22 309.15,37.00 309.56,30.56 310.11,24.33 316.09,20.74 Z
                        M 65.00,22.00 C 68.66,22.00 74.83,21.38 77.78,23.60 83.81,28.11 83.21,41.81 77.78,46.57 74.75,49.23 68.92,49.68 65.00,50.00 65.00,50.00 65.00,22.00 65.00,22.00 Z M 65.00,51.00 C 70.16,52.25 75.88,51.19 79.58,55.23 84.75,60.85 84.10,76.64 77.79,81.26 74.64,83.57 68.82,83.00 65.00,83.00 65.00,83.00 65.00,51.00 65.00,51.00 Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="75" viewBox="30 0 80 100" class="md:hidden ml-1">
                    <path id="Selection" fill="none" stroke="white" stroke-width="2" d="M 77.00,50.00 C 84.20,49.98 92.04,48.98 97.81,44.21 105.10,38.20 103.78,27.88 95.98,23.00 91.41,20.14 87.03,20.34 82.00,19.72 82.00,19.72 55.00,19.00 55.00,19.00 49.08,19.00 42.71,18.38 37.00,20.00 37.00,20.00 42.00,22.00 42.00,22.00 42.00,22.00 42.00,83.00 42.00,83.00 42.00,83.00 37.00,85.00 37.00,85.00 37.00,85.00 71.00,85.00 71.00,85.00 78.89,85.00 86.47,85.71 94.00,82.91 107.06,78.05 107.98,63.03 99.90,56.64 92.30,50.62 84.51,52.13 77.00,50.00 Z
                        M 65.00,22.00 C 68.66,22.00 74.83,21.38 77.78,23.60 83.81,28.11 83.21,41.81 77.78,46.57 74.75,49.23 68.92,49.68 65.00,50.00 65.00,50.00 65.00,22.00 65.00,22.00 Z M 65.00,51.00 C 70.16,52.25 75.88,51.19 79.58,55.23 84.75,60.85 84.10,76.64 77.79,81.26 74.64,83.57 68.82,83.00 65.00,83.00 65.00,83.00 65.00,51.00 65.00,51.00 Z" />
                </svg>
            </div>
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-teal-800 bg-indigo-50 rounded-full">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                        </a>
                    </li>
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center mt-5 h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-800 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                        </a>
                    </li>
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
            </div>
        </div>
        <div class="h-full ml-14 mb-10 md:ml-64">
            <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
