{{-- @guest
   <a href=""><button class="bg-dark-purple text-white text-xs w-14 md:16 h-6 md:h-8 rounded-full">Daftar</button></a>
@else --}}
<div class="flex items-center gap-5 justify-end">
   <button class="flex items-center md:hidden">
      <iconify-icon icon="gravity-ui:magnifier" width="1.3rem"></iconify-icon>
   </button>

   <form action="" class="hidden md:flex items-center">
      <input type="text" name="search" class="border rounded-full h-8">
      <button class="inline-flex items-center p-2" type="submit">
         <iconify-icon icon="gravity-ui:magnifier" width="1.5rem"></iconify-icon>
      </button>
   </form>

   <div class="border rounded-full">
      <img src="/assets/profile/profile1.png" alt="" class="h-6 w-6 md:h-9 md:w-9 object-cover">
   </div>
</div>
{{-- @endguest --}}