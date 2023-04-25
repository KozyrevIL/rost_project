@extends('layouts.master')

@section('content')

<div id="MainContent_DivFilter">
    <div class="container d-sm-block pt-3 pb-5" id="blok2.1">
        <div class="row">
            <div class="card w-100">
                <div class="card-body">
                    <div>
                        <table cellspacing="0" id="MainContent_GridView1" style="width:100%;border-collapse:collapse;">
                            <tr>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            <tr>
                                <td>
                                    <div id="MainContent_GridView1_BaseText_blok_0" class="media well">
                                        <div class="w-100">
                                            <div class="col-12">
                                            @if ($pageBlock->item!=null)
                                                <div id="MainContent_GridView1_PanelImageRight_0" style="padding: 2px; border: solid 0px #E88424; float: left; margin-right: 10px; height: 250px; overflow: hidden">
                                                    <a href="{{asset($pageBlock->item)}}" class="highslide"><img title="Click to view full size" alt="Thumbnail image " class="highslide" id="MainContent_GridView1_ImageItem_0" class="img-responsive img-thumbnail" src="{{asset($pageBlock->item)}}?w=250&h=200" style="border-width:0px;width:250px;" /></a>

                                                    <div class='highslide-caption'></div>

                                                    <div id="controlbar" class="highslide-overlay controlbar"><a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a><a href="#" class="next" onclick="return hs.next(this);" title="Next (right arrow key)"></a><a href="#" class="highslide-move" onclick="return false;" title="Click and drag to move"></a><a href="#" class="close" onclick="return hs.close(this);" title="Close"></a></div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-12">
                                                <h4>
                                                    <b>
                                                        {{$pageBlock->caption}}
                                                    </b>
                                                </h4>
                                                {!!$pageBlock->page_text!!}
                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="comments">
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                var disqus_config = function() {
                    this.page.url = 'https://rostot.ru/desc?id_text=506&items=128f0eb0-44ea-4cf1-a153-262fedafbb07'; // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://https-rostot-ru.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        </div>
    </div>
</div>




@endsection