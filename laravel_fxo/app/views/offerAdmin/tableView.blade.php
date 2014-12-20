<div class="head">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand">Offers ({{$total}})</a>
        </div>
        <div class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" name="searchText" class="form-control" placeholder="Search" value="<?php echo($searchText); ?>">
            </div>
            <button type="submit" class="btn btn-default search">Search</button>
        </div>
    </nav>
</div>

<div class="body">
    <table class="table">
        <colgroup>
            <col style="width: 20%">
            <col style="width: 40%">
            <col>
            <col>
            <col style="width: 10%">
        </colgroup>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Is Approved</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $offers->each(function($offer){ ?>
            <tr class="active">
                <td>{{HTML::entities($offer->title)}}</td>
                <td>{{HTML::entities(Str::limit($offer->description, 150))}}</td>
                <td><?php echo $offer->category->name; ?></td>
                <td><?php echo $offer->is_approved; ?></td>
                 <td>
                    @if($offer->is_approved)
                        <button type="button" class="btn btn-default btn-xs action-menu" data-id="<?php echo $offer->id; ?>" action="disapprove" title="Disapprove">
                            <span class="glyphicon glyphicon-ban-circle"></span>
                        </button>
                    @else
                        <button type="button" class="btn btn-default btn-xs action-menu" data-id="<?php echo $offer->id; ?>" action="approve" title="Approve">
                             <span class="glyphicon glyphicon-ok-sign"></span>
                        </button>
                    @endif

                 </td>
            </tr>
        <?php }); ?>
        </tbody>
    </table>
</div>
<div class="footer">
    <?php
        echo CommonService::paginator($max, $offset, $total);
        echo CommonService::itemPerPage($max);
    ?>
</div>
