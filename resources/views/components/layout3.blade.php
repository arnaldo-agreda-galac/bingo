<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bingo</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- component -->
<style>
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
      border-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-50 {
      background-color: rgba(249, 250, 251);
    }
    .dark .dark\:bg-gray-100 {
      background-color: rgba(243, 244, 246);
    }
    .dark .dark\:bg-gray-600 {
      background-color: rgba(75, 85, 99);
    }
    .dark .dark\:bg-gray-700 {
      background-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-800 {
      background-color: rgba(31, 41, 55);
    }
    .dark .dark\:bg-gray-900 {
      background-color: rgba(17, 24, 39);
    }
    .dark .dark\:bg-red-700 {
      background-color: rgba(185, 28, 28);
    }
    .dark .dark\:bg-green-700 {
      background-color: rgba(4, 120, 87);
    }
    .dark .dark\:hover\:bg-gray-200:hover {
      background-color: rgba(229, 231, 235);
    }
    .dark .dark\:hover\:bg-gray-600:hover {
      background-color: rgba(75, 85, 99);
    }
    .dark .dark\:hover\:bg-gray-700:hover {
      background-color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:bg-gray-900:hover {
      background-color: rgba(17, 24, 39);
    }
    .dark .dark\:border-gray-100 {
      border-color: rgba(243, 244, 246);
    }
    .dark .dark\:border-gray-400 {
      border-color: rgba(156, 163, 175);
    }
    .dark .dark\:border-gray-500 {
      border-color: rgba(107, 114, 128);
    }
    .dark .dark\:border-gray-600 {
      border-color: rgba(75, 85, 99);
    }
    .dark .dark\:border-gray-700 {
      border-color: rgba(55, 65, 81);
    }
    .dark .dark\:border-gray-900 {
      border-color: rgba(17, 24, 39);
    }
    .dark .dark\:hover\:border-gray-800:hover {
      border-color: rgba(31, 41, 55);
    }
    .dark .dark\:text-white {
      color: rgba(255, 255, 255);
    }
    .dark .dark\:text-gray-50 {
      color: rgba(249, 250, 251);
    }
    .dark .dark\:text-gray-100 {
      color: rgba(243, 244, 246);
    }
    .dark .dark\:text-gray-200 {
      color: rgba(229, 231, 235);
    }
    .dark .dark\:text-gray-400 {
      color: rgba(156, 163, 175);
    }
    .dark .dark\:text-gray-500 {
      color: rgba(107, 114, 128);
    }
    .dark .dark\:text-gray-700 {
      color: rgba(55, 65, 81);
    }
    .dark .dark\:text-gray-800 {
      color: rgba(31, 41, 55);
    }
    .dark .dark\:text-red-100 {
      color: rgba(254, 226, 226);
    }
    .dark .dark\:text-green-100 {
      color: rgba(209, 250, 229);
    }
    .dark .dark\:text-blue-400 {
      color: rgba(96, 165, 250);
    }
    .dark .group:hover .dark\:group-hover\:text-gray-500 {
      color: rgba(107, 114, 128);
    }
    .dark .group:focus .dark\:group-focus\:text-gray-700 {
      color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:text-gray-100:hover {
      color: rgba(243, 244, 246);
    }
    .dark .dark\:hover\:text-blue-500:hover {
      color: rgba(59, 130, 246);
    }

    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }
    .sidebar:hover {
        width: 16rem;
    }
    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }
    }
  </style>
  <div x-data="setup()" :class="{ 'dark': isDark }">
      <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <!-- Header -->
        <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
          <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-teal-800 dark:bg-gray-800 border-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="220" height="75" viewBox="0 0 400 100">
                <path id="Selection" fill="none" stroke="white" stroke-width="2" d="M 277.00,24.00 C 261.10,17.02 239.28,14.21 225.02,26.33 209.33,39.65 210.03,72.69 232.00,83.09 245.05,89.26 266.52,87.78 276.77,76.82 277.89,75.62 278.67,74.53 279.26,73.00 280.32,70.26 280.80,58.92 278.40,57.02 276.81,55.77 272.99,56.00 271.00,56.00 264.03,55.99 251.20,55.24 245.00,57.00 245.00,57.00 256.00,60.00 256.00,60.00 256.00,60.00 256.00,85.00 256.00,85.00 253.55,83.96 251.27,83.15 249.17,81.43 240.44,74.30 238.14,57.66 237.74,47.00
                          237.51,40.60 238.45,26.91 243.39,22.44 249.78,16.67 256.99,27.12 259.69,32.00 259.69,32.00 269.00,50.00 269.00,50.00 269.00,50.00 271.00,50.00 271.00,50.00 271.00,50.00 277.00,24.00 277.00,24.00 Z M 314.00,18.29 C 306.41,19.55 299.81,21.73 294.09,27.18 282.04,38.67 280.80,63.21 291.68,75.83 298.92,84.24 312.19,88.04 323.00,86.71 332.29,85.57 339.43,83.30 345.79,75.99 356.19,64.03 355.57,38.85 344.53,27.44 336.82,19.47 324.65,17.28 314.00,18.29 Z M 77.00,50.00 C 84.20,49.98 92.04,48.98 97.81,44.21
                          105.10,38.20 103.78,27.88 95.98,23.00 91.41,20.14 87.03,20.34 82.00,19.72 82.00,19.72 55.00,19.00 55.00,19.00 49.08,19.00 42.71,18.38 37.00,20.00 37.00,20.00 42.00,22.00 42.00,22.00 42.00,22.00 42.00,83.00 42.00,83.00 42.00,83.00 37.00,85.00 37.00,85.00 37.00,85.00 71.00,85.00 71.00,85.00 78.89,85.00 86.47,85.71 94.00,82.91 107.06,78.05 107.98,63.03 99.90,56.64
                          92.30,50.62 84.51,52.13 77.00,50.00 Z M 141.00,19.00 C 141.00,19.00 108.00,20.00 108.00,20.00 108.00,20.00 113.00,22.00 113.00,22.00 113.00,22.00 113.00,83.00 113.00,83.00 113.00,83.00 108.00,85.00 108.00,85.00 114.56,85.00 136.24,85.89 141.00,84.00 141.00,84.00 136.00,83.00 136.00,83.00 136.00,83.00 136.00,22.00 136.00,22.00
                          136.00,22.00 141.00,19.00 141.00,19.00 Z M 202.00,60.00 C 195.92,55.22 184.06,37.24 178.63,30.00 173.89,23.68 172.45,19.16 164.00,19.00 164.00,19.00 142.00,19.00 142.00,19.00 145.51,26.49 147.94,24.62 148.00,34.00 148.00,34.00 148.00,83.00 148.00,83.00 148.00,83.00 142.00,85.00 142.00,85.00 142.00,85.00 175.00,85.00 175.00,85.00
                          175.00,85.00 161.76,71.00 161.76,71.00 153.15,59.42 151.00,47.04 151.00,33.00 178.37,69.00 190.46,84.01 190.46,84.01 190.46,84.01 204.00,85.00 204.00,85.00 204.00,85.00 204.00,22.00 204.00,22.00 204.00,22.00 212.00,20.00 212.00,20.00 212.00,20.00 189.00,19.00 189.00,19.00 189.00,19.00 181.00,21.00 181.00,21.00
                          190.16,27.19 195.92,34.25 199.09,45.00 199.09,45.00 202.00,60.00 202.00,60.00 Z M 316.09,20.74 C 324.73,18.80 326.79,24.75 328.24,32.00 329.40,39.49 329.59,63.50 328.24,71.00 327.66,75.77 326.78,81.40 321.96,83.81 313.99,87.79 310.14,76.78 309.15,71.00 307.51,58.71 307.93,49.22 309.15,37.00 309.56,30.56 310.11,24.33 316.09,20.74 Z M 65.00,22.00 C 68.66,22.00 74.83,21.38 77.78,23.60 83.81,28.11 83.21,41.81 77.78,46.57 74.75,49.23 68.92,49.68 65.00,50.00 65.00,50.00 65.00,22.00 65.00,22.00 Z M 65.00,51.00 C 70.16,52.25 75.88,51.19 79.58,55.23 84.75,60.85 84.10,76.64 77.79,81.26 74.64,83.57 68.82,83.00 65.00,83.00 65.00,83.00 65.00,51.00 65.00,51.00 Z" />
              </svg>
          </div>
          <div class="flex justify-between items-center h-14 bg-teal-800 dark:bg-gray-800 header-right">
            <div class="rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm">

            </div>
            <ul class="flex items-center">
              <li>
                <button aria-hidden="true" @click="toggleTheme" class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                  <svg x-show="isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                    />
                  </svg>
                  <svg
                    x-show="!isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                  </svg>
                </button>
              </li>
              <li>
                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
              </li>
              <li>
                <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                  <span class="inline-flex mr-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                  </span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./Header -->

        <!-- Sidebar -->
        <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gradient-to-b from-teal-800 to-sky-600 h-full text-white transition-all duration-300 border-none z-10 sidebar">
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
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
          </div>
        </div>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
          <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
            {{ $slot }}
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
      const setup = () => {
        const getTheme = () => {
          if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
          }
          return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
          window.localStorage.setItem('dark', value)
        }

        return {
          loading: true,
          isDark: getTheme(),
          toggleTheme() {
            this.isDark = !this.isDark
            setTheme(this.isDark)
          },
        }
      }
    </script>
</body>
</html>
