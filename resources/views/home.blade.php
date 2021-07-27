<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Frédéric Lesueurs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="lg:h-screen">
        <div class="lg:flex lg:h-full w-full">
            <div class="lg:flex h-full w-full 2xl:h-5/6 2xl:w-5/6 m-auto">
                <div class="absolute inset-0 lg:py-10 xl:py-16 flex -ml-8 pr-4 sm:ml-0 sm:pr-0 w-full z-10">
                    <div class="bg-blue-400 w-11/12 mx-auto flex-none rounded-3xl transform rotate-1"></div>
                </div>
                <div class="absolute inset-0 lg:py-10 xl:py-16 flex -ml-8 pr-4 sm:ml-0 sm:pr-0 w-full z-0">
                    <div class="bg-gray-500 w-11/12 mx-auto flex-none rounded-3xl transform -rotate-1"></div>
                </div>
                <div class="relative w-full p-2 lg:p-6 h-auto lg:w-1/2 xl:w-2/5 z-20">
                    <div class="w-full h-full bg-black rounded-3xl z-0">
                        <div class="w-full h-full relative flex flex-col">
                            <div class="flex-none h-11 flex items-center px-4">
                                <div class="flex space-x-1.5">
                                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="text-white text-lg text-center w-full">Frédéric Lesueurs</div>
                            </div>
                            <div class="relative border-t border-white border-opacity-50 min-h-0 flex-auto flex flex-col">
                                <div class="hidden lg:block absolute inset-y-0 left-0 bg-white bg-opacity-10" style="width: 60px"></div>
                                <div class="w-full flex-auto flex min-h-0 overflow-hidden">
                                    <div class="w-full relative flex-auto">
                                        <pre class="flex min-h-full text-lg 3xl:text-2xl">
                                            <div class="hidden lg:block text-white text-opacity-50 flex-none pr-4 text-right select-none" aria-hidden="true" style="width: 60px">
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
                                            </div>
                                            <code class="flex-auto relative block text-white text-left px-3">
<span class="text-purple-400">new</span> <span class="text-yellow-300">FullStackDeveloper</span>(
    name: '<span class="text-blue-400">Frédéric Lesueurs</span>',
    experience: '{{ now()->year - 2018 }} years',
    developmentLanguage: [
        '<span class="text-blue-400">PHP</span> 🐘' => [
            'Symfony',
            'Laravel',
            'Wordpress',
            'Thelia',
        ],
        '<span class="text-yellow-400">JS</span>' => [
            'VueJS',
            'NodeJS',
        ],
    ],
    liveIn: 'Toulouse 🧱',
);
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-col items-center justify-center w-full px-6 py-8 lg:h-128 lg:w-1/2 xl:w-3/5 z-20">
                    <div class="hidden lg:flex w-full justify-center h-2/3"><img class="block w-auto p-10 h-auto rounded-full" src="{{ asset('images/IMG_0069.jpg')}}"/></div>
                    <div class="w-full justify-center text-center">
                        <div class="h-1/3">
                            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl">Je vous aide à <span class="text-indigo-600 dark:text-indigo-400">développer</span> votre entreprise</h2>

                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.</p>

                            <div class="flex flex-col mt-6 space-y-3 justify-center lg:space-y-0 lg:flex-row">
                                <a href="#" class="block px-3 py-2 text-sm font-semibold text-center text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Get Started</a>
                                <a href="#" class="block px-3 py-2 text-sm font-semibold text-center text-gray-700 transition-colors duration-200 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
