<footer>
    <div class="foot d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="links d-flex gap-5 justify-content-start py-3">
                @foreach ($data['footerLinks'] as $foots)
                <div>
                    <h1 class="py-3">
                        {{$foots['title']}}
                    </h1>
                    <div class="d-flex flex-column justify-content-start gap-1">
                        @foreach ($foots['links'] as $link)
                            <a href="#">
                                {{$link['title']}}
                            </a>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <img class="logo" src="{{URL::asset('/images/dc-logo-bg.png')}}" alt="logo bg">
        </div>
    </div>
</footer>
