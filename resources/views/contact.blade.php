@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center h2">Kontak Kami</div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h3 class="text-center">Our Store</h3>
                    <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe width="100%" height="350px" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Gkpn,%20Cibeusi,%20Jatinangor,%20Kabupaten%20Sumedang,%20Jawa%20Barat%2045363&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div></div>
                </div>
            </div>
            <div class="row">
                <h2 class="text-center my-2 p-3">Get in Touch</h2>
                <div class="col-lg-9">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="media contact-info">
                        <span class="p-1 mr-2"><i class="fa-solid fa-store fa-lg"></i></span>
                        <div class="media-body">
                            <h4>Cibeusi - Jatinangor.</h4>
                            <p>Kab. Sumedang 45363</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="p-1 mr-2"><i class="fa-solid fa-phone fa-lg"></i></span>
                        <div class="media-body">
                            <h4>+62 812-3456-7890</h4>
                            <p>Senin s/d Jumat 09.00 - 19.00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="p-1 mr-2"><i class="fa-solid fa-envelope fa-lg"></i></span>
                        <div class="media-body">
                            <h4>support@lonedry.com</h4>
                            <p>Feel free to ask us anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection