@extends('layouts.main')
@section("container")
   <div class="px-7 md:px-10 lg:px-40 mt-4 container space-y-6">
      <x-homepage.promote-banner :title="['test', 'ajah']"></x-homepage.promote-banner>

      <div class="space-x-2 overflow-x-auto flex flex-nowrap">
         <a href="" class="border border-dark-purple rounded-full text-nowrap text-dark-purple px-6 py-1.5 inline-block text-xs md:text-sm lg:text-sm">TopUp</a>
         <a href="" class="border border-gray-500 rounded-full text-nowrap text-gray-500 px-6 py-1.5 inline-block text-xs md:text-sm lg:text-sm">Market Akun</a>
      </div>

      <div>
         <h3 class="font-bold text-lg">TopUp</h3>
         <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 xl:grid-cols-7 gap-3">
            <x-game-title title="Mobile Legends" image="image-1.png" link="#"></x-game-title>
            <x-game-title title="PUBG Mobile" image="image-3.png" link="#"></x-game-title>
            <x-game-title title="Free Fire" image="image-2.png" link="#"></x-game-title>
            <x-game-title title="Mobile Legends" image="image-1.png" link="#"></x-game-title>
            <x-game-title title="PUBG Mobile" image="image-3.png" link="#"></x-game-title>
            <x-game-title title="Free Fire" image="image-2.png" link="#"></x-game-title>
         </div>
         <div class="text-center mt-1">
            <a href="" class="text-xs underline text-dark-purple">Tampilkan Semua</a>
         </div>
      </div>

      <div>
         <h3 class="font-bold text-lg">Penawaran Akun Terbatas</h3>
         <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3">
            <x-trade-card title="Akun MLBB pribadi Aman dan Terpercaya banget" image="image-1.png" link="#" price="99.000"></x-trade-card>
            <x-trade-card title="Akun MLBB pribadi Aman dan Terpercaya banget" image="image-1.png" link="#" price="99.000"></x-trade-card>
            <x-trade-card title="Akun MLBB pribadi Aman dan Terpercaya banget" image="image-1.png" link="#" price="99.000"></x-trade-card>
            <x-trade-card title="Akun MLBB pribadi Aman dan Terpercaya banget" image="image-1.png" link="#" price="99.000"></x-trade-card>
         </div>
      </div>

      <div>
         <h3 class="font-bold text-lg">News And Update</h3>
         <div class="space-y-2">
            <x-news-update title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ea corrupti. Blanditiis, quae ipsum quas velit, totam magnam omnis facilis deserunt maxime quos asperiores! Reprehenderit est totam facere omnis quidem dolore! Aperiam deleniti quod dolores ab qui animi in assumenda dolore, tenetur aut. Mollitia non distinctio enim, temporibus reprehenderit dolorem."></x-news-update>
            <x-news-update title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ea corrupti. Blanditiis, quae ipsum quas velit, totam magnam omnis facilis deserunt maxime quos asperiores! Reprehenderit est totam facere omnis quidem dolore! Aperiam deleniti quod dolores ab qui animi in assumenda dolore, tenetur aut. Mollitia non distinctio enim, temporibus reprehenderit dolorem."></x-news-update>
            <x-news-update title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ea corrupti. Blanditiis, quae ipsum quas velit, totam magnam omnis facilis deserunt maxime quos asperiores! Reprehenderit est totam facere omnis quidem dolore! Aperiam deleniti quod dolores ab qui animi in assumenda dolore, tenetur aut. Mollitia non distinctio enim, temporibus reprehenderit dolorem."></x-news-update>
            <x-news-update title="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ea corrupti. Blanditiis, quae ipsum quas velit, totam magnam omnis facilis deserunt maxime quos asperiores! Reprehenderit est totam facere omnis quidem dolore! Aperiam deleniti quod dolores ab qui animi in assumenda dolore, tenetur aut. Mollitia non distinctio enim, temporibus reprehenderit dolorem."></x-news-update>
         </div>
      </div>

      <div>
         <h2 class="text-2xl md:text-3xl text-dark-purple font-bold">TOPUPIN</h2>
         <h6 class="font-semibold text-lg leading-snug">Website topup, rekber, beli akun game tercepat dan termurah</h6>
         <p class="text-xs md:text-sm text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         <div class="space-y-1">
            <div class="flex mt-1">
               <iconify-icon icon="cib:telegram-plane" width="2.5rem"></iconify-icon>
               <div class=" flex-grow pt-1 pl-2">
                  <h6 class="font-semibold">Pengiriman Instan</h6>
                  <p class="text-xs md:text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, porro voluptates. Quasi ipsa ea fugit, praesentium alias illo molestias voluptatem reiciendis iusto, repudiandae officiis maiores libero nisi vel qui aspernatur?</p>
               </div>
            </div>
            <div class="flex mt-1">
               <iconify-icon icon="iconoir:wallet-solid" width="2.5rem"></iconify-icon>
               <div class=" flex-grow pt-1 pl-2">
                  <h6 class="font-semibold">Metode Pembayaran Terbaik</h6>
                  <p class="text-xs md:text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, porro voluptates. Quasi ipsa ea fugit, praesentium alias illo molestias voluptatem reiciendis iusto, repudiandae officiis maiores libero nisi vel qui aspernatur?</p>
               </div>
            </div>
            <div class="flex mt-1">
               <iconify-icon icon="mingcute:time-fill" width="2.5rem"></iconify-icon>
               <div class=" flex-grow pt-1 pl-2">
                  <h6 class="font-semibold">Bayar dalam hitungan detik</h6>
                  <p class="text-xs md:text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, porro voluptates. Quasi ipsa ea fugit, praesentium alias illo molestias voluptatem reiciendis iusto, repudiandae officiis maiores libero nisi vel qui aspernatur?</p>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection