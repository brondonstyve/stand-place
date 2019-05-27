@include('layout.css')
@include('layout/header')
@include('layout/imgcours')
@include('layout/borduredecours')
<div id="main-content" class="col-sm-12 col-md-9 col-sm-12 col-xs-12 pull-right">
        <main id="main" class="site-main layout-course" role="main">

                        <div id="fond-2">
                                        <h6>.</h6>
                                </div>
@for ($i = 1; $i < 5; $i++)

@include('layout/listecours',['cours'=>$i])
<div id="fond-2">
        <h6>.</h6>
</div>
@endfor

</div>
</main>
</div>
</div>
</section>

<script src="//code.jquery.com/jquery.min.js"></script>
@include('flashy::message')

@include('layout/footer')
@include('layout/fin')
