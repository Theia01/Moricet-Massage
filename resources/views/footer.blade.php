<div class="footer">
    <ul>
        <li><a href="legal/cgu.php" target="_blank" class="footer_green">CGU</a></li>
        <li><a href="{{ route("contact") }}" class="footer_green">Contact</a></li>
    </ul>
    <ul class="social">
    @php
    $all_networks = \App\Services\SocialNetworkService::getAllSocialNetwork();
    @endphp

        @foreach (json_decode($all_networks) as $key => $net)
        <li>
            <a href="{{$net->url}}" class="{{$net->footer_icon}} {{$net->reseau.'li'}} " target="_blank">
                <span class="linktext">{{$net->reseau}} </span>
            </a>
        </li>

        <style>
            .{{$net->reseau.'li'}} {
            }
            .{{$net->reseau.'li'}}:hover {
                    color: {{$net->color}};
                    transition: all 0.3s;
                    text-decoration:none;    
            }
        </style>
        @endforeach
       
        
    </ul>
    <ul class="credits">
        <li><span>© 2020 Moricet massage</span></li>
    </ul>
</div>
