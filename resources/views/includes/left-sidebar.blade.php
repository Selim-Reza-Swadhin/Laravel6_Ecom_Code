 <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categoriesbg</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
                @foreach($categoriesfntpage as $categoryfnp)
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{ $categoryfnp->sub_cat }}</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
{{--                        @foreach($categoryfnp->categoryFn as $category)--}}
                      <div class="col-sm-4 col-md-3">
{{--                          <a href="">{{$category}}</a>--}}
                      </div>
{{--                    @endforeach--}}
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
              </li>
              <!-- /.menu-item -->

                @endforeach

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming reza</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="{{asset('assets/website/images/banners/banner-side.png')}}" /></a> </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu -->
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>

              <!-- /.menu-item -->

            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>
