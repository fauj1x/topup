@extends('layouts.main')
@section('container')
   <x-account.account-images :title="['test', 'ajah']" :images="['gambar1.png', 'gambar2.png', 'gambar1.png']"></x-account.account-images>
   <div class="px-7 md:px-10 lg:px-40 mt-4 container space-y-6 pb-20">
      <div class="text-2xl relative" x-data="{linkOpenState : false}">
         <div class="flex justify-between">
            <button type="button" x-on:click="linkOpenState = !linkOpenState"><iconify-icon icon="material-symbols:share"></iconify-icon></button>
            <span x-data="{isLiked : false}">
               <button type="button" x-on:click="isLiked = !isLiked">
                  <iconify-icon :icon="isLiked ? 'mdi:heart' : 'mdi:heart-outline'" :class="{ 'text-red-500': isLiked }"></iconify-icon>
               </button>
            </span>
         </div>
         <div class="border text-xs text-light bg-gray-100 px-2 py-1 flex items-center gap-2.5 absolute top-full left-0 w-full" x-show="linkOpenState" x-transition x-on:click="navigator.clipboard.writeText($refs.link.innerText)" title="click to copy">
            <iconify-icon icon="material-symbols:link" class="text-2xl"></iconify-icon> <span x-ref="link">https://this.is-link-from-this-page.com/ Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, molestiae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, optio?</span>
         </div>
      </div>

      {{-- from here --}}
      <div>
         <h6 class="font-semibold text-xl">Akun pribadi Mobile Legends</h6>
         <h5 class="font-semibold text-2xl text-dark-purple">Rp 999.999</h5>
         <span class="text-light text-xs background bg-light-purple/25 rounded px-2 py-0.5">Anti Hackback</span>
      </div>

      <div x-data="{showMore : false}">
         <h6 class="font-semibold text-lg">Deskripsi</h6>
         <p class="text-sm" :class="{'line-clamp-5': !showMore}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolor consequuntur nesciunt quasi impedit quia voluptatem porro, ullam illum aliquam exercitationem ex, sit quis animi quod cumque consectetur pariatur maiores voluptatibus repellat. Cum dolore accusantium ea, eius animi tempora. Cum voluptates obcaecati quas. Unde neque, fuga illum aspernatur quasi cupiditate. Ipsum culpa officiis, nesciunt fugit beatae error reprehenderit optio dignissimos, modi rem accusamus. Alias quibusdam esse obcaecati sint, natus animi minima repudiandae debitis, excepturi, porro officiis. Dicta minima accusamus iure officiis deleniti reprehenderit accusantium totam adipisci. Tenetur, minus ducimus! Consectetur voluptate eligendi sunt eaque accusamus maxime recusandae voluptates sapiente repellendus!</p>
         <button type="button" class="text-xs underline text-lighter-purple" x-on:click="showMore = !showMore" x-text="!showMore? 'Tampilkan semua' : 'Lebih sedikit'"></button>
      </div>

      <div>
         <h6 class="font-semibold text-lg">Profil Penjual</h6>
         <div class="border rounded-lg flex items-center gap-3 p-3">
            <img src="/assets/game-icons/image-1.png" alt="" class="w-14 aspect-1 object-cover object-center rounded-full">
            <div class="text-[.7rem] text-light flex-grow relative">
               <h5 class="font-bold text-lg leading-snug">abdul sodeq</h5>
               <p>Ngawi</p>
               <p>
                  Rating penjual
                  <iconify-icon icon="material-symbols:star" class="text-dark-purple"></iconify-icon>
                  4,5 / 5
               </p>
               <a href="#" class="absolute top-0 left-0 right-0 bottom-0"></a>
            </div>
         </div>
         {{-- store link --}}
      </div>

      <div>
         <h3 class="font-semibold text-lg">Rekomendasi</h3>
         <x-recommendation></x-recommendation>
      </div>

      <div class="fixed bottom-0 left-0 right-0 h-14 bg-white border-t border-t-gray-300 "> 
         <div class="container gap-3 z-40 px-7 md:px-10 lg:px-40 flex items-center justify-end h-full flex-wrap">
            <a href="#" class="text-lighter-purple rounded-full border border-lighter-purple h-9 aspect-1 inline-flex items-center justify-center text-xl"><iconify-icon icon="material-symbols:chat"></iconify-icon></a>
            <a href="#" class="text-lighter-purple rounded-full border border-lighter-purple h-9 aspect-1 inline-flex items-center justify-center text-xl"><iconify-icon icon="solar:cart-3-outline"></iconify-icon></a>
            <input type="submit" class="bg-lighter-purple rounded-full min-w-fit px-2 h-9 max-w-72 flex-grow font-semibold text-white text-sm" form="product-form" value="Beli Sekarang">
         </div>
      </div>
   </div>
@endsection