<style>
    .menu-thumb {
        /* Set a fixed height for the image container */
        height: 300px; /* Adjust the height as needed */
        overflow: hidden; /* Ensure that any overflow is hidden */
    }

    .menu-thumb img {
        /* Ensure the image fills the container and maintains its aspect ratio */
        width: 100%;
        height: auto;
    }
</style>
<section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>
                              <h4>Tea Time &amp; Dining</h4>
                         </div>
                    </div>
                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method = "post">
                         @csrf
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="foodimage/{{$data->image}}" class="image-popup" title="{{$data->title}}">
                                   <img src="foodimage/{{$data->image}}" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>{{$data->title}}</h3>
                                             <p>{{$data->description}}</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>{{$data->price}}</span>
                                        </div>
                                   </div>
                              </a>
                              
                         </div>
                         <div style= "margin: 5px">
                             
                                   <input type="number" name = " quantity" min = "1"value = "1" style= "width: 80px">
                                   <input type="submit" value = "add cart">
                            
                         </div>
                    </div>
                    </form>
                   
                    @endforeach

        </div>
    </div>
</section>