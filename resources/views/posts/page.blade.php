@extends('layout.main')

@section('title', $post->label)


@section('content')
<div class="row">
    <div class="col-md-12">


        <div class="googleAd">
            <p class="text-center"> Google Adsense Ad.</p>
        </div>
        <!--end of google adsense-->
        <div class="clearfix"></div><hr>


        
        <div class="col-md-9">

            <article class="blogPost">
                
                <h3 class="text-uppercase text-center">{{ Html::link('/'.$post->slug, $post->title) }}</h3>

                <p class="postMeta text-center"> 
                    <i class="fa fa-hand-o-right"></i> Created: <span> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span> 
                    <i class="fa fa-heart-o"></i> Label: <span>{{ $post->label }}</span>
                </p>

                <div class="postBody">{{ $post->body }}</p>

                <div class="postSource">
                	<strong>Source:</strong> <em>{{ Html::link($post->source, $post->source, [], true) }}</em><br/>
                	<strong>You can follow us or the author on facebook at:</strong> <em>{{ Html::link('http://www.facebook.com/username', 'www.facebook.com/username') }}</em>
                </div>

            </article>
            <div class="podtComment">
            	<p class="text-center">Embed facebook's/ google+'s/ disqus's/ github's or any other comment system here.</p>
            </div>

            <div class="googleAd">
                <p class="text-center"> Google Adsense Ad.</p>
            </div>

        </div>
        <!--end of main posts area-->



        <div class="col-md-3">
            <div class="well blogPostSidebar">

            	<div class="sidebarWidget">
					<h5>#ON FACEBOOK</h5>
					<button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Follow Us On Facebook</button>

					<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</small></p>
				</div>

                <div class="sidebarWidget">
					<h5>#LABELS</h5>
					@foreach($labels as $label)
	                {{ Html::link('label/'.$label->label, $label->label, array('class' => 'btn btn-default btn-xs')) }}
	                @endforeach
	            </div>
            </div>

            <div class="googleAdSidebar">
                <p class="text-center"> Google Adsense Ad.</p>
            </div>
            <!--end of sidebar googleAd-->
        </div>
        <!--end of sidebar area-->


    </div>
    <!--end of col-md-12-->
</div>
<!--end of row-->

@endsection