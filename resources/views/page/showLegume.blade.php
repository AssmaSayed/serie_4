<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$show->id}}</h5>
      <p class="card-text">{{$show->name}}</p>
      <a href="#" class="btn btn-primary">{{$show->quantité}}</a>
    <a class="" href="{{url()->previous()}}">BACK</a>
    </div>
  </div>