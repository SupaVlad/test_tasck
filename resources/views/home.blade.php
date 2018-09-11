@extends('layouts.welcome')

@section('content')
    <div class="wrapper">

        <div class="side-column">

            <nav class="side-column__nav">
                <ul id="main-menu">
                    <li><a class="side-column__menu--feed" href="#">Feed</a></li>
                    <li><a class="side-column__menu--ask" href="#">Ask a Colleague</a></li>
                    <li><a class="side-column__menu--comp" href="#">Companies</a></li>
                    <li><a class="side-column__menu--service" href="#">Service Directory</a></li>
                </ul>
            </nav>

            <div class="side-column__advertising">
                <p class="side-column__advertising-text--top">Advertisement</p>
                <div class="side-column__advertising-img side-column__advertising-img--left-side"></div>
                <p class="side-column__advertising-text--bottom">Ads By Denteez.com</p>

            </div>

            <div class="side-column__featured">
                <p class="side-column__featured-text-top">Featured Companies</p>
                <a href="" class="side-column__link">See All</a>
                <div class="side-column__featured-block">
                    <div class="side-column__featured-block-img side-column__featured-block-img--img1"></div>
                    <div class="side-column__featured-block-info">
                        <div class="side-column__featured-block-name">
                            <p>
                                Company Name
                            </p>
                        </div>
                        <div class="side-column__featured-block-about">
                            <p>
                                Manufacturer Belgrade, Serbia
                            </p>
                        </div>

                        <a href="">
                            Follow Now
                        </a>

                    </div>
                </div>

                <div class="side-column__featured-block">
                    <div class="side-column__featured-block-img side-column__featured-block-img--img2"></div>
                    <div class="side-column__featured-block-info">
                        <div class="side-column__featured-block-name">
                            <p>
                                Company Name
                            </p>
                        </div>
                        <div class="side-column__featured-block-about">
                            <p>
                                Service Provider New York, USA
                            </p>
                        </div>

                        <a href="">
                            Follow Now
                        </a>

                    </div>
                </div>

                <div class="side-column__featured-block">
                    <div class="side-column__featured-block-img side-column__featured-block-img--img3"></div>
                    <div class="side-column__featured-block-info">
                        <div class="side-column__featured-block-name">
                            <p>
                                Company Name
                            </p>
                        </div>
                        <div class="side-column__featured-block-about">
                            <p>
                                Supplier London, England
                            </p>
                        </div>

                        <a href="">
                            Follow Now
                        </a>

                    </div>
                </div>
            </div>

            <div class="side-column__footer">
                <p>Denteez Copyright 2015</p>
                <a href="">Terms of use</a>
                <a href="">Privacy Policy</a>
            </div>

        </div>


        <div class="center-column">

        </div>


        <div class="side-column right-side">

            <div class="side-column__featured side-column__featured--right-side">
                <p class="side-column__featured-text-top side-column__featured-text-top--right-side">People you may know</p>
                <a href="" class="side-column__link">See All</a>
                <div class="side-column__featured-block side-column__featured-block--right-side">
                    <div class="side-column__featured-block-name side-column__featured-block-name--right-side">
                        <p>
                            Dennis Adams
                        </p>
                    </div>
                    <div class="side-column__featured-block-img side-column__featured-block-img--img4"></div>

                    <div class="side-column__featured-block-info">

                        <div class="side-column__featured-block-about">
                            <p>
                                Dentist (Practice Owner)
                            </p>
                            <p>
                                London, England
                            </p>
                        </div>

                        <a href="">
                            Add Friend
                        </a>

                    </div>
                </div>

                <div class="side-column__featured-block side-column__featured-block--right-side">
                    <div class="side-column__featured-block-name side-column__featured-block-name--right-side">
                        <p>
                            Mary Carpenter
                        </p>
                    </div>
                    <div class="side-column__featured-block-img side-column__featured-block-img--img5"></div>

                    <div class="side-column__featured-block-info">

                        <div class="side-column__featured-block-about">
                            <p>
                                Dentist (Practice Owner)
                            </p>
                            <p>
                                Belgrade, Serbia
                            </p>
                        </div>

                        <a href="">
                            Add Friend
                        </a>

                    </div>
                </div>

                <div class="side-column__featured-block side-column__featured-block--right-side">
                    <div class="side-column__featured-block-name side-column__featured-block-name--right-side">
                        <p>
                            Danielle Salazar
                        </p>
                    </div>
                    <div class="side-column__featured-block-img side-column__featured-block-img--img6"></div>

                    <div class="side-column__featured-block-info">

                        <div class="side-column__featured-block-about">
                            <p>
                                Dentist (Practice Owner)
                            </p>
                            <p>
                                Paris, France
                            </p>
                        </div>

                        <a href="">
                            Add Friend
                        </a>

                    </div>
                </div>
            </div>


            <div class="side-column__featured side-column__featured--right-side">
                <p class="side-column__featured-text-top side-column__featured-text-top--right-side">Featured Products</p>
                <a href="" class="side-column__link">See All</a>
                <div class="side-column__featured-block side-column__featured-block--right-side">
                    <div class="side-column__featured-block-name side-column__featured-block-name--right-side">
                        <p>
                            Product Name
                        </p>
                    </div>
                    <div class="side-column__featured-block-img side-column__featured-block-img--img7"></div>

                    <div class="side-column__featured-block-info">

                        <div class="side-column__featured-block-about side-column__featured-block-about--right-side">
                            <p>
                                Product Short
                                Description. The quick brown
                                fox jumps over the
                                lazy dog.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="side-column__featured-block side-column__featured-block--right-side">
                    <div class="side-column__featured-block-name side-column__featured-block-name--right-side">
                        <p>
                            Product Name
                        </p>
                    </div>
                    <div class="side-column__featured-block-img side-column__featured-block-img--img8"></div>

                    <div class="side-column__featured-block-info">

                        <div class="side-column__featured-block-about side-column__featured-block-about--right-side">
                            <p>
                                Product Short
                                Description. The quick brown
                                fox jumps over the
                                lazy dog.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="side-column__advertising side-column__advertising--right-side">
                <p class="side-column__advertising-text--top">Advertisement</p>
                <div class="side-column__advertising-img side-column__advertising-img--right-side"></div>
                <p class="side-column__advertising-text--bottom">Ads By Denteez.com</p>

            </div>


        </div>

    </div>


@endsection