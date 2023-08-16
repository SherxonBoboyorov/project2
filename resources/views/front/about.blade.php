@extends('layouts.front')

@section('content')

      <div class="mt-[60px] [@media(max-width:449px)]:mt-[40px] back-img w-full mx-auto flex justify-center bg-no-repeat bg-center bg-cover items-center h-[220px]" style="background-image: url('{{ asset('front/src/images/first-back-img.jpg') }}')" >
        <div class="text-content mx-auto w-fit h-fit">
          <!-- Title start -->
          <div class="title text-center text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]" >
            О нас
          </div>
          <!-- Title end -->

          <!-- Description start -->
          <div class="decription">
            <a class="text-white text-center text-[20px]" href="{{ route('/') }}">Главная  - </a>
              
            <span class="text-white text-center text-[20px]">О нас</span>
          </div>
          <!-- Description end -->
        </div>
      </div>

      <div class="div flex-[1] max-w-screen-xl p-3 h-full mx-auto">
        @foreach($pages as $page)
            
        <div class="what-we-do h-fit px-2 max-w-screen-xl mx-auto [@media(max-width:850px)]:my-10 [@media(min-width:850px)]:my-20" >
          <div class="flex justify-between items-center flex-wrap [@media(min-width:850px)]:h-[500px] [@media(max-width:850px)]:h-fit" >
            <!-- text content side start -->
            <div class="col [@media(max-width:850px)]:mb-2 pb-3 [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full h-fit flex justify-start items-center" >
              <div class="text-content">
                <!-- Title start -->
                <div class="title-content w-fit">
                  <div class="title text-[#0D2668] text-[40px] font-[600] max-sm:text-[32px]">
                    О компании
                  </div>
                  <hr class="border-none bg-[#0D2668] w-1/3 h-[2px]" />
                </div>
                <!-- Title end -->

                <!-- Description start -->
                <div class="mt-5 mb-7 decription max-h-[435px] max-sm:max-h-[340px] text-[18px] max-sm:text-[15px] text-[#696969] overflow-hidden">
                 {!! $page->{'sub_content_' . app()->getLocale()} !!}
                </div>
                <!-- Description end -->
              </div>
            </div>
            <!-- text content side end -->

            <!-- img content side start -->
            <div class="col overflow-hidden [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full [@media(min-width:850px)]:h-full [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[300px]" >
              <img src="{{ asset($page->image) }}"  alt="" class="w-full h-full object-cover" />
            </div>
            <!-- img content side end -->
          </div>
        </div>

        <div class="pl-2">
            {!! $page->{'content_' . app()->getLocale()} !!}
        </div>
        @endforeach
      </div>

    @endsection