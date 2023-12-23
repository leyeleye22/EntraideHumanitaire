<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div
    class="w-full h-14 pt-2 text-center  bg-gray-700  shadow overflow-hidden sm:rounded-md font-bold text-3xl text-white ">
    Job Requisition Form

</div>
<h1 style="font-size: 100px; text-align:center">Ajouter Un Projet</h1>
<section class="text-gray-600 body-font  m-0 p-0 relative"></section>


<div class="container    mx-auto">
    <div class="flex flex-col text-center w-full mb-1">

    </div>

    <div class="mt-10 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
            @crsf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-2 py-8 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Nom projet</label>
                            <input type="text" name="first-name" placeholder="aide humanitaire" id="first-name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Requisition
                                date</label>
                            <input type="date" name="last-name" placeholder="09/02/2021" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 text-gray-300  focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Required
                                date</label>
                            <input type="date" name="last-name" placeholder="09/02/2021" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>






                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">
                                Location</label>
                            <select id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Head office</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">
                                project</label>
                            <select id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>construction Road</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">
                                Gender</label>
                            <select id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Male</option>
                                <option>female</option>
                                <option>other</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Age</label>
                            <input type="text" name="last-name" placeholder="above 18" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>




                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Section</label>
                            <input type="text" name="last-name" placeholder="gate managment" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Academic Qualification</label>
                            <input type="text" name="last-name" placeholder="BBA" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Required experience</label>
                            <input type="text" name="last-name" placeholder="2 years or above" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                description</label>
                            <input type="text" name="email-address"
                                placeholder="1- 334343434 It should be an editor to fill the job description of around 5 to 10 Lines ."
                                id="email-address" autocomplete="email"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                No. of meetings/interviews</label>
                            <input type="text" name="last-name" placeholder="3" id="last-name"
                                autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                    </div>


                </div>
                <div class="px-4 py-3 bg-white text-right sm:px-6">
                    <button type="submit"
                        class="mr-4 inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring ring-gray-500 ring-offset-4  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2  focus:ring-indigo-500">
                        New
                    </button>
                    <button type="submit"
                        class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                        Save
                    </button>

                </div>
            </div>
    </div>
    </form>
</div>
</section>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class=""></div>
    </div>
</div>
