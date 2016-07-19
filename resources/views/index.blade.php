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
                    @if(session('status'))
                        {{session('status')}}
                    @endif
                </div>
                <div>                
                    <form action="" method="GET">
                        Tags <input type="text" name="txtSearch"/>
                        <input type="submit" value="Search"/>
                    </form>                
                </div>
                <div>                   
                    @if(isset($instagrams) && count($instagrams) > 0)
                    <form action="save" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                        
                        @foreach($instagrams as $i=>$instagram)
                            <input type="hidden" name="id[{{$i}}]" value="{{$instagram['id']}}"/>
                            <h3>{{$instagram['user']['username']}}</h3>                        
                            <img src="{{$instagram['images']['low_resolution']['url']}}" />
                            <p>{{$instagram['likes']['count']}}</p>
                            <p>{{$instagram['caption']['text']}}</p>                        
                        @endforeach                        
                        <input type="submit" value="Save" name="btnSave"/>
                    </form>
                    @else
                        <p>No data</p>
                    @endif
                </div>                
            </div>
        </div>
    </body>
</html>
