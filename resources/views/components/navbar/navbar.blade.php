<div class="shadow-md px-5 py-4 md:py-3">
   {{-- mobile version --}}
   <ul class="flex items-center md:hidden">
      <li class="flex items-center flex-1" data-drawer-target="drawer-backdrop" data-drawer-show="drawer-backdrop" data-drawer-backdrop="true" aria-controls="drawer-backdrop">
         <iconify-icon width="1.5rem" icon="mdi:hamburger-menu"></iconify-icon>
      </li>
      <li class="flex items-center"><img src="/assets/icons/logo.svg" alt="TopUpIn.img"></li>
      <li class="flex items-center gap-3 flex-1 justify-end">
         <x-navbar.search-profile-regist></x-navbar.search-profile-regist>
      </li>
   </ul>

   {{-- desktop version --}}
   <ul class="hidden items-center md:flex px-10 gap-2">
      <li class="flex items-center mr-5">
         <img src="/assets/icons/logo.svg" alt="TopUpIn.img" class="h-7">
      </li>
      <li>  
         <a href="" class="flex items-center box-border gap-1 px-2 h-8 border-b-4 border-b-blue-400/50">
            <iconify-icon width="1.2rem" icon="ion:home"></iconify-icon>
            Beranda
         </a>
      </li>
      <li>
         <a href="" class="flex items-center box-border gap-1 px-2 h-10">
            <iconify-icon width="1.2rem" icon="icomoon-free:price-tags"></iconify-icon>
            Pricelist
         </a>
      </li>
      <li class="flex-1">
         <x-navbar.search-profile-regist></x-navbar.search-profile-regist>
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
         <a href="" class="flex items-center gap-2 py-3">
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