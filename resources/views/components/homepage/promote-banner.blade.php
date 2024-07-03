<div id="default-carousel" class="group relative w-full mx-auto" data-carousel="slide">
   <!-- Carousel wrapper -->
   {{-- image must have 16/4 ratio --}}
   <div class="relative w-full aspect-w-16 aspect-h-6 md:aspect-h-4 overflow-hidden rounded-xl">
      <!-- Item 1 -->
      <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
         <img src="/assets/image1.png" class="absolute block w-full h-full object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
         <img src="/assets/image1.png" class="absolute block w-full h-full object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
         <img src="/assets/image1.png" class="absolute block w-full h-full object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
         <img src="/assets/image1.png" class="absolute block w-full h-full object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
         <img src="/assets/image1.png" class="absolute block w-full h-full object-center -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
   </div>
   <!-- Slider indicators -->
   <div class="absolute z-30 flex -translate-x-1/2 bottom-3 lg-bottom-5 left-1/2 space-x-1.5 rtl:space-x-reverse">
      <button type="button" class="w-4 md:w-6 h-1 md:h-1.5 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-4 md:w-6 h-1 md:h-1.5 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-4 md:w-6 h-1 md:h-1.5 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-4 md:w-6 h-1 md:h-1.5 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-4 md:w-6 h-1 md:h-1.5 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
   </div>
   <!-- Slider controls -->
   <button type="button" class="group-hover:opacity-100 transition absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none opacity-0" data-carousel-prev>
      <span class="inline-flex items-center justify-center border border-black w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
         <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
         </svg>
         <span class="sr-only">Previous</span>
      </span>
   </button>
   <button type="button" class="group-hover:opacity-100 transition absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none opacity-0" data-carousel-next>
      <span class="inline-flex items-center justify-center border border-black w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
         <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
         </svg>
         <span class="sr-only">Next</span>
      </span>
   </button>
</div>