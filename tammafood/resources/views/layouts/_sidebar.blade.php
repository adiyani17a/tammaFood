<div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{ url('/home') }}" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">TammaFood</span><span style="display: none;" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-blue">8</span></a>
               
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="{{ asset('assets/images/avatar/48.jpg')}}" alt="" class="img-responsive img-circle">&nbsp;<span class="hidden-xs">{{ Auth::user()->name }}</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                </ul>
            </div>
        </nav>
            <!-- BEGIN CONFIG MODAL PORTLET -->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <ul class="list-inline item-details">
                        <li><a href="http://themifycloud.com">Admin templates</a></li>
                        <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                    </ul>
                </div>
            </div>
            <!-- END MODAL CONFIG PORTLET -->
        </div>
        <!-- END TOPBAR -->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
            <div id='cssmenu'>
                <ul id="side-menu" class="nav">
                    
                    <div class="clearfix"></div>
                    <li class="{{Request::is('master') ? 'active' : '' || Request::is('master/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                        </i>
                        <span class="menu-title">Master</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('master/datasuplier/suplier') ? 'active' : '' || Request::is('master/datasuplier/*') ? 'active' : '' }}"><a href="{{ url('/master/datasuplier/suplier') }}"><span class="submenu-title">Master Data Suplier</span></a>
                            </li>
                            <li class="{{ Request::is('master/datacust/cust') ? 'active' : '' || Request::is('master/datacust/*') ? 'active' : '' }}"><a href="{{ url('/master/datacust/cust') }}"><span class="submenu-title">Master Data Customer</span></a>
                            </li>
                            <li class="{{ Request::is('master/databaku/baku') ? 'active' : '' || Request::is('master/databaku/*') ? 'active' : '' }}"><a href="{{ url('/master/databaku/baku') }}"><span class="submenu-title">Master Data Bahan Baku</span></a>
                            </li>
                            <li class="{{ Request::is('master/datajenis/jenis') ? 'active' : '' || Request::is('master/datajenis/*') ? 'active' : '' }}"><a href="{{ url('/master/datajenis/jenis') }}"><span class="submenu-title">Master Data Jenis Produksi</span></a>
                            </li>
                            <li class="{{ Request::is('master/datapegawai/pegawai') ? 'active' : '' || Request::is('master/datapegawai/*') ? 'active' : '' }}"><a href="{{ url('/master/datapegawai/pegawai') }}"><span class="submenu-title">Master Data Pegawai</span></a>
                            </li>
                            <li class="{{ Request::is('master/datakeuangan/keuangan') ? 'active' : '' || Request::is('master/datakeuangan/*') ? 'active' : '' }}"><a href="{{ url('/master/datakeuangan/keuangan') }}"><span class="submenu-title">Master Data Akun Keuangan</span></a>
                            </li>
                            <li class="{{ Request::is('master/datatransaksi/transaksi') ? 'active' : '' || Request::is('master/datatransaksi/*') ? 'active' : '' }}"><a href="{{ url('/master/datatransaksi/transaksi') }}"><span class="submenu-title">Master Data Transaksi Keuangan</span></a>
                            </li>
                            <li class="{{ Request::is('master/databarang/barang') ? 'active' : '' || Request::is('master/databarang/*') ? 'active' : '' }}"><a href="{{ url('/master/databarang/barang') }}"><span class="submenu-title">Master Data Barang</span></a>
                            </li>
                        </ul>   
                    </li>           
                    <div class="clearfix"></div>
                    <li class="{{Request::is('purchasing') ? 'active' : '' || Request::is('purchasing/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-credit-card fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Purchasing</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('purchasing/rencanabahanbaku/bahan') ? 'active' : '' || Request::is('purchasing/rencanabahanbaku/*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/rencanabahanbaku/bahan') }}"><span class="submenu-title">Rencana Bahan Baku Produksi</span></a>
                            </li>
                            <li class="{{ Request::is('purchasing/rencanapembelian/rencana') ? 'active' : '' || Request::is('purchasing/rencanapembelian/*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/rencanapembelian/rencana') }}"><span class="submenu-title">Rencana Pembelian</span></a>
                            </li>
                            <li class="{{ Request::is('purchasing/orderpembelian/order') ? 'active' : '' || Request::is('purchasing/orderpembelian/*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/orderpembelian/order') }}"><span class="submenu-title">Order Pembelian</span></a>
                            </li>
                            <li class="{{ Request::is('purchasing/belanjaharian/belanja') ? 'active' : '' || Request::is('purchasing/belanjaharian/*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/belanjaharian/belanja') }}"><span class="submenu-title">Belanja Harian</span></a>
                            </li>
                            <li class="{{ Request::is('purchasing/returnpembelian/pembelian') ? 'active' : '' || Request::is('purchasing/returnpembelian/*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/returnpembelian/pembelian') }}"><span class="submenu-title">Return Pembelian</span></a>
                            </li>
                            <!-- <li class="{{ Request::is('purchasing/belanjasuplier/suplier') ? 'active' : '' || Request::is('purchasing/belanjasuplier/suplier*') ? 'active' : '' }}">
                            <a href="{{ url('/purchasing/belanjasuplier/suplier') }}"><span class="submenu-title">Belanja Suplier</span></a>
                            </li> -->
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('inventory') ? 'active' : '' || Request::is('inventory/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Inventory</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('inventory/p_suplier/suplier') ? 'active' : '' || Request::is('inventory/p_suplier/*') ? 'active' : '' }}"><a href="{{ url('/inventory/p_suplier/suplier') }}"><span class="submenu-title">Penerimaan Barang Suplier</span></a>
                            </li>
                            <li class="{{ Request::is('inventory/p_hasilproduksi/produksi') ? 'active' : '' || Request::is('inventory/p_hasilproduksi/*') ? 'active' : '' }}"><a href="{{ url('/inventory/p_hasilproduksi/produksi') }}"><span class="submenu-title">Penerimaan Barang Hasil Produksi</span></a>
                            </li>
                            <li class="{{ Request::is('inventory/p_returncustomer/cust') ? 'active' : '' || Request::is('inventory/p_returncustomer/*') ? 'active' : '' }}"><a href="{{ url('/inventory/p_returncustomer/cust') }}"><span class="submenu-title">Penerimaan Barang Return Customer</span></a>
                            </li>
                            <li class="{{ Request::is('inventory/b_digunakan/barang') ? 'active' : '' || Request::is('inventory/b_digunakan/*') ? 'active' : '' }}"><a href="{{ url('/inventory/b_digunakan/barang') }}"><span class="submenu-title">Barang Digunakan</span></a>
                            </li>
                            <li class="{{ Request::is('inventory/stockopname/opname') ? 'active' : '' || Request::is('inventory/stockopname/*') ? 'active' : '' }}"><a href="{{ url('/inventory/stockopname/opname') }}"><span class="submenu-title">Stock Opname</span></a>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('produksi') ? 'active' : '' || Request::is('produksi/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-bar-chart-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Produksi</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('produksi/monitoringprogress/monitoring') ? 'active' : '' || Request::is('produksi/monitoringprogress/*') ? 'active' : '' }}"><a href="{{ url('/produksi/monitoringprogress/monitoring') }}"><span class="submenu-title">Monitoring Order & Stock</span></a>
                            </li>
                            <li class="{{ Request::is('produksi/rencanaproduksi/produksi') ? 'active' : '' || Request::is('produksi/rencanaproduksi/*') ? 'active' : '' }}"><a href="{{ url('/produksi/rencanaproduksi/produksi') }}"><span class="submenu-title">Rencana Produksi</span></a>
                            </li>
                            <li class="{{ Request::is('produksi/spk/spk') ? 'active' : '' || Request::is('produksi/spk/*') ? 'active' : '' }}"><a href="{{ url('/produksi/spk/spk') }}"><span class="submenu-title">Manajemen SPK</span></a>
                            </li>
                            
                            
                            <!-- <li class="{{ Request::is('produksi/produksi/produksi2') ? 'active' : '' || Request::is('produksi/produksi/*') ? 'active' : '' }}"><a href="{{ url('/produksi/produksi/produksi2') }}"><span class="submenu-title">Manajemen Produksi</span></a>
                            </li> -->
                            <li class="{{ Request::is('produksi/o_produksi/produksi3') ? 'active' : '' || Request::is('produksi/o_produksi/*') ? 'active' : '' }}"><a href="{{ url('/produksi/o_produksi/produksi3') }}"><span class="submenu-title">Manajemen Output Produksi</span></a>
                            </li>
                            <li class="{{ Request::is('produksi/waste/waste') ? 'active' : '' || Request::is('produksi/waste/*') ? 'active' : '' }}"><a href="{{ url('/produksi/waste/waste') }}"><span class="submenu-title">Manajemen Sampah (Waste)</span></a>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('penjualan') ? 'active' : '' || Request::is('penjualan/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-truck fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Penjualan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('penjualan/manajemenharga/harga') ? 'active' : '' || Request::is('penjualan/manajemenharga/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/manajemenharga/harga') }}"><span class="submenu-title">Manajemen Harga</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/manajemenpromosi/promosi') ? 'active' : '' || Request::is('penjualan/manajemenpromosi/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/manajemenpromosi/promosi') }}"><span class="submenu-title">Manajemen Promosi</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/broadcastpromosi/promosi2') ? 'active' : '' || Request::is('penjualan/broadcastpromosi/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/broadcastpromosi/promosi2') }}"><span class="submenu-title">Broadcast Promosi Via Email</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/rencanapenjualan/rencana') ? 'active' : '' || Request::is('penjualan/rencanapenjualan/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/rencanapenjualan/rencana') }}"><span class="submenu-title">Rencana Penjualan</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/POSretail/retail') ? 'active' : '' || Request::is('penjualan/POSretail/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/POSretail/retail') }}"><span class="submenu-title">POS Penjualan Retail</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/POSretail/retail') ? 'active' : '' || Request::is('penjualan/POSretail/*') ? 'active' : '' }}"><a href="{{ url('#') }}"><span class="submenu-title">Ritail Transfer</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/POSgrosir/grosir') ? 'active' : '' || Request::is('penjualan/POSgrosir/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/POSgrosir/grosir') }}"><span class="submenu-title">POS Penjualan Grosir / Online</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/POSgrosir/grosir') ? 'active' : '' || Request::is('penjualan/POSgrosir/*') ? 'active' : '' }}"><a href="{{ url('#') }}"><span class="submenu-title">Grosir Transfer</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/monitoringorder/monitoring') ? 'active' : '' || Request::is('penjualan/monitoringorder/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/monitoringorder/monitoring') }}"><span class="submenu-title">Monitoring Order & Stock</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/manajemenreturn/r_penjualan') ? 'active' : '' || Request::is('penjualan/manajemenreturn/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/manajemenreturn/r_penjualan') }}"><span class="submenu-title">Manajemen Return Penjualan</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/monitorprogress/progress') ? 'active' : '' || Request::is('penjualan/monitorprogress/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/monitorprogress/progress') }}"><span class="submenu-title">Monitoring Progress Penjualan</span></a>
                            </li>
                            <li class="{{ Request::is('penjualan/mutasistok/mutasi') ? 'active' : '' || Request::is('penjualan/mutasistok/*') ? 'active' : '' }}"><a href="{{ url('/penjualan/mutasistok/mutasi') }}"><span class="submenu-title">Mutasi Stock & Retail</span></a>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('hrd') ? 'active' : '' || Request::is('hrd/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-users fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">HRD</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('hrd/datakaryawan/karyawan') ? 'active' : '' || Request::is('hrd/datakaryawan/*') ? 'active' : '' }}"><a href="{{ url('/hrd/datakaryawan/karyawan')}}"><span class="submenu-title">Data Karyawan</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/dataadministrasi/admin') ? 'active' : '' || Request::is('hrd/dataadministrasi/*') ? 'active' : '' }}"><a href="{{ url('/hrd/dataadministrasi/admin')}}"><span class="submenu-title">Data Administrasi Pegawai</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/datalembur/lembur') ? 'active' : '' || Request::is('hrd/datalembur/*') ? 'active' : '' }}"><a href="{{ url('/hrd/datalembur/lembur')}}"><span class="submenu-title">Data Lembur Pegawai</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/scoreboard/score') ? 'active' : '' || Request::is('hrd/scoreboard/*') ? 'active' : '' }}"><a href="{{ url('/hrd/scoreboard/score')}}"><span class="submenu-title">Scoreboard Pegawai Per Hari</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/payroll/payroll') ? 'active' : '' || Request::is('hrd/payroll/*') ? 'active' : '' }}"><a href="{{ url('/hrd/payroll/payroll') }}"><span class="submenu-title">Payroll</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/manajemenkpipegawai/kpi') ? 'active' : '' || Request::is('hrd/manajemenkpipegawai/*') ? 'active' : '' }}"><a href="{{ url('/hrd/manajemenkpipegawai/kpi') }}"><span class="submenu-title">Manajemen KPI Pegawai</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/training/training') ? 'active' : '' || Request::is('hrd/training/*') ? 'active' : '' }}"><a href="{{ url('/hrd/training/training')}}"><span class="submenu-title">Training Pegawai</span></a>
                            </li>
                            <li class="{{ Request::is('hrd/recruitment/rekrut') ? 'active' : '' || Request::is('hrd/recruitment/*') ? 'active' : '' }}"><a href="{{ url('/hrd/recruitment/rekrut') }}"><span class="submenu-title">Recruitment</span></a>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('keuangan') ? 'active' : '' || Request::is('keuangan/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-money fa-fw">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">Keuangan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('keuangan/spk/spk') ? 'active' : '' || Request::is('keuangan/spk/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/spk/spk') }}"><span class="submenu-title">Manajemen SPK</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/p_inputtransaksi/transaksi') ? 'active' : '' || Request::is('keuangan/p_inputtransaksi/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/p_inputtransaksi/transaksi') }}"><span class="submenu-title">Proses Input Transaksi</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/l_hutangpiutang/hutang') ? 'active' : '' || Request::is('keuangan/l_hutangpiutang/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/l_hutangpiutang/hutang') }}"><span class="submenu-title">Laporan Hutang Piutang</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/l_jurnal/jurnal') ? 'active' : '' || Request::is('keuangan/l_jurnal/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/l_jurnal/jurnal') }}"><span class="submenu-title">Laporan(Jurnal,Buku Besar,Neraca,DLL)</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisaprogress/analisa') ? 'active' : '' || Request::is('keuangan/analisaprogress/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisaprogress/analisa') }}"><span class="submenu-title">Analisa Progress Terhadap Perencanaan</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisaocf/analisa2') ? 'active' : '' || Request::is('keuangan/analisaocf/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisaocf/analisa2') }}"><span class="submenu-title">Analisa Net Profit Terhadap OCF</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisaaset/analisa3') ? 'active' : '' || Request::is('keuangan/analisaaset/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisaaset/analisa3') }}"><span class="submenu-title">Analisa Pertumbuhan Aset</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisacashflow/analisa4') ? 'active' : '' || Request::is('keuangan/analisacashflow/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisacashflow/analisa4') }}"><span class="submenu-title">Analisa Cashflow</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisaindex/analisa5') ? 'active' : '' || Request::is('keuangan/analisaindex/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisaindex/analisa5') }}"><span class="submenu-title">Analisa Common Size dan Index</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisarasio/analisa6') ? 'active' : '' || Request::is('keuangan/analisarasio/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisarasio/analisa6') }}"><span class="submenu-title">Analisa Rasio Keuangan</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisabottom/analisa7') ? 'active' : '' || Request::is('keuangan/analisabottom/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisabottom/analisa7') }}"><span class="submenu-title">Analisa Three Bottom Line</span></a>
                            </li>
                            <li class="{{ Request::is('keuangan/analisaroe/analisa8') ? 'active' : '' || Request::is('keuangan/analisaroe/*') ? 'active' : '' }}"><a href="{{ url('/keuangan/analisaroe/analisa8') }}"><span class="submenu-title">Analisa ROE</span></a>
                            </li>
                        </ul>
                    </li>
                    <div class="clearfix"></div>
                    <li  class="{{Request::is('system') ? 'active' : '' || Request::is('system/*') ? 'active' : '' }}"><a href="#"><i class="fa fa-cog fa-fw fa-spin">
                        <div class="icon-bg bg-green"></div>
                        </i><span class="menu-title">System</span><span class="fa arrow"></span></a>
                       
                    
                        <ul class="nav nav-second-level">
                            <li class="{{ Request::is('system/hakuser/user') ? 'active' : '' || Request::is('system/hakuser/*') ? 'active' : '' }}"><a href="{{ url('/system/hakuser/user') }}"><span class="submenu-title">Manajemen User</span></a>
                            </li>
                            <li class="{{ Request::is('system/hakakses/akses') ? 'active' : '' || Request::is('system/hakakses/*') ? 'active' : '' }}"><a href="{{ url('/system/hakakses/akses') }}"><span class="submenu-title">Manajemen Hak Akses</span></a>
                            </li>
                            <li class="{{ Request::is('system/profilperusahaan/profil') ? 'active' : '' || Request::is('system/profilperusahaan/*') ? 'active' : '' }}"><a href="{{ url('/system/profilperusahaan/profil') }}"><span class="submenu-title">Profil Perusahaan</span></a>
                            </li>
                            <li class="{{ Request::is('system/thnfinansial/finansial') ? 'active' : '' || Request::is('system/thnfinansial/*') ? 'active' : '' }}"><a href="{{ url('/system/thnfinansial/finansial') }}"><span class="submenu-title">Tahun Finansial</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">    
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-users"></i>&nbsp; Message &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="{{asset('assets/images/avatar/128.jpg')}}" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="{{asset('assets/images/avatar/48.jpg')}}" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
