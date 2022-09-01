<div class="row ">
    <div class="col-lg-4 offset-4 py-2" >
        <a type="button" href="{{route('home')}}" class="btn {{ request()->is('/') ? 'btn-primary' : 'btn-default' }}">Home</a>
        <a type="button" href="{{route('teachers')}}" class="btn {{ request()->is('teachers') ? 'btn-primary' : 'btn-default' }}">Teachers</a>
        <a type="button" href="{{route('classes')}}" class="btn {{ request()->is('classes') ? 'btn-primary' : 'btn-default' }}">Classes</a>
        <a type="button" href="{{route('subjects')}}"  class="btn {{ request()->is('subjects') ? 'btn-primary' : 'btn-default' }}">Subjects</a>
        <a type="button" href="{{route('configs')}}"  class="btn {{ request()->is('configs') ? 'btn-primary' : 'btn-default' }}">Configs</a>

    </div>
    
</div>