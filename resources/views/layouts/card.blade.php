<div class="card pr-2" style="width: 18rem;">
   @yield('card_image')
    <div class="card-body">
        <h5 class="card-title">@yield('card_title')</h5>
        <p class="card-text">@yield('card_text')</p>
    </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">@yield('card_desc1')</li>
            <li class="list-group-item">@yield('card_desc2')</li>
            <li class="list-group-item">@yield('card_desc3')</li>
        </ul>
     <div class="card-body">
         @yield('card_link')
     </div>
</div>