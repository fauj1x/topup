@extends('layouts.main')
@section('container')

<div class="px-7 md:px-10 lg:px-40 mt-4 container space-y-6 pb-20">
   <x-homepage.promote-banner :title="['test', 'ajah']" :images="['image1.png', 'image2.png', 'image1.png']"></x-homepage.promote-banner>

   <div class="flex gap-3 h-14 items-end">
      <img src="/assets/game-icons/image-1.png" alt="" class="h-full aspect-1 rounded object-cover">
      <div>
         <h6 class="font-semibold leading-none">Mobile Legends</h6>
         <ul class="flex gap-2">
            <li class="inline-flex text-lighter-purple text-[.6rem] items-center">
               <iconify-icon icon="mdi:clock" class="text-xs"></iconify-icon> Proses Realtime
            </li>
            <li class="inline-flex text-lighter-purple text-[.6rem] items-center">
               <iconify-icon icon="fa:paper-plane"></iconify-icon> Dikirim Otomatis
            </li>
         </ul>
         <a href="" class="text-xs underline text-gray-500">Lihat cara order</a>
      </div>
   </div>

   <form method="POST" class="space-y-4" id="product-form" action="/product/request">
      @csrf
      <div class="border border-gray-300 rounded-xl p-4 space-y-2">
         <div class="flex items-center font-semibold gap-2">
            <span class="px-4 py-0.5 text-white bg-dark-purple rounded-full font-normal text-sm">1</span> Data Akun
         </div>
         <div>
            <span class="text-xs font-semibold">User Id</span><br>
            <input type="text" name="userId" class="py-3 border border-gray-300 focus:outline-none text-sm rounded-lg w-full">
         </div>
         <div>
            <span class="text-xs font-semibold">Zone Id</span><br>
            <input type="text" name="zoneId" class="py-3 border border-gray-300 focus:outline-none text-sm rounded-lg w-full">
         </div> 
   
         <div class="pt-2">
            <button type="button" class="bg-darker-gray text-white text-xs rounded px-1.5 py-1 inline-flex items-center gap-1"><iconify-icon icon="material-symbols:info" class="text-base"></iconify-icon> petunjuk</button>
            <p class="text-xs">Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh User ID : 12345678 , Zone ID : (1234) <b>“TIDAK MENGGUNAKAN TANDA DALAM KURUNG ( HANYA ANGKA )"</b></p>
         </div>
      </div>

      <div class="border border-gray-300 rounded-xl p-4 space-y-4">
         <div class="flex items-center font-semibold gap-2">
            <span class="px-4 py-0.5 text-white bg-dark-purple rounded-full font-normal text-sm">1</span> Data Akun
         </div>
         <div class="grid grid-cols-2 gap-3">
            <div class="rounded-lg shadow-md overflow-hidden border relative" x-data="{ isChecked: false }">
               <div class="p-2 body relative">
                  <img src="/assets/icons/diamond.png" alt="diamond.png" class="w-10 h-14 mx-auto object-center object-contain">
                  <h5>3 Diamonds Mobile Legends</h5>
                  <div :class="{ 'opacity-100': isChecked, 'opacity-0': !isChecked }" class="absolute z-10 top-0 left-0 bottom-0 right-0 bg-lighter-purple/60 grid place-items-center transition-opacity">
                     <iconify-icon icon="lets-icons:check-fill" class="text-5xl text-white"></iconify-icon>
                  </div>
               </div>
               <div class="bg-light-purple/40 text-dark-purple py-2 px-3 flex flex-wrap items-center">
                  <span class="text-sm">dari</span><span class="font-semibold ms-1.5 text-lg text-nowrap">Rp 1.300</span>
               </div>
               <input type="checkbox" name="items[]" value="1" class="absolute top-0 bottom-0 w-full h-full opacity-0 z-30" x-model="isChecked">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden border relative" x-data="{ isChecked: false }">
               <div class="p-2 body relative">
                  <img src="/assets/icons/diamond.png" alt="diamond.png" class="w-10 h-14 mx-auto object-center object-contain">
                  <h5>3 Diamonds Mobile Legends</h5>
                  <div :class="{ 'opacity-100': isChecked, 'opacity-0': !isChecked }" class="absolute z-10 top-0 left-0 bottom-0 right-0 bg-lighter-purple/60 grid place-items-center transition-opacity">
                     <iconify-icon icon="lets-icons:check-fill" class="text-5xl text-white"></iconify-icon>
                  </div>
               </div>
               <div class="bg-light-purple/40 text-dark-purple py-2 px-3 flex flex-wrap items-center">
                  <span class="text-sm">dari</span><span class="font-semibold ms-1.5 text-lg text-nowrap">Rp 1.300</span>
               </div>
               <input type="checkbox" name="items[]" value="2" class="absolute top-0 bottom-0 w-full h-full opacity-0 z-30" x-model="isChecked">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden border relative" x-data="{ isChecked: false }">
               <div class="p-2 body relative">
                  <img src="/assets/icons/diamond.png" alt="diamond.png" class="w-10 h-14 mx-auto object-center object-contain">
                  <h5>3 Diamonds Mobile Legends</h5>
                  <div :class="{ 'opacity-100': isChecked, 'opacity-0': !isChecked }" class="absolute z-10 top-0 left-0 bottom-0 right-0 bg-lighter-purple/60 grid place-items-center transition-opacity">
                     <iconify-icon icon="lets-icons:check-fill" class="text-5xl text-white"></iconify-icon>
                  </div>
               </div>
               <div class="bg-light-purple/40 text-dark-purple py-2 px-3 flex flex-wrap items-center">
                  <span class="text-sm">dari</span><span class="font-semibold ms-1.5 text-lg text-nowrap">Rp 1.300</span>
               </div>
               <input type="checkbox" name="items[]" value="3" class="absolute top-0 bottom-0 w-full h-full opacity-0 z-30" x-model="isChecked">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden border relative" x-data="{ isChecked: false }">
               <div class="p-2 body relative">
                  <img src="/assets/icons/diamond.png" alt="diamond.png" class="w-10 h-14 mx-auto object-center object-contain">
                  <h5>3 Diamonds Mobile Legends</h5>
                  <div :class="{ 'opacity-100': isChecked, 'opacity-0': !isChecked }" class="absolute z-10 top-0 left-0 bottom-0 right-0 bg-lighter-purple/60 grid place-items-center transition-opacity">
                     <iconify-icon icon="lets-icons:check-fill" class="text-5xl text-white"></iconify-icon>
                  </div>
               </div>
               <div class="bg-light-purple/40 text-dark-purple py-2 px-3 flex flex-wrap items-center">
                  <span class="text-sm">dari</span><span class="font-semibold ms-1.5 text-lg text-nowrap">Rp 1.300</span>
               </div>
               <input type="checkbox" name="items[]" value="4" class="absolute top-0 bottom-0 w-full h-full opacity-0 z-30" x-model="isChecked">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden border relative" x-data="{ isChecked: false }">
               <div class="p-2 body relative">
                  <img src="/assets/icons/diamond.png" alt="diamond.png" class="w-10 h-14 mx-auto object-center object-contain">
                  <h5>3 Diamonds Mobile Legends</h5>
                  <div :class="{ 'opacity-100': isChecked, 'opacity-0': !isChecked }" class="absolute z-10 top-0 left-0 bottom-0 right-0 bg-lighter-purple/60 grid place-items-center transition-opacity">
                     <iconify-icon icon="lets-icons:check-fill" class="text-5xl text-white"></iconify-icon>
                  </div>
               </div>
               <div class="bg-light-purple/40 text-dark-purple py-2 px-3 flex flex-wrap items-center">
                  <span class="text-sm">dari</span><span class="font-semibold ms-1.5 text-lg text-nowrap">Rp 1.300</span>
               </div>
               <input type="checkbox" name="items[]" value="5" class="absolute top-0 bottom-0 w-full h-full opacity-0 z-30" x-model="isChecked">
            </div>
         </div>
      </div>
   </form>

   <div class="fixed bottom-0 left-0 right-0 h-14 bg-white border-t border-t-gray-300 "> 
      <div class="container gap-3 z-40 px-7 md:px-10 lg:px-40 flex items-center justify-between h-full">
         <span class="text-sm font-light min-w-fit">Total <span class="text-dark-purple font-semibold text-lg">Rp 1.300</span></span>
         <input type="submit" class="bg-lighter-purple rounded min-w-fit px-2 py-2 max-w-72 w-full font-semibold text-white text-sm" form="product-form" value="Beli Sekarang">
      </div>
   </div>
</div>

@endsection