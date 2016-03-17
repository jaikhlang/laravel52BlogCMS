@extends('layout.main')

@section('title', 'Home')


@section('content')
<div class="row">
    <div class="col-md-12">


        <div class="googleAd">
            <p class="text-center"> Google Adsense Ad.</p>
        </div>
        <!--end of google adsense-->
        <div class="clearfix"></div><hr>


        
        <div class="col-md-9">
            @foreach($posts as $post)
            <article class="blogPost">
                
                <h3 class="text-uppercase">{{ Html::link('/'.$post->slug, $post->title) }}</h3>

                <p class="postMeta"> 
                    <i class="fa fa-hand-o-right"></i> Created: <span> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span> 
                    <i class="fa fa-heart-o"></i> Label: <span>{{ $post->label }}</span>
                </p>

                <div class="postBody">{{ substr($post->body, 0, 400) }}</p>
                <p>{{ Html::link('/'.$post->slug, ' Read More', ['class' => 'btn btn-default btn-xs']) }}</p>

            </article>

            <div class="googleAd">
                <p class="text-center"> Google Adsense Ad.</p>
            </div>
            @endforeach

            <div class="postPaginate text-center">
                {!! $posts->links() !!}
            </div>
        </div>
        <!--end of main posts area-->



        <div class="col-md-3">
            <div class="well">
                @foreach($labels as $label)
                {{ Html::link('label/'.$label->label, $label->label, array('class' => 'btn btn-default btn-xs')) }}
                @endforeach
            </div>
        </div>
        <!--end of sidebar area-->


    </div>
    <!--end of col-md-12-->
</div>
<!--end of row-->

@endsection