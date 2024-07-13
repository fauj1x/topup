<div class="border shadow rounded-md p-1.5 pb-2 text-xs relative w-full bg-white">
   <div class="aspect-w-16 aspect-h-13 rounded-sm overflow-hidden">
      <img src="/uploads/{{ $image }}" alt="" class="w-full object-cover mb-1.5 overflow-hidden rounded-md">
   </div>
   <p class="line-clamp-2 mt-0.5 md:text-sm">{{ $title }}</p>
   <h6 class="font-semibold text-dark-purple text-sm md:text-xl mt-0.5">{{ $price }}</h6>
   <span class="text-light text-[.6rem] background bg-light-purple/25 rounded px-2 py-0.5">Anti Hackback</span>
   <p class="text-light text-[.6rem] text-gray-500">1 hari 21 jam</p>
   <a href="{{ $link }}" class="absolute left-0 right-0 top-0 bottom-0"></a>
</div>