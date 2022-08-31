@extends('layouts.master')

@section('content')
   <h2>Battleship wars</h2>
   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
   @for ($i = 0,$dn='A'; $i < $battlefield['x']; $i++, $dn++)     
      @if ($i == 0)
      <thead class="thead-light">
         <tr>
            <th></th>     
            @for ($hi = 0,$dheader='A'; $hi < $battlefield['x']; $hi++, $dheader++)     
            <th>{{$dheader}}</th>
            @endfor
         </tr>
      </thead>
      <tbody>
      @endif
        <tr>  
      @for ($j = 0; $j < $battlefield['y']; $j++)
        @if ($j == 0)
        <td>{{$i+1}}</td>
        @endif
        <td><div class="koordinates">{{$dn}}{{$j+1}}</td>
      @endfor
</tr>
@endfor
</tbody>
   </table>
<!-- /.container -->
@endsection