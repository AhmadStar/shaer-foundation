<section class="about__area-eight shortcode-about-us-information shortcode-about-us-information-style-16" @style($variablesStyle)>
    <div class="container">
        <div class="box-yellow-about">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="about__img-wrap-seven">
                        @if ($image = $shortcode->image)
                            {{ RvMedia::image($image, 'about-us') }}}
                        @endif

                        @if ($image1 = $shortcode->image_1)
                            <div class="about__award-box about__award-box-two2">
                                {{ RvMedia::image($image1, 'about-us') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-seven">
                        <div class="section-title mb-25">
                            @if ($subtitle = $shortcode->subtitle)
                                <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                            @endif

                            @if ($title = $shortcode->title)
                                <h2 class="title wow">{!! BaseHelper::clean($title) !!}</h2>
                            @endif
                        </div>

                        @if ($description = $shortcode->description)
                            <p>{!! BaseHelper::clean($description) !!}</p>
                        @endif

                        <div class="about__content-inner-five">
                            @if (($dataCount = $shortcode->data_count) && ($dataCountDescription = $shortcode->data_count_description))
                            <div class="about__list-img-four">
                                <div class="about__award-box about__award-box-two-rel">
                                    <div class="icon">
                                        <i class="flaticon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">{{ $dataCount }}+</h2>
                                        <p>{!! BaseHelper::clean($dataCountDescription) !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(count($tabs))
                                <div class="about__list-box">
                                    <ul class="list-wrap">
                                        @foreach ($tabs as $tab)
                                            @continue(! $title = Arr::get($tab, 'title'))

                                            <li>
                                                <i class="flaticon-arrow-button"></i>
                                                {!! BaseHelper::clean($title) !!}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                            <a href="{{ $buttonUrl }}" class="btn btn-two">{!! BaseHelper::clean($buttonLabel) !!}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>