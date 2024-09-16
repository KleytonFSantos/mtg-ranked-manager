<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Ranked MTG Score</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans dark:text-white/50 sm:w-full sm:h-full w-max">
    <div class="h-screen w-full flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
            <div class=" flex items-center justify-between mb-8">
                <div>
                    <h5
                        class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Ranked Score
                    </h5>
                </div>
                <div class="flex gap-2 shrink-0 sm:flex-row">
                    <button
                        class="select-none rounded-lg border border-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Register
                    </button>
                    <a href="{{ route('filament.admin.auth.login') }}"
                        class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                             stroke-width="2" class="w-4 h-4">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        Login
                    </a>
                </div>
            </div>
        </div>
        <div class="p-6 lg:w-[96rem] flex items-center justify-center align-middle rounded shadow-xl lg:px-8 lg:ml-20 mt-48">
            <table class="w-full mt-4 text-left table-auto min-w-max sm:w-full md:w-full lg:w-full xl:w-full">
                <thead>
                <tr>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Player
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Wins
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Losses
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Points
                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                    <a href="{{ route('playerDecks', ['playerId' => $player->id]) }}" class="block font-sans text-sm antialiased font-normal leading-normal text-blue-500 hover:underline">
                                        {{ $player->name }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                            <div class="w-max">
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                    <span class="">{{ $player->wins }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                            <div class="w-max">
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-red-500/20">
                                    <span class="">{{ $player->losses }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                            <div class="w-max">
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                    <span class="">{{ $player->points }}</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
