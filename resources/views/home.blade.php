@extends('template')
@section('title', 'Home')
@section('content')
      <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active bg-img"style="background-image: linear-gradient(rgba(4, 9, 30, 0.7),rgba(4, 9, 30, 0.7)),url(assets/images/bg1.jpg);">
              <h3 class="text-center text-light pt-5 mt-5">Nnamdi Azikiwe University Geophysics Society </h3>
              <div class="_more" class="text-center"><a href="#" class="btn btn-primary btn-md ">Read More</a></div>
            </div>
            <div class="carousel-item bg-img" style="background-image:linear-gradient(rgba(4, 9, 30, 0.7),rgba(4, 9, 30, 0.7)), url(assets/images/bg2.jpg);">
                <h3 class="text-center text-light pt-5 mt-5">Nnamdi Azikiwe University Geophysics Society </h3>
              <div class="_more" class="text-center"><a href="#" class="btn btn-primary btn-md ">Read More</a></div>
            </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
      </div>
      <!-- Our commitments -->
      <div class="index-main">
        <h4 class="text-center mt-3">Our Commitments</h4><hr>
        <div class="comt-intro">
          <p>We Society Of Exploration Geophysicist Nnamdi Azikiwe Student Chapter has taken humanity as our sole responsiblity.  </p>
        </div>
        <div class="activites mt-5">
          <div class="row row1">
            <div class="col-md-4 sm-12 pr-0">
              <img src="assets/images/1.jpg" class="img-fluid">
            </div>
             <div class="col-md-8 sm-12">
              <div class="text">
                <h5 class="text-center">Quality Geoscience Education</h5>
                <p>
                  Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis, Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit <span class="showmore1"> Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit</span> ...<span class="show1" style="color:blue;">Read More</span><span class="close1" style="color:blue;display: none;">collapse</span>
                </p>
               
              </div>
            </div>
          </div>
        </div>
        <div class="activites">
          <div class="row row1">
            <div class="col-md-4 sm-12 pr-0">
              <img src="assets/images/5.jpg" class="img-fluid w100" >
            </div>
             <div class="col-md-8 sm-12">
              <div class="text">
                <h5 class="text-center">Youth Devlopment and Empowerment</h5>
                <p>
                  Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit<span class="showmore2" style="display: none;">Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elitlibero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit</span> ...<span class="show2" style="color:blue;">Read More</span><span class="close2" style="color:blue;display: none;">collapse</span>
                </p>
               
              </div>
            </div>
          </div>
        </div>
        <div class="activites">
          <div class="row row1">
            <div class="col-md-4 sm-12">
              <img src="assets/images/bg3.jpg" class="img-fluid">
            </div>
             <div class="col-md-8 sm-12 pr-0">
              <div class="text">
                <h5 class="text-center">High School Outreach Programs</h5>
               <p>
                  Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit<span class="showmore3" style="display: none;">Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elitlibero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit</span> ...<span class="show3" style="color:blue;">Read More</span><span class="close3" style="color:blue;display: none;">collapse</span>
                </p>
               
              </div>
            </div>
          </div>
        </div>
         <div class="activites">
          <div class="row row1">
            <div class="col-md-4 sm-12 pr-0">
              <img src="assets/images/bg3.jpg" class="img-fluid">
            </div>
             <div class="col-md-8 sm-12">
              <div class="text">
                <h5 class="text-center">Women Devlopment Programs</h5>
              <p>
                  Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis, Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit  <span class="showmore4" style="display:none;"> Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit  libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit</span> ...<span class="show4" style="color:blue;">Read More</span><span class="close4" style="color:blue;display: none;">collapse</span>
                </p>
                </p>
               
              </div>
            </div>
          </div>
        </div>
         <div class="activites">
          <div class="row row1">
            <div class="col-md-4 sm-12">
              <img src="assets/images/3.jpg" class="img-fluid">
            </div>
             <div class="col-md-8 sm-12 pr-0">
              <div class="text">
                <h5 class="text-center">Community Devlopment and Education</h5>
               <p>
                  Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit <span class="showmore5" style="display:none;">Pellentesque quis eros vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ip. Pellentesque venenatis,libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit libero vel euismod lobortis, mi illt jotore metus luctus augue, eget dapibus elit ni eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iacsdipiscing neque, non congue massa euismod quisscing elit</span> ...<span class="show5" style="color:blue;">Read More</span><span class="close5" style="color:blue;display: none;">collapse</span>
                </p>
               
              </div>
            </div>
          </div>
        </div>
        <div class="_more" class="text-center"><a href="#" class="btn btn-primary btn-md ">Read More</a></div>
        <!-- End of out commitments -->
        <!-- SEGNAU NEWS -->
        <div class="news mt-4">
          <h4>SEG-NAU News |<span class="text-right">  Latest</span></h4><hr>
          <div class=" row row2">
            <div class="col-lg-4 col-md-6 sm-12">
               <div class="card shadow ">
                  <img src="https://scontent.fabb1-1.fna.fbcdn.net/v/t39.30808-6/291569464_566834354921845_6094703716306990456_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeENbUwxBLrv4-E9Y-I6jFltpi0eajPfBGemLR5qM98EZ8UGhtl5AgZVPW2SDFPLvQ_UjioYdFyaHZX93QElre8p&_nc_ohc=ILdUNnbhLeAAX_y-DX-&tn=dBD2sFsHvOTodOIL&_nc_zt=23&_nc_ht=scontent.fabb1-1.fna&oh=00_AT9ETsK-0dxfpVa4896UzekSBD0iKvqcwrUgN7GL0gCpGw&oe=62CDA934" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SEG-NAU Virtual Challenge Bowl</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                  </div>
                  <div class="more2"><a href="#">Learn More</a></div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 sm-12">
               <div class="card shadow ">
                  <img src="https://scontent.fabb1-2.fna.fbcdn.net/v/t1.6435-9/196390496_319575789647704_7079579875404815194_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeF7xdH9S-Xmz1x9tJZz86jebFpDbxNBnMhsWkNvE0GcyCfL3GTXCXA-_0gYzcOls4ep-ICOX74O4CdZX3oYoZWi&_nc_ohc=SzfeusGI25MAX-GcDTr&_nc_ht=scontent.fabb1-2.fna&oh=00_AT8VBla7calNJrMv0KN3i2R97AMIfgbT8LWGPgpP8thhbw&oe=62EF3010" class="card-img-top" alt="Field camp 2022 image" width="300" height="300">
                  <div class="card-body">
                    <h5 class="card-title">SEG-NAU 2022 FieldCamp</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                  </div>
                  <div class="more2"><a href="#">Learn More</a></div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 sm-12">
               <div class="card shadow ">
                  <img src="https://scontent.fabb1-2.fna.fbcdn.net/v/t39.30808-6/286562725_552741986331082_7387262157486141854_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGz6eE0FSexrkTOX7ILO0MznO_wfA3NZt-c7_B8Dc1m31E8RyVxcm0AI9N72rAbEgeg3JDiHvOlAuVye7G8OQD0&_nc_ohc=l3Yj64dlnAcAX_qhGam&tn=dBD2sFsHvOTodOIL&_nc_zt=23&_nc_ht=scontent.fabb1-2.fna&oh=00_AT8W2BAjzad54mz0oWLv9jHLzLIn5PqOUZniXqjPrHntQg&oe=62CE2F29" class="card-img-top" alt="leadership image">
                  <div class="card-body">
                    <h5 class="card-title">Leadership workshop 2.0</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                  </div>
                  <div class="more2"><a href="#">Learn More</a></div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- End of SEG-NAU NEWS -->
        <!-- SEG-NAU ARCHIEVEEMNTS -->
        <div class="arvs mt-5">
          <h4>Chapter's Archievments</h4>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner shadow">
            <div class="carousel-item active arch card">
               <h5 class="text-center animate__animated animate__backInDown card-header">Most Improved Chapter</h5>
              <p style="color: red;">
                Toward the end of 2021, the GWB Committee selected four new projects for funding. One of the selected projects is in Zambia.

                Southern Province is one of Zambia’s most water-scarce regions due to a short and erratic rain season with relatively low precipitation (757mm annually) as well as high evaporative losses over the dry season (Baumle et al., 2007). The province is primarily underlain by a crystalline basement complex that is frequently poorly weathered. In this setting, the...

              .</p>
             <p style="color: red;">
                An estimated 86,400 people currently live in this setting within Zimba District of Southern Province and approximately just one third have access to an improved water source within a 30-minute collection time (GRID3, 2019; DWSS, 2017). It is anticipated that the project in Kujana will improve the access to potable water for at least 5600 people in at least 8 communities by partnering with rural institutions, (schools or clinics), who have identified their need for an improved water source...
              </p>
            </div>
            <div class="carousel-item arch card">
              <h5 class="text-center animate__animated animate__backInDown card-header">Best Student Chapter</h5>
              <p style="color: blue;">
                Toward the end of 2021, the GWB Committee selected four new projects for funding. One of the selected projects is in Zambia.

                Southern Province is one of Zambia’s most water-scarce regions due to a short and erratic rain season with relatively low precipitation (757mm annually) as well as high evaporative losses over the dry season (Baumle et al., 2007). The province is primarily underlain by a crystalline basement complex that is frequently poorly weathered. In this setting, the...

              .</p>
              <p style="color: blue;">
                An estimated 86,400 people currently live in this setting within Zimba District of Southern Province and approximately just one third have access to an improved water source within a 30-minute collection time (GRID3, 2019; DWSS, 2017). It is anticipated that the project in Kujana will improve the access to potable water for at least 5600 people in at least 8 communities by partnering with rural institutions, (schools or clinics), who have identified their need for an improved water source...
              </p>
            </div>
            <div class="carousel-item arch card">
               <h5 class="text-center card-header animate__animated animate__backInDown">3-times FieldCamp Recipent</h5>
              <p>
                Toward the end of 2021, the GWB Committee selected four new projects for funding. One of the selected projects is in Zambia.

                Southern Province is one of Zambia’s most water-scarce regions due to a short and erratic rain season with relatively low precipitation (757mm annually) as well as high evaporative losses over the dry season (Baumle et al., 2007). The province is primarily underlain by a crystalline basement complex that is frequently poorly weathered. In this setting, the...

              .</p>
              <p>
                An estimated 86,400 people currently live in this setting within Zimba District of Southern Province and approximately just one third have access to an improved water source within a 30-minute collection time (GRID3, 2019; DWSS, 2017). It is anticipated that the project in Kujana will improve the access to potable water for at least 5600 people in at least 8 communities by partnering with rural institutions, (schools or clinics), who have identified their need for an improved water source...
              </p>
            </div>
          </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
        <!-- end of Archievments -->
@endsection