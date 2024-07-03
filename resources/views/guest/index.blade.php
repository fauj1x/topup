@extends('layouts.main')
@section("container")
   <div class="text-center w-9/12 mx-auto mt-20">
      <h6 class="text-dark-purple font-semibold">Website topup, rekber, beli akun game tercepat dan termurah</h6>
      <h5 class="font-bold text-lg">Ayo, Daftarkan Akunmu Bersama TopUpIn Sekarang</h5>

      <div class="mt-7 space-y-3">
         <button class="h-11 border border-gray-400 rounded-full flex items-center justify-center gap-2 w-full text-sm">
            <iconify-icon icon="mdi:email-check-outline" width="1.3rem"></iconify-icon>
            Daftar dengan Email
         </button>
         <button class="h-11 border border-gray-400 rounded-full flex items-center justify-center gap-2 w-full text-sm">
            <iconify-icon icon="carbon:phone" width="1.3rem"></iconify-icon>
            Daftar dengan Nomor Telefon
         </button>
      </div>

      <div class="text-sm mt-3">
         <p>Sudah memiliki akun?</p>
         <a href="/login" class="text-dark-purple underline">Masuk</a>
      </div>
   </div>
@endsection