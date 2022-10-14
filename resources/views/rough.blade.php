<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <section class="content" style="margin-left:900px;margin-right:20px;margin-top:-50px;">
        <label for="cars">Select City</label>
        <select name="#" onchange="#" class="form-control" id="#" style="width:120px;"> --}}
          {{-- <option value="city">city</option> --}}
          {{-- <table>
            <tr>
                <th>City</th>
            </tr>
            @if($locations)
          @foreach($locations as $item)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->city }}</td>
          </tr>
      @endforeach
      @else
      <tr>
        <td colspan="5">Record not found</td>
      </tr>


      @endif
        </table> --}}
        <label for="per1">City</label><br>
<select name="per1" id="per1">
    <option selected="selected">Choose one</option>
    @if($locations)
    @foreach($locations as $item)
    <option value="#">{{ $loop->iteration }}</option>
    <option value="#">{{ $item->city }}</option>
    @endforeach
    @endif
</select>
        {{-- </select>

    </section> --}}

</body>
</html>