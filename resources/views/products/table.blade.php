<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
            <th>Name</th>
         <th>Single Photo</th>
        <th>Photos Id</th>
           <th>Cat  </th>
        <th>Lang</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{!! $products->name !!}</td>
              <td>     <img src="{{ URL::to('/').'/images/'. $products->single_photo }}"  width="50" height="50">  </td>
              <td>
            @foreach($products->get_Product_Photos as $products_val)
            <a href="{{ URL::to('/').'/admin/ajax_del_products/'.$products_val->id.'/'.$products_val->Product_id}}"  
             class="  btn-xs"  >
            <i class="glyphicon glyphicon-trash"></i></a>
             <img id="Photo{{ $products_val->id }}/{{ $products_val->Product_id }}" src="{{ URL::to('/').'/images/'. $products_val->Photo }}"  width="50" height="50"> 
            @endforeach
            </td>
            
               <td>{!! $products->get_cat_data['title'] !!}</td>
    
     <td>{!! $products->lang !!}</td>
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