<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head-layout', ['title' => 'Matches'])
</head>
<body class="font-sans dark:text-white/50 sm:w-full sm:h-full w-full">
@include('layouts.header-layout', ['title' => 'Matches'])
<div class="h-screen w-full flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="p-6  lg:w-[78rem] md:w-[48rem] flex items-center justify-center align-middle rounded shadow-xl lg:px-8 lg:ml-64 mt-48">
        <table class="mt-4 text-left table-auto md:w-[48rem] lg:w-[78rem]">
            <thead>
                <tr>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Deck1
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Deck2
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Deck3
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Deck4
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Winner
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($matches as $match)
                <tr>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <a
                                    href="{{ $match->deck1?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold"> Escolhido:</span> {{ $match->deck1->name }}
                                </a>
                                <a
                                    href="{{ $match->bannedDeck1?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold">Banido:</span> {{ $match->bannedDeck1?->name }}
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <a
                                    href="{{ $match->deck2?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                   <span class="font-bold"> Escolhido:</span> {{ $match->deck2->name }}
                                </a>
                                <a
                                    href="{{ $match->bannedDeck2?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold">Banido:</span> {{ $match->bannedDeck2?->name }}
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <a
                                    href="{{ $match->deck3?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold"> Escolhido:</span> {{ $match->deck3->name }}
                                </a>
                                <a
                                    href="{{ $match->bannedDeck3?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold">Banido:</span> {{ $match->bannedDeck3?->name }}
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <a
                                    href="{{ $match->deck4?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold"> Escolhido:</span> {{ $match->deck4->name }}
                                </a>
                                <a
                                    href="{{ $match->bannedDeck4?->liga_magic_link }}"
                                    target="_blank"
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer"
                                >
                                    <span class="font-bold">Banido:</span> {{ $match->bannedDeck4?->name }}
                                </a>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer">
                                    {{ $match->winner->name }}
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="h-screen w-full flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border flex-grow">

        <a href="{{ route('scoreTable') }}" class="font-sans text-sm antialiased leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer w-full mt-4 lg:ml-64 ml-4 text-left table-auto min-w-max sm:w-full md:w-full lg:w-full xl:w-full">
            < Back
        </a>
        @include('layouts.footer-layout')
    </div>
</div>
</body>
</html>
