<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div>
                <a href='{{url('media')}}'>Media</a>
                <a href='{{url('feed')}}'>Search</a>
            </div>
            <div class="content">                
                <div>                   
                    @if(isset($instagrams) && count($instagrams) > 0)                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                    
                        @foreach($instagrams as $i=>$instagram)                        
                            <input type="hidden" name="id[{{$i}}]" value="{{$instagram['id']}}"/>
                            <h2>{{implode('#',$instagram['tags'])}}</h2>
                            <h3>{{$instagram['user']['username']}}</h3>                        
                            <img src="{{$instagram['images']['low_resolution']['url']}}" />
                            <p>{{$instagram['likes']['count']}}</p>
                            <p>{{$instagram['caption']}}</p>                        
                        @endforeach
                    @endif
                </div>                
            </div>
        </div>
    </body>
</html>
