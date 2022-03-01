@if(Session('success'))
                 <div class="alert bg-primary fade in text-center">
                                        <a href="#" class="close" data-dismiss="alert">×</a> {{ Session('success') }}
                                    </div>
@endif

<h2 class="text-center text-danger">{{ Session::get('message') }}</h2>
<h2 class="text-center text-danger">{{ Session('success') }}</h2>



<!-- Error Message -->

<!-- default $message -->
<!-- @error('brand_name')
     <div class="alert bg-danger fade in text-center">
                                        <a href="#" class="close" data-dismiss="alert">×</a> {{ $message }} 
                                    </div>
@enderror -->

<!-- @error('testt')
     <div class="alert bg-danger fade in text-center">
                                        <a href="#" class="close" data-dismiss="alert">×</a> {{ $message }}
                                    </div>
@enderror -->


 @if($errors->any())
@foreach($errors->all() as $errorr)
     <div class="alert bg-danger fade in text-center">
                                        <a href="#" class="close" data-dismiss="alert">×</a> 
                                        {{ $errorr }}
                                    </div>
@endforeach
@endif
