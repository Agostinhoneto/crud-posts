<div class="col-md-4">
    <aside class="right-sidebar">
        <!--
        <div class="search-widget">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-lg btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </div>
        -->

        <div class="widget">
            <div class="widget-heading">
                <h4>Categories</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('categories.index', $category->slug) }}"><i class="fa fa-angle-right"></i> {{ $category->title }}</a>
                            <span class="badge pull-right">{{ $category}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Popular Posts</h4>
            </div>
            <div class="widget-body">
                <ul class="popular-posts">
                        <li>
                            @if ($post->image_thumb_url)
                                <div class="post-image">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img src="{{ $post->image_thumb_url }}" />
                                    </a>
                                </div>
                            @endif
                            <div class="post-body">
                                <h6><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h6>
                                <div class="post-meta">
                                    <span>{{ $post->date }}</span>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
