		<!-- ========== Left Sidebar Start ========== -->
@if(Auth::User()->role=="Kepala Cabang")
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <br>
                    <div id="sidebar-menu">
                        <ul>
                            <li><a href="{{url('/dashboard')}}" ><i class="md md-home"></i>Dashboard</a></li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-desktop-windows"></i><span> Master Data </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/nasabah')}}">Data Nasabah</a></li>
                                    <li><a href="{{url('/waris')}}">Data Waris</a></li>
                                    <li><a href="{{url('/pegawai')}}">Data Pegawai</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-credit-card"></i><span> Rekening </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{url('/rekening')}}">Data Rekening</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-shopping-cart"></i><span> Transaksi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{url('/transaksi')}}">Data Transaksi</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
        <!-- Left Sidebar End --> 

        @if(Auth::User()->role=="cs")
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <br>
                    <div id="sidebar-menu">
                        <ul>
                            <li><a href="{{url('/dashboard')}}" ><i class="md md-home"></i>Dashboard</a></li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-desktop-windows"></i><span> Master Data </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/nasabah')}}">Data Nasabah</a></li>
                                    <li><a href="{{url('/waris')}}">Data Waris</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-credit-card"></i><span> Rekening </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/rekening')}}">Data Rekening</a></li>
                                </ul>
                            </li>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif

            @if(Auth::User()->role=="teller")
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <br>
                    <div id="sidebar-menu">
                        <ul>

                            <li><a href="{{url('/dashboard')}}" ><i class="md md-home"></i>Dashboard</a></li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-credit-card"></i><span> Rekening </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/rekening')}}">Data Rekening</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-shopping-cart"></i><span> Transaksi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/transaksi')}}">Data Transaksi</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endif