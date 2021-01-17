<section class="posts">
    <div class="container">
        <div>
            <h1>Posts<h1>
        </div>

        <div class="row">
            <div class="col-sm-7 shadow ">
                <div class="post shadow row p-2">
                    @foreach($posts as $post)
                    <div class="col-sm-4 p-2 ">
                    @if($post->post_image ==null)
                    <img class="img-fluid" src="/images/noImage.png"
                            alt="Avatar User">
                            @else
                        <img class="img-fluid" src="/storage/post_images/{{  $post->user_id }}/{{ $post->post_image }}"
                            alt="Avatar User">
                            @endif
                    </div>
                    <div class="col-sm-8" style="border-bottom: 1px solid #0275d8;">
                        <h2 style="text-transform:capitalize;color:#0275d8">#<a id="post-links"
                                href="/posts/{{$post->id}}">{{ $post->title }}</a>
                        </h2>
                        <p>{{ $post->content}}<p>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <p class="p-0 m-0">Posted By<h4 style="color:#0275d8">@<a id="post-links"
                                                    href="#">{{ $post->author->name ?? "N/A"}}</a></h4>
                                        </p>
                                    </div>
                                    <div class="col-sm-6"><i style="color:#0275d8;" class="far fa-calendar-alt"></i>
                                        {{ $post->created_at}}</div>

                                </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-5 shadow" style="background-color: #fff;">
                <h1>Popular authors</h1>
                <div class="row m-1" style="border-left: 1px solid black">
                    @foreach($authors as $author)
                    <div class="col-sm-4 author-img">
                        @if($author->avatar ==null) 
                        <img class="img-fluid"
                            style="height:80px; width:100px;"
                            src="/images/noImage.png" alt="Avatar Author">
                            @else
                        <img class="img-fluid rounded-circle"
                            style="border: 2px solid #0275d8; height:80px; width:100px;"
                            src="/storage/avatars/{{  $author->id }}/{{ $author->avatar }}" alt="Avatar Author">
                            @endif
                    </div>
                    <div class="col-sm-8 author">
                        <h2>@<a id="post-links" href="#">{{ $author->name }}</a></h2>
                        <p>{{ $author->biography }}</p>

                        <div class="col-sm-12">Actif since</div>
                        <div class="col-sm-12"><a href="#"></a>{{ $author->email }}</div>

                    </div>
                    @endforeach
                </div>
                <!-- If i had more time i would have add some categories to the post and they would be visible on the right bottom corner of the screen under popular authors
                <div class="row">
                    <div class="col-sm-4 ">
                        <h1>Popular Categories</h1>
                        <div class="row m-0" style="border-left: 1px solid black">
                            <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                            <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                            <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                        </div>

                    </div>
                </div> 
                -->
            </div>
        </div>
    </div>
</section>
