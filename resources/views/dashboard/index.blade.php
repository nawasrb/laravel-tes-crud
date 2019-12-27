        @extends('layouts.master')

                @section('content')
                    
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <table style="width:100%;">
                                <td style="width:33%;"><hr style="border:0;height:1px;background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), black)"></td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td><p style="font-size:25px;text-align:center;">بِسْــــــــــــــــــمِ&nbsp;اللهِ&nbsp;الرَّحْمَنِ&nbsp;الرَّحِيْمِ</p></td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td style="width:33%;"><hr style="border:0;height:1px;background-image: -webkit-linear-gradient(left, black, rgba(0,0,0,0.75), rgba(0,0,0,0));"></td>
                                </table>
                                @if(Auth::user()->role == "Kepala Cabang")
                                <div class="panel-body">
                                    <h2>Selamat Datang di Halaman Kepala Cabang</h2>
                                    <br>
                                    <h3>Visi</h3>
                                    <p> Membangun Idealisme dan Profesionalisme untuk mencapai kesejahteraan bersama dalam naungan ridho Ilahi.</p>
                                    <br>
                                    <h3>Misi</h3>
                                    <p>1.  Mengembangkan sistem ekonomi,khususnya lembaga keuangan berdasarkan Syariah Islam.</p>
                                    <p>2.  Memajukan kegiatan usaha (Ekonomi) anggota masyarakat,khususnya usaha mikro/kecil dan menengah (UKM)</p>
                                    <p>3.  Meningkatkan kualitas sumber daya manusia koperasi khususnya (Materiil/Spiritual)</p>
                                    <p>4.  Meningkatkan harkat dan martabat hidup anggota / masyarakat (pemenuhan kebutuhan pangan,sandang dan papan).</p>
                                    
                                </div>
                                @elseif(Auth::user()->role == "cs")
                                <div class="panel-body">
                                    <h2>Selamat Datang di Halaman Customer Service</h2>
                                    <br>
                                    <h3>Visi</h3>
                                    <p> Membangun Idealisme dan Profesionalisme untuk mencapai kesejahteraan bersama dalam naungan ridho Ilahi.</p>
                                    <br>
                                    <h3>Misi</h3>
                                    <p>1.  Mengembangkan sistem ekonomi,khususnya lembaga keuangan berdasarkan Syariah Islam.</p>
                                    <p>2.  Memajukan kegiatan usaha (Ekonomi) anggota masyarakat,khususnya usaha mikro/kecil dan menengah (UKM)</p>
                                    <p>3.  Meningkatkan kualitas sumber daya manusia koperasi khususnya (Materiil/Spiritual)</p>
                                    <p>4.  Meningkatkan harkat dan martabat hidup anggota / masyarakat (pemenuhan kebutuhan pangan,sandang dan papan).</p>
                                </div>
                                @elseif(Auth::user()->role == "teller")
                                <div class="panel-body">
                                    <h2>Selamat Datang di Halaman Teller</h2>
                                    <br>
                                    <h3>Visi</h3>
                                    <p> Membangun Idealisme dan Profesionalisme untuk mencapai kesejahteraan bersama dalam naungan ridho Ilahi.</p>
                                    <br>
                                    <h3>Misi</h3>
                                    <p>1.  Mengembangkan sistem ekonomi,khususnya lembaga keuangan berdasarkan Syariah Islam.</p>
                                    <p>2.  Memajukan kegiatan usaha (Ekonomi) anggota masyarakat,khususnya usaha mikro/kecil dan menengah (UKM)</p>
                                    <p>3.  Meningkatkan kualitas sumber daya manusia koperasi khususnya (Materiil/Spiritual)</p>
                                    <p>4.  Meningkatkan harkat dan martabat hidup anggota / masyarakat (pemenuhan kebutuhan pangan,sandang dan papan).</p>
                                </div>

                                @endif
                            </div>
                            
                        </div>
                        
                    </div>
                @endsection

