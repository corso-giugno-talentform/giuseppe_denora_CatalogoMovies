 <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
             @foreach ($films as $film)
                 <div class="col">
                     <div class="card">
                         <img src="{{ isset($film->cover) ? Storage::url($film->cover) : '/images/default.png' }}"
                             class="card-img-top " style="height: 150px; object-fit: cover;"alt="...">
                         <div class="card-body">
                             <h5 class="card-title">{{ $film->title }}</h5>
                             <p class="card-text">
                                {{$film->description}} </p>
                         </div>
                     </div>
                 </div>
             @endforeach



         </div>