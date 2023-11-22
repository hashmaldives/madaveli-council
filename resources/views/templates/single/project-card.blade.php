<!--  CARD ITEM START  -->
<div class="col-lg-6 col-md-6 col-12 project-card">
    <a href="{{ route($item->route, $item->id) }}">
        <div class="thumbnail zoh">
            @php 
                if (!empty($item->image)) : 
                    $image = getMedia($item->image, 'large-thumbnail');
                else :
                    $image = getMedia(nova_get_setting('fallback_element_image'), 'large-thumbnail');
                endif;
            @endphp
            <img src="{{ $image }}">
            <div class="text">
                <div class="text-inner">
                    @if(!empty($item->project_status))
                    <span class="badge primary lang-{{ $language }} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $item->project_status->title_dh : $item->project_status->title_en }}</span>
                    @endif
                    @if(!empty($item->project_category))
                    <span class="badge light lang-{{ $language }} visible"><i class="fa-solid fa-tag"></i>&nbsp;{{ $language == 'dh' ? $item->project_category->title_dh : $item->project_category->title_en }}</span>
                    @endif
                    <div class="title">
                        <div class="lang-{{ $language }} visible"><h6>{{ $language == 'dh' ? $item->title_dh : $item->title_en }}</h6></div>
                    </div><!--title-->
                    <div class="meta">
                        <p>
                            <i class="far fa-calendar-check fa-lg"></i>
                            <span class="lang-{{ $language }} visible">
                                {{ Carbon\Carbon::parse($item->start_date)->translatedFormat('d M Y') }}
                            </span>
                        </p>
                    </div><!-- / meta -->
                </div><!-- / text-inner -->
            </div><!--text-->
            @if(!empty($item->project_completion_percentage))
            <div class="project-progress-container {{ $language }}">
                <p>{{ $item->project_completion_percentage }} %</p>
                <div class="project-progress">
                    <div class="progress-bar" style="width: {{ $item->project_completion_percentage }}%;"></div>
                </div><!--project-progress-->
            </div><!--project-progress-container-->
            @endif
        </div>
        <!--thumbnail-->
        
    </a>
</div>
<!--col-lg-6 card-item-->
<!--  CARD ITEM END  -->