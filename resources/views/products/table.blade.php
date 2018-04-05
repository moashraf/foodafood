<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Body</th>
        <th>Single Photo</th>
        <th>Photos Id</th>
        <th>Component</th>
        <th>Net Weight</th>
        <th>Note</th>
        <th>Packing Content</th>
        <th>Cat Id</th>
        <th>Lang</th>
        <th>Slug</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{!! $products->name !!}</td>
            <td>{!! $products->body !!}</td>
            <td>{!! $products->single_photo !!}</td>
            <td>{!! $products->photos_id !!}</td>
            <td>{!! $products->component !!}</td>
            <td>{!! $products->Net_weight !!}</td>
            <td>{!! $products->Note !!}</td>
            <td>{!! $products->Packing_content !!}</td>
            <td>{!! $products->cat_id !!}</td>
            <td>{!! $products->lang !!}</td>
            <td>{!! $products->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>