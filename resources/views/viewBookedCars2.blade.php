<x-layouts.admin>
    <div class="d-flex" style="padding: 1em;">
        <div><h3> Parent Communites</h3>  </div>
    </div>

    <div class="row">
    <div class="col">

    <div class="card">
        <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Commnunities</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ParentCommunites as $ParentCommunity)
                <tr>
                    <th scope="row">{{$ParentCommunity->id}}</th>
                    <td>{{$ParentCommunity->name}}</td>
                    <td>{{$ParentCommunity->description}}</td>
                    <td><a href="/community/filterBy/{{$ParentCommunity->id}}"><i class="fas fa-2x fa-directions"></i></a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>

    </div>
</div>
    </div>

    </x-layouts.admin>
