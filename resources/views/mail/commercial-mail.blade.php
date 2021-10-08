@component('mail::message')

<style>
   td, tr{text-align: center; align-content: center}
</style>

# Hello customer name

<img title="" alt="" src="{{asset('assets/images/email/doler.jpg')}}" style="width: 100%"/>

@foreach($products as $product)
@component('mail::table')
<table>
<tbody>
    <tr>
        <td>
            <div><a href="{{$product->product_url}}"><img style="border-radius: 2px" alt="" width="300" src="{{asset($product->main_image)}}"></a> </div>
            <div><p style="font-size: 18px;margin-top: 15px;text-align: justify ">{{$product->desc}}</p></div>
            <div><a target="_blank" href="{{$product->product_url}}">{{\Illuminate\Support\Str::upper($product->product_name)}} {{$product->price}}$</a></div>
        </td>
    </tr>
</tbody>
</table>
@endcomponent
<hr/>
@endforeach


Thanks,<br>
{{ config('app.name') }}
@endcomponent
