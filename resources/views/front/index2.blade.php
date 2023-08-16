@extends('layouts.front')

@section('content')


<!-- Bac img Container start -->
<div class="back-img relative w-full [@media(min-width:900px)]:h-[600px] [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[250px] mt-[60px] [@media(max-width:449px)]:mt-[40px]">
    <!-- text Content start  -->
    @foreach($sliders as $slider)
      
    <div class="text-content max-w-[1000px] px-5 w-full z-10 absolute text-white top-[45%] left-[50%] -translate-x-[50%] -translate-y-[50%]" >
      <!-- Title start -->
      <div class="title text-center text-inherit font-[600] [@media(min-width:850px)]:text-[40px] [@media(min-width:576px)]:text-[30px] [@media(min-width:450px)]:text-[25px] [@media(max-width:450px)]:text-[21px]" >
        {{ $slider->{'title_' . app()->getLocale()} }}
      </div>
      <!-- Title end -->

      <!-- Description start -->
      <div
        class="mt-3 description text-inherit [@media(min-width:850px)]:text-[20px] [@media(min-width:576px)]:text-[17px] [@media(max-width:576px)]:text-[14px] font-[400] text-center" >
            {{ $slider->{'description_' . app()->getLocale()} }}
      </div>
      <!-- Description end -->
    </div>
    <!-- text Content end  -->

    <!-- Back img start -->
    <img src="{{ asset($slider->image) }}" class="w-full h-full object-cover" alt="bac-img"/>
    <!-- Back img end -->

    <!-- Arrow down start -->
    <div class="arrow-down w-fit [@media(max-width:576px)]:scale-[0.5] [@media(min-width:576px)]:scale-[0.7] [@media(min-width:900px)]:scale-[1] absolute bottom-[5%] left-[50%] z-10 -translate-x-[50%] -translate-y-[50%]">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="18" viewBox="0 0 48 26" fill="none" >
        <path d="M46 2L24 24L2 2" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    @endforeach

    <!-- Arrow down end -->
  </div>
  <!-- Bac img Container end -->

  <!-- About we some start -->
  <div class="what-we-do h-fit px-5 max-w-screen-xl mx-auto [@media(max-width:850px)]:my-10 [@media(min-width:850px)]:my-20" >
    @foreach ($pages as $page)

    <div class="flex justify-between items-center flex-wrap [@media(min-width:850px)]:h-[500px] [@media(max-width:850px)]:h-fit">
      <!-- text content side start -->
      <div class="col [@media(max-width:850px)]:mb-2 pb-3 [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full h-fit flex justify-start items-center" >
        <div class="text-content">
          <!-- Title start -->
          <div class="title-content w-fit">
            <div class="title text-[#0D2668] text-[40px] -mt-3 font-[600] max-sm:text-[32px]">
              О компании
            </div>
            <hr class="border-none bg-[#0D2668] w-1/3 h-[2px]" />
          </div>
          <!-- Title end -->

          <!-- Description start -->
          <div class="mt-5 mb-7 decription max-h-[352px] max-sm:max-h-[340px] text-[18px] max-sm:text-[15px] text-[#696969] overflow-hidden" >
               {{ $page->{'sub_content_' . app()->getLocale()} }}
          </div>
          <!-- Description end -->

          <!-- To About page button start -->
          <a href="{{ route('about') }}" class="uppercase bg-[#0D2668] px-5 py-3 text-[white] text-[18px] max-sm:text-[15px] font-[500]" >
            Узнать больше
          </a>
          <!-- To About page button send -->
        </div>
      </div>
      <!-- text content side end -->

      <!-- img content side start -->
      <div class="col overflow-hidden [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full [@media(min-width:850px)]:h-full [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[300px]" >
        <img src="{{ asset($page->image) }}" alt="" class="w-full h-full object-cover" />
      </div>
      <!-- img content side end -->
    </div>
    @endforeach

  </div>
  <!-- About we some end -->

  <!-- Slider Room start -->
  <div class="slider-rooms mb-10">
    <div class="swiper [@media(min-width:1000px)]:h-[600px] [@media(min-width:850px)]:h-[500px] [@media(min-width:650px)]:h-[400px] [@media(max-width:650px)]:h-[350px] mySwiper w-full">
      <!-- Slide wrapper start -->
      <div class="swiper-wrapper h-full [&>.swiper-slide.swiper-slide-active]:opacity-100">
        <!-- Slides start -->
        @foreach ($houseimages as $houseimage)

        <div class="swiper-slide transition-all duration-[0.25s] ease-linear opacity-50 h-[90%] overflow-hidden">
          <!-- Slide Img start -->
          <img src="{{ asset($houseimage->image) }}"class="transition-all duration-[0.2s] ease-linear w-full h-full object-cover hover:scale-[1.05]" alt="" />
          <!-- Slide Img end -->
        </div>
        <!-- Slides end -->
        @endforeach
      </div>
      <!-- Slide wrapper end -->

      <!-- Navigation start -->
      <div class="swiper-button-next [@media(max-width:1000px)]:w-[25px] [@media(max-width:1000px)]:h-[25px] [@media(min-width:1000px)]:w-[30px] [@media(min-width:1000px)]:h-[30px] rounded-full bg-[#edeef1] min-[2401px]:right-[24.3vw] min-[2201px]:right-[23.7vw] max-[2200px]:right-[23.5vw] max-[1960px]:right-[23.5vw] max-[1700px]:right-[23.1vw] max-[1450px]:right-[22.8vw] max-[1290px]:right-[22.5vw] max-[850px]:right-[5vw]" ></div>
      <div class="swiper-button-prev [@media(max-width:1000px)]:w-[25px] [@media(max-width:1000px)]:h-[25px] [@media(min-width:1000px)]:w-[30px] [@media(min-width:1000px)]:h-[30px] rounded-full bg-[#edeef1] min-[2401px]:left-[24.3vw] min-[2201px]:left-[23.7vw] max-[2200px]:left-[23.5vw] max-[1960px]:left-[23.5vw] max-[1700px]:left-[23.1vw] max-[1450px]:left-[22.8vw] max-[1290px]:left-[22.5vw] max-[850px]:left-[5vw]" ></div>
      <!-- Navigation end-->

      <!-- Pagination start -->
      <div class="swiper-pagination"></div>
      <!-- Pagination end -->
    </div>
  </div>
  <!-- Slider Room end -->

  <div class="bg-[#F3F4F7] w-full mx-auto">
    <!-- Our Branches start -->
    <div id="branches" class="our-branches w-full mx-auto h-fit mt-16 py-14 px-5">
      @foreach($articles as $article)
        
      <!-- Text content start -->
      <div class="text-content px-3 mx-auto max-w-[1000px] overflow-hidden">
        <!-- Title start -->
        <div class="title text-center text-[#0D2668] [@media(min-width:768px)]:text-[40px] [@media(max-width:768px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]" >
          Наши филиалы
        </div>
        <!-- Title end -->

        <!-- Description start -->
        <div class="description text-center [@media(min-width:576px)]:mt-3 [@media(max-width:576px)]:mt-1 text-[#696969] [@media(min-width:768px)]:text-[20px] [@media(max-width:768px)]:text-[18px] [@media(max-width:576px)]:text-[14px]" >
          Lorem ipsum dolor sit amet, consectetur adipiscing elit
        </div>
        <!-- Description end -->
      </div>
      <!-- Text content end -->

      <!-- Branches container start -->
      <div class="branches-container max-w-screen-xl mx-auto my-12 grid">
        <!-- Brach cards start -->
        <div class="box [@media(min-width:900px)]:h-[270px] [@media(max-width:900px)]:h-[220px] bg-white text p-4 flex items-center">
          <!-- Text Content start -->
          <div class="text-content w-full overflow-hidden">
            <!-- Title start -->
            <div class="title [@media(min-width:900px)]:text-[22px] [@media(max-width:900px)]:text-[16px] text-[#0D2668] font-[600]" >
              {{ $article->{'title_' . app()->getLocale()} }}
            </div>
            <!-- Title end -->

            <!-- Description start -->
            <div class="description [@media(min-width:900px)]:max-h-[150px] [@media(max-width:900px)]:max-h-[126px] mt-2 overflow-hidden text-[#696969] [@media(min-width:900px)]:text-[16px] [@media(max-width:900px)]:text-[12px]" >
              {!! $article->{'content_' . app()->getLocale()} !!}
            </div>
            <!-- Description end -->
          </div>
          <!-- Text Content end -->
        </div>
        <div class="box [@media(min-width:900px)]:h-[270px] [@media(max-width:900px)]:h-[220px] overflow-hidden relative img">
          <div class="corner-wrapper [@media(min-width:900px)]:w-[50px] [@media(min-width:900px)]:h-[50px] [@media(max-width:900px)]:w-[40px] [@media(max-width:900px)]:h-[40px] absolute top-[50%] -translate-y-[50%]" >
            <div class="corner w-full h-full rotate-45 bg-white"></div>
          </div>

          <!-- Img start -->
          <img src="{{ asset($article->image) }}" class="w-full h-full" alt=""/>
          <!-- Img end -->
        </div>
   
        <!-- Brach cards end -->
         @endforeach
      </div>
      <!-- Branches container end -->
    </div>
    <!-- Out Branches end -->

    <!-- Form start -->
    <div class="form w-full h-[450px] mx-auto relative bg-no-repeat bg-center bg-cover flex justify-center items-center" style="background-image: url('./src/images/form-img.jpg')">
      <div class="max-w-screen-md h-fit mx-auto">
        <!-- Text content start -->
        <div class="text-content pl-3 pr-4 mx-auto max-w-[1000px] overflow-hidden" >
          <!-- Title start -->
          <div class="title text-center text-[white] [@media(min-width:576px)]:text-[35px] [@media(max-width:576px)]:text-[26px] font-[600]" >
            Обратная связь
          </div>
          <!-- Title end -->

          <!-- Description start -->
          <div class="description text-center [@media(min-width:576px)]:mt-3 [@media(max-width:576px)]:mt-1 text-[white] [@media(min-width:768px)]:text-[20px] [@media(max-width:768px)]:text-[17px]" >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit
          </div>
          <!-- Description end -->
        </div>
        <!-- Text content end -->

        <!-- Form Content start -->
        <div class="form-content mx-auto px-2 max-w-[500px]">
          <form action="" method="get" class="my-3">
            <div class="input-content my-5">
              <input id="userName-first" type="text" class="w-full [@media(min-width:576px)]:h-[40px] [@media(max-width:576px)]:h-[35px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-white" placeholder="Имя"/>
              <input id="userNumber-first" type="number" class="w-full [@media(min-width:576px)]:h-[40px] [@media(max-width:576px)]:h-[35px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-white" placeholder="Телефон" />
              <textarea id="userComment-first" rows="3" class="w-full px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-white" placeholder="Комментарий"></textarea>
            </div>
            <div class="button-content mt-3 w-full flex justify-center items-center">
              <button id="sent-feedback-button" type="button" class="border-none [@media(min-width:576px)]:py-2 [@media(min-width:576px)]:px-6 [@media(max-width:576px)]:py-1 [@media(max-width:576px)]:px-5 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[white] bg-[#0D2668]">
                Отправить
              </button>
            </div>
          </form>
        </div>
        <!-- Form Content end -->
      </div>
    </div>
    <!-- Form end -->

    <!-- Feedback from our clients start -->
    <div class="feedback max-w-screen-xl mx-auto px-3 py-16">
      <!-- Text content start -->
      <div class="text-content pl-3 pr-4 mx-auto max-w-[1000px] overflow-hidden">
        <!-- Title start -->
        <div class="title text-center [@media(min-width:576px)]:text-[35px] [@media(max-width:576px)]:text-[26px] text-[#0D2668] font-[600]">
          Отзывы наших клиентов
        </div>
        <!-- Title end -->
      </div>
      <!-- Text content end -->

      <div id="videosWrapper" class="card-wrapper mt-3 w-full mx-auto flex flex-wrap">
        @foreach($events as $event)
          
        <div class="video-card 1 [@media(min-width:500px)]:w-[33.3%] [@media(min-width:420px)]:w-[50%] [@media(max-width:420px)]:w-[100%] overflow-hidden p-2">
          <div class="w-full shadow-md h-full bg-white">
            <div class="img-content [@media(min-width:768px)]:h-[250px] [@media(min-width:650px)]:h-[180px] [@media(min-width:420px)]:h-[120px] [@media(max-width:420px)]:h-[180px] relative" >
              <div id="video-play-btn" class="play [@media(min-width:768px)]:w-[40px] [@media(min-width:768px)]:h-[40px] [@media(max-width:768px)]:w-[25px] [@media(max-width:768px)]:h-[25px] cursor-pointer absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%]">
                <svg onclick="activeVideo(event)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60" fill="none" class="w-full h-full">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0C13.4314 0 0 13.4316 0 30C0 46.5684 13.4314 60 30 60C46.5686 60 60 46.5684 60 30C60 13.4316 46.5686 0 30 0ZM26 36.9282L38 30L26 23.0718V36.9282Z" fill="white" />
                </svg>
              </div>
              <a data-fancybox href="{{ $event->frame }}">
                <img id="videoImg" class="w-full h-full object-cover" src="{{ asset($event->image) }}" />
              </a>
            </div>
            <div class="text-content h-full overflow-hidden [@media(min-width:700px)]:py-2 [@media(max-width:700px)]:py-1 px-3" >
              <!-- Text Content start -->
              <div class="text-content py-2 h-full w-full overflow-hidden">
                <!-- Title start -->
                <div class="title [@media(min-width:700px)]:text-[18px] [@media(max-width:700px)]:text-[16px] text-[#0D2668] font-[600]" >
                  {{ $event->{'title_' . app()->getLocale()} }}
                </div>
                <!-- Title end -->

                <!-- Description start -->
                <div class="description mt-1 [@media(min-width:700px)]:max-h-[115px] [@media(max-width:700px)]:max-h-[60px] overflow-hidden [@media(min-width:700px)]:text-[15px] [@media(max-width:700px)]:text-[13px]" >
                  {!! $event->{'content_' . app()->getLocale()} !!}
                </div>
                <!-- Description end -->
              </div>
              <!-- Text Content end -->
            </div>
          </div>
        </div>
      </div>
              
      <div class="button-content mt-3 w-full flex justify-center items-center">
        <button onclick="moreVideo()" type="button"  class="border-none mt-5 [@media(min-width:576px)]:py-2 [@media(min-width:576px)]:px-6 [@media(max-width:576px)]:py-1 [@media(max-width:576px)]:px-5 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[white] bg-[#0D2668]" >
          Больше
        </button>
      </div>
  </div>

    <!-- Feedback Modal start -->
    <div id="feedback-backdrop" class="hidden backdrop px-5 fixed z-50 justify-center items-center top-0 left-0 w-full h-full bg-[rgb(0,0,0,0.60)]">
      <div class="transition-all duration-[0.2s] ease-linear max-w-screen-md bg-white h-fit mx-auto p-3" >
        <!-- Text content start -->
        <div class="text-content pl-3 pr-4 mx-auto max-w-[1000px] overflow-hidden" >
          <!-- Title start -->
          <div class="title text-center text-[#0D2668] [@media(min-width:576px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]" >
            Оставить отзыв
          </div>
          <!-- Title end -->
        </div>
        <!-- Text content end -->

        <!-- Form Content start -->
        <div class="form-content mx-auto px-2 max-w-[500px]">
          <form action="" method="get" class="my-3">
            <div class="input-content">
              <input id="userName-second" required type="text" class="w-full [@media(min-width:576px)]:h-[40px] [@media(max-width:576px)]:h-[35px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-[#F3F4F7]" placeholder="Имя"/>
              <input id="userNumber-second" required type="number" class="w-full [@media(min-width:576px)]:h-[40px] [@media(max-width:576px)]:h-[35px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-[#F3F4F7]" placeholder="Телефон" />
              <textarea id="userComment-second" required type="text" class="w-full h-[100px] px-3 my-2 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#696969] outline-none border-none bg-[#F3F4F7]" placeholder="Комментарий"></textarea>
            </div>
            <div class="upload-video mb-5 w-full">
              <input type="file" class="hidden" id="file" />
              <label for="file" class="border text-center block bg-white border-[#0D2668] [@media(min-width:576px)]:py-2 [@media(min-width:576px)]:px-6 [@media(max-width:576px)]:py-1 [@media(max-width:576px)]:px-5 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[#0D2668]" >
                Загрузить видео
              </label>
            </div>
            <div class="button-content mt-3 w-full flex justify-center items-center" >
              <button type="submit" class="border-none [@media(min-width:576px)]:py-2 [@media(min-width:576px)]:px-6 [@media(max-width:576px)]:py-1 [@media(max-width:576px)]:px-5 [@media(min-width:576px)]:text-[18px] [@media(max-width:576px)]:text-[16px] text-[white] bg-[#0D2668]" >
                Отправить
              </button>
            </div>
          </form>
        </div>
        <!-- Form Content end -->
      </div>
    </div>
    <!-- Feedback Modal end -->
    <!-- Feedback from our clients end -->

     <!-- Accardion start -->
     <div class="accordion pt-14 pb-16 px-4 mx-auto bg-[white]">
      <!-- Text content start -->
      <div class="text-content mx-auto max-w-[1000px] w-full overflow-hidden">
        <!-- Title start -->
        <div class="title text-center text-[#0D2668] [@media(min-width:768px)]:text-[40px] [@media(min-width:576px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]">
          Обратная связь
        </div>
        <!-- Title end -->

        <!-- Description start -->
        <div class="description text-center text-white [@media(min-width:576px)]:mt-3 [@media(max-width:576px)]:mt-1 [@media(min-width:768px)]:text-[20px] [@media(max-width:768px)]:text-[18px] [@media(max-width:576px)]:text-[14px]" >
          Lorem ipsum dolor sit amet, consectetur adipiscing elit
        </div>
        <!-- Description end -->
      </div>
      <!-- Text content end -->
      <div class="max-w-[800px] mx-auto">
       @foreach($faqs as $faq)
        <div class="relative" x-data="{selected:null}">
          <button type="button" class="w-full border-t border-b py-5 text-left flex justify-between items-center" @click="selected !== 1 ? selected = 1 : selected = null" >
            <div class="title [@media(min-width:576px)]:text-[20px] [@media(max-width:576px)]:text-[17px] font-[600] text-[#0D2668]">
              {{ $faq->{'title_' . app()->getLocale()} }}
            </div>

            <div class="plus-icon w-[18px] he-[18px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="w-full h-full">
                <path d="M0 11H24V13H0V11Z" fill="#0D2668" />
                <path d="M13 8.74224e-08L13 24H11L11 0L13 8.74224e-08Z" fill="#0D2668"/>
              </svg>
            </div>
          </button>

          <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''" >
            <div class="py-5 text-description [@media(min-width:576)]:text-[18px] [@media(max-width:576)]:text-[14px] text-[#0D2668]">
              {!! $faq->{'content_' . app()->getLocale()} !!}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- Accardion end -->

    <!-- Numbers start -->
    <div class="feedback-number form w-full py-20 mx-auto relative bg-no-repeat bg-center bg-cover flex flex-wrap justify-center items-center pl-3 pr-4" style="background-image: url('{{ asset('front/src/images/slider-room-3.jpg') }}')">
      <div class="content w-full max-w-screen-lg mx-auto">
        <!-- Text content start -->
        <div class="text-content mx-auto max-w-[1000px] w-full overflow-hidden" >
          <!-- Title start -->
          <div
            class="title text-center text-[white] [@media(min-width:768px)]:text-[40px] [@media(min-width:576px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]" >
            Отзывы наших клиентов
          </div>
          <!-- Title end -->
        </div>
        <!-- Text content end -->

        <div class="number-wrapper flex flex-wrap justify-between items-start py-5 w-full mx-auto">
          @foreach($numbers as $number)
          <div class="items [@media(min-width:600px)]:w-[30%] [@media(max-width:600px)]:w-[100%]" >
            <div class="title text-center text-[white] [@media(min-width:768px)]:text-[60px] [@media(min-width:650px)]:text-[50px] [@media(max-width:650px)]:text-[40px] font-[600]">
              {{ $number->number }}
            </div>
            <hr class="border-none bg-[#ffffff7d] h-[0.5px] mx-auto [@media(min-width:600px)]:w-[90%] [@media(min-width:600px)]:mt-2 [@media(min-width:600px)]:mb-6 [@media(max-width:600px)]:w-[70%] [@media(max-width:600px)]:mt-0 [@media(max-width:600px)]:mb-2" />
            <div class="description title text-center text-[white] [@media(min-width:600px)]:text-[18px] [@media(max-width:600px)]:text-[16px]" >
              {{ $number->{'title_' . app()->getLocale()} }}
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Numbers end -->
  </div>

  <!-- Advertising integrations start -->
  <div class="ads-integration mx-auto py-10 max-w-screen-xl">
    <!-- Text content start -->
    <div class="text-content mx-auto max-w-[700px] overflow-hidden px-3">
      <!-- Title start -->
      <div class="title text-center text-[#0D2668] [@media(min-width:768px)]:text-[40px] [@media(max-width:768px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]" >
        Рекламные интеграции
      </div>
      <!-- Title end -->

      <!-- Description start -->
      <div class="description text-center [@media(min-width:576px)]:mt-3 [@media(max-width:576px)]:mt-1 text-[#696969] [@media(min-width:768px)]:text-[20px] [@media(max-width:768px)]:text-[18px] [@media(max-width:576px)]:text-[14px]" >
        Мы успешно заключили рекламные контракты со многими крупными
        компаниями в Узбекистане.
      </div>
      <!-- Description end -->
    </div>
    <!-- Text content end -->

    <div class="card-wrapper px-3 mt-8 w-full mx-auto">
      <div class="non-responsive w-full flex-wrap mx-auto justify-between items-center [@media(min-width:768px)]:flex [@media(max-width:768px)]:hidden" >
        <div class="card py-5 [@media(min-width:768px)]:w-[31%] [@media(min-width:500px)]:w-[48%] [@media(max-width:500px)]:w-[100%]" >
          @foreach($integrations as $integration)
          <div class="img bg-[#EEF0F4] w-[55px] h-[55px] rounded-full overflow-hidden mx-auto p-3">
            <svg xmlns="{{ asset($integration->image) }}" class="w-full h-full" viewBox="0 0 50 50" fill="none">
              <path d="M46.3481 19.1207C46.1868 18.6085 45.8759 18.1562 45.4554 17.822C45.035 17.4879 44.5242 17.2872 43.9887 17.2457L32.3754 16.2418C32.3052 16.2349 32.2382 16.2091 32.1814 16.1672C32.1247 16.1252 32.0804 16.0687 32.0532 16.0035L27.5161 5.19104C27.3059 4.69779 26.9554 4.2772 26.5082 3.98157C26.0609 3.68594 25.5366 3.52832 25.0004 3.52832C24.4643 3.52832 23.94 3.68594 23.4927 3.98157C23.0454 4.2772 22.6949 4.69779 22.4848 5.19104L17.9477 16.0035C17.9205 16.0687 17.8762 16.1252 17.8195 16.1672C17.7627 16.2091 17.6957 16.2349 17.6254 16.2418L6.01216 17.2457C5.4767 17.2872 4.96589 17.4879 4.54543 17.822C4.12497 18.1562 3.81409 18.6085 3.65278 19.1207C3.48194 19.6337 3.46702 20.1858 3.6099 20.7073C3.75278 21.2288 4.04705 21.6962 4.45551 22.0504L13.2661 29.736C13.32 29.7839 13.3601 29.8454 13.3821 29.9142C13.4041 29.9829 13.4072 30.0563 13.3911 30.1266L10.7426 41.5543C10.6192 42.0805 10.6544 42.6314 10.8438 43.1375C11.0333 43.6437 11.3685 44.0823 11.8071 44.3981C12.2389 44.7167 12.7562 44.8985 13.2924 44.9201C13.8286 44.9417 14.3589 44.802 14.8149 44.5192L24.7973 38.4645C24.856 38.4282 24.9236 38.4089 24.9926 38.4089C25.0616 38.4089 25.1293 38.4282 25.1879 38.4645L35.1704 44.5192C35.6311 44.8012 36.1651 44.9405 36.7049 44.9194C37.2447 44.8983 37.7662 44.7178 38.2035 44.4006C38.6408 44.0835 38.9744 43.6438 39.1621 43.1373C39.3498 42.6307 39.3833 42.0799 39.2583 41.5543L36.6176 30.1227C36.6015 30.0523 36.6046 29.979 36.6266 29.9102C36.6486 29.8415 36.6887 29.78 36.7426 29.7321L45.5532 22.0465C45.9595 21.6916 46.2518 21.2245 46.3933 20.7039C46.5347 20.1833 46.519 19.6324 46.3481 19.1207ZM44.0043 20.277L35.1938 27.9625C34.8184 28.2892 34.5392 28.7121 34.3864 29.1857C34.2336 29.6592 34.2129 30.1656 34.3266 30.65L36.9672 42.0817C36.9868 42.1585 36.9824 42.2394 36.9549 42.3137C36.9273 42.388 36.8778 42.4522 36.8129 42.4977C36.7542 42.5447 36.682 42.5718 36.6068 42.5749C36.5317 42.5781 36.4574 42.5572 36.395 42.5153L26.4125 36.4606C25.987 36.2019 25.4985 36.0651 25.0004 36.0651C24.5024 36.0651 24.0139 36.2019 23.5883 36.4606L13.6059 42.5153C13.5434 42.5572 13.4692 42.5781 13.394 42.5749C13.3189 42.5718 13.2467 42.5447 13.1879 42.4977C13.1231 42.4522 13.0735 42.388 13.046 42.3137C13.0184 42.2394 13.0141 42.1585 13.0336 42.0817L15.6743 30.65C15.788 30.1656 15.7673 29.6592 15.6145 29.1857C15.4616 28.7121 15.1825 28.2892 14.8071 27.9625L5.99653 20.277C5.93627 20.2257 5.893 20.1574 5.87242 20.081C5.85184 20.0047 5.85494 19.9238 5.8813 19.8492C5.90102 19.775 5.94379 19.7089 6.00345 19.6604C6.06311 19.612 6.13659 19.5838 6.21333 19.5797L17.8286 18.5758C18.3258 18.5334 18.802 18.3558 19.2055 18.0621C19.609 17.7684 19.9244 17.3699 20.1176 16.9098L24.6547 6.09729C24.6863 6.03019 24.7363 5.97344 24.7989 5.9337C24.8615 5.89395 24.9341 5.87285 25.0082 5.87285C25.0824 5.87285 25.155 5.89395 25.2176 5.9337C25.2802 5.97344 25.3302 6.03019 25.3618 6.09729L29.8833 16.9098C30.0758 17.3688 30.3901 17.7666 30.7921 18.0602C31.1941 18.3538 31.6686 18.5321 32.1645 18.5758L43.7797 19.5797C43.8565 19.5838 43.93 19.612 43.9896 19.6604C44.0493 19.7089 44.092 19.775 44.1118 19.8492C44.139 19.9231 44.1434 20.0034 44.1242 20.0797C44.105 20.156 44.0633 20.2248 44.0043 20.277Z" fill="#0D2668" />
            </svg>
          </div>
          <div class="title text-center my-2 text-[#0D2668] font-[600] text-[24px]">
            {{ $integration->{'title_' . app()->getLocale()} }}
          </div>
          <div class="description text-center overflow-hidden text-[#696969] max-h-[145px] text-[16px]" >
            {!! $integration->{'content_' . app()->getLocale()} !!}
          </div>
          @endforeach
        </div>

        <div class="card shadow-lg px-2 mt-10 py-5 [@media(min-width:768px)]:w-[31%] [@media(min-width:500px)]:w-[48%] [@media(max-width:500px)]:w-[100%]">
          @foreach($promotionals as $promotional)

          <div class="img bg-[#EEF0F4] w-[55px] flex justify-center items-center h-[55px] rounded-full overflow-hidden mx-auto" >
            <img src="{{ asset($promotional->image) }}" class="w-full h-full" alt="" />
          </div>
          <div class="title text-center my-2 text-[#0D2668] font-[600] text-[24px]" >
            {{ $promotional->{'title_' . app()->getLocale()} }}
          </div>
          <div class="description text-center overflow-hidden text-[#696969] max-h-[145px] text-[16px]" >
            {!! $promotional->{'content_' . app()->getLocale()} !!}
          </div>
          @endforeach
        </div>
      </div>

      <div class="swiper-cards overflow-hidden h-fit mySwiper w-full [@media(min-width:768px)]:hidden [@media(max-width:768px)]:block" >
        <div class="swiper-wrapper w-full h-fit">
          <div class="swiper-slide px-3 h-fit w-fit">
            <div class="card">
              @foreach($integrations as $integration)
              <div class="img bg-[#EEF0F4] w-[55px] h-[55px] rounded-full overflow-hidden mx-auto p-3" >
                <svg xmlns="{{ asset($integration->image) }}" class="w-full h-full" viewBox="0 0 50 50" fill="none">
                  <path d="M46.3481 19.1207C46.1868 18.6085 45.8759 18.1562 45.4554 17.822C45.035 17.4879 44.5242 17.2872 43.9887 17.2457L32.3754 16.2418C32.3052 16.2349 32.2382 16.2091 32.1814 16.1672C32.1247 16.1252 32.0804 16.0687 32.0532 16.0035L27.5161 5.19104C27.3059 4.69779 26.9554 4.2772 26.5082 3.98157C26.0609 3.68594 25.5366 3.52832 25.0004 3.52832C24.4643 3.52832 23.94 3.68594 23.4927 3.98157C23.0454 4.2772 22.6949 4.69779 22.4848 5.19104L17.9477 16.0035C17.9205 16.0687 17.8762 16.1252 17.8195 16.1672C17.7627 16.2091 17.6957 16.2349 17.6254 16.2418L6.01216 17.2457C5.4767 17.2872 4.96589 17.4879 4.54543 17.822C4.12497 18.1562 3.81409 18.6085 3.65278 19.1207C3.48194 19.6337 3.46702 20.1858 3.6099 20.7073C3.75278 21.2288 4.04705 21.6962 4.45551 22.0504L13.2661 29.736C13.32 29.7839 13.3601 29.8454 13.3821 29.9142C13.4041 29.9829 13.4072 30.0563 13.3911 30.1266L10.7426 41.5543C10.6192 42.0805 10.6544 42.6314 10.8438 43.1375C11.0333 43.6437 11.3685 44.0823 11.8071 44.3981C12.2389 44.7167 12.7562 44.8985 13.2924 44.9201C13.8286 44.9417 14.3589 44.802 14.8149 44.5192L24.7973 38.4645C24.856 38.4282 24.9236 38.4089 24.9926 38.4089C25.0616 38.4089 25.1293 38.4282 25.1879 38.4645L35.1704 44.5192C35.6311 44.8012 36.1651 44.9405 36.7049 44.9194C37.2447 44.8983 37.7662 44.7178 38.2035 44.4006C38.6408 44.0835 38.9744 43.6438 39.1621 43.1373C39.3498 42.6307 39.3833 42.0799 39.2583 41.5543L36.6176 30.1227C36.6015 30.0523 36.6046 29.979 36.6266 29.9102C36.6486 29.8415 36.6887 29.78 36.7426 29.7321L45.5532 22.0465C45.9595 21.6916 46.2518 21.2245 46.3933 20.7039C46.5347 20.1833 46.519 19.6324 46.3481 19.1207ZM44.0043 20.277L35.1938 27.9625C34.8184 28.2892 34.5392 28.7121 34.3864 29.1857C34.2336 29.6592 34.2129 30.1656 34.3266 30.65L36.9672 42.0817C36.9868 42.1585 36.9824 42.2394 36.9549 42.3137C36.9273 42.388 36.8778 42.4522 36.8129 42.4977C36.7542 42.5447 36.682 42.5718 36.6068 42.5749C36.5317 42.5781 36.4574 42.5572 36.395 42.5153L26.4125 36.4606C25.987 36.2019 25.4985 36.0651 25.0004 36.0651C24.5024 36.0651 24.0139 36.2019 23.5883 36.4606L13.6059 42.5153C13.5434 42.5572 13.4692 42.5781 13.394 42.5749C13.3189 42.5718 13.2467 42.5447 13.1879 42.4977C13.1231 42.4522 13.0735 42.388 13.046 42.3137C13.0184 42.2394 13.0141 42.1585 13.0336 42.0817L15.6743 30.65C15.788 30.1656 15.7673 29.6592 15.6145 29.1857C15.4616 28.7121 15.1825 28.2892 14.8071 27.9625L5.99653 20.277C5.93627 20.2257 5.893 20.1574 5.87242 20.081C5.85184 20.0047 5.85494 19.9238 5.8813 19.8492C5.90102 19.775 5.94379 19.7089 6.00345 19.6604C6.06311 19.612 6.13659 19.5838 6.21333 19.5797L17.8286 18.5758C18.3258 18.5334 18.802 18.3558 19.2055 18.0621C19.609 17.7684 19.9244 17.3699 20.1176 16.9098L24.6547 6.09729C24.6863 6.03019 24.7363 5.97344 24.7989 5.9337C24.8615 5.89395 24.9341 5.87285 25.0082 5.87285C25.0824 5.87285 25.155 5.89395 25.2176 5.9337C25.2802 5.97344 25.3302 6.03019 25.3618 6.09729L29.8833 16.9098C30.0758 17.3688 30.3901 17.7666 30.7921 18.0602C31.1941 18.3538 31.6686 18.5321 32.1645 18.5758L43.7797 19.5797C43.8565 19.5838 43.93 19.612 43.9896 19.6604C44.0493 19.7089 44.092 19.775 44.1118 19.8492C44.139 19.9231 44.1434 20.0034 44.1242 20.0797C44.105 20.156 44.0633 20.2248 44.0043 20.277Z" fill="#0D2668" />
                </svg>
              </div>
              <div class="title text-center my-2 text-[#0D2668] font-[600] text-[24px]">
                {{ $integration->{'title_' . app()->getLocale()} }}
              </div>
              <div class="description text-center overflow-hidden text-[#696969] max-h-[145px] text-[16px]" >
                {!! $integration->{'content_' . app()->getLocale()} !!}
              </div>
              @endforeach
            </div>
          </div>
        </div>
      <div class="swiper-pagination-2 flex items-center py-3 justify-center"></div>
     </div>

      <div class="swiper-cards mt-5 overflow-hidden h-fit mySwiper w-full [@media(min-width:768px)]:hidden [@media(max-width:768px)]:block" >
        <div class="swiper-wrapper w-full h-fit">
          <div class="swiper-slide px-3 h-fit w-fit">
            <div class="card">
              @foreach($promotionals as $promotional)
              <div class="img bg-[#EEF0F4] w-[55px] flex justify-center items-center h-[55px] rounded-full overflow-hidden mx-auto" >
                <img src="{{ asset($promotional->image) }}" class="w-full h-full" alt="" />
              </div>
              <div class="title text-center my-2 text-[#0D2668] font-[600] text-[24px]" >
                {{ $promotional->{'title_' . app()->getLocale()} }}
              </div>
              <div class="description text-center overflow-hidden text-[#696969] max-h-[145px] text-[16px]" >
                {!! $promotional->{'content_' . app()->getLocale()} !!}
              </div>
              @endforeach
            </div>
        </div>
        </div>
        <div class="swiper-pagination-2 flex items-center py-3 justify-center"></div>
      </div>
    </div>

    <div id="partners"></div>
  </div>
  <!-- Advertising integrations end -->

  <!-- Sponsors start -->
  <div class="w-full bg-[#F3F4F7] mx-auto">
    <div class="sponsors mt-14 mx-auto max-w-screen-xl py-10">
      <!-- Text content start -->
      <div class="text-content mx-auto max-w-[700px] overflow-hidden">
        <!-- Title start -->
        <div class="title text-center text-[#0D2668] [@media(min-width:768px)]:text-[40px] [@media(max-width:768px)]:text-[30px] [@media(max-width:576px)]:text-[24px] font-[600]" >
          Наши партнеры
        </div>
        <!-- Title end -->

        <!-- Description start -->
        <div class="description text-center [@media(min-width:576px)]:mt-3 [@media(max-width:576px)]:mt-1 text-[#696969] [@media(min-width:768px)]:text-[20px] [@media(max-width:768px)]:text-[18px] [@media(max-width:576px)]:text-[14px]">
          Нашими партнерами уже успели стать такие компании как:
        </div>
        <!-- Description end -->
      </div>
      <!-- Text content end -->

      <div class="wrapper my-10 px-2 w-full mx-auto flex flex-wrap">
        @foreach($partners as $partner)
        <div class="item w-1/4 py-2 px-3 h-fit border-r-2 border-b-2 flex justify-center items-center overflow-hidden" >
          <a href="{{ $partner->link }}">
            <img src="{{ asset($partner->image) }}" class="[@media(min-width:500px)]:w-[100px] [@media(max-width:500px)]:w-full object-center" alt=""/>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Sponsors end -->

  <!-- Contact start -->
  <div id="contacts" class="contact h-[450px] w-full flex flex-wrap justify-between items-start">
    <div class="map-block [@media(min-width:800px)]:w-1/2 [@media(max-width:800px)]:w-full h-full" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2995.779923945947!2d69.25855277349936!3d41.33539869922227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KjQsNC50YXQvtC90YLQvtGF0YPRgNGB0LrQuNC5INGA0LDQudC-0L0sINCa0L7RiNC40LrRh9C4INC00L7QvCAxLCDQvNC40LrRgNC-0YDQsNC50L7QvSDQmtC-0YUt0L7RgtCwIA!5e0!3m2!1sen!2sus!4v1692075901730!5m2!1sen!2sus" class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
    </div>
    <div class="text-block py-20 bg-[#0D2668] px-7 [@media(min-width:800px)]:w-1/2 [@media(min-width:800px)]:h-full [@media(max-width:800px)]:w-full [@media(max-width:800px)]:h-fit" >
      <!-- Text content start -->
      <div class="text-content max-w-[600px] overflow-hidden">
        <!-- Title start -->
        <div class="title text-[white] text-[35px] font-[600]">
          Наши контакты
        </div>
        <!-- Title end -->

        <!-- Description start -->
        <div class="description my-3 text-[white] text-[19px]">
          Филиал Ташкента , Узбекистан
        </div>

        <div class="description mt-2 text-[white] text-[19px]">
          <a class="text-[white]" href="https://www.google.com/maps/search/%D0%A8%D0%B0%D0%B9%D1%85%D0%BE%D0%BD%D1%82%D0%BE%D1%85%D1%83%D1%80%D1%81%D0%BA%D0%B8%D0%B9+%D1%80%D0%B0%D0%B9%D0%BE%D0%BD,+%D0%9A%D0%BE%D1%88%D0%B8%D0%BA%D1%87%D0%B8+%D0%B4%D0%BE%D0%BC+1,+%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D1%80%D0%B0%D0%B9%D0%BE%D0%BD+%D0%9A%D0%BE%D1%85-%D0%BE%D1%82%D0%B0/@41.3353947,69.2585528,17z/data=!3m1!4b1?entry=ttu" >
            Шайхонтохурский район, Кошикчи дом 1, микрорайон Кох-ота
          </a>
          <br />
          <a href="tel:+998 (90) 001 10 01" class="text-white">+998 (90) 001 10 01</a>
        </div>
        <!-- Description end -->
      </div>
      <!-- Text content end -->

      <div class="w-[220px] mt-8 flex justify-between">
        <a href="#" class="sm-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30" fill="none" >
            <rect width="30" height="30" rx="15" fill="white" />
            <path d="M14.9679 8.25C15.866 8.28207 16.7962 8.28208 17.6943 8.31415C18.4962 8.34623 19.2339 8.47452 19.9395 8.8915C20.8376 9.43677 21.3829 10.2386 21.5754 11.265C21.6716 11.8745 21.7037 12.516 21.7357 13.1254C21.7678 14.4725 21.7357 15.8197 21.7357 17.1668C21.7357 17.8725 21.7037 18.5781 21.4791 19.2517C21.0301 20.5668 20.0999 21.3687 18.7528 21.6253C18.1433 21.7536 17.5018 21.7536 16.8924 21.7856C15.5453 21.8177 14.2302 21.7856 12.8831 21.7856C12.1774 21.7856 11.4718 21.7536 10.7982 21.529C9.4831 21.08 8.68123 20.1498 8.42463 18.8027C8.29633 18.1932 8.29633 17.5517 8.26426 16.9423C8.23218 15.5952 8.26426 14.248 8.26426 12.9009C8.26426 12.1952 8.29633 11.4896 8.52086 10.816C8.9699 9.50092 9.90008 8.69905 11.2472 8.44245C11.8567 8.31415 12.4982 8.31415 13.1076 8.28208C13.6849 8.25 14.3264 8.25 14.9679 8.25ZM20.5169 14.8895C20.4848 14.8895 20.5169 14.8895 20.5169 14.8895C20.4848 14.3442 20.4848 13.831 20.4848 13.2858C20.4848 12.7726 20.4527 12.2594 20.3886 11.7462C20.2603 10.5915 19.5867 9.82167 18.4641 9.59715C17.8867 9.46885 17.2452 9.46885 16.6679 9.46885C15.5132 9.43677 14.3906 9.43677 13.2359 9.46885C12.6585 9.46885 12.0812 9.50092 11.5359 9.59715C10.5737 9.75752 9.90008 10.3028 9.6114 11.265C9.51518 11.5858 9.4831 11.9065 9.45103 12.2273C9.41895 13.4461 9.41895 14.665 9.41895 15.8838C9.41895 16.6536 9.45103 17.4555 9.51518 18.2253C9.6114 19.38 10.3171 20.1819 11.4718 20.3743C12.0491 20.4706 12.6585 20.5026 13.268 20.5026C14.3906 20.5347 15.5132 20.5026 16.6679 20.5026C17.1811 20.5026 17.6943 20.4706 18.2075 20.4064C18.6886 20.3743 19.1377 20.214 19.5226 19.8932C20.1641 19.38 20.3886 18.7064 20.4207 17.9366C20.4848 16.9744 20.4848 15.9159 20.5169 14.8895Z" fill="#0D2668"/>
            <path d="M18.4321 15.0178C18.4321 16.9423 16.8925 18.4819 14.968 18.4819C13.0435 18.4819 11.5039 16.9423 11.5039 14.9857C11.5039 13.0933 13.0756 11.5537 15.0001 11.5537C16.8925 11.5537 18.4321 13.0933 18.4321 15.0178ZM14.9359 17.2631C16.1548 17.2631 17.1812 16.2367 17.1812 15.0178C17.1812 13.799 16.1548 12.7726 14.9359 12.7726C13.685 12.7726 12.6907 13.799 12.6907 15.0178C12.6907 16.2367 13.7171 17.2631 14.9359 17.2631Z"fill="#0D2668"/>
            <path d="M19.3625 11.3937C19.3625 11.8427 19.0096 12.2276 18.5606 12.2276C18.1115 12.2276 17.7266 11.8427 17.7587 11.3937C17.7587 10.9446 18.1115 10.5918 18.5606 10.5918C19.0096 10.5918 19.3625 10.9446 19.3625 11.3937Z" fill="#0D2668"/>
          </svg>
        </a>
        <a href="#" class="sm-icon flex justify-center items-center bg-[white] rounded-full w-[40px] h-[40px] p-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 14 14" fill="none">
            <g clip-path="url(#clip0_5204_656)">
              <path d="M6.79303 1.68652H6.86813C7.56169 1.68905 11.0759 1.71437 12.0234 1.96918C12.3099 2.04695 12.5709 2.19853 12.7804 2.40878C12.9899 2.61903 13.1406 2.88058 13.2173 3.1673C13.3026 3.48793 13.3625 3.91234 13.403 4.35024L13.4114 4.43799L13.43 4.65737L13.4367 4.74512C13.4916 5.5163 13.4983 6.23855 13.4992 6.39634V6.45962C13.4983 6.6233 13.4907 7.39449 13.43 8.19774L13.4232 8.28634L13.4156 8.37409C13.3734 8.85671 13.311 9.33596 13.2173 9.68865C13.1408 9.97548 12.9902 10.2372 12.7807 10.4474C12.5711 10.6577 12.31 10.8092 12.0234 10.8868C11.0447 11.15 7.32459 11.1686 6.80906 11.1694H6.68925C6.42853 11.1694 5.35022 11.1644 4.21959 11.1256L4.07616 11.1205L4.00275 11.1171L3.85847 11.1112L3.71419 11.1053C2.77762 11.064 1.88578 10.9973 1.47487 10.8859C1.18841 10.8085 0.927336 10.6571 0.717799 10.447C0.508261 10.2368 0.357621 9.97533 0.280969 9.68865C0.187312 9.3368 0.124875 8.85671 0.0826875 8.37409L0.0759375 8.28549L0.0691875 8.19774C0.0275464 7.62602 0.00447176 7.05309 0 6.47987L0 6.37609C0.0016875 6.19468 0.0084375 5.56777 0.054 4.8759L0.0599063 4.78899L0.0624375 4.74512L0.0691875 4.65737L0.08775 4.43799L0.0961875 4.35024C0.136688 3.91234 0.196594 3.48709 0.281812 3.1673C0.358335 2.88047 0.508918 2.61879 0.718464 2.40851C0.92801 2.19822 1.18916 2.04671 1.47572 1.96918C1.88662 1.85949 2.77847 1.79199 3.71503 1.7498L3.85847 1.7439L4.00359 1.73884L4.07616 1.7363L4.22044 1.7304C5.02344 1.70456 5.82677 1.69021 6.63019 1.68737H6.79303V1.68652ZM5.4 4.39496V8.46015L8.90747 6.4284L5.4 4.39496Z"  fill="#0D2668"/>
            </g>
            <defs>
              <clipPath id="clip0_5204_656">
                <rect width="13.5" height="13.5" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
        <a href="#" class="sm-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30" fill="none">
            <rect width="30" height="30" rx="15" fill="white" />
            <path d="M18.2451 15H16.2892V22H13.3725V15H12V12.5294H13.3725V10.9167C13.3725 9.78431 13.9216 8 16.2892 8H18.451V10.402H16.9069C16.6667 10.402 16.2892 10.5392 16.2892 11.0882V12.5294H18.4853L18.2451 15Z" fill="#0D2668"/>
          </svg>
        </a>
        <a href="#" class="sm-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30" fill="none" >
            <rect width="30" height="30" rx="15" fill="white" />
            <path d="M21.75 9.71717C21.7134 10.0466 21.6402 10.4127 21.567 10.7422C20.9446 13.6708 20.3223 16.5994 19.7 19.528C19.6634 19.711 19.6268 19.8574 19.5535 20.0039C19.4071 20.2601 19.1875 20.3333 18.8946 20.2601C18.7116 20.2235 18.5651 20.1503 18.4187 20.0405C17.4669 19.3449 16.5517 18.6494 15.5999 17.9539C15.4901 17.8806 15.4169 17.8806 15.3071 17.9905C14.8312 18.4298 14.3919 18.9057 13.916 19.3449C13.733 19.528 13.5499 19.6378 13.2937 19.6012C13.1106 19.6012 13.0008 19.528 12.9642 19.3449C12.6713 18.4298 12.3785 17.5512 12.0856 16.636C11.9758 16.3431 11.866 16.0137 11.7928 15.7208C11.7561 15.611 11.7195 15.5378 11.5731 15.5012C10.6579 15.2083 9.74273 14.9154 8.82755 14.6592C8.71772 14.6226 8.57129 14.586 8.46147 14.5128C8.20522 14.3663 8.16861 14.1467 8.42486 13.927C8.57129 13.7806 8.75433 13.7074 8.97398 13.6342C10.2186 13.1583 11.4633 12.6824 12.7079 12.2065C15.4169 11.1815 18.0892 10.1199 20.7982 9.09484C20.8348 9.09484 20.8348 9.09484 20.8714 9.05823C21.3839 8.8752 21.75 9.13145 21.75 9.71717ZM13.3303 18.7592C13.3669 18.7226 13.3669 18.686 13.3669 18.686C13.4401 18.0271 13.4767 17.3681 13.5499 16.7092C13.5499 16.5628 13.6231 16.4163 13.733 16.3065C15.4901 14.7324 17.2473 13.1583 19.0044 11.5842C19.1143 11.4743 19.2241 11.4011 19.3339 11.2913C19.3705 11.2547 19.4437 11.2181 19.4071 11.1449C19.3705 11.0716 19.2973 11.0716 19.2241 11.0716C19.0777 11.0716 18.9678 11.1449 18.858 11.2181C16.6982 12.5726 14.5383 13.927 12.3785 15.3181C12.2687 15.3913 12.232 15.4645 12.2687 15.611C12.5249 16.4163 12.7812 17.2217 13.074 18.0271C13.1472 18.2101 13.2204 18.4664 13.3303 18.7592Z" fill="#0D2668"/>
          </svg>
        </a>
      </div>
 </div>

 @endsection