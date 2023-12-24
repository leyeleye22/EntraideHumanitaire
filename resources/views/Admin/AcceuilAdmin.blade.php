{{-- DASHBORD CONTENT --}}
@extends('Admin.base')
<h1>@section('title', 'Home')</h1>

@section('content')
<div class="mt-12">

    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-green-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pray" width="16" height="16"
                    viewBox="0 0 16 16">
                    <path
                        d="M3.607 9.862l-1.493 1.326a.5.5 0 0 1-.832-.374v-.953H.191a.5.5 0 0 1-.434-.773l2.686-3.634a.5.5 0 0 1 .832.374v2.346l-.5.667-.203.203-.203-.203-.5-.667V5.486a.5.5 0 0 1 .832-.374l3.07 2.728a.5.5 0 0 1 0 .748L4.03 9.862a.5.5 0 0 1-.423.131zm10.786-1.324l-1.5-1.329a.5.5 0 0 1-.158-.697l.967-1.621a.5.5 0 0 1 .832 0l.967 1.621a.5.5 0 0 1-.158.697l-1.5 1.329a.5.5 0 0 1-.674-.074zM7.5.5a.5.5 0 0 1 .5.5V2h2V1a.5.5 0 0 1 1 0v1h1V1a.5.5 0 0 1 1 0v1h1V1a.5.5 0 0 1 1 0v1h1V1a.5.5 0 0 1 1 0v1h.5a.5.5 0 0 1 0 1h-.5v2.878l.816 1.089a.5.5 0 0 1-.832.574L13 5.684v2.36l-.5.667-.203.203-.203-.203-.5-.667V6.152a.5.5 0 0 1 .832-.374l3.07 2.728a.5.5 0 0 1 0 .748l-3.07 2.728a.5.5 0 0 1-.832-.374V9.862l-.5.667-.203.203-.203-.203-.5-.667V8.152a.5.5 0 0 1 .832-.374l3.07 2.728a.5.5 0 0 1 0 .748l-3.07 2.728a.5.5 0 0 1-.832-.374V13.5H9v-1a.5.5 0 0 1-1 0v1H7v-1a.5.5 0 0 1-1 0v1H5v-1a.5.5 0 0 1-1 0v1H3v1a.5.5 0 0 1-1 0v-1H1V5.684l-.684.912a.5.5 0 0 1-.832-.574L1.5 4.878V2.878l.816 1.089a.5.5 0 0 1-.832.574L.5 2.878v-2a.5.5 0 0 1 .5-.5h6zm5.125 6.816a.5.5 0 0 1 .658-.753l1.5 1.329a.5.5 0 0 1 .074.674l-3.07 2.729a.5.5 0 0 1-.832-.374V9.862l.5-.667.203-.203.203.203.5.667V8.152a.5.5 0 0 1 .832-.374l3.07 2.729a.5.5 0 0 1 0 .748l-3.07 2.729a.5.5 0 0 1-.832-.374v-2.87l-.816-1.089a.5.5 0 0 1 .832-.574L15.5 11.122V9.838l-.684-.912a.5.5 0 0 1 .158-.697z" />
                </svg>

            </div>
            <div class="p-4 text-right">
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-green-green-600">
                    Don Financier du jour</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-green-green-900">
                    Fcfa 0</h4>
            </div>
            <div class="border-t border-green-green-50 p-4">
                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-green-green-600">
                    <strong class="text-green-500">0%</strong>&nbsp;than last week
                </p>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-green-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart" width="24"
                    height="24" viewBox="0 0 16 16">
                    <path
                        d="M8 4.738a3.083 3.083 0 0 1 4.214-.357c.354.29.645.674.834 1.107a3.176 3.176 0 0 1-.036 2.785l-3.696 4.304a.5.5 0 0 1-.644.08l-3.63-2.688a3 3 0 0 1-.028-4.457A3 3 0 0 1 8 4.738zm0-2.586a4.432 4.432 0 0 0-6 5.755L8 14.895l6-5.57A4.432 4.432 0 0 0 8 2.152z" />
                </svg>

            </div>
            <div class="p-4 text-right">
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-green-green-600">
                    Don Materiel du Jour</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-green-green-900">
                    0</h4>
            </div>
            <div class="border-t border-green-green-50 p-4">
                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-green-green-600">
                    <strong class="text-green-500">0%</strong>&nbsp;than last month
                </p>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-green-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="w-6 h-6 text-white">
                    <path
                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                    </path>
                </svg>
            </div>
            <div class="p-4 text-right">
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-green-green-600">
                    Beneficiare</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-green-green-900">
                    0</h4>
            </div>
            <div class="border-t border-green-green-50 p-4">
                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-green-green-600">
                    <strong class="text-red-500">0%</strong>&nbsp;than yesterday
                </p>
            </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-green-700 shadow-md">
            <div
                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="w-6 h-6 text-white">
                    <path
                        d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                    </path>
                </svg>
            </div>
            <div class="p-4 text-right">
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-green-green-600">
                    Total</p>
                <h4
                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-green-green-900">
                    Fcfa 0</h4>
            </div>
            <div class="border-t border-green-green-50 p-4">
                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-green-green-600">
                    <strong class="text-green-500">0%</strong>&nbsp;than yesterday
                </p>
            </div>
        </div>
    </div>

    <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div
            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-green-700 shadow-md overflow-hidden xl:col-span-2">
            <div
                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-green-700 shadow-none m-0 flex items-center justify-between p-6">
                <div>
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-green-green-900 mb-1">
                        Projet</h6>
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-green-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                            </path>
                        </svg>
                        <strong>Ce mois ci</strong>
                    </p>
                </div>
                <button aria-expanded="false" aria-haspopup="menu" id=":r5:"
                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-green-green-500 hover:bg-green-green-500/10 active:bg-green-green-500/30"
                    type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                            </path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                <table class="w-full min-w-[640px] table-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-green-green-50 py-3 px-6 text-left">
                                <p
                                    class="block antialiased font-sans text-[11px] font-medium uppercase text-green-green-400">
                                    Nom_projet</p>
                            </th>
                            <th class="border-b border-green-green-50 py-3 px-6 text-left">
                                <p
                                    class="block antialiased font-sans text-[11px] font-medium uppercase text-green-green-400">
                                    budget</p>
                            </th>
                            <th class="border-b border-green-green-50 py-3 px-6 text-left">
                                <p
                                    class="block antialiased font-sans text-[11px] font-medium uppercase text-green-green-400">
                                    Taux de reussite</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-5 border-b border-green-green-50">
                                <div class="flex items-center gap-4">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-green-green-900 font-bold">
                                        Material XD Version</p>
                                </div>
                            </td>

                            <td class="py-3 px-5 border-b border-green-green-50">
                                <p class="block antialiased font-sans text-xs font-medium text-green-green-600">
                                    Fcfa 0</p>
                            </td>
                            <td class="py-3 px-5 border-b border-green-green-50">
                                <div class="w-10/12">
                                    <p
                                        class="antialiased font-sans mb-1 block text-xs font-medium text-green-green-600">
                                        0%</p>
                                    <div
                                        class="flex flex-start bg-green-green-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                        <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                            style="width: 60%;"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@stop