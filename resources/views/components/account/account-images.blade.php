<div id="default-carousel" class="group relative w-full mx-auto carousel-container" data-carousel="slide">
   <!-- Carousel wrapper -->
   {{-- image must have 16/4 ratio --}}
   <div class="relative w-full aspect-w-5 aspect-h-3 md:aspect-w-16 md:aspect-h-5 overflow-hidden">
      @foreach ($images as $image)
         <div class="hidden duration-[1300ms] ease-in-out" data-carousel-item>
            <img src="/uploads/accounts/{{ $image }}" class="absolute block w-full h-full object-center object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
         </div>
      @endforeach
   </div>
   
   <!-- Slider indicators -->
   <div class="absolute z-30 flex -translate-x-1/2 bottom-3 lg-bottom-5 left-1/2 space-x-2 rtl:space-x-reverse">
      @for ($i = 1; $i <= count($images); $i++)
         <button type="button" class="w-1.5 md:w-2 h-1.5 md:h-2 rounded-full" aria-current="{{ $i == 1? 'true' : 'false' }}" aria-label="Slide {{ $i }}" data-carousel-slide-to="0"></button>
      @endfor
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