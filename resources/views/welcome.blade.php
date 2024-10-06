<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head-layout', ['title' => 'Ranked MTG Score'])
</head>
<body class="font-sans dark:text-white/50 sm:w-full sm:h-full w-max">
    @include('layouts.header-layout', ['title' => 'Ranked Score'])
    <div class="p-6 lg:w-[96rem] flex items-center justify-center align-middle rounded shadow-xl lg:px-8 lg:ml-40 mt-48">
        <table class="w-full mt-4 text-left table-auto min-w-max sm:w-full md:w-full lg:w-full xl:w-full">
            <thead>
                <tr>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-zinc-900 opacity-70">
                            Rank
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-zinc-900 opacity-70">
                            Player
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-zinc-900 opacity-70">
                            Wins
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-zinc-900 opacity-70">
                            Losses
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-zinc-900 opacity-70">
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
                            <div class="flex flex-col text-gray-700 font-bold">
                                {{ $loop->iteration }}
                            </div>
                        </div>
                    </td>
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
    @include('layouts.footer-layout')
</body>
</html>
