<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Description des produits</title>
</head>
<body>

<main>

<div class="relative z-10" role="dialog" aria-modal="true">
   
    <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>
  
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
      <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
      
        <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
          <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
            <a href="{{ route('afficherProduits') }}">
            <button type="button" class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
               
                <span class="sr-only">Close</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
            </a>
            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
              <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                <img src="https://i.pinimg.com/736x/0c/80/67/0c8067680de2b413596e30e9688cb846.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
              </div>
              <div class="sm:col-span-8 lg:col-span-7">
                <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{ $details->name }}</h2>
  
                <section aria-labelledby="information-heading" class="mt-2">
    
                  <p class="text-2xl text-gray-900">{{ $details->price }} €</p>
                </section>
                  <p class="text-2xl text-gray-900">{{ $details->description }} </p>
                <section aria-labelledby="options-heading" class="mt-10">
                  <h3 id="options-heading" class="sr-only">Product options</h3>
  
                  <form>
                    <!-- Colors -->
                    <fieldset aria-label="Choose a color">
                      <legend class="text-sm font-medium text-gray-900">Couleurs</legend>
  
                      <div class="mt-4 flex items-center space-x-3">
                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                          <input type="radio" name="color-choice" value="White" class="sr-only">
                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                        </label>
                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                          <input type="radio" name="color-choice" value="Gray" class="sr-only">
                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                        </label>
                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                          <input type="radio" name="color-choice" value="Black" class="sr-only">
                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                        </label>
                      </div>
                    </fieldset>
  
                    <!-- Sizes -->
                    <fieldset class="mt-10" aria-label="Choose a size">
                      <div class="flex items-center justify-between">
                        <div class="text-sm font-medium text-gray-900">Tailles</div>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Guide des tailles</a>
                      </div>
  
                      <div class="mt-4 grid grid-cols-4 gap-4">
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="XXS" class="sr-only">
                          <span>XXS</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="XS" class="sr-only">
                          <span>XS</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="S" class="sr-only">
                          <span>S</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="M" class="sr-only">
                          <span>M</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="L" class="sr-only">
                          <span>L</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="XL" class="sr-only">
                          <span>XL</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="XXL" class="sr-only">
                          <span>XXL</span>
                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1">
                          <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only">
                          <span>XXXL</span>
                          <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                              <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                            </svg>
                          </span>
                        </label>
                      </div>
                    </fieldset>
  
                    <button style="background-color: #26261D" type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent  px-8 py-3 text-base font-medium text-white  ">Ajouter au panier</button>
                  </form>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


</body>
</html>