@extends('layout.main')

@section('container')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome to Game News!</div>
            <div class="masthead-heading text-uppercase">Stay Updated with the Latest in Gaming</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="/posts">Read Latest Articles</a>
        </div>
    </header>


    <section class="page-section" id="fitur">
        <div class="container mt-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Fitur</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <span class="fa-stack fa-4x">
                                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <h4 class="my-3">Immersive Gameplay</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
                                        maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <span class="fa-stack fa-4x">
                                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <h4 class="my-3">Responsive Design</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
                                        maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <span class="fa-stack fa-4x">
                                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <h4 class="my-3">Innovation</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
                                        maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-2">
    <section class="page-section bg-light" id="carousel">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="section-heading text-uppercase">Gameplay Highlights</h2>
                    <p class="text-muted">Check out the latest gameplay videos and screenshots.</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('/assets/img-web/placeholder.jpg') }}" class="d-block w-100" style="height: 400px;" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/assets/img-web/gaming.jpg') }}" class="d-block w-100" style="height: 400px;" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/assets/img-web/placeholder.jpg') }}" class="d-block w-100" style="height: 400px;" alt="Third slide">
                        </div>
                    </div>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                    
                </div>
            </div>
        </div>
    </section>
</div>






    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">&copy; Gaming Website </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
