<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>{{ $settings['nama_kantor'] }}</h3>
                    <p>{{ $settings['alamat_kantor'] }}</p>
                    <br>Telepon: {{ $settings['telepon'] }}
                    <br>Email: {{ $settings['email'] }}
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Waktu Pelayanan</h4>
                    <p>
                        Senin - Kamis<br>{{ $settings['jam_kerja_senin_sampai_kamis'] }}<br><br>
                        Jumat<br>{{ $settings['jam_kerja_jumat'] }}
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/rusunawa">Rusunawa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/persyaratan">Persyaratan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/pendaftaran">Pendaftaran</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/keluhan">Keluhan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://disperkim.balikpapan.go.id/" target="_blank">DISPERKIM</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Lokasi Kantor Kami</h4>
                    <iframe src="{{$settings['google_maps']}}" style="border:0; width: 100%" allowfullscreen="" loading="lazy"></iframe>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Rusunawa Kota Balikpapan</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
