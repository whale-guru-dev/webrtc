<div id="general_tab">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="card bg-gradient-light text-dark">
                <div class="card-header border-0 py-1">
                    <i class="fas fa-info-circle"></i> About
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card bg-transparent border-0">
                <div class="card-header bg-transparent h4">
                    <i class="fas fa-network-wired"></i> Friends
                </div>
                <div class="card-body bg-transparent">
                    @if($profile->owner->networks->count())
                        <div class="table-responsive-sm">
                            <table id="user_networks_table" class="table table-sm table-hover table-striped rounded">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($profile->owner->networks as $network)
                                    <tr>
                                        <td>
                                            <div class="table_links">
                                                <div class="nowrap">
                                                    <a href="{{$network->party->slug(true)}}">
                                                        <img class="rounded group-image" src="{{$network->party->avatar()}}"/>
                                                        <span class="h5"><span class="badge badge-light">{{$network->party->name}}</span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h5 class="text-center">No networks to show</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
