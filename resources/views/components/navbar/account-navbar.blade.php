<div class="px-5 py-4 md:py-3 absolute z-40">
   {{-- mobile version --}}
   <ul class="flex items-center text-white">
      <li class="flex items-center flex-1" data-drawer-target="drawer-backdrop" data-drawer-show="drawer-backdrop" data-drawer-backdrop="true" aria-controls="drawer-backdrop">
         <iconify-icon width="1.5rem" icon="mdi:hamburger-menu"></iconify-icon>
      </li>
   </ul>
</div>

{{-- sidebar mobile version --}}
<div id="drawer-backdrop" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform duration-400 -translate-x-full bg-white w-48" tabindex="-1" aria-labelledby="drawer-backdrop-label">
   <div class="text-end">
      <button data-drawer-hide="drawer-backdrop" aria-controls="drawer-backdrop">
         <iconify-icon icon="material-symbols:close" width="1.5rem"></iconify-icon>
      </button>
   </div>
   <ul>
      <li>
         <a href="/" class="flex items-center gap-2 py-3">
            <iconify-icon width="1.5rem" icon="ion:home"></iconify-icon>
            Beranda
         </a>
      </li>
      <li>
         <a href="" class="flex items-center gap-2 py-3">
            <iconify-icon width="1.5rem" icon="icomoon-free:price-tags"></iconify-icon>
            Pricelist
         </a>
      </li>
   </ul>
</div>