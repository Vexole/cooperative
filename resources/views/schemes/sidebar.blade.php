<div class="s-12 m-5 l-4 margin-bottom" >
            <div class="box"  style="height:320px;">
              <h3>News</h3>
           
                <table>
                    @foreach($news as $new)  
                        <tr>
                            <td><a href="{{route('news.show', $new->id)}}">{{$new->news_title}}</a></td>
                        </tr>
                    @endforeach       
                </table>
            </div>

            <div class="box"  style="height:320px;">
              <h3>Notices</h3>
                <table>
                    @foreach($notices as $notice)  
                        <tr>
                                <td><a href="{{route('notices.show', $notice->id)}}">{{$notice->notice_title}}</a></td>
                         </tr>
                    @endforeach       
                </table>
            </div>
    </div>