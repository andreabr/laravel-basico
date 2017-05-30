<div class="row">
	<div class="col-md-6">

		<div class="form-group">

			{!! Form::label('name', 'Nome', array('class' => 'control-label')) !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}

		</div>

	</div>
	<div class="col-md-6">

		{!! Form::label('city', 'Cidade', array('class' => 'control-label')) !!}
		{!! Form::text('city', null, ['class' => 'form-control']) !!}

	</div>
</div>

<div class="row">
	<div class="col-md-6">

		<div class="form-group">

			{!! Form::label('state', 'Estado', array('class' => 'control-label')) !!}
			{!! Form::select('state', $customersForSelect, $customer->state, 
			['class' => 'form-control']
			) !!}

		</div>

	</div>
	<div class="col-md-6">

		{!! Form::label('special_customer', 'Cliente Especial', array('class' => 'control-label')) !!}
		{!! Form::checkbox('special_customer', $customer->special_customer, ['class' => 'form-control']) !!}

	</div>
</div>

<button type="submit" class="btn btn-primary">Salvar</button>