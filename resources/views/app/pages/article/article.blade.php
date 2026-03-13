<div class="bg_white py-55_55 mb-100">
    <div class="container">

        <div class="article">
            <div class="content">
                @if($article)

                    {!! $article !!}

                @else

                    @include('app.pages.article._static_article')

                @endif
            </div>
        </div>

    </div>
</div>

