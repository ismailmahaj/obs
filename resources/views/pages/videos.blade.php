<!--@extends('template.base')
{{ $menuOn = false }}
@section('content')
<div class="container">
    <div class="row espace">
      <h1>Galerie de vidéos</h1>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=PoskJwfeDWQ&t=1s">
            <img src="https://i.ytimg.com/vi/PoskJwfeDWQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBSm6BXNvgA1zB4egt7OeKI3zxsgw">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=_nw6zKouIF8&t=6s">
            <img src="https://i.ytimg.com/vi/_nw6zKouIF8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCGu62fE5xmdDPsfWQbzL4CdwksDA">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=pivfY_elS80">
            <img src="https://i.ytimg.com/vi/pivfY_elS80/hqdefault.jpg?sqp=-oaymwEWCMQBEG5IWvKriqkDCQgBFQAAiEIYAQ==&rs=AOn4CLBRWe7Gh8qBPTp-4yuDn-AAoGtkVw">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=6kRD8PS1aUg">
            <img src="https://i.ytimg.com/vi/6kRD8PS1aUg/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDVXkG7FT6cQHUSLDcMHtcrvdBxXA">
            </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=qnHyxcUtGh4">
            <img src="https://i.ytimg.com/vi/qnHyxcUtGh4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBR6wDErKcddMp1w6SF72ggi6JpbA">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=Gzj0tw0RcJ8&t=393s">
            <img src="https://i.ytimg.com/vi/Gzj0tw0RcJ8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAoRUyjnqQJlkDzZke8XamenIWKXQ">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=rPswT-xeCCo">
            <img src="https://i.ytimg.com/vi/rPswT-xeCCo/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDerdsi7OyqLz0JKql7hASKdyW_jQ">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=03Vo_p-D0fk">
            <img src="https://i.ytimg.com/vi/03Vo_p-D0fk/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLATVXZsVRyP1bSLhXKfpQuEj6uJFQ">
            </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=McLYrMkLQ9Q">
            <img src="https://i.ytimg.com/vi/McLYrMkLQ9Q/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBg2NaFq9j-mB2A4CReRo729DVjNQ">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=4RKP4kHUJAE">
            <img src="https://i.ytimg.com/vi/4RKP4kHUJAE/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBSyZLwe8Myt7KfrJGjYk1mDZx_mA">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=WPDa6Jmmii4">
            <img src="https://i.ytimg.com/vi/WPDa6Jmmii4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLABmRXYOQzC6dNZ4gK36vWd65SkcQ">
            </a>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="thumb">
            <a data-fancybox="video" href="https://www.youtube.com/watch?v=nKsH2wsrs98">
            <img src="https://i.ytimg.com/vi/nKsH2wsrs98/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLA_Wl8gulKg0XA6pvYt9Fk_2fHVZA">
            </a>
            </div>
        </div>
    </div>
</div>

@endsection-->