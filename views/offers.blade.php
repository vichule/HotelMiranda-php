@extends('layout')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Our Offers</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="offers.php" id="currentBtn">Offers</a>
        </div>
    </section>

    <section class="offermain">
        @foreach ($rooms as $room)
        <div class="offermain__item">
            <a href="room_details.php?id={{$room['room_id']}}"><img src="{{ json_decode($room['photo_url'])[0] }}" alt=""></a>
            <div class="offermain__item-card">
                <div class="offermain__item__container1">
                    <div class="offermain__item__container1__titles">
                        <h1>Room Number {{ ($room['room_number']) }}</h1>
                        <a href="room_details.php?id={{$room['room_id']}}">{{ ($room['room_type']) }}</a>
                    </div>
                    <div class="offermain__item__container1__prices">
                        <p>$500/Night</p>
                        <p>${{ ($room['price']) }}/Night</p>
                    </div>
                </div>
                <div class="offermain__item__container2">
                    <div class="offermain__item__container2__description">
                        <p>{{ ($room['description']) }}</p>
                        <a href="room_details.php?id={{$room['room_id']}}" class="button">BOOK NOW</a>
                    </div>
                    <div class="offermain__item__container2__list">
                        <ul>
                            <li><img src="./assets/offers/air.png">Air conditioner</li>
                            <li><img src="./assets/offers/breakfast.png">Breakfast</li>
                            <li><img src="./assets/offers/cleaning.png">Cleaning</li>
                            <li><img src="./assets/offers/grocery.png">Grocery</li>
                            <li><img src="./assets/offers/shop.png">Shop near</li>

                        </ul>
                        <ul>
                            <li><img src="./assets/offers/wifi.png">High speed WiFi</li>
                            <li><img src="./assets/offers/kitchen.png">Kitchen</li>
                            <li><img src="./assets/offers/shower.png">Shower</li>
                            <li><img src="./assets/offers/bed.png">Single bed</li>
                            <li><img src="./assets/offers/towels.png">Towels</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </section>

    <section class="popularList">
        <h1 class="popularList__title">POPULAR LIST</h1>
        <h3 class="popularList__subtitle">Popular Rooms</h3>
        <div class="swiper popularList__slider">
            <div class="swiper-wrapper popularList__slider__wrapper">
                @foreach ($popular as $room)
                <div class="swiper-slide popularList__slider__wrapper__slide">
                    <img id="roomsImg" src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                    <img src="./assets/home/frame_rooms.jpg" alt=""
                        class="popularList__slider__wrapper__slide__complements">
                    <h1 class="popularList__slider__wrapper__slide__title">{{ ($room['room_type']) }}</h1>
                    <p class="popularList__slider__wrapper__slide__par">{{ ($room['description']) }}</p>
                    <span class="popularList__slider__wrapper__slide__price">${{ ($room['price']) }}/Night</span>
                    <a href="room_details.php?id={{$room['room_id']}}">Book Now</a>
                </div>
                @endforeach
                {{-- <div class="swiper-slide popularList__slider__wrapper__slide">
                    <img id="roomsImg" src="./assets/home/minimal_room.jpg" alt="">
                    <img src="./assets/home/frame_rooms.jpg" alt=""
                        class="popularList__slider__wrapper__slide__complements">
                    <h1 class="popularList__slider__wrapper__slide__title">Minimal Duplex Room</h1>
                    <p class="popularList__slider__wrapper__slide__par">Lorem ipsum dolor sit amet, consectetur adipi
                        sicing elit, sed do eiusmod tempor.</p>
                    <span class="popularList__slider__wrapper__slide__price">$345/Night</span>
                    <a href="room_details.php">Book Now</a>
                </div>
                <div class="swiper-slide popularList__slider__wrapper__slide">
                    <img id="roomsImg" src="./assets/home/minimal_room.jpg" alt="">
                    <img src="./assets/home/frame_rooms.jpg" alt=""
                        class="popularList__slider__wrapper__slide__complements">
                    <h1 class="popularList__slider__wrapper__slide__title">Minimal Duplex Room</h1>
                    <p class="popularList__slider__wrapper__slide__par">Lorem ipsum dolor sit amet, consectetur adipi
                        sicing elit, sed do eiusmod tempor.</p>
                    <span class="popularList__slider__wrapper__slide__price">$345/Night</span>
                    <a href="room_details.php">Book Now</a>
                </div>
                <div class="swiper-slide popularList__slider__wrapper__slide">
                    <img id="roomsImg" src="./assets/home/minimal_room.jpg" alt="">
                    <img src="./assets/home/frame_rooms.jpg" alt=""
                        class="popularList__slider__wrapper__slide__complements">
                    <h1 class="popularList__slider__wrapper__slide__title">Minimal Duplex Room</h1>
                    <p class="popularList__slider__wrapper__slide__par">Lorem ipsum dolor sit amet, consectetur adipi
                        sicing elit, sed do eiusmod tempor.</p>
                    <span class="popularList__slider__wrapper__slide__price">$345/Night</span>
                    <a href="room_details.php">Book Now</a>
                </div> --}}
            </div>

            <div class="popularList__slider__backArrow">&#10094;</div>
            <div class="popularList__slider__forwardArrow">&#10095;</div>

        </div>

    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
