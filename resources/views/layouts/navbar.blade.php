<div>
    <!-- Be present above all else. - Naval Ravikant -->
    
    <ul class="navbar">
    
        {{--<li><a href="/">Home</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/post/first-post">Blog</a></li>
        <li><a href="/about">About</a></li> --}}

        {{-- kerangka looping php --}}
        {{-- <?php foreach($x as $y)?>
        
        <?php endforeach;?> --}}


        {{-- Jika menggunakan Blade , kerangka PHP bisa menjadi seperti ini :  --}}
        
        @foreach($navbar as $name => $url)
            <li><a href="{{$url}}">{{$name}}</a></li>
        @endforeach
        
    </ul>

</div>