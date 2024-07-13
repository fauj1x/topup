@extends('layouts.main')
@section("container")
   <div class="px-7 md:px-10 lg:px-40 mt-4 container space-y-6">
      <x-homepage.promote-banner :title="['test', 'ajah']" :images="['image1.png', 'image2.png', 'image1.png', 'image2.png', 'image1.png']"></x-homepage.promote-banner>

      <div class="space-x-2 overflow-x-auto flex flex-nowrap">
         <a href="?c=topup" class="border 
                  {{ (request('c') == 'topup' || !request('c')) ? "border-dark-purple text-dark-purple" : "border-gray-500 text-gray-500" }} 
                  text-nowrap rounded-full px-6 py-1.5 inline-block text-xs md:text-sm lg:text-sm">TopUp</a>
         <a href="?c=market-akun" class="border 
                  {{ (request('c') == "market-akun" && request('c'))? "border-dark-purple text-dark-purple" : "border-gray-500 text-gray-500" }}
                  text-nowrap rounded-full px-6 py-1.5 inline-block text-xs md:text-sm lg:text-sm">Market Akun</a>
      </div>

      @if (request('c') == "market-akun" && request('c'))
         <x-homepage.market-account></x-homepage.market-account>
      @else
         <x-homepage.topup></x-homepage.topup>
      @endif

      <div>
         <h3 class="font-bold text-lg">Penawaran Akun Terbatas</h3>
         <x-recommendation></x-recommendation>
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