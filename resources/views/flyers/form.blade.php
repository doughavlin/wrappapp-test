@inject('countries','App\Http\Utilities\Country')

{{ csrf_field() }}

	<div class="form-group">
		<label for="street">Street:</label>
		<input type="text" name="street" id="street" class="form-control" value="{{ old('street')}}" required>
	</div>

	<div class="form-group">
		<label for="city">City:</label>
		<input type="text" name="city" id="city" class="form-control" value="{{ old('city')}}" required>
	</div>

	<div class="form-group">
		<label for="zip">Zip:</label>
		<input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip')}}" required>
	</div>


	<div class="form-group">
		<label for="country">Country:</label>
		<select type="text" name="country" id="country" class="form-control">
		
		@foreach ($countries::all() as $name=>$code)
			<option value="{{ $code }}">{{ $name }}</option>	
		@endforeach
		</select>
		
	</div>



	<div class="form-group">
		<label for="state">State:</label>
		<input type="text" name="state" id="state" class="form-control" value="{{ old('state')}}" required>
	</div>

<hr>

	<div class="form-group">
		<label for="price">Price:</label>
		<input type="text" name="price" id="price" class="form-control" value="{{ old('price')}}" required>
	</div>

	<div class="form-group">
		<label for="description">Description:</label>
		<textarea type="text" name="description" id="description" class="form-control" rows="10" value="{{ old('description')}}" required></textarea>
	</div>

<!--
	<div class="form-group">
		<label for="photos">Photos:</label>
		<input type="file" name="photos" id="photos" class="form-control" value="{{ old('photos')}}">
	</div>
-->

	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Create Flyer</button>
	</div>