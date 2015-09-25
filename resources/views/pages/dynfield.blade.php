@extends('layout')

@section('content')

	<h1>Dynamic Fields</h1>
    <label for="extraVehicleOptions">Number of Units:</label>
    <select name="EVO" id="extraVehicleOptions">
        <option value="">Select An Extra</option>
        <option value="spoiler">Spoiler</option>
        <option value="antenna">Antenna</option>
        <option value="sunroof">Sun Roof</option>
        <option value="bodykit">Body Kit</option>
        <option value="hoodscoop">Hood Scoop</option>
        <option value="campershell">Camper Shell</option>
        <option value="other">Other</option>
    </select>

    <ul id="extraVehicleOptionsList">

    </ul>

    <label for="total">Total:</label>
    <input type="text" id="total" />
    <a href="#" id="refreshPrice" class="btn btn-primary">Refresh Price</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>

        var counter = 1;
        $(function(){
            $('#extraVehicleOptions').on('change', function(){
                $selectedName = $(this).find('option:selected').text();
                $('#extraVehicleOptionsList').append('<li><a href="#" data-value="'+this.value+'" data-name="'+$selectedName+'" class="itemDelete">(x)</a>'+$selectedName+':<input type="text" class="extraItem" id="'+this.value+'" /></li>');
                $('#extraVehicleOptions option[value="'+this.value+'"]').remove();
            });

            $(document).on('click', 'a.itemDelete', function(){
                $optVal = $(this).data('value');
                $optName = $(this).data('name');
                $('#extraVehicleOptions').append('<option value="'+$optVal+'">'+$optName+'</option>');
                $(this).parent().remove();
            });

            $('#refreshPrice').on('click', function () {
                console.log('click refresh price.');
                var sum = 0;
                $('.extraItem').each(function() {
                    sum += Number($(this).val());
                });
                console.log(sum);
                $('#total').val(sum);
            });
        });
    </script>

@stop

