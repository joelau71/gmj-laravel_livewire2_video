
<div class="laravel_livewire2_video relative max-h-screen overflow-hidden" id="laravel_livewire2_video_{{$page_element_id}}">
    {!! $collection->getTranslation("content", $locale) !!}
</div>

@push('css')
    <style>
        .laravel-livewire2-video {
            position:relative;
            padding-bottom:56.25%;
            height:0;
            overflow:hidden;
        }

        .laravel-livewire2-video iframe,
        .laravel-livewire2-video object,
        .laravel-livewire2-video embed {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }
    </style>
@endpush

@push('js')
    <script>
        gsap.from("#laravel_livewire2_video_{{$page_element_id}} .content-text", {
            scrollTrigger:{
                trigger: "#laravel_livewire2_video_{{$page_element_id}}",
                start: 'top 40%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.6,
        });
    </script>
@endpush