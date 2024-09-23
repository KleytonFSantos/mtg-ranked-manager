<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head-layout', ['title' => 'Player Decks'])
</head>
<body class="font-sans dark:text-white/50 sm:w-full sm:h-full w-full">
@include('layouts.header-layout', ['title' => 'Player Decks'])
<div class="h-screen w-full flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="p-6  lg:w-[78rem] md:w-[48rem] flex items-center justify-center align-middle rounded shadow-xl lg:px-8 lg:ml-64 mt-48">
        <table class="mt-4 text-left table-auto md:w-[48rem] lg:w-[78rem]">
            <thead>
                <tr>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Nome
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50 md:p-2 lg:p-4 xl:p-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Link
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($decks as $deck)
                <tr>
                    <td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="relative flex items-center gap-3 group">
                            <div class="flex flex-col">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer">
                                    {{ $deck->name }}
                                </p>
                                @isset($deck->urlImages)
                                    <div
                                        class="absolute z-10 hidden p-2 bg-white border rounded-lg shadow-lg group-hover:block"
                                        style="top: -25px; transform: translateY(-100%);">
                                        <img src="{{ $deck->urlImages }}" alt="Deck Image" class="w-48 h-auto rounded-md">
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </td><td class="p-4 border-b border-blue-gray-50 md:p-2 lg:p-4 xl:p-4">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    @isset($deck->liga_magic_link)
                                        <a href="{{ $deck->liga_magic_link }}" target="_blank" class="underline text-blue-500">
                                            {{ $deck->liga_magic_link }}
                                        </a>
                                    @endisset
                                    @empty($deck->liga_magic_link)
                                        There is no link
                                    @endempty
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('scoreTable') }}" class="font-sans text-sm antialiased leading-normal text-blue-gray-900 hover:text-blue-500 cursor-pointer w-full mt-4 lg:ml-64 ml-4 text-left table-auto min-w-max sm:w-full md:w-full lg:w-full xl:w-full">
        < Back
    </a>
    @include('layouts.footer-layout')
</div>
</body>
</html>
